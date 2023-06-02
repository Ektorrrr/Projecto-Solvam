<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 1DAW - SOLVAM</title>
</head>
<body>
<?php
        $conexion = new mysqli ("91.121.65.149", "ektor", "aab135791", "haj_gamebyte");
        if($conexion->connect_error){
            die('No se ha podido conectar a la base de datos');
        }
    ?>
</body>
</html>