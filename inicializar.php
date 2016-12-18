<?php 
    session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
    include_once "conexion.php"; 
    
    $sql = "select * from usuarios";
    $results= mysql_query($sql);
    while ($row = mysql_fetch_row($results)){ 
        $count = $count +1;
    }
    $num_parse = 7;
    $div = $count /$num_parse;
    $div = round($div,0);
    $div; //Numero de paginas que vamos a usar
    $pagina=($_GET['pagina']);
    $v=($_GET['v']);
    
    
    header('Location:listado.php?v='.$v.'&div='.$div.'&num_parse='.$num_parse.'&count='.$count.'&pagina='.$pagina);

?>