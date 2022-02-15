<?php
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/categories',[CategoryController::class,'listAllCategories']);
Route::post('/save',[CategoryController::class,'saveCategory']);
Route::put('/edit/{category}',[CategoryController::class,'update']);
Route::get('/show/{category}',[CategoryController::class,'showCategory']);
Route::delete('/delete/{category}',[CategoryController::class,'deleteCategory']);
