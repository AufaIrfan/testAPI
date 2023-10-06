<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function(){
    return \Illuminate\Support\Str::random(32);
});

$router->post('registrasi','WebController@save_registrasi');
$router->post('verifikasi','WebController@verifikasi_email');
$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/api/example', 'ExampleController@show');
$router->group(['prefix' => 'api'], function ($router) {

	$router->get('/example', 'ExampleController@show');
	$router->get('/second-example', 'ExampleController@showAnother');

});
$router->get('/{route:.*}/', function ()  {
	return view('app');
});