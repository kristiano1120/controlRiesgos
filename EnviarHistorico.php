<!DOCTYPE html>

<html>
    <!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Enviar Incidente</title>
        <link rel="stylesheet" type="text/css" href="Vista/estilosInmel.css"/>
    </head>
    <body>
        <?php
        require './ConexionBD.php';
        
        $fecha=$_POST["fecha"];
        $ciclo=$_POST["ciclo"];
        $correria=$_POST["correria"];
        $actividad=$_POST["actividad"];
        $direccion=$_POST["direccion"];
        $ciudad=$_POST["ciudad"];
        $terreno=$_POST["terreno"];
        $transporte=$_POST["transporte"];
        $pasa=$_POST["pasa"];
        $pasaje=$_POST["pasaje"];
        $descripcion=$_POST["descripcion"];
        $evidencia=$_POST["evidencia"];
        $empleado=$_POST["empleado"];
        $documento=$_POST["documento"];
        $cargo=$_POST["cargo"];
        
        try{
            
            $consulta="INSERT INTO HISTORICO (HISFECHA, HISCICLO, HISCORRERIA, HISACTIVIDAD, HISDIRECCION, HISCIUDAD, HISTERRENO,"
                    . "HISTRANSPORTE, HISPASA, HISPASAJE, HISNOVEDADES, HISEVIDENCIA, HISLECTOR, HISDOCUMENTO, HISCARGO)"
                    . "VALUES ('$fecha', '$ciclo','$correria','$actividad','$direccion','$ciudad','$terreno','$transporte','$pasa',"
                    . "'$pasaje','$descripcion','$evidencia','$empleado','$documento','$cargo')";
            $resul= mysqli_query($conexion_db, $consulta);
            
            mysqli_close($conexion_db);
                    
        } catch (Exception $ex) {
            
            die('error: '.$ex->getMessage());
            
        }
        
        header("location:MenuPrincipal.php");
        
        ?>
    </body>
</html>
