<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Gestion Riesgos Inmel</title>
        <link rel="stylesheet" type="text/css" href="Vista/estilosInmel.css"/>
    </head>
    <body>
        <img src="Vista/logo1.png"  id="logo1"/> 
        <h2 id="titulo">INTRODUZCA SUS DATOS</h2>
        
        <table class="ingreso" >
            <form name="ingreso" id="ingreso" method="post" action="Controlador/InicioSesion.php" autocomplete="off">
            <tr>
                <td class="izq1">Usuario:</td>
                <td class="der1">
                    <input type="text" name="usuario" id="usuario"><br><br>
                </td>       
            </tr>
            <tr>
                <td class="izq1">Contraseña:</td>
                <td class="der1">
                    <input type="password" name="contra" id="contra"><br><br>
                </td>       
            </tr>
            <tr>
                <td colspan="2" class="ingresar"><input type="submit" id="ingresar" name="ingresar" value="Ingresar" ></td>
            </tr>              
                
        </form>            
        </table> 
        
    </body>
</html>
