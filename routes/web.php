<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ClienteController;
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

//Route::get('/', HomeController::class);

 

//Route::get('cursos', [CursoController::class,'index']);


//Route::get('cursos/create', [CursoController::class,'create']);


//Route::get('cursos/{curso}', [CursoController::class,'show']);



/*Route::get('cursos/{curso}/{categoria?}', function($curso,$categoria = null){
    if($categoria){
        return "Bienvenido al curso: $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }
    
});  */

Route::get('/', function (){
    return view('welcome');
});


Route::resource('/cliente',ClienteController::class);
