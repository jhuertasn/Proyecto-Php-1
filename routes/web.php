<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
//Ruta de Inicio
Route::get('/',[PagesController::class, 'inicio'])->name('inicio');

//Ruta de detalle
Route::get('/detalle/{id}',[PagesController::class, 'detalle'])->name('notas.detalle');

//Ruta de Crear Nota
Route::post('/', [PagesController::class, 'crear'])->name('notas.crear');

//Ruta de Editar
Route::get('/editar/{id}', [PagesController::class, 'editar'])->name('notas.editar');

//Ruta Update
Route::put('/editar/{id}', [PagesController::class, 'update'])->name('notas.update');

//Ruta Eliminar
Route::delete('/eliminar/{id}', [PagesController::class, 'eliminar'])->name('notas.eliminar');

//Ruta PDF

Route::get('pdf',[PagesController::class,'pdf'])->name('notas.pdf');
/*
Route::get('fotos/{numero?}', function ($numero = 'sin numero'){

    return 'Estas en la galeria de fotos :' . $numero;

})->where('numero', '[0-9]+');;

Route::view('galeria', 'fotos',['numero'=>125]);
*/

//Ruta de las fotos
Route::get('fotos',[PagesController::class, 'fotos'])->name('foto');

//Ruta de noticias
Route::get('noticias/{nombre?}',[PagesController::class, 'noticias']
)->name('noticias');

//Ruta de about
Route::get('about/{nombre?}', [PagesController::class, 'about'] )->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
