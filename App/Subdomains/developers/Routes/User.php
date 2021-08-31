<?php

Route::run('/user/{param}', 'User@index', 'GET|POST', '0|USER');
