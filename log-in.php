<?php 
    session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; 
    
    if(isset($_POST['enviar'])){
        $usuario = $_POST['usuario']; 
        $password = $_POST['password'];
        $sql = "select * from u_p where m_mail=\"".$usuario."\" AND contra_pass=\"".$password."\"   LIMIT 1";
        $results= mysql_query($sql);
        $row = mysql_fetch_row($results);
        
        if($row[0]==NULL){
            echo '<script language="javascript">alert("Este usuario no existe");</script>';
        }
        else{
            $_SESSION[usuario]=$usuario;
            
        };
        
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
            <li><a href="inicializar.php?v=1&pagina=0">Listado</a></li>
            <li><a href="busqueda.php">Busqueda</a></li>
            <li><a href="log-in.php">Log</a></li>
          </ul>
        </div>
    </nav>
    <div class="container">
      <br>
      <br>      
    
    <form action="" method="post" class="registro"> 
        <div><label>E-mail:</label> 
        <input type="text" name="usuario"></div> 
        <div><label>Clave:</label> 
        <input type="password" name="password"></div> 
        <div> 
        <input class="waves-effect waves-light btn-large" type="submit" name="enviar" value="Log-i"></div> 
    </form>
    
    
    </div>

</body>
</html>



 