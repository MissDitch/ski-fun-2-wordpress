<?php 
/* 
Template Name: Reis 2 Page  
*/

get_header(); 

?>

<!-- BOVEN EN SECTION 0
============================================== -->
<?php get_template_part('template-parts/content', 'reis2Boven'); ?>

<!-- SECTION 1 en 2
============================================== -->
<?php get_template_part('template-parts/content', 'reisGebiedHotel'); ?>

 <!-- include(locate_template('template-parts/content-reisBoven.php'));  include(locate_template('template-parts/content-reisGebiedHotel.php'));  -->

<!-- SECTION 3
============================================== -->
<?php get_template_part('template-parts/content', 'reisTransfer'); ?>

<!-- SECTION 4 en 5
============================================== -->
<?php get_template_part('template-parts/content', 'reisKosten'); ?>


<!-- SECTION 6, 7 en 8
============================================== -->
<?php get_template_part('template-parts/content', 'reisOnder'); ?>



<?php get_footer(); ?>