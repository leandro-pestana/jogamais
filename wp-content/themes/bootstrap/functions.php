<?php

add_theme_support( 'post-thumbnails' );

/*------------------------*/
/*----------VITAMINAS--------------*/
/*------------------------*/





function registrar_menu_navegacao() {
	register_nav_menu( 'header-menu', 'main-menu' );
}
add_action('init', 'registrar_menu_navegacao');


/*------------------------*/

function geraTitle() {
	bloginfo( 'name' ); 
	if( !is_home() ) echo ' | ' ;
	the_title();
} 

/*------------------------*/


