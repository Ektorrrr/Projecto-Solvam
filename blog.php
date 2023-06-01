<?php include("./php/conexion.php");

if (isset($_GET["id_articulo"])) {
    $id_articulo = $_GET["id_articulo"];
    //si la url lleva la variable id_categoria, mostramos los libros de dicha categoría
    $sql_detalles = $conexion->query("SELECT * FROM articulos WHERE id=$id_articulo");
} else {
    //si no lleva la variable, mostramos todos los libros
    $sql_detalles = $conexion->query("SELECT * FROM articulos");
}


$most_popular = $conexion->query("SELECT * FROM articulos ORDER BY visitas DESC LIMIT 4");

$categoria = $conexion->query("SELECT id_categoria FROM articulos AS a INNER JOIN categorias AS c ON a.id_categoria = c.id_categoria")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/articulos.css">
    <title>Peliculas</title>
</head>

<body>
    <?php include("./menu.php"); ?>

    <div id="contenedor">
        <div class="izquierda">
            <?php
            while ($fila = $sql_detalles->fetch_array()) {
                $id_articulos = $fila[0];
                $titulo = $fila[1];
                $imagen = $fila[7];
                $descripcion_corta = $fila[2];
                $descripcion = $fila[3];
                $autor = $fila[4];
                $fecha = $fila[5];
                $visitas = $fila[8];
                $categoria
            ?>

                <div class="noticias">
                    <div class="imagen">
                        <a href="./masinfo_articulos.php?codigo=<?php echo $fila[0]; ?>">
                            <img src="img/articulos/<?php echo $imagen; ?>" width="200px" height="200px" />
                        </a>


                    </div>
                    <div class="informacion">
                        <div class="titulo">
                            <h2>
                                <?php echo $titulo; ?>
                            </h2>

                        </div>
                        <div class="descripcion_corta">
                            <p>
                                <?php echo $descripcion_corta; ?>
                            </p>

                        </div>
                        <div class="mas_info">
                            <a class="boton" href="./masinfo_articulos.php?codigo=<?php echo $fila[0]; ?>">Mas información</a>
                        </div>
                        <div class="datos">
                            <div class="fecha">
                                <p>
                                    <?php echo $fecha; ?> |
                                </p>
                            </div>
                            <div class="autor">
                                <p>
                                    <?php echo $autor; ?> |
                                </p>
                            </div>
                            <div class="categorias">
                                <p>
                                    <?php echo $categoria; ?> |
                                </p>
                            </div>
                            <div class="visitas">
                                <p>
                                    <?php echo $visitas; ?> |
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            <?php
            }
            ?>
        </div>
        <div class="derecha">
            <div id="categoria">
                <h3>CATEGORIAS</h3>

            </div>
            <p class="limpiar"></p>
            <div id="popular">
                <h3>POPULAR POST</h3>
                <?php
                while ($fila = $most_popular->fetch_array()) {
                    $id_articulos = $fila[0];
                    $titulo = $fila[1];
                    $imagen = $fila[7];
                    $autor = $fila[4];
                    $fecha = $fila[5];

                ?>

                    <div class="noticias_popular">
                        <div class="imagen_popular">
                            <img src="img/articulos/<?php echo $imagen; ?>" width="80px" height="80px" />

                        </div>
                        <div class="informacion">
                            <div class="titulo_popular">
                                <h2>
                                    <a href="./masinfo_articulos.php?codigo=<?php echo $fila[0]; ?>"><?php echo $titulo; ?></a>
                                </h2>
                            </div>
                            <div class="datos">
                                <div class="fecha">
                                    <p>
                                        <?php echo $fecha; ?> |
                                    </p>
                                </div>
                                <div class="autor">
                                    <p>
                                        <?php echo $autor; ?> |
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                <?php
                }
                ?>
            </div>
            <p class="limpiar"></p>
            <div id="video">
                <h3>VIDEO</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/iGfWGGEzMe8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <p class="limpiar"></p>
        <?php include(".foot.php");
        ?>


</body>

</html>