<?php 

	class ProveedoresModel extends Mysql
	{
		private $intIdProveedor;
		private $strEmpresa;
		private $strRuc;
		private $intTelefono;
		private $strDireccion;
		private $strDatecreate;
		private $intStatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectProveedores(){
			$sql = "SELECT * FROM proveedor WHERE status != 0;";
					$request = $this->select_all($sql);
			return $request;
		}
    }
?>