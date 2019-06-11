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

Route::get('/produits', 'CatalogueController@index')->name('test');
Route::get('/produit/{vins}', 'CatalogueController@show');

Route::get('/promos', 'PromosController@index');

Route::get('/primeurs', 'PrimeurController@index');

Route::get('/nouveautes', 'NouveautesController@index');

Route::get('/compte', function () {
    return view('compte');
});

Route::post('/adresses', 'AdresseController@store');

Route::get('/panier', function () {
    return view('panier');
});

Route::get('/paiement-etape1', function () {
    if(Auth::guard('user')->check()){
        return redirect('/paiement-etape2');
        
    };
    return view('paiement1');
});

Route::get('/paiement-etape2', function () {
    return view('paiement2');
});

Route::get('/paiement-etape3', function () {
    return view('paiement3');
});

Route::get('/paiement-etape4', function () {
    return view('paiement4');
});






Route::group(['middleware'=>'user'], function() {
    
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
Route::get('/logout', 'auth\LoginController@logout')->name('logout');
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

