<?php
include("./php/conexion.php");
$codigo=$_GET['codigo'];
$query = "SELECT * FROM articulos WHERE id=$codigo";
$result = mysqli_query($conexion, $query);

// Verifica si hay registros devueltos por la consulta
if(mysqli_num_rows($result) > 0) {
    // Obtiene el primer registro como un arreglo asociativo
    $row = mysqli_fetch_assoc($result);
    
    $visitas = $row['visitas'] + 1;

    // Actualiza el número de visitas en la base de datos
    $updateQuery = "UPDATE articulos SET visitas=$visitas WHERE id=$codigo";
    mysqli_query($conexion, $updateQuery);

    // Asigna los valores a variables para usarlos en el HTML
    $imagen = $row['imagen'];
    $titulo = $row['titulo'];
    $descripcion_corta = $row['descripcion_corta'];
    $descripcion = $row['descripcion'];
    $autor = $row['autor'];
    $fecha = $row['fecha'];
    $categorias = $row['categorias'];
    $editor = $row['editor'];
    $visitas = $row['visitas'];
}
else {
    // No se encontraron registros en la tabla
    // Puedes manejar este caso mostrando un mensaje de error o proporcionando valores predeterminados
    $imagen = '';
    $titulo = 'No hay datos disponibles';
    $descripcion_corta = '';
    $descripcion = '';
    $autor = '';
    $fecha = '';
    $categorias = '';
    $visitas = '';
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Proyecto 1DAW - SOLVAM</title>

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/masinfo_articulos.css">
    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- JS ================================================== -->

</head>

<body>
<?php include("./menu.php"); ?>
    <div id="contenedor">
        <div id="imagen">
            <img src="./img/articulos/<?php echo $imagen ?>" />
        </div>
        <div id="informacion">
            <div class="encabezado">
                <h1 class="titulo">
                    <?php echo $titulo; ?>
                </h1>
                <h3 class="subtitulo">
                    <?php echo $descripcion_corta; ?>
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
                    <div class="visitas">
                        <h1>
                            VISITAS:
                        </h1>
                        <p>
                        <?php echo $visitas; ?>
                        </p>
                    </div>
                </div>
            </div>
            <a class="boton-volver" href="./blog.php">Volver</a>
        </div>
    </div>
</body>

</html>