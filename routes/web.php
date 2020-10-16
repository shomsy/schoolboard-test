<?php

use Pecee\SimpleRouter\SimpleRouter as Route;

Route::get('/student/{id}', 'StudentController@show');
