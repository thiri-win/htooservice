<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        return view('dashboard',[
            'categories' => Category::all(),            
        ]);
    }
}
