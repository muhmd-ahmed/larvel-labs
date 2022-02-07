<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GategoryController;
use App\Http\Controllers\ArticleController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories',[GategoryController::class,'listAllCategories']);
Route::get('/add-category',[GategoryController::class,'createCategory']);
Route::post('/save',[GategoryController::class,'saveCategory']);
Route::get('/edit/{category}',[GategoryController::class,'ShowEditInfo']);
Route::put('/edit/{category}',[GategoryController::class,'update']);
Route::get('/show/{category}',[GategoryController::class,'showCategory']);
Route::delete('/delete/{category}',[GategoryController::class,'deleteCategory']);


Route::get('/articles',[ArticleController::class,'listArticles']);
Route::get('/add-article',[ArticleController::class,'createArticle']);
Route::post('/save-article',[ArticleController::class,'saveArticle']);
Route::get('/edit-article/{article}',[ArticleController::class,'ShowEditInfo']);
Route::put('/edit-article/{article}',[ArticleController::class,'update']);
Route::get('/show-article/{article}',[ArticleController::class,'showArticle']);
Route::delete('/delete-article/{article}',[ArticleController::class,'deleteArticle']);






