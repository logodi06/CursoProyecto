
    <footer class="footer seccion">
        <div class="contenedor clearfix">
            <div class="secciones">
                <h3><span>Sobre</span> gdlwebcam</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam, voluptate ratione. Nihil, repudiandae voluptates! Illo sequi sint, similique quam quod et, delectus animi a voluptas, officia nesciunt quos quidem. Cum!</p>
            </div>
            <div class="secciones ">
                <h3><span>Últimos</span> tweets</h3>
                <p class="ultimos">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam, voluptate ratione. Nihil.</p>
                <p class="ultimos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis id consequatur pariatur error.</p>
                <p class="ultimos">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime magni repudiandae, dicta eius eos fuga. </p>

            </div>
            <div class="secciones">
                <h3><span>Redes</span> sociales</h3>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

        </div>
        <p class="derechos">Todos los derechos Reservados GDLWEBCAMP 2020.</p>
    </footer>
    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php","",$archivo);
    
    
    ?>
    
  
    <script src="js/jquery.colorbox-min.js"></script>

    <script src="js/main.js"></script>


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