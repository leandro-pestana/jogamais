<?php
session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <?php $home = get_template_directory_uri(); ?>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    
    <meta name="description" content="Encontre agora, de maneira fácil e rápida, seu próximo jogo. Você tem ou joga em um time amador de Futsal, Campo ou Fut7? Chega mais, veja como funciona e baixe.">
	<meta name="author" content="Joga+" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
	<meta name="keywords" content="Futebol, Jogo, Futebol Feminino, Futsal, Futsal amador, futebol de campo, futebol amador">

	<!-- METATAG PARA COMPARTILHAMENTO -->

	<meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="https://www.jogamais.ap">
    <meta property="og:title" content="Joga+: encontre agora, de maneira fácil e rápida, seu próximo jogo.">
    <meta property="og:site_name" content="Joga+">
    <meta property="og:description" content="Você tem ou joga em um time amador de Futsal, Campo ou Fut7? Chega mais, veja como funciona e baixe.">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/thumb_facebook.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:type" content="website">	

    <!-- STYLE -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-reboot.csss">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css">

    <!-- FAVEICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/assets/images/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/assets/images/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/assets/images/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/assets/images/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/assets/images/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/assets/images/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/assets/images/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/assets/images/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/images/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/assets/images/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/assets/images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/images/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/images/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/assets/images/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#fff">


	<title>
         <?php geraTitle(); ?> - Se tá no App, tem jogo!
	</title>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M4XSL26');</script>
    <!-- End Google Tag Manager -->
</head>

<body>

