<?php

    /*
    Template Name: Home
    */

    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once($path);

?>

<?php get_header(); ?>

<?php include 'menu-home.php';?>


<header class="banner container-fluid">
    <article class="row ">
        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-10 offset-1  pt-4 links">
            <img class="img-fluid mt-5" src="<?php bloginfo('template_url'); ?>/assets/images/logo-joga-mais.png" alt="Joga+ Se tá no App, tem jogo!">
            <h1>Encontre agora, de maneira fácil e rápida, seu próximo jogo. </h1>
            <p> Você tem ou joga em um time amador de Futsal, Campo ou Fut7? Chega mais, veja como funciona e baixe.</p>

            <div class="btns-banner">
                <a href="https://play.google.com/store/apps/details?id=app.jogamais2" target="_blank">
                    <img class="flex-fill img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/btn-google-play.svg" alt="Disponível no Google Play">&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                <a href="https://apps.apple.com/br/app/joga/id1564494632" target="_blank">
                    <img class="flex-fill img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/btn-apple-store.svg" alt="Disponível da Apple Store">
                </a>
            </div>



            <!--
            <div class="button-jm mt-5 col-md-6 offset-md-3">
                <a href="https://jogamais.typeform.com/to/dnFkB7" target="_blank">
                    Cadastre seu time e fique ligado no lançamento
                </a>
            
            </div>
            -->

            <a href="#como-funciona"><img class="mt-5" src="<?php bloginfo('template_url'); ?>/assets/images/SETA.svg" alt="seta"></a>
        </div>     
    </article>
</header>

<section id="como-funciona" class="tutorial container-fluid pb-5">
    <article class="row">
        <div class="col-8 offset-2 text-center mb-5">
            <h2>Bora Começar?</h2>
            <p>Após fazer o download do app e cadastrar seu time, olha como é moleza marcar seus jogos.</p>
        </div>
            <div class="tutorial-etapas col-md-10 offset-md-1 col-12">
                <div class="owl-carousel owl-1">
                    
                    <div>
                        <div class="etapa mx-auto"> 
                            <p> Selecione <b>o dia</b> que você quer jogar</p>
                        </div>
                        <img class="linha1" src="<?php bloginfo('template_url'); ?>/assets/images/linha.gif" alt="">
                        <div class="animation-prints">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/01.png" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/01-2.png" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/02.png" alt="">
                            <span>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/molde.png" alt="">
                            </span>
                        </div>
                    </div>

                    <div>
                        <div class="etapa mx-auto"> 
                            <p> Escolha o <b>adversário</b></p>
                        </div>
                        <img class="linha1" src="<?php bloginfo('template_url'); ?>/assets/images/linha2.gif" alt="">
                        <div class="animation-prints">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/02.png" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/02-3.png" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/03.png" alt="">
                            <span>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/molde.png" alt="">
                            </span>
                        </div>
                    </div>

                    <div>
                        <div class="etapa mx-auto"> 
                            <p> E faça o <br> <b>convite</b></p>
                        </div>
                        <img class="linha1" src="<?php bloginfo('template_url'); ?>/assets/images/linha3.png" alt="">
                        <div class="animation-prints">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/03.png" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/04.png" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/05.png" alt="">
                            <span>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/telas/molde.png" alt="">
                            </span>
                        </div>
                        <img style="opacity:0" class="img-responsive" src="https://www.jogamais.app/wp-content/themes/bootstrap/assets/images/telas/03.gif" alt="">
                    </div>

                </div>
            </div>

    </article>
</section>

<section id="recebendo-um-convite" class="tutorial-02 container-fluid pt-3">
    <article class="row">
        <div class="col-10 offset-1 text-center mb-5">
            <h2>tranquilo, né?</h2>
            <p>Assim que seu adversário aceitar o convite o jogo será confirmado.</p>
        </div>
        <div class="tutorial-etapas-02 col-10 offset-1">
            <div class="row">
                <h3 class="col-md-10 offset-md-1 col-sm-12 offset-sm-0">Você também poderá ser desafiado por outro time.</h3>
                <p class="col-md-10 offset-md-1 col-sm-12 offset-sm-0">Pelo calendário você gerencia, organiza e revisa as informações dos adversários. Deu Jogo? Partiu fut.</b></p>        
            </div>
        </div>
            <div class="tutorial-etapas-02-cards col-md-8 offset-md-2 col-10 offset-1 mt-5">
                <div class="owl-carousel owl-2">
                    <div>
                       <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/telas/-04.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/telas/-05.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/telas/06.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/telas/07.png" alt="">
                    </div>
                </div>
            </div>
    </article>
</section>
    
<section id="futebol-feminino" class="feminino conteiner-fluid">
    <article class="row">
        <div class="col-md-4 offset-md-7 col-10 offset-1 ">
            <h3>O Joga+ apoia e fomenta o FUTEBOL FEMININO. </h3>
            <p>Por isso, aqui as minas também não pagam nada. </p>
            <div class="btns-banner">
                <a href="https://play.google.com/store/apps/details?id=app.jogamais2" target="_blank">
                    <img class="flex-fill" src="<?php bloginfo('template_url'); ?>/assets/images/btn-google-play.svg" alt="Disponível no Google Play">&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                <a href="https://apps.apple.com/br/app/joga/id1564494632" target="_blank">
                    <img class="flex-fill" src="<?php bloginfo('template_url'); ?>/assets/images/btn-apple-store.svg" alt="Disponível da Apple Store">
                </a>
            </div>
            <!--
                <div class="button-jm "> <a href="https://jogamais.typeform.com/to/wFgVK7" target="_blank">Cadastre seu time</a></div>
            -->
        </div>
    </article>
</section>

<section id="funcionalidades" class="sobre conteiner-fluid">
    <article class="row">
        <div class=" intro-center-text col-md-4 offset-1 col-10 mt-3 mb-5">
            <img class="logo-sobre" src="<?php bloginfo('template_url'); ?>/assets/images/logo-joga-mais.png" alt="Logo Joga Mais">
            <p class="mt-5 ">
            O app que derruba obstáculos que separam apaixonados pela bola da sua paixão. Que veio para valorizar mais que um esporte… um caminho. Um estilo de vida.</p>
            <p>
            Entramos em campo junto com a história de cada clube e cada jogador. Jogamos pela união, pela cidadania, pelo entretenimento e pela integração social. 
            </p>
            <div class="button-jm mt-5"> <a href="manifesto/"> Leia nosso manifesto</a></div>
        </div>
        <div class="col-md-4 offset-md-2 col-10 offset-1  mb-5">
            <ul>
                <li class="btn-feature">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-mais.svg" alt="saiba mais"> Calendário de jogos

                    <!-- BOX FEATURES -->
                    <div class="box-features feature">
                        <span>x</span>
                        <div class="row">
                            <div class="col-md-5 col-10 offset-1">
                                <h3>Calendário de jogos</h3>
                                <p>Por meio do Calendário de Jogos você gerencia suas partidas, além de visualizar rapidamente se o próximo confronto já está confirmado.</p>
                                <div class="button-jm fechar d-none d-md-block d-sm-none">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-x.png" alt="Fechar">
                                    Fechar
                                </div>
                            </div>
                            <div class="col-md-5 col-10 offset-1">
                                <img class="tela-feature img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/features/calendario-de-jogos.png" alt="Calendário de Jogos">
                            </div> 
                        </div>  
                    </div>
                     <!-- FIM BOX FEATURES -->
                </li>



                <li class="btn-feature">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-mais.svg" alt="saiba mais"> Agendamento de jogos
                    <!-- BOX FEATURES -->
                    <div class="box-features feature">
                        <span>x</span>
                        <div class="row">
                            <div class="col-md-5 col-10 offset-1">
                                <h3>Agendamento de jogos</h3>
                                <p>Para agendar uma partida, basta clicar na data que quer jogar, selecionar o time adversário e enviar uma solicitação. Assim que o outro time confirmar, o jogo estará agendado. O time visitante pode fazer uma busca filtrando por região e período em que quer jogar.
Você poderá enviar até 5 solicitações para adversários diferentes na mesma data. Quando um time aceitar a solicitação de jogo, todas as outras solicitações pendentes serão canceladas automaticamente. </p>
                                <div class="button-jm fechar d-none d-md-block d-sm-none">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-x.png" alt="">
                                    Fechar
                                </div>
                            </div>
                            <div class="col-md-5 col-10 offset-1">
                                <img class="tela-feature img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/features/agendamento-de-jogos.png" alt="Agendamento de Jogos">
                            </div> 
                        </div>  
                    </div>
                    <!-- FIM BOX FEATURES -->
                </li>


                <!--
                <li class="btn-feature">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-mais.svg" alt="saiba mais"> Resultado dos jogos
                    <div class="box-features feature">
                        <span>x</span>
                        <div class="row">
                            <div class="col-md-5 col-10 offset-1">
                                <h3>Resultado dos jogos</h3>
                                <p>Acompanhe os últimos resultados do seu time.</p>
                                <div class="button-jm fechar d-none d-md-block d-sm-none">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-x.png" alt="">
                                    Fechar
                                </div>
                            </div>
                            <div class="col-md-5 col-10 offset-1">
                                <img class="tela-feature img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/features/feature-01.png" alt="">
                            </div> 
                        </div>  
                    </div>
                </li>
                -->




                <li class="btn-feature">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-mais.svg" alt="saiba mais"> Sistema de avaliação
                    <!-- BOX FEATURES -->
                    <div class="box-features feature">
                        <span>x</span>
                        <div class="row">
                            <div class="col-md-5 col-10 offset-1">
                                <h3>Sistema de avaliação</h3>
                                <p>Juiz caseiro? W.O.? Foi bem recebido? Avalie seus últimos adversários e vamos criar juntos um futebol amador mais organizado.</p>
                                <div class="button-jm fechar d-none d-md-block d-sm-none">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-x.png" alt="">
                                    Fechar
                                </div>
                            </div>
                            <div class="col-md-5 col-10 offset-1">
                                <img class="tela-feature img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/features/avaliacao-de-jogos.png" alt="Avaliação de Jogos">
                            </div> 
                        </div>  
                    </div>
                    <!-- FIM BOX FEATURES -->
                </li>
               
               
               
               
                <li class="btn-feature">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-mais.svg" alt="saiba mais"> Perfil do time
                    <!-- BOX FEATURES -->
                    <div class="box-features feature">
                        <span>x</span>
                        <div class="row">
                            <div class="col-md-5 col-10 offset-1">
                                <h3>Perfil do time</h3>
                                <p>Escudo, localização, avaliações, resultados das últimas partidas. Acesse as informações dos times.</p>
                                <div class="button-jm fechar d-none d-md-block d-sm-none">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icon-x.png" alt="">
                                    Fechar
                                </div>
                            </div>
                            <div class="col-md-5 col-10 offset-1">
                                <img class="tela-feature img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/features/perfil-do-time.png" alt="Perfil do Time">
                            </div> 
                        </div>  
                    </div>
                    <!-- FIM BOX FEATURES -->
                </li>
                
            </ul>
        </div>
    </article>
   
    <?php include 'store.php';?>

</section>


<!--
<section class="conteiner-fluid publi">
    <article class="row">
        <div class="col-10 offset-1 mt-5 mb-5">
            <div class="owl-carousel owl-3">
                 <?php // include 'publicidade.php';?>
            </div>
        </div>
    </article>
</section>
-->

<section class="conteiner-fluid">
    <article class="row mt-5 pt-5 mb-5">
        <div class="col-12 text-center">
            <h2>
                    PARCEIROS
            </h2>
        </div>
    </article>
    <article class="row mb-5 pb-5">
        <div class="col-md-2 col-3 mt-5 mb-5 offset-1 offset-md-2">
            <a href="https://www.arenahub.com.br/" target="_blank">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/parceiros/arena-rub.png" alt="Area Rub">
            </a>
        </div>
        <div class="col-md-2 col-3 mt-5 mb-5 offset-1 offset-md-1">
            <a href="https://jogamiga.com.br/" target="_blank">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/parceiros/joga-miga.png" alt="Joga Miga">
            </a>
        </div>
        <div class="col-md-2 col-3 mt-5 mb-5 offset-1 offset-md-1">
            <a href="https://ligapaulistafutsal.com.br/" target="_blank">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/parceiros/liga-paulista.png" alt="Liga Pauista">
            </a>
        </div>
    </article>
</section>


<?php get_footer(); ?>

