<?php

Route::run('/api/' . API_MAIN_KEY, 'Api@get', 'GET');
Route::run('/api/' . API_MAIN_KEY, 'Api@post', 'POST');
