<!DOCTYPE html>

<html>
    <!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Enviar Incidente</title>
        <link rel="stylesheet" type="text/css" href="/controlRiesgos/nbproject/MVC/Vista/estilosInmel.css"/>
    </head>
    <body>
        <?php
        require './ConexionBD.php';
        
        $fecha=$_POST["fecha"];
        $ciclo=$_POST["ciclo"];
        $correria=$_POST["correria"];
        $actividad=$_POST["actividad"];
        $direccion=$_POST["direccion"];
        $municipio=$_POST["municipio"];
        $terreno=$_POST["terreno"];
        $transporte=$_POST["transporte"];
        $ruta=$_POST["ruta"];
        $pasa=$_POST["pasa"];
        $pasaje=$_POST["pasaje"];
        $descripcion=$_POST["descripcion"];
        $evidencia=$_POST["evidencia"];
        $codigo=$_POST["codigo"];
        $documento=$_POST["documento"];
        $cargo=$_POST["cargo"];
        
        try{
            
            $consulta="INSERT INTO HISTORICO (HISFECHA, HISCICLO, HISCORRERIA, HISACTIVIDAD, HISDIRECCION, HISMUNICIPIO, HISTERRENO,"
                    . "HISTRANSPORTE, HISRUTA, HISPASA, HISPASAJE, HISDESCRIPCION, HISEVIDENCIA, HISCODIGO, HISDOCUMENTO, HISCARGO)"
                    . "VALUES ('$fecha', '$ciclo','$correria','$actividad','$direccion','$municipio','$terreno','$transporte','$ruta','$pasa',"
                    . "'$pasaje','$descripcion','$evidencia','$codigo','$documento','$cargo')";
            $resul= mysqli_query($conexion_db, $consulta);
            
            mysqli_close($conexion_db);
                    
        } catch (Exception $ex) {
            
            die('error: '.$ex->getMessage());
            
        }
        
        header("location:/controlRiesgos/nbproject/MVC/Modelo/MenuPrincipal.php");
        
        ?>
    </body>
</html>
