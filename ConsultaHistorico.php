<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Consulta Historico</title>
        <link rel="stylesheet" type="text/css" href="Vista/estilosInmel.css"/>
    </head>
    <body>
        <?php
         session_start();
         if(!isset($_SESSION["user"])){
             header("Location:index.php");
         }
        ?>
        
    </body>
</html>
