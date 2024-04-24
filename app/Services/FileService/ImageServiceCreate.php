<?php


namespace App\Services\FileService;


use Illuminate\Support\Facades\DB;
/*

use App\Models\Article;
use App\Models\Text;
 */
use App\Models\File as FileModel;

class ImageServiceCreate
{
	/*
	public function execute(String $title='',int $titleImageId=1,array $listOfTexts =[])
	{
		//TODO something with image
		DB::transaction(function() use($title,$titleImageId,$listOfTexts){
			
			$article=Article::create([
				'title'=>$title,
				'title_image_id' => $titleImageId,
			]);
			if ($listOfTexts == []){
				$article->hasText()->create([
					'text' => "",	
				]);
			}else{
				//TODO foreach is Evil
				foreach($listOfTexts as $textString){
					$article->hasText()->create([
						'text' => $textString,
					]);
				}
			}
		});
	}
	*/
}
