<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog com notícias sobre a rede Hbioss. Fique por dentro das novidades e lançamentos dessa inovadora forma de relacionamento.">
    <meta name="keywords" content="Hbioss, Thr3ap, Sempre, Admirada, Meulike, Gremily">
    <meta name="author" content="João Batista Gomes Silva">
    <!-- Inserir aqui a meta tag robots -->
    <title> <?php wp_title(); ?></title>
	
	
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/autoload.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/pages/home.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/libs/font-awesome/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    
     <?php wp_head(); ?>
 </head>

<body>

<nav id="menu">
        <div class="container">
            <a href="<?php echo get_site_url(); ?>"><img id="menu-logo" src="<?php bloginfo('template_url'); ?>/assets/imgs/hbioss.png" alt="Hbioss Logomarca"></a> <span id="menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></span>
            


            <div id="menu-content">
                <?php
                    wp_nav_menu(
                        array(
                            'container' => false,
                            'items_wrap' => '<ul>%3$s</ul>',
                            'theme_location' => 'menu'
                        )
                    );
                ?>
            </div>
        </div>
</nav>
    
