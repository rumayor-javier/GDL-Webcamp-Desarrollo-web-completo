<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2 class="separador">Calendario de Eventos</h2>

<!--Utilizamos función try|catch para llamar a nuestra BD=========================================================-->
        
        <?php
            try {
                require_once('includes/funciones/bd_conexion.php');

/*=================================================================================================================*/

                $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";

/*Aplicamos los JOIN para relazinar las tablas de la BD===========================================================*/

                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";

                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_inv = invitados.invitado_id ";

/*Aplicamos los JOIN para relazinar las tablas de la BD Fin=======================================================*/

/*Aqui Ordenamos el array de eventos por su id====================================================================*/

                $sql .= " ORDER BY evento_id ";

/*================================================================================================================*/

                $resultado = $conn->query($sql);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        ?>
<!--Fin de la funcion de llamado a BD==============================================================================-->

<!--Creamos contenedor donde vamos a imprimir los datos de la consulta a la BD=====================================-->

        <div class="calendario">
            <?php

/*Creamos un arreglo grande que nos permita formatear mejor los datos==============================================*/
                $calendario = array();
/*Fuera del while para que el arreglo epiece vacio y nosotros controlamos la información que va a pasar============*/
                while ( $eventos = $resultado->fetch_assoc()) { 
/*Obtiene fecha de evento y agrupa por fecha=======================================================================*/
                    $fecha = $eventos['fecha_evento'];
/*Obtiene fecha de evento y agrupa por fecha fin===================================================================*/
                    $evento = array(
                        'titulo' => $eventos['nombre_evento'],
                        'fecha' => $eventos['fecha_evento'],
                        'hora' => $eventos['hora_evento'],
                        'categoria' => $eventos['cat_evento'],
                        'icono' => 'fa' . " " . $eventos['icono'],
                        'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                    );
                
                $calendario[$fecha][] = $evento;

            ?>                    
            <?php    } //while de fetch_assoc()   ?>
<!--Imprimimos datos de array usando un for each======================================================================-->
            <?php 
                foreach($calendario as $dia => $lista_eventos) { ?>
                    <h3>
                        <i class="fa fa-calendar"></i>
                        <?php
                        // Unix
                        setlocale(LC_TIME, 'es_ES.UTF-8');
                        // Windows
                        setlocale(LC_TIME, 'spanish');
                         echo strftime( "%d de %B del %Y", strtotime($dia)); ?>
                    </h3>

                    <div class="contenedor-calendario">
            <?php
                foreach($lista_eventos as $evento) { ?>
                        <div class="dia">
                            <p class="titulo"><?php echo $evento['titulo']; ?> </p>
                            <p class="hora">
                                <i class="fa fa-clock" aria-hidden="true"></i> 
                                <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                            </p>
                            <p><i class="<?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                            <?php echo $evento['categoria']; ?></p>
                            <p><i class="fa fa-user" aria-hidden="true"></i>
                            <?php echo $evento['invitado']; ?>
                            </p>
                        </div>

            
            <?php } //fin for each eventos ?>
            <?php } //fin for each de dias ?>
            </div>
        </div>

<!--Siempre que se realize una consulta a la BD debemos cerrar la conexion para evitar consumo indeseado de datos=====-->
        <?php
            $conn->close();
        ?>
<!--Listo conexion cerrada! =D =======================================================================================-->

    </section>

<?php include_once 'includes/templates/footer.php'; ?>