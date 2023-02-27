<?php 
 // Carga el archivo de configuración de la aplicación
 require_once("Config/Config.php");

 // Carga el archivo que contiene funciones de ayuda para la aplicación
 require_once("Helpers/Helpers.php");

 // Comprueba si se ha proporcionado una URL en la variable GET llamada "url". 
 // Si se ha proporcionado, la asigna a la variable $url. De lo contrario, la asigna a 'home/home'.
 $url = !empty($_GET['url']) ? $_GET['url'] : 'login/login';

 // Divide la URL en segmentos usando la función explode y los almacena en un array llamado $arrUrl.
 $arrUrl = explode("/", $url);

 // Inicializa las variables $controller, $method y $params con los valores correspondientes al primer segmento de la URL.
 $controller = $arrUrl[0];
 $method = $arrUrl[0];
 $params = "";

 // Comprueba si se ha proporcionado un segundo segmento en la URL y lo asigna a la variable $method si existe.
 if(!empty($arrUrl[1]))
 {
	 if($arrUrl[1] != "")
	 {
		 $method = $arrUrl[1];	
	 }
 }

 // Comprueba si se han proporcionado parámetros en la URL y los asigna a la variable $params si existen. 
 // Si hay más de un parámetro, los concatena en una cadena separada por comas y luego elimina la última coma.
 if(!empty($arrUrl[2]))
 {
	 if($arrUrl[2] != "")
	 {
		 for ($i=2; $i < count($arrUrl); $i++) {
			 $params .=  $arrUrl[$i].',';
		 }
		 $params = trim($params,',');
	 }
 }

 // Carga los archivos necesarios para cargar el controlador, el método y los parámetros correspondientes. 
 // Esto se hace utilizando una técnica de autoloading para cargar automáticamente las clases requeridas en tiempo de ejecución.
 require_once("Libraries/Core/Autoload.php");
 require_once("Libraries/Core/Load.php");
?>
