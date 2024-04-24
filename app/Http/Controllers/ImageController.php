<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Inertia\Inertia;

use App\Models\File;

class ImageController extends Controller
{
	//
	public function index()
	{

	}


	public function show(Request $request,File $image)
	{
		//return Storage::disk('local')->
		/*
		return response()->file(
			Storage::disk('local')->get('1')
		);
		 */
		//Here must be check if file exists
		return response()->file(
			//storage_path("app/$image->path")	
			storage_path($image->path)	
		);

		//Save file into downloads
		//return Storage::disk('local')->download('1');
		/*
		return Inertia::render('ArticlePage',['article'=>['text'=>'article 1 text']]);
		 */
		//return	
	}
}
