<?php 
	class Register extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function register()
		{
			$data['page_name'] = "tienda_virtual";
			$this->views->getView($this,"register",$data); 
		}

	}
?>
