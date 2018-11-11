<?php

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
    return view('accueil');
})->name('accueil');

Route::get('/seance', function () {
    return view('seance');
})->name('seance');

Route::get('/benefices', function () {
    return view('benefices');
})->name('benefices');

Route::get('/biographie', function () {
    return view('biographie');
})->name('biographie');

Route::get('/tarifs', function () {
    return view('tarifs');
})->name('tarifs');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');