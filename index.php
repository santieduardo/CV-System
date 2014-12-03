<?php include "header.php"; ?>
    <!--  Outer wrapper for presentation only, this can be anything you like -->
    <div id="banner-slide">
        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
            <li><img src="assets/img/slider/01.jpg" title="Mantenha sempre seu CV atualizado"></li>
            <li><img src="assets/img/slider/02.jpg" title="Garanta sua vaga no mercado de trabalho"></li>
            <li><img src="assets/img/slider/03.jpg" title="Obtenha aqui no CV-System seu currículo sem dor de cabeça"></li>
            <li><img src="assets/img/slider/04.jpg" title="Um currículo bem feito aumenta as chances de entrevistas"></li>
            <li><img src="assets/img/slider/05.jpg" title="Você sabia que no Brasil existem mais de 100.000 vagas na área de TI?"></li>
        </ul>
        <!-- end Basic jQuery Slider -->
    </div>
      <!-- End outer wrapper -->
      
      <!-- attach the plug-in to the slider parent element and adjust the settings as required -->
    <script class="secret-source">
        jQuery(document).ready(function($) { 
            $('#banner-slide').bjqs({
                animtype      : 'slide',
                height        : 320,
                width         : 620,
                responsive    : true,
                randomstart   : true
            });
          
        });
    </script>
<?php include "footer.php"; ?>

