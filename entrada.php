<?php include 'header.php'; ?>

<section class="contenedor" id="entrada">
    <h3 class="centrar-texto">Tipos de etiquetas en HTML</h3>

    <picture>
        <source loading="lazy" srcset="img/blog1.webp" type="image/webp">
        <img loading="lazy" src="img/blog1.jpg" alt="imagen blog">
    </picture>

    <p>¿Qué es una etiqueta HTML5?
        Antes que nada, vamos a ver qué es una etiqueta HTML5.

        Las etiquetas HTML5 funcionan como parte de un código que cumple con una función sencilla. Dicha función se basa en ayudar a los navegadores a entender el contenido que contiene cada una de las etiquetas utilizadas.

        Además, es importante resaltar que cada etiqueta posee distintos atributos que determinan cómo funciona cada una. Todas inician con el símbolo “<” y terminan con el símbolo contrario, “>”. Entre dichos símbolos debe ir el nombre correspondiente a la etiqueta para que el navegador lo pueda asimilar como es debido.

            También es importante conocer que las etiquetas HTML5 se componen por una versión de apertura y una de cierre. Sin embargo, hay etiquetas que no llevan la versión de cierre como las que se usan para cargar imágenes. Las etiquetas de cierre utilizan el símbolo “/” antes del nombre de la etiqueta.</p>
    <p>Los elementos HTML suelen dividirse en tres partes. Esta combinación de las tres crea un elemento HTML.
    <p>

        <li>
            Etiqueta de apertura: Se utiliza para indicar dónde empieza un elemento. Está envuelta en corchete de apertura y cierre. Por ejemplo puedes usar la etiqueta de inicio
            para crear un párrafo.
        </li>
        <li>
            Contenido: El contenido es el resultado que ve la audiencia.
        </li>
        <li>
            Etiqueta de cierre: Es lo mismo que la etiqueta de apertura pero con una barra inclinada delante del nombre del elemento. Es decir, /p para finalizar un párrafo.
        </li>


    <!-- Agrego un listado de <ul> por si el menú del header no cumple con los requisitos del TP -->
    <p>Las siguientes son algunas de las webs que hablan acerca de este tema.</p>
    <ul>
        <li><a href="https://desarrolladoresweb.org/html/etiquetas-html/">https://desarrolladoresweb.org/html/etiquetas-html</a></li>
        <li><a href="https://brandominus.com/blog/creatividad/todas-etiquetas-html5/">https://brandominus.com/blog/creatividad/todas-etiquetas-html5</a></li>
        <li><a href="https://onlinezebra.com/blog/etiquetas-html5-que-son-cuales-son-sus-funciones">https://onlinezebra.com/blog/etiquetas-html5-que-son-cuales-son-sus-funciones</a></li>

    </ul>

    <br>

    <a href="#entrada" class="boton boton--primario">Volver al inicio</a>
    <a href="/index.php" class="boton boton--primario">Volver al index</a>
</section>


</body>

<?php include 'footer.php'; ?>

</html>