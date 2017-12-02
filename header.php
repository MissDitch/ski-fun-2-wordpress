<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SkiFun43+
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round%7cOswald:400,700%7cRoboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    
    <!-- icons -->
    <link rel="stylesheet" href="http://weloveiconfonts.com/api/?family=iconicfill|maki|typicons|entypo">

    <?php wp_head(); ?>
    
    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'skifun43' ); ?></a>
    
    <!-- HEADER
    =========================================================================================== -->
    <div class="background">
        <header class="header">                    
            <div class="navbar">
                <div class="navbar-header header__inner">
                    <img class="header__logo" src="<?php bloginfo('stylesheet_directory');?>/assets/img/Skifun43logo_kleur_wit-01.png" alt="logo ski-fun 43+">

                    <div class="header__menu navbar-expand-md ">  <!--adding navbar-expand-md is necessary to make it work outside of the nav element -->                        
                        <a class="navbar-toggler " data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">    
                            <span class="navbar-toggler-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M2 6h20v3H2zm0 5h20v3H2zm0 5h20v3H2z"/>
                                </svg>
                            </span>
                        </a>      
                    </div>   <!-- .header__menu --> 
                </div>  <!-- .navbar-header -->

                <!--  If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". IN other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->

                <nav class="nav__bar navbar-expand-md">

                    <?php 
                        wp_nav_menu( array(

                            'theme_location'    => 'menu-1',
                            'container'         => 'div',
                            'container_class'   => 'move navbar-collapse collapse',
                            'container_id'      => 'navbarToggler',
                            'menu_class'        => 'navbar-nav nav__list'      
                        ) );
                    ?>


                    <!-- 
                    <div class="move collapse navbar-collapse"  id="navbarToggler">  
                        <ul class="navbar-nav nav__list">
                            <li class="nav-item nav__item active"><a  class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
                            <li class="nav-item nav__item "><a  class="nav-link" href="reis1.html">Skireis januari</a></li>
                            <li class="nav-item nav__item "><a  class="nav-link" href="reis2.html">Skireis maart</a></li>
                            <li class="nav-item nav__item "><a  class="nav-link" href="boeken.html">Reis boeken</a></li>
                            <li class="nav-item nav__item "><a  class="nav-link" href="ervaringen.html">Reiservaringen</a></li>                 
                        </ul>
                    </div>  .navbar-collapse    -->

                </nav>  
                
            </div>  <!-- .navbar -->     
        </header>
