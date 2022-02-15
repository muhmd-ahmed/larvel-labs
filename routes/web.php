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
Route::get('/categories',[GategoryController::class,'listAllCategories'])->middleware(['auth']);
Route::get('/add-category',[GategoryController::class,'createCategory']);
Route::post('/save',[GategoryController::class,'saveCategory']);
Route::get('/edit/{category}',[GategoryController::class,'ShowEditInfo']);
Route::put('/edit/{category}',[GategoryController::class,'update']);
Route::get('/show/{category}',[GategoryController::class,'showCategory']);
Route::delete('/delete/{category}',[GategoryController::class,'deleteCategory']);



Route::get('/template',[ArticleController::class,'listArticlesToTemplate'])->middleware(['auth','is_admin']);

Route::get('/articles',[ArticleController::class,'listArticles'])->middleware(['auth','is_admin']);
Route::get('/add-article',[ArticleController::class,'createArticle'])->middleware(['auth','is_admin','is_adminAndAge_more_30']) ;
Route::post('/save-article',[ArticleController::class,'saveArticle']);
Route::get('/edit-article/{article}',[ArticleController::class,'ShowEditInfo']);
Route::put('/edit-article/{article}',[ArticleController::class,'update']);
Route::get('/show-article/{article}',[ArticleController::class,'showArticle']);
Route::delete('/delete-article/{article}',[ArticleController::class,'deleteArticle']);
// Route::get('/template',function () {

//     return view('dashboard.pages.data');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
