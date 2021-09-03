<?php

    header("Content-Type: text/html;charset=utf-8"); //Para corregir ñ y acentos

$usuario = $_POST["user"];
$email = $_POST["email"];
$contrasenia = $_POST["pas"];


try {

    $base= new PDO("mysql:host=localhost; dbname=testfinanzasdb", "root","");
    $base->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    $base->exec ("SET CHARACTER SET utf8");


    $sql = " INSERT INTO USUARIO_LOG (USUARIO, EMAIL, CONTRA) VALUES (:user, :email, :pas) ";

    $resultado = $base-> prepare($sql);

    $resultado ->execute( array (":user"=>$usuario, ":email"=>$email, ":pas"=>$contrasenia));


	echo "Se dió de alta al admin con éxito; redireccionando...";
	echo"<script>setTimeout(\"location.href = 'altausuario.php';\",1500);</script>";
	
	

}catch (Exception $e){

    die ("Error: " . $e->getMessage());


}


?>