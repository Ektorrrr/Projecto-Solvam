<?php
include("./php/conexion.php");
$query = "SELECT * FROM detalles ";
$result = mysqli_query($conexion, $query); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Proyecto 1DAW - SOLVAM</title>

	<!-- CSS ================================================== -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- JS ================================================== -->

</head>

<body>
<?php include("./menu.php"); ?>
	<div id="contenedor">
		
		<p class="limpiar"></p>
		
		<div id="galeria_animada">
			<div class="animacion">

				<div id="carta">
					<div class="cara">S O L V A M</div>
					<div class="cruz"><img src="https://picsum.photos/183/350/?random=1" /></div>
				</div>
				<div id="carta1">
					<div class="cara">S O L V A M</div>
					<div class="cruz"><img src="https://picsum.photos/183/350/?random=1" /></div>
				</div>
				<div id="carta2">
					<div class="cara">S O L V A M</div>
					<div class="cruz"><img src="https://picsum.photos/183/350/?random=1" /></div>
				</div>
				<div id="carta3">
					<div class="cara">S O L V A M</div>
					<div class="cruz"><img src="https://picsum.photos/183/350/?random=1" /></div>
				</div>

			</div>
			<div class="noticia_destacada">

				<h2 class="titulo_presentacion">TÍTULO DE LA PRESENTACIÓN</h2>
				<p>
					Este es un ejemplo de texto que cumple con las reglas CSS especificadas para el título de
					presentación en el div .noticia_destacada.
				</p>
				<p>
					El texto tiene la letra "Oswald" con sombra de otro color, todas las letras en mayúsculas, un tamaño
					de 24px y un interlineado adecuado.
				</p>
			</div>

		</div>
		<p class="limpiar"></p>
		<div id="contenido">
			<?php
			while($row=$result->fetch_array()){
			?>
				<div class="noticia">
				<img src="./img/detalles/<?php echo $row[1] ?>" />
				<div id="lupa" href="#"></div>
				<div id="detalles" ><a href="./detalles.php?codigo=<?php echo $row[0];?>"></a></div>
				<p><b><?php echo $row[2]; ?></b></p>
				<p><?php echo $row[3]; ?></p>
				</div>
			
			<?php } ?>
		</div>
		<p class="limpiar"></p>
		<div id="pie">
			<div class="pie1">

			</div>
			<div class="pie2">

			</div>
			<div class="pie3">

			</div>
			<div class="pie4">

			</div>
			<div class="pie5">
				<div class="copyright">

				</div>
				<div class="menu_final">

				</div>
			</div>
		</div>
	</div>


</body>

</html>