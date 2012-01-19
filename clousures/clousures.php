<?php

$cuadrado = function($x) { return $x*$x; };


echo "El cuadrado de 2 es: ".$cuadrado(2);
echo "\n";


$cubo = function($x) { return $x*$x*$x; };
echo "El cubo de 2 es: ".$cubo(2);
echo "\n";


//Podemos declarar una función que reciba como parámetro un clousure (callback)
function aLaMitadHacerOperacion($numero, $funcion) {
	return $funcion($numero/2);
}


for($i=1; $i<6; $i++){
	echo "\nEl cuadrado de la mitad de $i es: ".aLaMitadHacerOperacion($i, $cuadrado);
	echo "\nEl cubo de la mitad de $i es: ".aLaMitadHacerOperacion($i, $cubo);
	
	//No hace falta tener asignado el clousure a una variable.
	echo "\nLa tercera parte de la mitad de $i es: ".aLaMitadHacerOperacion($i, function($x){
		return $x*3;
	});
}

//Cuidado con el ámbito de las variables.

$numero = 3;
$multiplicaXnumero = function($x) use ($numero){
	return $x*$numero;
}


?>
