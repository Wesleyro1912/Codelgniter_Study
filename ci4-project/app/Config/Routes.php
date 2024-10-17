<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('teste', ['namespace' => 'App\Controllers\Teste'], static function($routes){
    $routes->get('/', 'Home::index', ['e' => 'teste_01']);
    $routes->get('vedor', 'Home::view', ['o' => 'teste_02']);
    
});
 
$routes->get('/', 'Home::index');
$routes->get('/testePost', 'Home::view', ['as' => 'teste_post']);