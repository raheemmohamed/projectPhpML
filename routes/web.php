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

Route::get('/', function () {
    return view('welcome');
});

// route fot Multi_linear
Route::get('/multiple', 'HomeController@multiple_Linear');

// route for Single_Linear
Route::get('/single', 'HomeController@single_Linear');

//special resource routes
//Route::resource('/home', 'HomeController');
//
//Route::resource('/home', 'HomeController');