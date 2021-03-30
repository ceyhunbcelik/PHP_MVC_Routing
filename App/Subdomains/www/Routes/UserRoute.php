<?php

//Route::run('/users', 'Users@index', 'GET|POST');
Route::run('/users', 'Users@index');
Route::run('/users/' . API_MAIN_KEY, 'Users@post', 'POST');
Route::run('/users/api/' . API_MAIN_KEY, 'Users@api', 'GET');
Route::run('/user/{url}', 'User@index');
