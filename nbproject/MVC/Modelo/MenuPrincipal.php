<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Menu Principal</title>
        <link rel="stylesheet" type="text/css" href="/controlRiesgos/nbproject/MVC/Vista/estilosInmel.css"/>
    </head>
    <body>
         <?php
         session_start();
         if(!isset($_SESSION["user"])){
             header("location:/./controlriesgos/nbproject/MVC/index.php");
         }
        ?>
        
            <p><a id="cerrarsesion" href="/controlRiesgos/nbproject/MVC/Controlador/CerrarSesion.php">Cerrar Sesion</a></p>
        
            
        <img id="img1" src="/controlRiesgos/nbproject/MVC/Vista/logo1.png"  id="logo1"/>
        <h1>BIENVENIDO</h1>
        <h2 id="titulo">¿QUE DESEA REPORTAR?</h2>
        
        
        <table class="menu" >
            
            
            <tr><td class="izq2"><li><a href="Atento.php" id="atento">ATENTO</a></li></td>
            <td class="der2"><li><a href="MenuHistorico.php" id="historico">HISTORICO</a></li></tr></td>
            <tr><td class="izq2"><li><a href="Incidente.php" id="incidente">INCIDENTE</a></li></td>
            <td class="der2"><li><a href="Accidente.php" id="accidente">ACCIDENTE</a></li></tr></td>
            <tr><td class="salir"><li><a href="index.php" id="salir">SALIR</a></li</td></tr>
                              
        </table>   
        
        <?php
        ?>
    </body>
</html>
