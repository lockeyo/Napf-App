<?php

Route::get('/', 'HomeController@index');
Route::get('impressum', 'HomeController@impressum');
Route::get('datenschutz', 'HomeController@datenschutz');
Route::get('ueber-napf-app', 'HomeController@about');

Route::post('', 'HomeController@searchItems');

App::missing(function($exception)
{
    return Response::view('errors.404', array(), 404);
});