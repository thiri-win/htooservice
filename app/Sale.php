<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'date', 
        'stock_category_id' , 
        'qty', 
        'price', 
        'total', 
        'customer', 
        'remark',
    ];

    protected $dates = ['date'];

    public function category()
    {
        return $this->belongsTo(StockCategory::class, 'stock_category_id');
    }
}
