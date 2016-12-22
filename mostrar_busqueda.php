<?php 
//session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
include_once "conexion.php"; 
$usuario=($_GET['usuario']);
$sql = "SELECT * FROM u_p where m_mail = \"".$usuario."\"";
$results= mysql_query($sql);

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
              <table>
        <thead>
          <tr>
            <th data-field="idusuario">ID</th>
            <th data-field="usuario">E-mail</th>
            <th data-field="password">Password</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = mysql_fetch_row($results)){ ?>
            <tr>
              <?php $id_=$row[0]; ?>
                <td><?php echo $row[0]; ?></td> 
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><a href=borrar.php?id=<?php echo $id_ ?> class="waves-effect waves-light btn">Borrar</a></td>
                <td><a href=modificar.php?id=<?php echo $id_ ?> class="waves-effect waves-light btn">Modificar</a></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    
    </div>

</body>
</html>
