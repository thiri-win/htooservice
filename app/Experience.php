<?php

namespace App;

use App\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
	use SoftDeletes;

	protected $fillable = ['level'];
    
    public function employers()
    {
    	return $this->belongsToMany(Employer::class)->withPivot('workshop', 'remark');
    }
}
