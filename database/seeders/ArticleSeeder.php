<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory;

use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	for($i=0;$i<20;$i++){
		$article=Article::create([
			//'title' => "title{$i}",
			'title' => "title$i",
			"title_image_id" => 1,
		]);
		for($j=0;$j<10;$j++){
			$article->hasText()->create([
				"text" => "article $i,text number $j",
			]);
		}
	}
    }
}
