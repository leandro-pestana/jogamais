
<nav id="mySidenav" class="sidenav">
    <div class="btn-fechar-menu">
        <a href="javascript:void(0)" onclick="closeNav()">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/fechar.svg" alt="Fechar">
            Fechar
        </a>
    </div>
    <ul class="links">
        <li> <a href="<?php echo get_site_url(); ?>"> Home</a></li>
        <li> <a href="#como-funciona" onclick="closeNav()"> Veja como funciona</a></li>
        <li> <a href="#futebol-feminino" onclick="closeNav()"> Futebol feminino</a></li>
        <li> <a href="#funcionalidades" onclick="closeNav()"> Conheça as funcionalidades</a></li>
        <li> <a href="<?php echo get_site_url(); ?>/manifesto/"> Manifesto joga+</a></li>
        <li><a href="<?php echo get_site_url(); ?>/perguntas-frequentes/">Perguntas Frequentes </a></li>
        <li><a href="mailto:resenha@jogamais.app" onclick="closeNav()">Fale conosco </a></li>
       
        <li class="d-flex mt-5 menu-loja-btns">
            <a href="https://play.google.com/store/apps/details?id=app.jogamais2" target="_blank">
                <img class="flex-fill" src="<?php bloginfo('template_url'); ?>/assets/images/btn-google-play.svg" alt="Disponível no Google Play">&nbsp;&nbsp;&nbsp;&nbsp;
            </a>
            <a href="https://apps.apple.com/br/app/joga/id1564494632" target="_blank">
                <img class="flex-fill" src="<?php bloginfo('template_url'); ?>/assets/images/btn-apple-store.svg" alt="Disponível da Apple Store">
            </a>
        </li>
        
    </ul>
</nav>

<span class="icon-menu" onclick="openNav()"> <img src="<?php bloginfo('template_url'); ?>/assets/images/hamburguer.svg" alt="Menu"> </span>

