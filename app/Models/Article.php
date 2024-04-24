<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


//Own
use App\Models\File;
use App\Models\Text;


class Article extends Model
{
	//use HasFactory;
	protected $fillable = [
		'title',
		'title_image_id',
	];

	public function title_image():HasOne
	{

		return $this->hasOne(File::class);
	}

	public function hasText()
	{
		//return $this->morphMany(Text::class, 'has_text');
		return $this->morphMany(Text::class, 'has_text');
	}
}
