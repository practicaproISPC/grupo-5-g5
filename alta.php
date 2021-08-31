<?php
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


    header ("location:vistaCliente.php");
    echo "<script> alert ('Registro Exitoso');</script>";
 


}catch (Exception $e){

    die ("Error: " . $e->getMessage());


}


?>