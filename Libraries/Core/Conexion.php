<?php
class Conexion{
	private $conect;

	public function __construct(){
		// Se crea el string de conexión a la base de datos utilizando las constantes definidas en el archivo Config.php
		$connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
		try{
			// Se intenta crear una instancia de PDO utilizando el string de conexión y las credenciales de acceso definidas en el archivo Config.php
			$this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
			// Se configura PDO para lanzar una excepción si ocurre un error
			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    // Si la conexión se realiza con éxito, se imprimirá un mensaje en la consola indicando que la conexión ha sido exitosa
		}catch(PDOException $e){
			// Si ocurre un error durante la conexión, se imprimirá un mensaje en la consola indicando que se ha producido un error y se almacenará en la variable $this->conect el string "Error de conexión"
			$this->conect = 'Error de conexión';
		    echo "ERROR: " . $e->getMessage();
		}
	}

	public function conect(){
		// Este método devuelve el objeto de conexión a la base de datos
		return $this->conect;
	}
}
?>
