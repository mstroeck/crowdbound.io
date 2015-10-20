<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('spark', function () {
	return view('spark::welcome');
});

Route::get('home', ['middleware' => 'auth', function () {
	return view('home');
}]);

Route::get('/', function () {
    return view('index');
});

Route::get('/docs/ui-kit', function () {
    return view('_documentation/ui-kit');
});

Route::get('/docs/components', function () {
    return view('_documentation/components');
});

Route::get('/app', function () {
    return view('app/index');
});
