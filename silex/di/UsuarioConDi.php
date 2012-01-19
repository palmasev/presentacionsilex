<?php
/**
 * Clase que maneja la tabla de usuarios
 **/

class UsersManager
{
	private $connector

	public function __construct($connector)
	{
		$this->connector = $connector;
	}
	
	public function getUsuarios(){
		$this->connector->openConnection();

		// Realizo la consulta a la base de datos para obtener el listado de usuarios ...
		
	}

}
?>
