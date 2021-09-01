<?php

include("conexion.php");
$id=$_GET['Id'];
$base->query("DELETE FROM usuario_log WHERE id_user='$id'");
header("Location:administradores.php");

?>