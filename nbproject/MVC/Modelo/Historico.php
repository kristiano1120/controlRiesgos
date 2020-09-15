<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Historico</title>
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
        <form name="historico" action="/controlRiesgos/nbproject/MVC/Controlador/EnviarHistorico.php" method="POST" autocomplete="off">
            <table class="historico" id="historicotbl" border="3" align="center"> 
                <tr>
                    <td><img src="/controlRiesgos/nbproject/MVC/Vista/logo1.png" id="esquina"></td>                               
                    <td><p>Histórico</p><p>Reporte de Histórico</p></td>
                    
                </tr>
                <tr>
                    <td>FECHA: <input type="date" name="fecha" id="infecha">
                        </td>
                        <td>CICLO: <select name="ciclo" id="ciclo">                                                     
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>                                 
                            </select> 
                        
                             CORRERÍA: <input type="text" name="correria" id="correria" size="3"></td>
                
                
                    <td>ACTIVIDAD: <select name="actividad" id="actividad">
                            <option>Seleccione</option>
                            <option>Lectura</option>
                            <option>Repartida</option>
                            <option>Causas</option>
                            <option>Supervisión</option>
                        </select></td>
                </tr>
                    <td>DIRECCIÓN: <input type="text" name="direccion" id="direccion" size="39"></td>
                    <td>MUNICIPIO: <select name="municipio" id="municipio">
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
                        <td>TIPO TERRENO: <select name="terreno" id="terreno">
                                <option>Seleccione</option>
                                <option>Urbano</option>
                                <option>Rural</option>
                            </select></td>
                </tr>
                <tr>
                    <td>TIPO TRANSPORTE: <select name="transporte" id="transporte">
                            <option>Seleccione</option>
                            <option>Metro</option>
                            <option>Bus</option>
                            <option>Vehículo Empresa</option>
                            <option>Moto</option>
                        </select>
                        RUTA: <input type="text" name="ruta" id="ruta" size="3" maxlength="10">
                    </td>
                    
                    <td>PASA POR: <input type="text" name="pasa" id="pasa" size="35" maxlength="50"></td>                        
                    <td>VALOR PASAJE: <input type="text" name="pasaje" id="pasaje" size="10"></td>
                    
                </tr>
                                       
                
                <tr>
                    <td>DESCRIBA LA CORRERÍA:<br><textarea name="descripcion" id="descripcion" rows="10" cols="41" maxlength="500" placeholder="Explique detalladamente los aspectos a tener en cuenta para realizar esta correría" ></textarea> </td>
                    <td> <input type="file" name="evidencia" value="" /> </td> 
                    
                </tr>
                <tr>
                    <td>CÓDIGO DE QUIEN REPORTA:<br> <input type="text" name="codigo" id="codigo" maxlength="10" size="3"/> </td>
                    <td>NUMERO DOCUMENTO:<br> <input type="text" name="documento" id="documento" /> </td>
                    <td>CARGO:<br> <select name="cargo" id="cargo">
                            <option>Seleccione</option>
                            <option>Lector/Repartidor</option>
                            <option>Auxiliar</option>
                            <option>Supervisor</option>
                        </select> </td>
                </tr>
                <tr>
                    <td><input type="reset" value="LIMPIAR" name="limpiar" id="limpiar" />
                    <input type="submit" value="ENVIAR" name="enviar" id="enviar" /></td>
                </tr>
                              
            </table>
              
                    
                
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
