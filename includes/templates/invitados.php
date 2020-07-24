<section class="seccion contenedor">
<!--Utilizamos función try|catch para llamar a nuestra BD=========================================================-->
        
        <?php
            try {
                require_once('includes/funciones/bd_conexion.php');

/*=================================================================================================================*/

                $sql = " SELECT * FROM `invitados` ";
                $resultado = $conn->query($sql);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        ?>
<!--Fin de la funcion de llamado a BD==============================================================================-->

<!--Creamos contenedor donde vamos a imprimir los datos de la consulta a la BD=====================================-->

<section class="contenedor seccion">
    <h2 class="separador">Nuestros Invitados</h2>
        <div class="lista-invitados">
            
            <?php

                while ( $invitados = $resultado->fetch_assoc()) { ?>                    


                            <div class="invitado">
                                <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id']; ?>">
                                    <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="Imagen Invitado">
                                    <p class="nombre"><?php echo $invitados['nombre_invitado'] . " " . $invitados ['apellido_invitado'] ?></p>
                                </a>
                            </div>

                            <div style="display: none;">
                                <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id']; ?>">
                                    <h2 class="separador"><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?></h2>
                                    <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="Imagen Invitado">
                                    <p><?php echo $invitados['descripcion']; ?></p>
                                </div>
                            </div>

            <?php    } //while de fetch_assoc()   ?>
<!--Imprimimos datos de array usando un for each======================================================================-->
</div>
</section>
</section>
<!--Siempre que se realize una consulta a la BD debemos cerrar la conexion para evitar consumo indeseado de datos=====-->
        <?php
            $conn->close();
        ?>
<!--Listo conexion cerrada! =D =======================================================================================-->

