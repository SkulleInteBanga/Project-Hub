<?php

Route::get('/welcome', 'WelcomeController@index');

Route::get('/home', 'HomeController@index');

Auth::routes();
