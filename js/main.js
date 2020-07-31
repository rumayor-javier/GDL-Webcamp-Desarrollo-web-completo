(function() {
    "use strict";

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function() {

        //API de mapa (lo encerre en if para detener errores en cosola)
        if (document.getElementById('map')) {
            var map = L.map('map').setView([20.652914, -103.391764], 16);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([20.652914, -103.391764]).addTo(map)
                .bindPopup('¡GDL WebCamp </br>Boletos ya disponibles!')
                .openPopup();
        }

        //Datos Usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //Campos Pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //Botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = $('btnRegistro');
        botonRegistro.disabled = true;
        var lista_Productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        //Extras
        var etiquetas = document.getElementById('etiquetas');
        var camisas = document.getElementById('camisa_evento');


        //mismo caso de uso de If's como en el del mapa
        if (nombre) {
            nombre.addEventListener('blur', validarCampos);
        }
        if (apellido) {
            apellido.addEventListener('blur', validarCampos);
        }
        if (email) {
            email.addEventListener('blur', validarCampos);
        }
        if (email) {
            email.addEventListener('blur', validarEmail);
        }

        if (calcular) {
            calcular.addEventListener('click', calcularMontos);
        }

        if (pase_dia) {
            pase_dia.addEventListener('blur', mostrarDias);
        }
        if (pase_dosdias) {
            pase_dosdias.addEventListener('blur', mostrarDias);
        }
        if (pase_completo) {
            pase_completo.addEventListener('blur', mostrarDias);
        }



        function validarCampos() {
            if (this.value === '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Campos obligatorios";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            } else {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }

        function validarEmail() {
            if (this.value.indexOf("@") > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Introduzca un email valido";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }
        }

        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus();
            } else {
                var boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                    boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                    cantCamisas = parseInt(camisas.value, 10) || 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                var listadoProductos = [];

                if (boletosDia >= 1) {
                    listadoProductos.push(boletosDia + ' Pases por un día');
                }
                if (boletos2Dias >= 1) {
                    listadoProductos.push(boletos2Dias + ' Pases por dos días');
                }
                if (boletoCompleto >= 1) {
                    listadoProductos.push(boletoCompleto + ' Pases completos');
                }
                if (cantCamisas >= 1) {
                    listadoProductos.push(cantCamisas + ' Camisas');
                }
                if (cantEtiquetas >= 1) {
                    listadoProductos.push(cantEtiquetas + ' Etiquetas');
                }
                lista_Productos.style.display = "block"
                lista_Productos.innerHTML = '';
                for (var i = 0; i < listadoProductos.length; i++) {
                    lista_Productos.innerHTML += listadoProductos[i] + '</br>';
                }
                suma.innerHTML = "$ " + totalPagar.toFixed(2);

                botonRegistro.disabled = false;
                document.getElementById('total_pedido').value = totalPagar;
            }
        }

        function mostrarDias() {
            var boletosDia = parseInt(pase_dia.value, 10) || 0,
                boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                boletoCompleto = parseInt(pase_completo.value, 10) || 0;

            let viernes = document.getElementById('viernes'),
                sabado = document.getElementById('sabado'),
                domingo = document.getElementById('domingo'),
                diasElegidos = [];

            if (boletosDia > 0) {
                diasElegidos.push('viernes');
            } else {
                viernes.style.display = 'none';
            }
            if (boletos2Dias > 0) {
                diasElegidos.push('viernes', 'sabado');
            } else {
                sabado.style.display = 'none';
            }
            if (boletoCompleto > 0) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
            } else {
                domingo.style.display = 'none';
            }
            for (var i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block'
            }
            //modificando el codigo de la clase para evitar error al des-seleccionar un dia se quedaba disponible
        }
    }); //DOM Content Loaded
})();

$(function() {

    //Plugin de estilos para textos https://github.com/davatron5000/Lettering.js
    $('.nombre-sitio').lettering();

    //Agregar clase a menu

    $('body.conferencias .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

    //Menu fijo (detectar scroll en ventana)

    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({ 'margin-top': barraAltura + 'px' });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });
        }
    });

    //Menu responsive (hambuerguesa)
    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });

    // programa de conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    //Plugin Animaciones de numeros Invitados conf etc etc https://github.com/aishek/jquery-animateNumber
    $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 1500);
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1500);

    //Plugin Cuenta regresiva http://hilios.github.io/jQuery.countdown/
    $('.cuenta-regresiva').countdown('2020/12/9 09:00:00', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    //Colorbox

    $('.invitado-info').colorbox({ inline: true, width: "40%" });
    $('.boton-newsletter').colorbox({ inline: true, width: "60%" });



});