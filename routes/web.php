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


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('/register', 'AuthController@register');
    $router->post('/login', 'AuthController@login');

    $router->group(['middleware' =>'auth' ], function () use ($router) {
        $router->post('/logout', 'AuthController@logout');

       
    });
});





// Countries
$router->get('/api/countries', 'countriesController@countries');


 // check every request
 $router->group(['middleware' =>'verify' ], function () use ($router) {
    $router->get('/profile',  'testController@GetProfile' );
    
   
});














// $router->get('/api/products', 'productsController@getProducts');

// optional param between []
$router->get('test[/{id}]', function ($id=10) {
    return 'Welcome to laravel luman '.$id;
});
