<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
 
    <nav class='navbar navbar-default' role='navigation'>
        <!-- brand and toggle get grouped for better mobile display -->
        <div class='navbar-header'>
            <button type="button" class='navbar-toggle' data-toggle='collapse'data-target='#bs-example-navbar-collapse-1'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>  
            </button> 
            <a class='navbar-brand' href="<?php echo home_url() ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/jerm_jo.png" alt="logo">
            </a> 
        </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             =>  2,
                'container'         =>  'div',
                'container_class'   =>  'collapse navbar-collapse',
                'container_id'      =>  'bs-example-navbar-collapse-1',
                'menu-class'        =>  'nav navbar-nav navbar-right',
                'fallback_cb'       =>  'wp_bootstrap_navwalker::fallback',
                'walker'            =>  new wp_bootstrap_navwalker())
            );
        ?>    
    </nav>