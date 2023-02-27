<?php 

	class Controllers
	{
		public function __construct()
		{
			// Se crea una instancia de la clase Views
			$this->views = new Views();
			
			// Se llama al método loadModel() para cargar el modelo correspondiente
			$this->loadModel();
		}

		public function loadModel()
		{
			// Se obtiene el nombre de la clase del controlador que lo llama y se agrega "Model" para encontrar el modelo correspondiente
			$model = get_class($this)."Model";
			$routClass = "Models/".$model.".php";
			
			// Si el archivo del modelo existe, se carga y se instancia en la propiedad $model del controlador
			if(file_exists($routClass)){
				require_once($routClass);
				$this->model = new $model();
			}
		}
	}
?>
