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
    return view('pole.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pole/contact', function () {
    return view('pole.contact');
});
Route::get('/pole/formation-diplomantes', function () {
    return view('pole.formation-diplomantes');
});
Route::get('/pole/formation-continue', function () {
    return view('pole.formation-continue');
});
Route::get('/pole/nuit', function () {
    return view('pole.nuit-de-l\'orientation-et-de-l\'etudiant');
});
Route::get('/pole/apprenant', function () {
    return view('pole.vie-de-l\'apprenant');
});
Route::get('/pole/cv-offre-emploi', function () {
    return view('pole.cv-offre-emploi');
});

Route::resource('/pole', 'PoleFormationController');
