<?php



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

        header ("location:adminloggin.php");



    }


}catch (Exception $e){

    die ("Error: " . $e->getMessage());


}


?>
