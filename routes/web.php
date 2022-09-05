<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;

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
    return view('index');
});
Route::controller(NoticiasController::class) ->group(function(){
    Route::get('/noticia','index');
    Route::POST('/noticia','store');
    //Route::get('/noticia','update');
    Route::delete('/noticia','destroy');
    //Route::get('/noticia','show');
    Route::patch('/noticia','patch');
    });
