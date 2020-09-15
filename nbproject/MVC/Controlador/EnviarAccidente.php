<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Enviar Accidente</title>
        <link rel="stylesheet" type="text/css" href="/controlRiesgos/nbproject/MVC/Vista/estilosInmel.css"/>
    </head>
    <body>
        <?php
        require './ConexionBD.php';
        
               
        $acfecha=$_POST["acfecha"];
        $achora=$_POST["achora"];
        $acciclo=$_POST["acciclo"];
        $accorreria=$_POST["accorreria"];
        $acactividad=$_POST["acactividad"];
        $acdireccion=$_POST["acdireccion"];
        $acmunicipio=$_POST["acmunicipio"];
        $acriesgo=$_POST["acriesgo"];
        $acdescri=$_POST["acdescri"];
        $aclector=$_POST["aclector"];
        $acdoc=$_POST["acdoc"];
        $accargo=$_POST["accargo"];
        
        try{
        
        $consulta="INSERT INTO ACCIDENTE (ACFECHA, ACHORA, ACCICLO, ACCORRERIA, ACACTIVIDAD,"
                . " ACDIRECCION, ACMUNICIPIO, ACRIESGO, ACDESCRIPCION, ACLECTOR, ACDOCUMENTO,"
                . " ACCARGO) VALUES ('$acfecha', '$achora', '$acciclo', '$accorreria', '$acactividad', '$acdireccion',"
                . " '$acmunicipio', '$acriesgo', '$acdescri', '$aclector', '$acdoc', '$accargo')";
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
