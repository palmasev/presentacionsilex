<?php
require_once __DIR__.'/silex.phar';

$app = new Silex\Application();

$app->get('/', function() {
	return "Parece que Silex funciona";
});

$app->get('/hola/{nombre}', function($nombre) use ($app){
	return "¡¡¡Hola ".$app->escape($nombre)."!!!";
});

$app->run();
?>
