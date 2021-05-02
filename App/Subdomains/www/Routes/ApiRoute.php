<?php

Route::run('/api/' . API_MAIN_KEY, 'Api@get', 'GET', 0);
Route::run('/api/' . API_MAIN_KEY, 'Api@post', 'POST', 0);
