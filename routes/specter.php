<?php

/*
|--------------------------------------------------------------------------
| Specter Routes
|--------------------------------------------------------------------------
|
| 
|
*/

$namespacePrefix = config('specter.controllers.namespace');

Route::group(['as' => 'specter.', 'namespace' => $namespacePrefix], function () {

    // Login
    Route::get('specter/signin', ['uses' => 'AuthController@signin', 'as' => 'signin']);
    Route::post('specter/signin', ['uses' => 'AuthController@postSignIn', 'as' => 'postSignIn']);

    Route::get('specter/password/reset', ['uses' => 'AuthController@showLinkRequestForm', 'as'=> 'password.reset']);
    Route::post('specter/password/reset', ['uses' => 'AuthController@reset', 'as'=> 'password.postreset']);

    // Admin
    Route::group(['middleware' => 'specter.user'], function () {
        Route::get('specter', ['uses' => 'SpecterController@index', 'as' => 'dashboard']);
        Route::get('specter/editor', ['uses' => 'StoriesController@editor', 'as' => 'editor']);
    });

    // App
    Route::get('/', ['uses' => 'HomeController@index']);

    Route::get('tag/{tag}', ['uses' => 'HomeController@tag']);

    Route::get('author/{author}', ['uses' => 'HomeController@author']);

    Route::get('category/{category}', ['uses' => 'HomeController@category']);

    Route::get('{slug}', ['uses' => 'HomeController@story']);
});