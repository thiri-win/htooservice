<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'date',
        'client',
        'car_make',
        'car_no',
        'car_model',
        'phone',
        'sub_total',
        'advanced',
        'discount',
        'grand_total',
    ];

    public function details()
    {
        return $this->hasMany('App\InvoiceDetail', 'invoice_id');
    }
}
