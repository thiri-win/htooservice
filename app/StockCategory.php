<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockCategory extends Model
{
    protected $fillable = ['title', 'remark'];

    // protected $with = ['instocks'];
    
    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }

    public function instocks()
    {
        $instocks = $this->stocks->sum('qty') - $this->sales->sum('qty');
        return $instocks;
    }

    public function invoice_details()
    {
        return $this->hasMany('App\InvoiceDetail');
    }
}
