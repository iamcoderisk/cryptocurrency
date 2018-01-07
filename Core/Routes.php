<?php


$router = new Core\Helpers\Router();

$router->routes('',['controller'=>'HomeController','action'=>'index']);

$router->routes('/about/*',['controller'=>'Homes','action'=>'about']);
$router->routes('{controller}/{action}');
$router->routes('{controller}/{action}/{id:\d+}');
$router->routes('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router->dispatch($_SERVER['QUERY_STRING']);//don't touch this line
