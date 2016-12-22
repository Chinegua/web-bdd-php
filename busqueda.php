<?php
session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
include_once "conexion.php"; 

    if(isset($_POST['buscar'])){
        $usuario = $_POST['usuario'];
        header("Location:mostrar_busqueda.php?usuario=".$usuario);
    };
?>
<html lang="es">
<head>
<meta charset="utf-8">
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" type="text/css" href="mycss.css" media="screen" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="mycss.css" media="screen" />

       
</head>
<body>
    
    <nav>
        <div class="nav-wrapper">
          <a href="log_out.php" class="brand-logo"><?PHP echo $_SESSION[usuario]?></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Registro</a></li>
            <li><a href="inicializar.php">Listado</a></li>
            <li><a href="busqueda.php">Busqueda</a></li>
            <li><a href="log-in.php">Log-in</a></li>
          </ul>
        </div>
    </nav>
    <br>
    
    <div class="container">
    <nav>
    <div class="nav-wrapper">
      <form action="" method="post" class="busqueda"> 
        <div class="input-field">
          <input name="usuario" id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
        <br>
        <input class="waves-effect waves-light btn-large" type="submit" name="buscar" value="Buscar"></div>
      </form>
    </div>
  </nav>

    </div>

</body>
</html>
