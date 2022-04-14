
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
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