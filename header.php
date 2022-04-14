<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogDeDesarrollo | TP Lab III</title>
    <meta name="description" content="Página web de blog de desarrollo web">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/icono.webp">

    <!-- Preload -->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">

     <!-- Fuente para el proyecto -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"  crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Cargo hoja de estilos principal y para el slider del apartado /album.php -->
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">

</head>

<body>
    <header id="header">

        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.php">
                    <h1 class="logo__nombre no-margin centrar-texto">Blog<span class="logo__bold">deProgramación</span></h1>
                </a>

                <!-- Menú de navegación superior con etiquetas <a> y clases / se repite en el footer -->
                <nav class="navegacion">
                    <a href="nosotros.php#about" class="navegacion__enlace">Nosotros</a>
                    <a href="cursos.php#lista-cursos" class="navegacion__enlace">Cursos</a>
                    <a href="album.php#fotos" class="navegacion__enlace">Albúm</a>
                    <a href="contacto.php#formulario-contacto" class="navegacion__enlace">Contacto</a>
                </nav>
            </div>
        </div>

        <!-- Descripción principal de la página -->
        <div class="header__texto">
            <h2 class="no-margin">Blog de programación con consejos y cursos</h2>
            <p class="no-margin">Aprende de los expertos con los mejores tips y consejos</p>
        </div>
    </header>

<!-- El body queda abierto, continúa en el index.php -->