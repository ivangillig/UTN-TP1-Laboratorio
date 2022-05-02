
<!-- Incluyo el header desde un archivo externo para no tener que repetirlo en todos los demás -->
<?php include 'header.php'; ?>

    <div class="contenedor contenido-principal">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada">
                <div class="entrada__imagen">
                        <img loading="lazy" src="img/blog1.webp" alt="imagen blog"> 
                </div>

                <div class="entrada__contenido">
                    <h4 class="no-margin">Tipos de etiquetas en HTML</h4>
                    <p>Si te interesa la creación de páginas web o meramente el ámbito de la informática, seguro que has escuchado hablar sobre el código y las etiquetas html. Como ya sabrás, se trata del lenguaje más importante para elaborar sitios web. ¿Quieres saber más? Continúa leyendo y recuerda que puedes especializarte en el sector con nuestro curso de modelado <a href="cursos.php"> Estilos con CSS / SASS.</a></p>
                    <a href="entrada.php#entrada" class="boton boton--primario">Leer Entrada</a>
                    <a href="#header" class="boton boton--primario">Volver al inicio</a>
                </div>
            </article>
            
            <article class="entrada">
                <div class="entrada__imagen">
                        <img loading="lazy" src="img/blog2.webp" alt="imagen blog"> 
                </div>
                
                <div class="entrada__contenido">
                    <h4 class="no-margin">Python como herramienta para Data Science</h4>
                    <p>La ciencia de datos o Data Science es un campo científico que se sirve de múltiples métodos para extraer conocimiento de los datos. Para conseguirlo existen herramientas concretas. Te comentamos cuáles son las más comunes...</p>
                    <a href="entrada.php#entrada" class="boton boton--primario">Leer Entrada</a>
                    <a href="#header" class="boton boton--primario">Volver al inicio</a>
                </div>
            </article>
            
            <article class="entrada">
                <div class="entrada__imagen">
                        <img loading="lazy" src="img/blog3.webp" alt="imagen blog"> 
                </div>
                
                <div class="entrada__contenido">
                    <h4 class="no-margin">Como evitar el Burnout estudiando Programación</h4>
                    <p>Dicen que el de programador es uno de los trabajos más demandados y con un sueldo medio más digno (no diremos alto), pero a cambio, es probablemente uno de los empleos no solo que más formación y concentración requiere, sino que más reciclaje y aprendizaje continuo necesita cuando ya se es un profesional en activo...</p>
                    <a href="entrada.php#entrada" class="boton boton--primario">Leer Entrada</a>
                    <a href="#header" class="boton boton--primario">Volver al inicio</a>
                </div>
            </article>
        </section>

        <section class="sidebar">
            <h3>Nuestros Cursos y Talleres</h3>

            <ul class="cursos no-padding">
                <li class="widget-curso">
                    <h4 class="no-margin">Javascript de Jr a Sr en media hora</h4>
                    <p class="widget-curso__label">Precio: 
                        <span class="widget-curso__info">Gratis</span>
                    </p>
                    <p class="widget-curso__label">Cupo: 
                        <span class="widget-curso__info">20</span>
                    </p>

                    <!-- Botón para descarga de archivo -->
                    <a href="files/programacion.pdf" download="ProgramaDelCurso2022.pdf" class="boton boton--secundario">Descargar información sobre el curso</a>
                </li>

                <li class="widget-curso">
                    <h4 class="no-margin">Estilos con CSS / SASS</h4>
                    <p class="widget-curso__label">Precio: 
                        <span class="widget-curso__info">$1000</span>
                    </p>
                    <p class="widget-curso__label">Cupo: 
                        <span class="widget-curso__info">20</span>
                    </p>

                    <!-- Botón para descarga de archivo -->
                    <a href="files/programacion.pdf" download="ProgramaDelCurso2022.pdf" class="boton boton--secundario">Descargar información sobre el curso</a>
                </li>
                
                <!-- Por lo general no hubiera metido un section dentro de otro section, pero me faltaba uno -->
                <!-- Asique metí una publicidad en el sidebar, probablemente hubiese usado <div> -->
                <li>
                    <section class="widget-curso">
                        <h4 style="margin-bottom: 5px; text-align:center;">Aprendé en la UTN</h4>
                        <div class="entrada__imagen">
                            <a href="/cursos.php#lista-cursos">
                                <img loading="lazy" src="img/publicidad 1.gif" alt="publicidad cursos"> 
                            </a>
                        </div>
                    </section>
                </li>
            </ul>
            
        </section>

    </div>
</body>

    <!--Lo mismo que con el header, lo cargo desde un archivo externo para no tener que repetirlo en todos los demás -->
    <?php include 'footer.php';?>
    
</html>