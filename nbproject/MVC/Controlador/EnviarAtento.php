<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Enviar Atento</title>
        <link rel="stylesheet" type="text/css" href="/controlRiesgos/nbproject/MVC/Vista/estilosInmel.css"/>
    </head>
    <body>
        <?php
        require './ConexionBD.php';
        
               
        $atfecha=$_POST["atfecha"];
        $athora=$_POST["athora"];
        $atciclo=$_POST["atciclo"];
        $atcorreria=$_POST["atcorreria"];
        $atactividad=$_POST["atactividad"];
        $atdireccion=$_POST["atdireccion"];
        $atmunicipio=$_POST["atmunicipio"];
        $atriesgo=$_POST["atriesgo"];
        $atconact=$_POST["atconact"];
        $atdescri=$_POST["atdescri"];
        $atconse=$_POST["atconse"];
        $atsol=$_POST["atsol"];
        $atlector=$_POST["atlector"];
        $atdoc=$_POST["atdoc"];
        $atcargo=$_POST["atcargo"];
        
        try{
        
        $consulta="INSERT INTO ATENTO (ATEFECHA, ATEHORA, ATECICLO, ATECORRERIA, ATEACTIVIDAD, ATEDIRECCION,  ATEMUNICIPIO, ATERIESGO, "
                . "ATECONACT, ATEDESCRIPCION, ATECONSECUENCIAS, ATESOLUCION, ATELECTOR, ATEDOCUMENTO, ATECARGO) VALUES ('$atfecha','$athora',"
                . "'$atciclo','$atcorreria','$atactividad','$atdireccion','$atmunicipio','$atriesgo','$atconact','$atdescri','$atconse','$atsol',"
                . "'$atlector','$atdoc','$atcargo')";
        $resul= mysqli_query($conexion_db, $consulta);
        
        //$resul->execute($consulta);
        
        mysqli_close($conexion_db);
        } catch (Exception $ex){
            die('error: '.$ex->getMessage());
        } finally {
            
        }
        
        header("location:/controlRiesgos/nbproject/MVC/Modelo/MenuPrincipal.php");
        
        ?>
    </body>
</html>
