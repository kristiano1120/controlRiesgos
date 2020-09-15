<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Consulta Historico</title>
        <link rel="stylesheet" type="text/css" href="/controlRiesgos/nbproject/MVC/Vista/estilosInmel.css"/>
    </head>
    <body>
        <?php
         session_start();
         if(!isset($_SESSION["user"])){
             header("location:/./controlriesgos/nbproject/MVC/index.php");
         }
         //header("location:/controlRiesgos/nbproject/MVC/Modelo/MenuPrincipal.php");
        ?>
        
        
    </body>
</html>
