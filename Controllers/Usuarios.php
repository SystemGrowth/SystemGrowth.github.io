<?php
	class Usuarios extends Controllers{
		public function __construct()
		{
			parent::__construct();
			//session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(MUSUARIOS);
		}
  }