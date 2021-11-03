<?php

use Illuminate\Support\Facades\Route;



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
})->name('inicio');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/organigrama', function () {
    return view('organigrama');
})->name('organigrama');


Route::get('/met', function () {
    return view('met');
})->name('met');

Route::get('/metii', function () {
    return view('metii');
})->name('metii');

Route::get('/metiv', function () {
    return view('metiv');
})->name('metiv');


Route::get('/atc', function () {
    return view('atc');
})->name('atc');

Route::get('/atc051', function () {
    return view('atc051');
})->name('atc051');

Route::get('/atc052', function () {
    return view('atc052');
})->name('atc052');

Route::get('/atc053', function () {
    return view('atc053');
})->name('atc053');

Route::get('/atc054a', function () {
    return view('atc054a');
})->name('atc054a');

Route::get('/atc055', function () {
    return view('atc055');
})->name('atc055');

Route::get('/piloto', function () {
    return view('piloto');
})->name('piloto');

Route::get('/pilotop', function () {
    return view('pilotoprivado');
})->name('pilotop');

Route::get('/pilotoc', function () {
    return view('pilotocomercial');
})->name('pilotoc');

Route::get('/tripulante', function () {
    return view('tripulante');
})->name('tripulante');

Route::get('/ais', function () {
    return view('ais');
})->name('ais');

Route::get('/dv', function () {
    return view('dv');
})->name('dv');

Route::get('/freq', function () {
    return view('freq');
})->name('freq');

Route::get('/oma', function () {
    return view('oma');
})->name('oma');

Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');