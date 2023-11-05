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
    return view('index');
})->name('inicio');
Route::get('/gobierno', function () {
    return view('gobierno');
})->name('gobierno');
Route::get('/ideario', function () {
    return view('ideario');
})->name('ideario');
Route::get('/identidad', function () {
    return view('identidad');
})->name('identidad');
Route::get('/oferta', function () {
    return view('oferta');
})->name('oferta');
Route::get('/organigrama', function () {
    return view('organigrama');
})->name('organigrama');
Route::get('/', function () {
    return view('index');
})->name('inicio');
Route::get('/planes', function () {
    return view('planes');
})->name('planes');
Route::get('/propuesta', function () {
    return view('propuesta');
})->name('propuesta');
Route::get('/proyectos', function () {
    return view('proyectos');
})->name('proyectos');
Route::get('/reglamento', function () {
    return view('reglamento');
})->name('reglamento');
Route::get('/valores', function () {
    return view('valores');
})->name('valores');
