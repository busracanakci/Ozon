<?php

use Illuminate\Support\Facades\Route;



Route::get('/','front\indexController@index')->name('index');
Route::get('/iletisim','front\iletisim\indexController@index')->name('index');
Route::get('/ekibimiz','front\ekibimiz\indexController@index')->name('index');
Route::get('/tedaviler','front\tedaviler\indexController@index')->name('index');




Route::get('/ekip/detay/{selflink}','front\ekip\indexController@index')->name('ekip.detay');
Route::get('/ozon/detay/{selflink}','front\ozon\indexController@index')->name('ozon.detay');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.', 'middleware'=>['auth','AdminCtrl']],function(){
  Route::get('/','indexController@index')->name('index');
  Route::group(['namespace'=>'ekip','prefix'=>'ekip','as'=>'ekip.'],function()  {
    Route::get('/','indexController@index')->name('index');
    Route::get('/ekle','indexController@create')->name('create');
    Route::post('/ekle','indexController@store')->name('create.post');
    Route::get('/duzenle/{id}','indexController@edit')->name('edit');
    Route::post('/duzenle/{id}','indexController@update')->name('edit.post');
    Route::get('/sil/{id}','indexController@delete')->name('delete');


  });
  Route::group(['namespace'=>'slider','prefix'=>'slider','as'=>'slider.'],function()  {
    Route::get('/','indexController@index')->name('index');
    Route::get('/ekle','indexController@create')->name('create');
    Route::post('/ekle','indexController@store')->name('create.post');
    Route::get('/duzenle/{id}','indexController@edit')->name('edit');
    Route::post('/duzenle/{id}','indexController@update')->name('edit.post');
    Route::get('/sil/{id}','indexController@delete')->name('delete');


  });
  Route::group(['namespace'=>'ozon','prefix'=>'ozon','as'=>'ozon.'],function()  {
    Route::get('/','indexController@index')->name('index');
    Route::get('/ekle','indexController@create')->name('create');
    Route::post('/ekle','indexController@store')->name('create.post');
    Route::get('/duzenle/{id}','indexController@edit')->name('edit');
    Route::post('/duzenle/{id}','indexController@update')->name('edit.post');
    Route::get('/sil/{id}','indexController@delete')->name('delete');


  });

});
