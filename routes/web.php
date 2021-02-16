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

// Auth::routes();
Auth::routes([ 'register' => false ]);
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
  
   Route::get('contract/{unlocataire}', 'HouseController@contract')->name('house.contract');
   Route::get('factures', 'HouseController@facture')->name('house.facture');
   Route::get('detail_quittance/{facture}', 'HouseController@detail_quittance')->name('house.detail_quittance');
   Route::get('maintenances', 'HouseController@maintenance')->name('house.maintenance');
   Route::get('historiques', 'HouseController@historique')->name('house.historique');
   Route::get('quittance/{unefacture}', 'HouseController@quittance')->name('house.quittance');
   Route::get('detail/{locataire}', 'HouseController@detail')->name('house.detail');
  
   Route::get('edit_locataire/{locataire}', 'HouseController@edit_locataire')->name('edit.locataire');
   Route::patch('locataire/{locataire}/update', 'HouseController@update_locataire')->name('update.locataire');
   Route::delete('locataire/{locataire}/destroy', 'HouseController@destroy_locataire')->name('destroy.locataire');
   
   Route::get('edit_facture/{facture}', 'HouseController@edit_facture')->name('edit.facture');
   Route::patch('facture/{facture}/update', 'HouseController@update_facture')->name('update.facture');
   Route::delete('facture/{facture}/destroy', 'HouseController@destroy_facture')->name('destroy.facture');
  
 
   Route::get('edit_maintenance/{maintenance}', 'HouseController@edit_maintenance')->name('edit.maintenance');
   Route::patch('maintenance/{maintenance}/update', 'HouseController@update_maintenance')->name('update.maintenance');
   Route::delete('maintenance/{maintenance}/destroy', 'HouseController@destroy_maintenance')->name('destroy.maintenance');

});


Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');

