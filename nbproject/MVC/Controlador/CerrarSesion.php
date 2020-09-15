<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            session_destroy();
            header("location:/./controlriesgos/nbproject/MVC/index.php");
        ?>
    </body>
</html>
