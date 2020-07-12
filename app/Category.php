<?php

namespace App;

use App\Expense;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function getTotalAttribute()
    {
        return $this
            ->expenses()
            ->whereMonth('date', '=', Carbon::now()->month)
            ->sum('amount');
    }
}
