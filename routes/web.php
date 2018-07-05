<?php

//CMS route
Route::namespace('CMS')->group(function () {
    Route::get('partners/getData', ['as' => 'partners.data', 'uses' => 'PartnersController@getData']);
    Route::get('', ['as' => 'homes.index', 'uses' => 'HomeController@index']);
    Route::get('partners', ['as' => 'partners.index', 'uses' => 'PartnersController@index']);
    Route::get('partners/create', ['as' => 'partners.create', 'uses' => 'PartnersController@create']);
    Route::post('partners', ['as' => 'partners.store', 'uses' => 'PartnersController@store']);
    Route::get('partners/{id}', ['as' => 'partners.show', 'uses' => 'PartnersController@show']);
    Route::get('partners/{id}/edit', ['as' => 'partners.edit', 'uses' => 'PartnersController@edit']);
    Route::put('partners/{id}', ['as' => 'partners.update', 'uses' => 'PartnersController@update']);
    Route::delete('partners/{id}', ['as' => 'partners.delete', 'uses' => 'PartnersController@destroy']);
});

