<?php
// Realiza la conexión a la base de datos (asumiendo que ya tienes una conexión establecida)
include("conexion.php");
// Realiza la consulta para obtener los datos de la tabla 'detalles'
$query = "SELECT * FROM detalles";
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