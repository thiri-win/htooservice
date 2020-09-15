<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
  protected $fillable = ['date', 'title', 'body', 'expense_category_id', 'total'];
  protected $with = ['category'];
  protected $dates = ['date'];
  
  public function category()
  {
    return $this->belongsTo('App\ExpenseCategory', 'expense_category_id');  
  }
}
