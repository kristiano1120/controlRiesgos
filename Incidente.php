<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Incidente</title>
        <link rel="stylesheet" type="text/css" href="Vista/estilosInmel.css"/>
    </head>
    <body>
        <?php
         session_start();
         if(!isset($_SESSION["user"])){
             header("Location:index.php");
         }
        ?>
        <p><a id="cerrarsesion" href="CerrarSesion.php">Cerrar Sesion</a></p>
        <form name="incidente" action="EnviarIncidente.php" method="POST" autocomplete="on">
            <table class="incidente" id="incidentetbl" border="3" align="center"> 
                <tr>
                    <td><img src="Vista/logo1.png" id="esquina"></td>                               
                    <td><p>INCIDENTE</p><p>Reporte de Incidente</p></td>
                    
                </tr>
                <tr>
                    <td>FECHA: <input type="date" name="infecha" id="infecha">
                         HORA: <input type="time" name="inhora" id="inhora"></td>
                    <td>CICLO: <input type="text"  name="inciclo" id="inciclo"></td>
                    <td>CORRERÍA: <input type="text" name="incorreria" id="incorreria"></td>
                </tr>
                <tr>
                    <td>ACTIVIDAD: <select name="inactividad" id="inactividad">
                            <option>Seleccione</option>
                            <option>Lectura</option>
                            <option>Repartida</option>
                            <option>Causas</option>
                            <option>Supervisión</option>
                        </select></td>
                        <td>DIRECCIÓN: <input type="text" name="indireccion" id="indireccion"></td>
                    <td>MUNICIPIO: <select name="inciudad" id="inciudad">
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
                    <td>SELECCIONE TIPO DE RIESGO: <select name="inriesgo" id="inriesgo" >
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
                    <td>DESCRIBA LO REPORTADO:<br><textarea name="indescri" id="indescri" rows="10" cols="41" maxlength="500">Describa que?, como?, cuando? y porque? de lo sucedido</textarea> </td>
                    
                    
                </tr>
                <tr>
                    <td>CÓDIGO DE QUIEN REPORTA:<br> <input type="text" name="inlector" id="inlector" maxlength="10" size="3"/> </td>
                    <td>NUMERO DOCUMENTO:<br> <input type="text" name="indoc" id="indoc" /> </td>
                    <td>CARGO:<br> <select name="incargo" id="incargo">
                            <option>Seleccione</option>
                            <option>Lector/Repartidor</option>
                            <option>Auxiliar</option>
                            <option>Supervisor</option>
                        </select> </td>
                </tr>
                <tr>
                    <td><input type="reset" value="LIMPIAR" name="inlimpiar" id="inlimpiar" />
                    <input type="submit" value="ENVIAR" name="inenviar" id="inenviar" /></td>
                </tr>
                              
            </table>
              
                    
                
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
