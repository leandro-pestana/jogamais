<?php

    /*
    Template Name: index padrão
    */

    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once($path);

?>

<?php get_header(); ?>



<section class="container-fluid">
    <article class="row">  

            <?php

                $args = array(
                     'post_type' => array('Vitamina','Skincare'),
                     'posts_per_page' => '20',
                );
                $loop = new WP_Query( $args );
                if( $loop->have_posts() ) { ?>

                <div class="col-10 offset-1">
                    <ul class="row">   
                            <?php while( $loop->have_posts() ) {
                                $loop->the_post();
                            ?>

                            <li class="col-4 thumb-home">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </a>
                            </li>

                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                
    </article>
</section>


<?php get_footer(); ?>