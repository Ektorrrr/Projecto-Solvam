<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Proyecto 1DAW - SOLVAM</title>

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/menu.css">

    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- JS ================================================== -->

</head>

<body>
<?php include("./menu.php"); ?>
    <div id="contenedor">
    

        <div id="principal">
            <div class="informacion">
                <h1 class="titulo">CONTACTA CON NOSOTROS...</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit nunc nibh, nisi cras tortor et platea
                    elementum rhoncus.
                    Aenean et facilisi ultricies magna mauris sem viverra quisque, congue cubilia purus condimentum
                    tristique
                    porttitor ullamcorper, nostra in mus cras maecenas dictum morbi. Augue tincidunt lacus cursus porta
                    conubia cras
                    vivamus condimentum facilisi, leo vulputate suscipit euismod dictumst odio etiam elementum, ligula
                    velporttitor lacinia rhoncus netus sed velit.
                </p>
            </div>
            <div class="formulario">
                <form action="./php/enviar-formulario.php" method="post">
                    <div class="campo">
                        <label for="de"><span class="icono-input">📧</span></label>
                        <input type="text" name="de" id="de" required placeholder="Introduce tu Nombre">
                    </div>
                    <div class="campo">
                        <label for="asunto"><span class="icono-input">✉️</span></label>
                        <input type="text" name="asunto" id="asunto" required placeholder="Introduce el Asunto">
                    </div>
                    <div class="campo">
                        <label for="mensaje"><span class="icono-input">📝</span></label>
                        <textarea name="mensaje" id="mensaje" required placeholder="Introduce el Mensaje"></textarea>
                    </div>
                    <div class="campo">
                        <label for="telefono"><span class="icono-input">📞</span></label>
                        <input type="text" name="telefono" id="telefono" placeholder="Introduce tu numero de Telefono">
                    </div>
                    <div class="campo">
                        <label for="direccion"><span class="icono-input">📍</span></label>
                        <input type="text" name="direccion" id="direccion" placeholder="Introduce tu Direccion">
                    </div>
                    <div class="botones">
                        <input type="submit" name="enviar" value="Enviar">
                        <input type="reset" value="Limpiar">
                    </div>
                </form>
            </div>
        </div>
        <div id="lateral">
            <div class="datos-contacto">
                <h1 class="titulo">DATOS DE CONTACTO</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit nunc nibh, nisi cras tortor et platea
                    elementum rhoncus.
                    Aenean et facilisi ultricies magna mauris sem viverra quisque, congue cubilia
                </p>
            </div>
            <div class="donde-estamos">
                <h1 class="titulo">DONDE ESTAMOS</h1>
            </div>
        </div>
    </div>

</body>

</html>