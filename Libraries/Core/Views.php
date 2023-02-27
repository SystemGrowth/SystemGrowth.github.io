<?php 
	// Se define la clase Views
	class Views
	{
		// Se define el método getView que recibe el nombre del controlador, la vista y un conjunto de datos
		function getView($controller,$view,$data="")
		{
			// Si el controlador es Home, se carga la vista directamente desde la carpeta Views
			$controller = get_class($controller);
			if($controller == "Login"){
				$view = "Views/".$view.".php";
			} else { // De lo contrario, se carga la vista desde la carpeta correspondiente al nombre del controlador
				$view = "Views/".$controller."/".$view.".php";
			}
			// Se incluye la vista
			require_once ($view);
		}
	}
?>
