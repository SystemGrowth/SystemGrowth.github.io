<?php 

	class LoginModel extends Mysql
	{
		private $intIdUsuario;
		private $strUsuario;
		private $strPassword;
		private $strToken;

		public function __construct()
		{
			parent::__construct();
		}	

		public function loginUser(string $usuario, string $password)
		{
			$this->strUsuario = $usuario;
			$this->strPassword = $password;
			$sql = "SELECT idusuario,status FROM usuario WHERE 
					nom_user = '$this->strUsuario' and 
					password = '$this->strPassword' and 
					status != 0 ";
			$request = $this->select($sql);
			return $request;
		}

		public function sessionLogin(int $iduser){
			$this->intIdUsuario = $iduser;
			//BUSCAR ROLE 
			$sql = "SELECT u.idusuario,
							u.nombres,
							u.apellidos,
							u.telefono,
							u.nom_user,
							r.idrol,r.nombre,
							u.status 
					FROM usuario u
					INNER JOIN rol r
					ON u.rol_id = r.idrol
					WHERE u.idusuario = $this->intIdUsuario";
			$request = $this->select($sql);
			$_SESSION['userData'] = $request;
			return $request;
		}

		public function getUserEmail(string $strEmail){
			$this->strUsuario = $strEmail;
			$sql = "SELECT idusuario,nombres,apellidos,status FROM usuario WHERE 
					nom_user = '$this->strUsuario' and  
					status = 1 ";
			$request = $this->select($sql);
			return $request;
		}

	}
 ?>