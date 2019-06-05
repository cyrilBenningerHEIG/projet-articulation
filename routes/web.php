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


Route::get('/', 'IndexController@index');

Route::get('/produits', 'CatalogueController@index');
Route::get('/produit/{vins}', 'CatalogueController@show');

Route::get('/promos', function () {
    return view('promos');
});

Route::get('/primeurs', function () {
    return view('primeurs');
});

Route::get('/nouveautes', function () {
    return view('nouveautes');
});

Route::get('/compte', function () {
    return view('compte');
});

Route::post('/adresses', 'AdresseController@store');

Route::get('/panier', function () {
    return view('panier');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cgv', function () {
    return view('cgv');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/histoire', function () {
    return view('histoire');
});

