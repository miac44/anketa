<?php
header('Content-Type: text/html; charset=utf-8');

require __DIR__ . '/autoload.php';
try {
	$route = \App\AdminRouter::parseUrl($_SERVER['REQUEST_URI']);
} catch (\App\Exceptions\RouteException $e){
	echo "Ошибка роутинга - " . $e->getMessage();
}

$controller = new $route->controller;

try {
	$controller->action($route->action);
} catch (\App\Exceptions\DBException $e){
	echo "Ошибка базы данных - " . $e->getMessage();
}
