<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/test/{id}', function($id){
	return $id;
});
