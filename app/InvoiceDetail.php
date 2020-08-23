<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    protected $fillable = [
        'invoice_id',
        'description',
        'quantity',
        'unit_price',
        'total',
    ];

    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }

    public function stocks()
    {
        return $this->belongsTo('App\StockCategory', 'description');
    }
}
