<?php get_header(); ?>
<?php include 'menu-internas.php';?>

<?php 
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
        ?>



<header class="banner-manifesto container-fluid">
    <article class="row ">
        <div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1 pb-5 mt-3">
            <img class="img-fluid mt-5 " src="<?php bloginfo('template_url'); ?>/assets/images/logo-jogamais-basic.png" alt="Joga+ Se tá no App, te jogo!å">
            <h1>
            <?php the_title(); ?>
            </h1>
        </div>     
    </article>
</header>

<section class="manifesto container-fluid pt-5 pb-5">
    <article class="row">
        <div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1 mb-5">



        <div class="pagina-conteudo">
            <?php the_content(); ?>
        </div>

        <?php
            }
        }
        ?>

        </div>
    </article>

    <?php include 'store.php';?>
    
</section>

<?php get_footer(); ?>