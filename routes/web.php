<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login/newsportal12',[App\Http\Controllers\AuthController::class,'loginSystem'])->name('system.login');

Route::get('/dashboard',[App\Http\Controllers\AuthController::class,'dashboard'])->name('system.dashboard');

// Blog
Route::get('/article/create',[App\Http\Controllers\BlogController::class,'create'])->name('article.create');
Route::post('/article/create',[App\Http\Controllers\BlogController::class,'store'])->name('article.store');
Route::post('/froala/upload', [App\Http\Controllers\BlogController::class,'froalaUpload'])->name('froala.upload');
Route::get('/article/list',[App\Http\Controllers\BlogController::class,'index'])->name('article.index');
Route::get('/article/edit/{id}',[App\Http\Controllers\BlogController::class,'edit'])->name('article.edit');
Route::delete('/article/{id}', [App\Http\Controllers\BlogController::class,'destroy'])->name('article.destroy');
Route::get('/update-status/{id}/{status}', [App\Http\Controllers\BlogController::class, 'updateStatus'])->name('update.status');
Route::patch('/blog/{id}', [App\Http\Controllers\BlogController::class,'update'])->name('blog.update');
Route::post('/froala/upload2', [App\Http\Controllers\BlogController::class,'froalaUpload2'])->name('froala.upload2');
//create category
Route::get('/category/create',[App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
Route::post('/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/category/list',[App\Http\Controllers\CategoryController::class,'index'])->name('category.index');
Route::delete('/category/{id}', [App\Http\Controllers\CategoryController::class,'destroy'])->name('category.destroy');
Route::get('/{pathMatch}',function(){
    return view('welcome');
})->where('pathMatch',".*");