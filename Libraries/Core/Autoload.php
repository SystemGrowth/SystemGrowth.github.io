<?php 
	// Registra una función de carga automática para las clases
	spl_autoload_register(function($class){
		// Verifica si el archivo de la clase existe en la ruta "Libraries/Core/"
		if(file_exists("Libraries/".'Core/'.$class.".php")){
			// Carga el archivo de la clase
			require_once("Libraries/".'Core/'.$class.".php");
		}
	});
?>
