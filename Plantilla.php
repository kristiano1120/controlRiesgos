<?php
        
        //CONEXION A BASE DE DATOS
        require './ConexionBD.php';
        
        //INICIO SESION
        require './ConexionBD.php';
        try {
            
            $base=new PDO("mysql:host=localhost; dbname=inmel", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query="select * from lector where leccodigo=:usuario and lecdocumento= :contra";
            $resultado=$base->prepare($query);
            $usuario= htmlentities(addslashes($_POST["usuario"]));
            $contra= htmlentities(addslashes($_POST["contra"]));
            $resultado->bindValue(":usuario", $usuario);
            $resultado->bindValue(":contra", $contra);
            $resultado->execute();
            
            $numRegistro=$resultado->rowCount();
            
            if($numRegistro!=0){
                session_start();
                $_SESSION["user"]=$_POST["usuario"];
                header("location:MenuPrincipal.php");
                
            }else{
                header("location:index.php");
            }
        } catch (Exception $ex) {
            die("Error: ".$ex->getMessage());                     
        }
        
        //VARIABLES PARA CONSULTA
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
        
        //CONSULTA INSERTAR REGISTRO ATENTO  
        try{
        
        $consulta="INSERT INTO ATENTO (ATEFECHA, ATEHORA, ATECICLO, ATECORRERIA, ATEACTIVIDAD, ATEDIRECCION,  ATEMUNICIPIO, ATERIESGO, "
                . "ATECONACT, ATEDESCRIPCION, ATECONSECUENCIAS, ATESOLUCION, ATELECTOR, ATEDOCUMENTO, ATECARGO) VALUES ('$atfecha','$athora',"
                . "'$atciclo','$atcorreria','$atactividad','$atdireccion','$atmunicipio','$atriesgo','$atconact','$atdescri','$atconse','$atsol,"
                . "'$atlector','$atdoc','$atcargo')";
        $resul= mysqli_query($conexion_db, $consulta);
        
        mysqli_close($conexion_db);
        } catch (Exception $ex){
            die('error: '.$ex->getMessage());
        } finally {
            
        }
        
        //CONSULTA INSERTAR REGISTRO ATENTO 2
        try {
            
            $base=new PDO("mysql:host=localhost; dbname=inmel", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query="INSERT INTO ATENTO (ATEFECHA, ATEHORA, ATECICLO, ATECORRERIA, ATEACTIVIDAD, ATEDIRECCION,  ATEMUNICIPIO, ATERIESGO, "
                . "ATECONACT, ATEDESCRIPCION, ATECONSECUENCIAS, ATESOLUCION, ATELECTOR, ATEDOCUMENTO, ATECARGO) VALUES ('$atfecha','$athora',"
                . "'$atciclo','$atcorreria','$atactividad','$atdireccion','$atmunicipio','$atriesgo','$atconact','$atdescri','$atconse','$atsol,"
                . "'$atlector','$atdoc','$atcargo')";
            $resultado=$base->prepare($query);
            
        } catch (Exception $ex) {
            die("Error: ".$ex->getMessage());                     
        }
        
        //VARIABLES PARA CONEXION CON BD
        define('DB_HOST', 'localhost');
        define('DB_USUARIO', 'root');
        define('DB_CONTRASEÑA', '');
        define('DB_NOMBRE', 'inmel');
        define('DB_CHARSET', 'utf8');
        
        //CONEXION PDO:
        try {
            
            $base=new PDO('mysqli:host=localhost; dbname=inmel', 'root', '');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (Exception $ex) {
            
        }

