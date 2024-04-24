<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
*/

Route::get('/',[\App\Http\Controllers\PageWithArticlesController::class,'index'])->name('gallery');


Route::get('/articles/page={page}',[\App\Http\Controllers\PageWithArticlesController::class,'loadArticles']);

Route::get('/article/{article}',[\App\Http\Controllers\ArticlePageController::class,'show'])->name('article');
//Route::get('/article/{article}',[\App\Http\Controllers\PageWithArticlesController::class,'loadLatestArticles'])->name('latest_articles');

Route::get('/image/{image}',[\App\Http\Controllers\ImageController::class,'show'])->name('image');

/*
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 */
