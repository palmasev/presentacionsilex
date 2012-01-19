<?php
namespace Palma\BaseDatos;

/**
 * Clase que realiza la conexión a la base de datos
 **/
class Conector
{
	private $host;
	private $dbname;
	private $username;
	private $password;

	public function __construct($host, $dbname, $username, $password) {
		$this->host     = $host;
		$this->dbname   = $dbname;
		$this->username = $username;
		$this->password = $password;
	}

	public function openConnection(){
		//Se abre la conexión a la base de datos ...
	}
}
?>
