
    <footer class="site-footer">
        <div class="contenedor contenido-footer">
            <div class="footer-informacion">
                <h3>Sobre <span>GDLwebcamp</span></h3>
                <p>Phasellus gravida enim non arcu luctus luctus. Quisque a condimentum ipsum. Phasellus vel ligula non sem fringilla ornare. Sed ut justo sed odio consectetur aliquet non quis leo. Sed ipsum ex, posuere nec dolor a, scelerisque posuere magna.
                    Proin vitae pulvinar ante, vel cursus quam.
                </p>
            </div>
            <div class="ultimos-tweets">
                <h3>últimos <span>tweets</span></h3>
                <ul>
                    <li>Sed ut justo sed odio consectetur aliquet non quis leo. Sed ipsum ex, posuere nec dolor a, scelerisque posuere magna.</li>
                    <li>Sed ut justo sed odio consectetur aliquet non quis leo. Sed ipsum ex, posuere nec dolor a, scelerisque posuere magna.</li>
                    <li>Sed ut justo sed odio consectetur aliquet non quis leo. Sed ipsum ex, posuere nec dolor a, scelerisque posuere magna.</li>
                </ul>
            </div>
            <div class="menu">
                <h3>redes <span>sociales</span></h3>
                <nav class="redes-sociales">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-pinterest-p"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        </div>

        <p class="copyright">Todos los derechos reservados. &copy; GDLWEBCAMP 2020</p>
    </footer>


    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.lettering.js"></script>

    <?php 
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php", "", $archivo);
        if($pagina == 'invitados' || $pagina == 'index'){
            echo '<script src="js/jquery.colorbox-min.js"></script>';
        } elseif($pagina == 'conferencias'){
            echo '<script src="js/lightbox.js"></script>';
        }
    ?>

    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.3.1/build/ol.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>