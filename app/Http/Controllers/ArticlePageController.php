<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

use Inertia\Inertia;

use App\Models\Article;
use App\Models\Text;
use App\Http\Resources\TextCollectionResource;

class ArticlePageController extends Controller
{
	//
	public function index()
	{

	}


	//public function show(Request $request,Article $article)
	public function show(Article $article)
	{
		//return Inertia::render('ArticlePage',['article'=>['text'=>'article 1 text']]);
		//Log::info($article);
		return Inertia::render('ArticlePage',[
			//TODO protection For Article
			'article'=> $article,
			'textList'=> $article->hasText,
			'text'=> $article->hasText,
		]);
	}
}
