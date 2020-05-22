<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Conten:-Type" content="text/html; charset=UTF-8" />
        <title>Inicio Sesion</title>
        <link rel="stylesheet" type="text/css" href="Vista/estilosInmel.css"/>
    </head>
    <body>
        <?php
        
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
        
            
        
        
        ?>
    </body>
</html>
