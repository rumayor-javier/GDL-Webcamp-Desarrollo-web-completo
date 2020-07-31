
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

        <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div style="display: none;">
<div id="mc_embed_signup">
<form action="https://gmail.us17.list-manage.com/subscribe/post?u=363b3e0390dc2a8bbd13fb1a2&amp;id=9fd01d595e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2 class="separador">Registrate tu email y no te pierdas ningun detalle</h2>
<div class="indicates-required"><span class="asterisk">*</span> Email obligatorio</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_363b3e0390dc2a8bbd13fb1a2_9fd01d595e" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Registrar" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
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