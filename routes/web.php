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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Only authenticated members can access these routes
Route::group(['middleware' => ['auth']], function () {

   Route::get('posts/create', 'PostController@create')->name('posts.create');
   Route::post('posts', 'PostController@store')->name('posts.store');
   Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');
   Route::delete('posts/{post}/destroy', 'PostController@destroy')->name('posts.destroy');
   Route::patch('posts/{post}/update', 'PostController@update')->name('posts.update');

   // Form 
   Route::get('add_appartement', 'HouseController@add_appartement')->name('appartement.form');
   Route::post('add_appartement', 'HouseController@store_appartement')->name('store.appartement');

   Route::get('add_facture', 'HouseController@add_facture')->name('facture.form');
   Route::post('add_facture', 'HouseController@store_facture')->name('store.facture');

   Route::get('add_maintenance', 'HouseController@add_maintenance')->name('maintenance.form');
   Route::post('add_maintenance', 'HouseController@store_maintenance')->name('store.maintenance');

   Route::get('appartements', 'HouseController@appartement')->name('house.appartement');
   Route::get('locataires', 'HouseController@locataire')->name('house.locataire');
   Route::get('contract', 'HouseController@contract')->name('house.contract');
   Route::get('factures', 'HouseController@facture')->name('house.facture');
   Route::get('maintenances', 'HouseController@maintenance')->name('house.maintenance');
   Route::get('historiques', 'HouseController@historique')->name('house.historique');

});

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');

