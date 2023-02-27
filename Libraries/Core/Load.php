<?php 
	// Convierte la primera letra de cada palabra en mayúscula
	$controller = ucwords($controller);
	// Obtiene la ruta del archivo del controlador correspondiente
	$controllerFile = "Controllers/".$controller.".php";
	// Verifica si el archivo del controlador existe
	if(file_exists($controllerFile))
	{
		// Carga el archivo del controlador
		require_once($controllerFile);
		// Crea una instancia del controlador
		$controller = new $controller();
		// Verifica si el método solicitado existe en el controlador
		if(method_exists($controller, $method))
		{
			// Llama al método correspondiente del controlador, pasando los parámetros
			$controller->{$method}($params);
		}
		else
		{
			// Si el método no existe, carga el controlador de errores
			require_once("Controllers/Error.php");
		}
	}
	else
	{
		// Si el controlador no existe, carga el controlador de errores
		require_once("Controllers/Error.php");
	}
?>
