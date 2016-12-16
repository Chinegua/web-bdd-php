<?php
session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
include_once "conexion.php"; 
$id=($_GET['id']);
$sql = "DELETE FROM usuarios WHERE idusuario = '$id'";
$results= mysql_query($sql);
header("Location:inicializar.php");
?>
