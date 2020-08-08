<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2 class="separador">La mejor conferencia de diseño web en español</h2>
        <p>Aliquam eget tristique ex. Aliquam tempor lobortis commodo. Sed porta placerat dictum. Pellentesque euismod enim vel ligula scelerisque feugiat. Pellentesque id ex quis nunc rutrum hendrerit nec ac enim. </p>
    </section>

    <section class="programa">
            <video class="video-programa" muted autoplay loop poster="img/bg-talleres.jpg">
            <source src="video/video.mp4" type="video/mp4"> 
            <source src="video/video.ogv" type="video/ogb"> 
            <source src="video/video.webm" type="video/webm"> 
            </video>

        <div class="contenido-rograma">
            <div class="contenedor">

                <div class="programa-evento">
                    <h2 class="separador">Programa del Evento</h2>
                        <?php
                            try {
                                require_once('includes/funciones/bd_conexion.php');
                                $sql = " SELECT * FROM `categoria_evento` ";
                                $resultado = $conn->query($sql);
                            } catch (\Exception $e) {
                                echo $e->getMessage();
                            }
                        ?>
                    <nav class="menu-programa">
                        <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <?php $categoria = $cat['cat_evento']; ?>
                            <a href="#<?php echo strtolower($categoria) ?> ">
                            <i class="fa <?php echo $cat['icono'] ?>"></i><?php echo $categoria ?></a>
                        <?php } ?>
                    </nav>

                    <?php
                        try {
                            require_once('includes/funciones/bd_conexion.php');
                            $sql = " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";
                            $sql .= " FROM `eventos` ";
                            $sql .= " INNER JOIN `categoria_evento` ";
                            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                            $sql .= " INNER JOIN `invitados` ";
                            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                            $sql .= " AND eventos.id_cat_evento = 1 ";
                            $sql .= " ORDER BY `evento_id` LIMIT 2; ";
                            $sql .= " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";
                            $sql .= " FROM `eventos` ";
                            $sql .= " INNER JOIN `categoria_evento` ";
                            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                            $sql .= " INNER JOIN `invitados` ";
                            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                            $sql .= " AND eventos.id_cat_evento = 2 ";
                            $sql .= " ORDER BY `evento_id` LIMIT 2; ";
                            $sql .= " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";
                            $sql .= " FROM `eventos` ";
                            $sql .= " INNER JOIN `categoria_evento` ";
                            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                            $sql .= " INNER JOIN `invitados` ";
                            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                            $sql .= " AND eventos.id_cat_evento = 3 ";
                            $sql .= " ORDER BY `evento_id` LIMIT 2; ";
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }
                    ?>
                    <?php $conn->multi_query($sql) ?>    

                    <?php 
                        do {
                            $resultado = $conn->store_result();
                            $row = $resultado->fetch_all(MYSQLI_ASSOC);
                    ?>

                            <?php $i = 0; ?>
                            <?php foreach($row as $evento): ?>
                                <?php if($i % 2 == 0) { ?>
                                    <div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso ocultar">
                                <?php } ?>

                            <div class="detalle-evento">
                                <h3><?php echo $evento['nombre_evento'] ?></h3>
                                <p><i class="fas fa-clock"></i> <?php echo $evento['hora_evento']; ?></p>
                                <p><i class="far fa-calendar-alt"> </i><?php echo $evento['fecha_evento']; ?></p>
                                <p><i class="fas fa-user"> </i><?php echo $evento['nombre_invitado'] . " " . $evento ['apellido_invitado']; ?></p>
                            </div>

                            <?php if($i % 2 == 1): ?>
                                <a href="calendario.php" class="boton ver-todos">Ver Todos</a>
                        </div>
                            <?php endif; ?>
                        <?php $i++; ?>
                        <?php endforeach; ?>                       
                        <?php $resultado->free(); ?>

                    <?php 
                        } while ($conn->more_results() && $conn->next_result());
                    ?>

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
            <a href="#mc_embed_signup" class="boton-newsletter boton transparente">Registro</a>
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
