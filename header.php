<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>

<div class="container">
    <header class="row bg-dark mb-5 align-tiem-bottom">
        <div class="offset-md-1 col-md-4 logo-name">
            <h1><a href="<?php echo get_home_url(); ?>" class="text-decoration-none text-white"><?php echo get_bloginfo("name") ?></a></h1>
        </div>

        <div class="col-md-6 primary-nav">
            <ul id="primary-nav" class="nav">
            <?php
            
            $menu = wp_get_nav_menu_items('Primary Menu');

            foreach($menu as $menu_item)
            {
                echo '<li class="align-baseline nav-item"><a class="nav-link text-white" href="'.$menu_item->url.'">'.$menu_item->title.'</a></li>';
            };
            ?>
            </ul>
        </div>
    </header>