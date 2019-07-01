<?php

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
$router->get('/home',['as' => 'home', 'uses' => 'FullStackTestController@show']);
$router->get('/token',['as' => 'token', 'uses' => 'FullStackTestController@token']);
$router->post('/send',['as' => 'send', 'uses' => 'FullStackTestController@store']);
