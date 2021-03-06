<?php

$router = new Phalcon\Mvc\Router(false);

$router->add('/:controller/:action/:params', array(
	'namespace' => 'Train\Controllers',
	'controller' => 1,
	'action' => 2,
	'params' => 3,
));

$router->add('/:controller', array(
	'namespace' => 'Train\Controllers',
	'controller' => 1
));

$router->add('/admin/:controller/:action/:params', array(
	'namespace' => 'Train\Controllers\Admin',
	'controller' => 1,
	'action' => 2,
	'params' => 3,
));

$router->add('/admin/:controller', array(
	'namespace' => 'Train\Controllers\Admin',
	'controller' => 1
));



return $router;