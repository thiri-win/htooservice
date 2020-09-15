<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseCategory;
use App\Invoice;
use App\Sale;
use App\Stock;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    public function index()
    {        
        $start = Carbon::now()->startOfYear();
        $end = Carbon::now()->endOfYear();
        $time = CarbonPeriod::create($start, $end)->month();
        $months = collect($time)->map(function(Carbon $date) {
            return $date->month;
        });        

        $expense = Expense::whereYear('date', '=', date('Y'))->get();
        $stock = Stock::whereYear('date', '=', date('Y'))->get();
        $expenses = $expense->concat($stock)
            ->sortBy('date')
            ->groupBy(function($tot){
                return Carbon::parse($tot->date)->month;
            })
            ->map(function($tot) {
                return $tot->sum('total');
            });

        foreach($months as $month) {
            if(!$expenses->has($month)) {
                $expenses->put($month, 0);
            }
        }        

        $expenses = $expenses->sortKeys();

        $incomes = Invoice::whereYear('date', '=' , date('Y'))
            ->get()
            ->sortBy('date')
            ->groupBy(function($income) {
                return Carbon::parse($income->date)->month;
            })
            ->map(function($income) {
                return $income->sum('grand_total');
            });

        foreach($months as $month) {
            if(!$incomes->has($month)) {
                $incomes->put($month, 0);
            }
        } 
        $incomes = $incomes->sortKeys();

        $expense_categories = ExpenseCategory::all()->pluck('id', 'title');
        $expense_amount_per_category = Expense::whereYear('date', '=', Carbon::now()->year)
            ->get()
            ->groupBy('expense_category_id')
            ->map(function($cat) {
                return $cat->sum('total');
            });
        foreach($expense_categories as $category) {
            if(!$expense_amount_per_category->has($category)) {
                $expense_amount_per_category->put($category, 0);
            }
        }
        $expense_amount_per_category = $expense_amount_per_category->sortKeys();
            
        return view('dashboard',[
            'expenses' => $expenses,
            'incomes' => $incomes,
            'expense_categories' => $expense_categories->keys(),
            'expense_amount_per_category' => $expense_amount_per_category->values(),
        ]);
    }
}
        