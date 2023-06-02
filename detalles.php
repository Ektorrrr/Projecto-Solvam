<?php
include("./php/conexion.php");
$codigo=$_GET['codigo'];
$query = "SELECT * FROM detalles WHERE id=$codigo";
$result = mysqli_query($conexion, $query);

// Verifica si hay registros devueltos por la consulta
if(mysqli_num_rows($result) > 0) {
    // Obtiene el primer registro como un arreglo asociativo
    $row = mysqli_fetch_assoc($result);

    // Asigna los valores a variables para usarlos en el HTML
    $imagen = $row['imagen'];
    $titulo = $row['titulo'];
    $subtitulo = $row['subtitulo'];
    $descripcion = $row['descripcion'];
    $fecha = $row['fecha'];
    $autor = $row['autor'];
    $categorias = $row['categorias'];
    $editor = $row['editor'];
}
else {
    // No se encontraron registros en la tabla
    // Puedes manejar este caso mostrando un mensaje de error o proporcionando valores predeterminados
    $imagen = '';
    $titulo = 'No hay datos disponibles';
    $subtitulo = '';
    $descripcion = '';
    $fecha = '';
    $autor = '';
    $categorias = '';
    $editor = '';
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Proyecto 1DAW - SOLVAM</title>

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/detalles.css">
    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- JS ================================================== -->

</head>

<body>
<?php include("./menu.php"); ?>
    <div id="contenedor">
        <div id="imagen">
            <img src="./img/detalles/<?php echo $imagen ?>" />
        </div>
        <div id="informacion">
            <div class="encabezado">
                <h1 class="titulo">
                    <?php echo $titulo; ?>
                </h1>
                <h3 class="subtitulo">
                    <?php echo $subtitulo; ?>
                </h3>
            </div>
            <div class="descripcion">
                <p>
                <?php echo $descripcion; ?>
                </p>
                <div class="detalles">
                    <div class="fecha">
                        <h1>
                            FECHA:
                        </h1>
                        <p>
                        <?php echo $fecha; ?>
                        </p>
                    </div>
                    <div class="autor">
                        <h1>
                            AUTOR:
                        </h1>
                        <p>
                        <?php echo $autor; ?>
                        </p>
                    </div>
                    <div class="categorias">
                        <h1>
                            CATEGORIAS:
                        </h1>
                        <p>
                        <?php echo $categorias; ?>
                        </p>
                    </div>
                    <div class="editor">
                        <h1>
                            EDITOR:
                        </h1>
                        <p>
                        <?php echo $editor; ?>
                        </p>
                    </div>
                </div>
            </div>
            <a class="boton-volver" href="./index.php">Volver</a>
        </div>
    </div>
</body>

</html>