<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\formularioController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImagenController;

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
Route::POST('/contacto',[formularioController::class,'store']);
Route::get('/contacto', [formularioController::class, 'index']);
Route::controller(NoticiasController::class) ->group(function(){
    Route::get('/noticia','index');
    Route::post('/noticia','store');
    Route::get('/noticia','update');
    Route::delete('/noticia','destroy');
    Route::get('/noticia/{noticia}','show')->name('noticias.show');
    //Route::patch('/noticia','patch');
    });
    Route::get('/imagen',[imagenController::class , 'index' ] );
    // guardar
   // Route::post('codeaguardar',[CodeaController::class , 'codeaguardar' ] );    
   // Route::controller(ImagenController::class) ->group(function(){
        //Route::get();
    //});
       
    /* 
    route::get('/my-second-example-laravel-9, function (){
echo 'hola';

    })->name('myindex');
    
    GRUPOS:
    Route::prefix('/post')->name('category.')->group(function(){
    Route::get('/{primera}')
    })

    MIDDLEWARES:
    $result = $next($request);
    return $result;

    O

    if (1 == 1)
    return $next $request


    $HaveIdParamInGet = $request->input('id');
    $user = Auth::user();
    if(Auth::check() && Auth::id() == 1 && $user->id_role == 2)
    return $next($request);
    return response (null,403);
    */
    


