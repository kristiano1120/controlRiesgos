<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Atento</title>
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
        <form name="atento" action="/controlRiesgos/nbproject/MVC/Controlador/EnviarAtento.php" method="post" autocomplete="on">
            <table class="atento" id="atentoTbl" border="5" align="center"> 
                <tr>
                    <td><img src="/controlRiesgos/nbproject/MVC/Vista/logo1.png" id="esquina"></td>                               
                    <td><p>ATENTO</p><p>Reporte de Acto Inseguro-Condición Insegura</p></td>
                    
                </tr>
                <tr>
                    <td>FECHA: <input type="date" name="atfecha" id="atfecha">
                        HORA: <input type="time" name="athora" id="athora" size="20" </td>
                    <td>CICLO: <input type="text"  name="atciclo" id="atciclo" size="5"></td>
                    <td>CORRERÍA: <input type="text" name="atcorreria" id="atcorreria"></td>
                </tr>
                <tr>
                    <td>ACTIVIDAD: <select name="atactividad">
                            <option>Seleccione</option>
                            <option>Lectura</option>
                            <option>Repartida</option>
                            <option>Relectura</option>
                            <option>Supervisión</option>
                        </select></td>
                        <td>DIRECCIÓN: <input type="text" name="atdireccion" id="atdireccion" size="40"></td>
                    <td>MUNICIPIO: <select name="atmunicipio" id="atmunicipio">
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
                    <td>SELECCIONE TIPO DE RIESGO: <select name="atriesgo" id="atriesgo" >
                            <option>Seleccione</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select></td>
                    <td>CONDICIÓN/ACTO INSEGURO: <select name="atconact" id="atconact">
                            <option>Seleccione</option>
                            <option>Condición Insegura</option>
                            <option>Acto Inseguro</option>
                    </select> </td>
                </tr>
                <tr>
                    <td>DESCRIBA LO REPORTADO:<br><textarea name="atdescri" id="atedescri" rows="10" cols="41" maxlength="500"></textarea> </td>
                    <td>CONSECUENCIAS PORBABLES:<br><textarea name="atconse" id="atconse" rows="10" cols="43" maxlength="500"></textarea> </td>
                    <td>ALTERNATIVAS DE SOLUCIÓN:<br><textarea name="atsol" id="atsol" rows="10" cols="41" maxlength="500"></textarea> </td>
                </tr>
                <tr>
                    <td>CÓDIGO DE QUIEN REPORTA:<br> <input type="text" name="atlector" id="atlector" maxlength="10" size="3"/> </td>
                    <td>NUMERO DOCUMENTO:<br> <input type="text" name="atdoc" id="atedoc" /> </td>
                    <td>CARGO:<br> <select name="atcargo" id="atcargo">
                            <option>Seleccione</option>
                            <option>Lector/Repartidor</option>
                            <option>Auxiliar</option>
                            <option>Supervisor</option>
                        </select> </td>
                </tr>
                <tr>
                    <td><input type="reset" value="LIMPIAR" name="atlimpiar" id="atlimpiar" />
                    <input type="submit" value="ENVIAR" name="atenviar" id="atenviar" /></td>
                </tr>
                              
            </table>
              
                    
                
        </form>
        <?php
        
        
        
        ?>
    </body>
</html>
