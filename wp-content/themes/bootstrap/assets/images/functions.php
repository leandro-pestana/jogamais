<?php

add_theme_support( 'post-thumbnails' );

/*------------------------*/
/*----------VITAMINAS--------------*/
/*------------------------*/

function cadastrando_post_type_vitaminas() {
    $nomeSingular = 'Vitamina';
    $nomePlural = 'Vitaminas';
    $description = 'Conteúdo para a linha de Vitasay 50+';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'description' => $description,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => $supports
    );

    register_post_type('Vitamina', $args );
}
add_action('init', 'cadastrando_post_type_vitaminas');


/*------------------------*/


function registra_taxonomia_segmento() {
	$nomeSingular = 'Categoria';
	$nomePlural = 'Categorias';

	$labels = array(
		'name' => $nomePlural,
		'singular' => $nomeSingular,
		'edit_item' => 'Editar ' . $nomeSingular,
		'add_new_item' => 'Adicionar nova ' . $nomeSingular,
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
	);
	register_taxonomy( 'categoria' , 'vitamina', $args );
}
add_Action('init', 'registra_taxonomia_segmento');



/*------------------------*/
/*-----------PELE-------------*/
/*------------------------*/

function cadastrando_post_type_skincare() {
    $nomeSingular = 'Post Skincare';
    $nomePlural = 'Posts Skincare';
    $description = 'Conteúdo para a linha de Skincare - Skincare';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'description' => $description,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => $supports
    );

    register_post_type('Skincare', $args );
}
add_action('init', 'cadastrando_post_type_skincare');

/*-- ---*/

function registra_taxonomia_skincare() {
	$nomeSingular = 'Categoria Skincare';
	$nomePlural = 'Categorias Skincare';

	$labels = array(
		'name' => $nomePlural,
		'singular' => $nomeSingular,
		'edit_item' => 'Editar ' . $nomeSingular,
		'add_new_item' => 'Adicionar nova ' . $nomeSingular,
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
	);
	register_taxonomy( 'categoria' , 'skincare', $args );
}
add_Action('init', 'registra_taxonomia_skincare');



/*------------------------*/
/*------------------------*/
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


