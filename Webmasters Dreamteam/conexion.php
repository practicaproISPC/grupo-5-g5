<?php

	header("Content-Type: text/html;charset=utf-8"); //Para corregir ñ y acentos

	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="nosotros";
		
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			$this->con->set_charset("utf8");
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}	
		
		public function sanitize($variable){
			$res = mysqli_real_escape_string($this->con, $variable);
			return $res;
		}
		
		
		
		public function createCliente($nombre, $email, $telefono, $mensaje){
			$sql = "INSERT INTO `consultas`(`id_consulta`, `NOMBRE`, `EMAIL`, `TELEFONO`, `MENSAJE`) VALUES (NULL, '".$nombre."', '".$email."', '".$telefono."', '".$mensaje."');";
			$res =	mysqli_real_query ($this->con , $sql);
			return $res;
		
		}


    }


?>

