<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SkiFun43+
 */

$boven_kop          = get_field('boven_kop', '30');
$boven_tekst        = get_field('boven_tekst', '30');

get_header(); ?>

<section id="boven" class="boom">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-8">
                <h1><?php  echo $boven_kop; ?></h1>
                <p><?php echo $boven_tekst; ?></p>               
            </div>

        </div>
    </div> <!-- container -->
</section> <!--#boven-home -->

<!-- BLOG CONTENT   
========================================================================== -->


<div class="container">
    <div class="row" id="primary">
        <main id="content" class="col-sm-8" role="main">     

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

        </main> <!-- content -->

        
        <!--   SIDEBAR
        ============================================================================ -->
        <aside class="col-sm-4 ">
        <?php get_sidebar(); ?>
        </aside>


    </div>  <!-- row -->
</div>  <!-- container -->


<?php
get_footer();
