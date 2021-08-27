<?php
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="testfinanzasdb";
		
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}	
		
		public function sanitize($variable){
			$res = mysqli_real_escape_string($this->con, $variable);
			return $res;
		}
		
		
		
		public function createCliente($nombreCliente, $apellidoCliente, $emailCliente, $telefonoCliente, $domicilioCliente, $consultaCliente){
			$sql = "INSERT INTO `visitantes` (`id_visitante`, `nombre`, `apellido`, `email`, `telefono`, `domicilio`, `consulta`) VALUES (NULL, '".$nombreCliente."', '".$apellidoCliente."', '".$emailCliente."', '".$telefonoCliente."', '".$domicilioCliente."', '".$consultaCliente."');";
			$res =	mysqli_real_query ($this->con , $sql);
			return $res;
		
		}
		
		
		public function readUsuarios(){
			$sql = "SELECT * FROM visitantes";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
	

		
	}
		
		


?>