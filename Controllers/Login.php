<?php
	class Login extends Controllers{
		public function __construct()
		{
			parent::__construct();
			//session_start();
		}

		public function login()
		{
			$data['page_name'] = "tienda_virtual";
			$this->views->getView($this,"login",$data); 
		}

	}