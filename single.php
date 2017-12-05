<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SkiFun43+
 */

get_header(); ?>

 <!-- BLOG CONTENT
================================================== -->
<div class="container">
    <div class="row" id="primary">

        <main id="content" class="col-sm-8">

	<!-- <div id="primary" class="content-area">
		<main id="main" class="site-main"> -->

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );  //get_post_type() refers to content-page.php, not content-single.php

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

        </main><!-- #content -->
        
         <!--   SIDEBAR
        ============================================================================ -->
        <aside class="col-sm-4 ">
        <?php get_sidebar(); ?>
        </aside>

	</div><!-- #primary -->
</div><!-- container -->
<?php

get_footer();
