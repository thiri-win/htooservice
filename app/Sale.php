<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'invoice_id',
        'stock_category_id', 
        'quantity', 
        'unit_price', 
        'total',
    ];

    public function category()
    {
        return $this->belongsTo(StockCategory::class, 'stock_category_id');
    }

    public function invoice()
    {
        return $this->belongsTo('App\Invoice::class');
    }

    public function stock()
    {
        return $this->belongsTo('App\Stock::class');
    }
}
