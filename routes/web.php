<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/home1', function(){
    return view('home1');
});
Route::get('/regstu', function () {
    return view('regstu');
});
Route::get('/regbo',function(){
    return view('regbo');
});
Route::get('/lendbo',function(){
    return view('lendbo');
});
Route::get('/search',function(){
    return view('search');
});
Route::get('/', [App\Http\Controllers\BookController::class,'index']);
Route::post('index',[App\Http\Controllers\BookController::class,'store'])->name('store');
Route::get('/', [App\Http\Controllers\BookController::class,'index'])->name('index');

Route::get('/', [App\Http\Controllers\StudentController::class,'index']);
Route::post('index',[App\Http\Controllers\StudentController::class,'store'])->name('store');
Route::get('/', [App\Http\Controllers\StudentController::class,'index'])->name('index');

Route::get('/', [App\Http\Controllers\BookController::class,'index']);
Route::post('index',[App\Http\Controllers\BookController::class,'store'])->name('store');
Route::get('/', [App\Http\Controllers\BookController::class,'index'])->name('index');

Route::get('/', [App\Http\Controllers\Lendbook1Controller::class,'index']);
Route::post('index',[App\Http\Controllers\Lendbook1Controller::class,'store'])->name('store');
Route::get('/', [App\Http\Controllers\Lendbook1Controller::class,'index'])->name('index');

Route::get('/search',[SearchController::class, 'search'])->name('web.search');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


