<?php
session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
include_once "conexion.php"; 
$id=($_GET['id']);
$sql = "SELECT * FROM u_p WHERE idusuario = '$id'";
$results= mysql_query($sql);
$row = mysql_fetch_row($results);

if(isset($_POST['modificar'])){
        $usuario = $_POST['usuario']; 
        $password = $_POST['password']; 
        $sql = "UPDATE u_p set m_mail =\" ".$usuario."\" , contra_pass =\" ".$password."\"  WHERE idusuario =\" ".$id."\" ";//Se insertan los datos a la base de datos y el usuario ya fue registrado con exito.
        mysql_query($sql); 
        header("Location:inicializar.php");
        
};
?>

<html lang="es">
<head>
<meta charset="utf-8">
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
       
</head>
<body>
    
    <nav>
        <div class="nav-wrapper">
          <a href="log_out.php" class="brand-logo"><?PHP echo $_SESSION[usuario]?></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Registro</a></li>
            <li><a href="inicializar.php?pagina=0">Listado</a></li>
            <li><a href="log-in.php">Log-in</a></li>
          </ul>
        </div>
    </nav>
    <div class="container">
      <br>
      <br>      
    
    <form action="" method="post" class="registro"> 
        <div><label>E-mail:</label> 
        <input value="<?php echo $row[1]?>" type="text" name="usuario"></div> 
        <div><label>Clave:</label> 
        <input value="<?php echo $row[2]?>" type="password" name="password"></div> 
        <input class="waves-effect waves-light btn-large" type="submit" name="modificar" value="Modificar"></div> 
    </form>
    
    
    </div>

</body>
</html>