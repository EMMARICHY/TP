<?php

use Illuminate\Support\Facades\Route;
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

/* 
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('home'); */

Route::get('/', [ArticleController::class, 'index'])->name('article.index');
Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('store', [ArticleController::class, 'store'])->name('article.store');
Route::get('show/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::post('/update',[ArticleController::class, 'update'])->name('article.update');
Route::delete('/{article}',[ArticleController::class, 'destroy'])->name('article.destroy');


/* Route::get('/posts', [ArticleController::class, 'index']);
Route::get('/post/add', [ArticleController::class, 'create']);
Route::post('post/storage', [ArticleController::class, 'store']);
Route::post('post/delete', [ArticleController::class, 'destroy']);
 */
Route::get('/checkouts', [ArticleController::class, 'panier'])->name('checkouts');
