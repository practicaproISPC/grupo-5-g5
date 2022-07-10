<?php

    header("Content-Type: text/html;charset=utf-8"); //Para corregir ñ y acentos

try {

    $base= new PDO("mysql:host=localhost; dbname=testfinanzasdb", "root","");
    $base->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $sql = " SELECT * FROM USUARIO_LOG  WHERE USUARIO= :Login and CONTRA= :password ";

    $resultado = $base-> prepare($sql);

    $Login = htmlentities (addslashes($_POST["usuario"]));
    
    $contra = htmlentities (addslashes($_POST["pass"]));

    $resultado->bindvalue(":Login",$Login);
    $resultado->bindvalue(":password",$contra);

    $resultado ->execute();

    $registro = $resultado ->rowCount();
    if ($registro >0){
        session_start();
        $_SESSION["ingreso"]=$_POST["usuario"];
        header ("location:vistaCliente.php");

    }else{
        echo '<script>';
				echo 'alert("Datos de acceso incorrectos. \nSi olvidaste tu nombre de usuario o contraseña envíanos un mail a contacto@dreamteam.com");';
				echo 'window.location.href="adminloggin.php";';
			echo '</script>';
        //header ("location:adminloggin.php");
        

    }


}catch (Exception $e){

    die ("Error: " . $e->getMessage());


}


?>
