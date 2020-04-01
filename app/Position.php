<?php

namespace App;

use App\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
	use SoftDeletes;
    
    protected $fillable = ['jobtitle'];

    public function employers()
    {
    	return $this->belongsToMany(Employer::class);
    }
}
