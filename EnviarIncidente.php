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
        
               
        $infecha=$_POST["infecha"];
        $inhora=$_POST["inhora"];
        $inciclo=$_POST["inciclo"];
        $incorreria=$_POST["incorreria"];
        $inactividad=$_POST["inactividad"];
        $indireccion=$_POST["indireccion"];
        $inmunicipio=$_POST["inmunicipio"];
        $inriesgo=$_POST["inriesgo"];
        $indescri=$_POST["indescri"];
        $inlector=$_POST["inlector"];
        $indoc=$_POST["indoc"];
        $incargo=$_POST["incargo"];
        
        try{
        
        $consulta="INSERT INTO INCIDENTE (INCFECHA, INCHORA, INCCICLO, INCCORRERIA, INCACTIVIDAD,"
                . " INCDIRECCION, INCMUNICIPIO, INCRIESGO, INCDESCRIPCION, INCLECTOR, INCDOCUMENTO,"
                . " INCCARGO) VALUES ('$infecha', '$inhora', '$inciclo', '$incorreria', '$inactividad', '$indireccion',"
                . " '$inmunicipio', '$inriesgo', '$indescri', '$inlector', '$indoc', '$incargo')";
        $resul= mysqli_query($conexion_db, $consulta);
        
        //$resul->execute($consulta);
        
        mysqli_close($conexion_db);
        } catch (Exception $ex){
            die('error: '.$ex->getMessage());
        } finally {
            
        }
        
        header("location:MenuPrincipal.php");
        
        ?>
    </body>
</html>
