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

    Route::get('products/getData', ['as' => 'products.data', 'uses' => 'ProductsController@getData']);
    Route::get('', ['as' => 'homes.index', 'uses' => 'HomeController@index']);
    Route::get('products', ['as' => 'products.index', 'uses' => 'ProductsController@index']);
    Route::get('products/create', ['as' => 'products.create', 'uses' => 'ProductsController@create']);
    Route::post('products', ['as' => 'products.store', 'uses' => 'ProductsController@store']);
    Route::get('products/{id}', ['as' => 'products.show', 'uses' => 'ProductsController@show']);
    Route::get('products/{id}/edit', ['as' => 'products.edit', 'uses' => 'ProductsController@edit']);
    Route::put('products/{id}', ['as' => 'products.update', 'uses' => 'ProductsController@update']);
    Route::delete('products/{id}', ['as' => 'products.delete', 'uses' => 'ProductsController@destroy']);
});

