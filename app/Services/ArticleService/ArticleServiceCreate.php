<?php


namespace App\Services\ArticleService;

use Illuminate\Support\Facades\DB;

use App\Models\Article;
use App\Models\Text;



class ArticleServiceCreate
{
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

}
