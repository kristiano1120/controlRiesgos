<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Accidente</title>
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
        <form name="incidente" action="EnviarAccidente.php" method="POST" autocomplete="on">
            <table class="accidente" id="accidentetbl" border="3" align="center"> 
                <tr>
                    <td><img src="/controlRiesgos/nbproject/MVC/Vista/logo1.png" id="esquina"></td>                               
                    <td><p>ACCIDENTE</p><p>Reporte de Accidente</p></td>
                    
                </tr>
                <tr>
                    <td>FECHA: <input type="date" name="acfecha" id="acfecha">
                         HORA: <input type="time" name="achora" id="achora"></td>
                    <td>CICLO: <input type="text"  name="acciclo" id="acciclo"></td>
                    <td>CORRERÍA: <input type="text" name="accorreria" id="accorreria"></td>
                </tr>
                <tr>
                    <td>ACTIVIDAD: <select name="acactividad" id="acactividad">
                            <option>Seleccione</option>
                            <option>Lectura</option>
                            <option>Repartida</option>
                            <option>Causas</option>
                            <option>Supervisión</option>
                        </select></td>
                        <td>DIRECCIÓN: <input type="text" name="acdireccion" id="acdireccion"></td>
                    <td>MUNICIPIO: <select name="acciudad" id="acciudad">
                            <option>Seleccione</option>
                            <option>Medellín</option>
                            <option>Bello</option>
                            <option>Copacabana</option>
                            <option>Girardota</option>
                            <option>Barbosa</option>
                            <option>Envigado</option>
                            <option>Itagüi</option>
                            <option>Caldas</option>
                            <option>La Estrella</option>
                            <option>Sabaneta</option>
                        </select> </td>
                </tr>
                <tr>
                    <td>SELECCIONE TIPO DE RIESGO: <select name="acriesgo" id="acriesgo" >
                            <option>Seleccione</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select></td>
                    
                </tr>
                <tr>
                    <td>DESCRIBA LO REPORTADO:<br><textarea name="acdescri" id="acdescri" rows="10" cols="41" maxlength="500">Describa que?, como?, cuando? y porque? de lo sucedido</textarea> </td>
                    
                    
                </tr>
                <tr>
                    <td>CÓDIGO DE QUIEN REPORTA:<br> <input type="text" name="aclector" id="aclector" maxlength="10" size="3"/> </td>
                    <td>NUMERO DOCUMENTO:<br> <input type="text" name="acdoc" id="acdoc" /> </td>
                    <td>CARGO:<br> <select name="accargo" id="accargo">
                            <option>Seleccione</option>
                            <option>Lector/Repartidor</option>
                            <option>Auxiliar</option>
                            <option>Supervisor</option>
                        </select> </td>
                </tr>
                <tr>
                    <td><input type="reset" value="LIMPIAR" name="aclimpiar" id="aclimpiar" />
                    <input type="submit" value="ENVIAR" name="acenviar" id="acenviar" /></td>
                </tr>
                              
            </table>
              
                    
                
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
