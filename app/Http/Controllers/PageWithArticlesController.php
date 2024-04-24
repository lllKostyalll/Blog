<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Inertia\Inertia;

use App\Models\Article;

use App\Models\User;

class PageWithArticlesController extends Controller
{
	public function index()
	{
		//return Inertia::render('PageWithArticles');
		return Inertia::render('PageWithArticles',[
			//'latestArticles' => Article::latest()->limit(30),
			//TODO here must be cache	
			//'latestArticles' => Article::limit(30)->get(),	
			//'users' => User::get(),	
			'latestArticles' => Article::latest('id')->limit(30)->get(),	
			//Inertia::lazy(fn () => User::get())			
			//'latestArticles' => Inertia::lazy(fn () =>  Article::latest('id')->limit(30)->get()),	
		]);
	}
	public function loadArticles(int $page)
	{
		$pageNumber=$page-1;
		if ($pageNumber < 0) {
			return response()->json([
				'message' => 'There is not such page',
			]);
		}
		
		return Article::orderBy('id')
				->where('id','>',30*$pageNumber)
				->limit(30)
				->get();	
	}

	public function loadLatestArticles()
	{
		return response()->json(Article::latest()->limit(30));
	}
}
