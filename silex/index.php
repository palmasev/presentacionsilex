<?php
require_once __DIR__.'/silex.phar';
$app = new Silex\Application();

$app->get('/', function() use ($app){
	return "Hola mundo";
});

$app->get('/hola/{nombre}', function($nombre) use ($app){
	return "Hola ".$app->escape($nombre);
})->convert('nombre', function($n){ return strtoupper($n); })->assert('nombre', '\d+');

$app->get('/hola/din/amico', function() use ($app){
	return "<form method='post' action='/hola/din/amico'>".
		"<input name='nombre'>".
		"<input type='submit'>".
		"</form>";
});
$app->post('/hola/din/amico', function(Silex\Application $app) {
	$nombre=$app['request']->get('nombre');
	//return $nombre;
	return $app->redirect('/hola/'.$nombre);
});



$app->run();

?>
