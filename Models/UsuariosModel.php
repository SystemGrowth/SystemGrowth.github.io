<?php 

	class UsuariosModel extends Mysql
	{
		private $intIdUsuario;
		private $strNombre;
		private $strApellido;
		private $intTelefono;
		private $strEmail;
		private $strPassword;
		private $intTipoId;
		private $intStatus;

		public function __construct()
		{
			parent::__construct();
		}	

		public function selectUsuarios()
		{
			$whereAdmin = "";
			if($_SESSION['idUser'] != 1 ){
				$whereAdmin = " and u.idusuario != 1 ";
			}
			$sql = "SELECT u.idusuario,u.nombres,u.apellidos,u.telefono,u.nom_user,u.status,r.idrol,r.nombre
					FROM usuario u 
					INNER JOIN rol r
					ON u.rol_id = r.idrol
					WHERE u.status != 0 ".$whereAdmin;
					$request = $this->select_all($sql);
					return $request;
		}

	}
 ?>