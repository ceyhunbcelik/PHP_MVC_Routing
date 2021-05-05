<?php

Route::run('/users', 'Users@index', 'GET|POST', 0);
Route::run('/users', 'Users@index', 0);
Route::run('/users/' . API_MAIN_KEY, 'Users@post', 'POST', 0);
Route::run('/users/api/' . API_MAIN_KEY, 'Users@api', 'GET', 0);
Route::run('/user/{url}', 'User@index', 'GET', 0);
