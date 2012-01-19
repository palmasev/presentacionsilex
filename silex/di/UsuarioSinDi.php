<?php
/**
 * Clase que maneja la tabla de usuarios
 **/
require_once '../lib/BaseDatos/Conector.php';

class UsersManager
{
	private $connector

	public function __construct()
	{
		$this->connector = new Conector('db1', 'fd_helvetia_main', 'usuario', 'password');
	}
	
	public function getUsuarios(){
		$this->connector->openConnection();

		// Realizo la consulta a la base de datos para obtener el listado de usuarios ...
		
	}

}
?>
