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
        <p><a id="cerrarsesion" href="/controlRiesgos/nbproject/MVC/Controlador/CerrarSesion.php"">Cerrar Sesion</a></p>
        
        <img id="img1" src="/controlRiesgos/nbproject/MVC/Vista/logo1.png"  id="logo1"/>
        
        <h2 id="titulo">¿QUE DESEA HACER?</h2>
        
        
        <table class="menuhis" >
            
            
            <tr><td class="reporte"><li><a href="Historico.php" id="reporte">REPORTE</a></li></td>
        <td class="consulta"><li><a href="/controlRiesgos/nbproject/MVC/Controlador/ConsultaHistorico.php" id="consulta">CONSULTA</a></li></tr></td>
            <tr><td class="volver"><li><a href="MenuPrincipal.php" id="volver">VOLVER</a></li</td></tr>
                              
        </table>   
        
        <?php
        ?>
    </body>
</html>

