<?php
	class Dashboard extends Controllers{
		
		public function __construct()
		{
			parent::__construct();
			session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(MDASHBOARD);
		}

		public function dashboard()
		{
			$data['page_name'] = "tienda_virtual";
			$this->views->getView($this,"dashboard",$data); 
		}

	}