<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'date', 
        'stock_category_id' , 
        'qty', 
        'price', 
        'total', 
        'supplier', 
        'remark',
    ];

    protected $dates = ['date'];

    public function category()
    {
        return $this->belongsTo('App\StockCategory', 'stock_category_id');
    }
}
