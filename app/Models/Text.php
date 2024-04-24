<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
	//use HasFactory;
	protected $fillable = [
		'text',
		//'has_text_id',
		//'has_text_type',
	];

	protected $guarded = [
		'has_text_id',
		'has_text_type',

	];



	public function hasText()
    	{
        	return $this->morphTo();
    	}
}
