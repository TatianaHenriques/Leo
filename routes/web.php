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
use App\Http\Controllers\paginascontroller;


Route::get('/', [paginascontroller::class, 'index'])->name('index');
Route::get('/index', [paginascontroller::class, 'index'])->name('index');


Route::get('/direccao', [paginascontroller::class, 'direccao'])->name('direccao');

Route::get('/secretaria', [paginascontroller::class, 'secretaria'])->name('secretaria');

Route::get('/galeria', [paginascontroller::class, 'galeria'])->name('galeria');

Route::get('/noticias', [paginascontroller::class, 'noticias'])->name('noticias');
Route::get('/curso', [paginascontroller::class, 'curso'])->name('curso');
Route::get('/departamento', [paginascontroller::class, 'departamento'])->name('departamento');
Route::get('/biologia', [paginascontroller::class, 'biologia'])->name('biologia');
Route::get('/quimica', [paginascontroller::class, 'quimica'])->name('quimica');
Route::get('/informatica', [paginascontroller::class, 'informatica'])->name('informatica');
Route::get('/fisica', [paginascontroller::class, 'fisica'])->name('fisica');
Route::get('/desporto', [paginascontroller::class, 'desporto'])->name('desporto');
Route::get('/arte', [paginascontroller::class, 'arte'])->name('arte');
Route::get('/historia', [paginascontroller::class, 'historia'])->name('historia');
Route::get('/origem', [paginascontroller::class, 'origem'])->name('origem');