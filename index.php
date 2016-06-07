<?php
header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '/autoload.php';

$test = new App\Models\Stacionar();

echo "<pre>";
var_dump($test->instance('Буйская ГБ'));
echo "</pre>";
die();

try {
	$route = \App\Router::parseUrl($_SERVER['REQUEST_URI']);
} catch (\App\Exceptions\RouteException $e){
	echo "Ошибка роутинга - " . $e->getMessage();
}

$controller = new $route->controller;

try {
	$controller->action($route->action);
} catch (\App\Exceptions\DBException $e){
	echo "Ошибка базы данных - " . $e->getMessage();
}
