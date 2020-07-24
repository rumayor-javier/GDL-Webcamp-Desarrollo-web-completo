<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2 class="separador">La mejor conferencia de diseño web en español</h2>
        <p>Aliquam eget tristique ex. Aliquam tempor lobortis commodo. Sed porta placerat dictum. Pellentesque euismod enim vel ligula scelerisque feugiat. Pellentesque id ex quis nunc rutrum hendrerit nec ac enim. </p>
    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video class='centrar' muted autoplay loop poster="img/bg-talleres.jpg">
            <source src="video/video.mp4" type="video/mp4"> 
            <source src="video/video.ogv" type="video/ogb"> 
            <source src="video/video.webm" type="video/webm"> 
            </video>
        </div>

        <div class="contenido-rograma">
            <div class="contenedor">

                <div class="programa-evento">
                    <h2 class="separador">Programa del Evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="fas fa-comments"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y Javascript</h3>
                            <p><i class="fas fa-clock"></i>16:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i>Shari Herrera</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="fas fa-clock"></i>20:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i>Rafael Bautista</p>
                        </div>
                        <a href="#" class="boton ver-todos">Ver Todos</a>
                    </div>

                    <div id="conferencias" class="info-curso ocultar">
                        <div class="detalle-evento">
                            <h3>Como ser freelancer</h3>
                            <p><i class="fas fa-clock"></i>10:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i>Gregorio Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologías del futuro</h3>
                            <p><i class="fas fa-clock"></i>17:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i>Susan Sanchez</p>
                        </div>
                        <a href="#" class="boton ver-todos">Ver Todos</a>
                    </div>

                    <div id="seminarios" class="info-curso ocultar">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para móviles</h3>
                            <p><i class="fas fa-clock"></i>16:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>11 de Dic</p>
                            <p><i class="fas fa-user"></i>Harold García</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fas fa-clock"></i>10:00 hrs</p>
                            <p><i class="fas fa-calendar"></i>11 de Dic</p>
                            <p><i class="fas fa-user"></i>Susana Rivera</p>
                        </div>
                        <a href="#" class="boton ver-todos">Ver Todos</a>
                    </div>
                    <!--Talleres-->
                </div>
                <!--Programa evento-->
            </div>
            <!--Contenedor-->
        </div>
        <!--Contenido Programa-->
    </section>
    <!--Programa-->

    <?php include_once 'includes/templates/invitados.php'; ?>

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento">
                <li>
                    <p class="numero"></p>Inivtados
                </li>
                <li>
                    <p class="numero"></p> Talleres
                </li>
                <li>
                    <p class="numero"></p>Dias
                </li>
                <li>
                    <p class="numero"></p>Conferencias
                </li>
            </ul>
        </div>
    </div>

    <section class="precios seccion">

        <h2 class="separador">Precios</h2>

        <div class="contenedor">

            <ul class="lista-precios">

                <li>
                    <div class="tabla-precio">
                        <h3>Pase por<br/>1 día</h3>
                        <p class="numero">$30</p>
                        <ul>

                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>

                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>

                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton hollow">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3 class="deal">Todos los días</h3>
                        <p class="numero">$50</p>
                        <ul>

                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>

                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>

                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Pase por<br/>2 días</h3>
                        <p class="numero">$45</p>
                        <ul>

                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>

                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>

                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div id="map" class="map">

    </div>

    <section class="seccion">
        <h2 class="separador">Testimoniales</h2>
        <div class="contenedor testimoniales">
            <div class="testimonial">
                <blockquote>
                    <p>Phasellus gravida enim non arcu luctus luctus. Quisque a condimentum ipsum. Phasellus vel ligula non sem fringilla ornare. Sed ut justo sed odio consectetur aliquet non quis leo. Sed ipsum ex, posuere nec dolor a, scelerisque posuere
                        magna. Proin vitae pulvinar ante, vel cursus quam.
                    </p>
                    <footer class="info-testimonial">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Phasellus gravida enim non arcu luctus luctus. Quisque a condimentum ipsum. Phasellus vel ligula non sem fringilla ornare. Sed ut justo sed odio consectetur aliquet non quis leo. Sed ipsum ex, posuere nec dolor a, scelerisque posuere
                        magna. Proin vitae pulvinar ante, vel cursus quam.
                    </p>
                    <footer class="info-testimonial">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Phasellus gravida enim non arcu luctus luctus. Quisque a condimentum ipsum. Phasellus vel ligula non sem fringilla ornare. Sed ut justo sed odio consectetur aliquet non quis leo. Sed ipsum ex, posuere nec dolor a, scelerisque posuere
                        magna. Proin vitae pulvinar ante, vel cursus quam.
                    </p>
                    <footer class="info-testimonial">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido-news contenedor">
            <p>Registrate y recibe todas las noticias del evento al instante</p>
            <h3>gdlwebcamp</h3>
            <a href="#" class="boton transparente">Registro</a>
        </div>
    </div>
    <!--Contenido Newsletter Fin-->

    <section class="seccion contenedor">
        <h2 class="separador">Faltan</h2>
        <div>
            <ul class="cuenta-regresiva">
                <li>
                    <p id="dias" class="numero"></p>
                    <p class="Cta-texto">días</p>
                </li>
                <li>
                    <p id="horas" class="numero"></p>
                    <p class="Cta-texto">horas</p>
                </li>
                <li>
                    <p id="minutos" class="numero"></p>
                    <p class="Cta-texto">minutos</p>
                </li>
                <li>
                    <p id="segundos" class="numero"></p>
                    <p class="Cta-texto">segundos</p>
                </li>
            </ul>

        </div>
    </section>
    <!--Cuenta regresiva Fin-->

<?php include_once 'includes/templates/footer.php'; ?>
