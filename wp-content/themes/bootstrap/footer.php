<?php	wp_footer(); ?>

<footer class="rodape conteiner-fluid">
    <article class="row">
        <div class="col-md-2 offset-md-1 col-12 d-flex justify-content-center">
            <a href="<?php echo get_site_url(); ?>">
                 <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/logo-jogamais-rodape.svg" alt="Logo Joga Mais">
            </a>
        </div>
        <div class="col-md-4 offset-1">
            <ul class="redes-sociais d-flex justify-content-center">
                <!--<li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/facebook.svg" alt="">
                </li>-->
                <li>
                    <a href="https://www.instagram.com/jogamais_app/" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/instagram.svg" alt="Instagram Joga Mais">
                    </a>
                </li>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=5511992592369" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/whatsapp.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 offset-md-1 col-12 d-flex justify-content-center">
            <ul>
                <li>
                    <a href="<?php echo get_site_url(); ?>/termos/">Termos e Condições de Uso</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/politica/">Política de Cookies</a>
                </li>
                <li>
                    <a href="mailto:resenha@jogamais.app">Fale Conosco</a>
                </li>
            </ul>
        </div>
    </article>
</footer>





<?php if($_SESSION["jogamais_lgpd"] != "true") { ?>
      <?php include 'cookie-banner.php';?>
  <?php } ?>





<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.min.js"></script>




<script>
    $(document).ready(function(){
        $(".btn-feature, .fechar").click(function(){
            $(this).children(".feature").fadeToggle(300);
        });
    });

    $(document).ready(function(){
        $('.owl-1, .owl-2').owlCarousel({
            loop:false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:true
                },
                800:{
                    items:3,
                    nav:false,
                    loop:false
                }
            }
        })
    });
    $(document).ready(function(){
        $('.owl-3').owlCarousel({
            loop:false,
            responsiveClass:true,
            autoplay:true,
            autoplayTimeout:5000,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:true
                },
                800:{
                    items:1,
                    nav:true
                }
            }
        })
    });
    $('.links a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
                targetOffset = $(id).offset().top;
                
        $('html, body').animate({ 
            scrollTop: targetOffset - 0
        }, 500);
    });

    function openNav() {
        if($(window).width() < 768)
        {
            document.getElementById("mySidenav").style.width = "90%";
        } else {
            document.getElementById("mySidenav").style.width = "600px";
        }
        
    }
    function closeNav() {
     document.getElementById("mySidenav").style.width = "0";
    }
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4XSL26"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




<?php if($_SESSION["jogamais_lgpd"] == "true") { ?>
          <script type="text/javascript" src='<?php bloginfo('template_url'); ?>/assets/js/no-lgpd.js'></script>
        <?php } else { ?>
            <script type="text/javascript" src='<?php bloginfo('template_url'); ?>/assets/js/lgpd.js'></script>

            <?php if($_SESSION["jogamais_ga"] == "true") { ?>
              <script type="text/javascript" nonce="atga">ativaGA();</script>
            <?php } ?>
            <?php if($_SESSION["jogamais_fb"] == "true") { ?>
              <script type="text/javascript" nonce="atfb">ativaFB();</script>
        <?php } ?>
    <?php } ?>








</body>
</html>