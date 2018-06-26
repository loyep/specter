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

    // Admin
    Route::group(['middleware' => 'specter.user'], function () {
        Route::get('specter', ['uses' => 'SpecterController@index', 'as' => 'dashboard']);
    });

    // App
    Route::get('/', ['uses' => 'HomeController@index']);

    Route::get('tag/{tag}', ['uses' => 'HomeController@tag']);

    Route::get('author/{author}', ['uses' => 'HomeController@author']);

    Route::get('category/{category}', ['uses' => 'HomeController@category']);

    Route::get('{slug}', ['uses' => 'HomeController@story']);
});