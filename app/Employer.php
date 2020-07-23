<?php

namespace App;

use App\Position;
use App\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employer extends Model
{
	use SoftDeletes;
	
	protected $fillable = [
		'name',
		'dob',
		'nrc',
		'email',
		'phone',
		'address',
		'about',
	];

	public function image()
	{
		return $this->morphOne(Image::class, 'imageable');
	}

	public function positions()
	{
		return $this->belongsToMany(Position::class);
	}

	public function currentPosition()
	{
		return $this->positions()->get()->last() ? 
		$this->positions()->get()->last()->jobtitle : 
		'Add Position';
	}

	public function experiences()
	{
		return $this->belongsToMany(Experience::class)->withPivot('workshop', 'remark');
	}

}
