<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
  protected $fillable = ['date', 'title', 'body', 'expense_type', 'amount'];
  protected $with = ['category'];
  protected $dates = ['date'];
  
  public function category()
  {
    return $this->belongsTo('App\Category');
  
  }
}
