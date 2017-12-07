<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SkiFun43+
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
        <div class="post-details">
            <span class="entypo-user LB"></span> <?php the_author() ?>
            <span class="entypo-clock LB"></span><time><?php the_date() ?></time> 
            <span class="entypo-folder LB"></span><?php the_category(', ') ?>
            <span class="entypo-tag LB"></span><?php the_tags('', ', ', '') ?>
        
            <div class="post-comments-badge">
                <a href="<?php comments_link(); ?>"><span class="iconicfill-comment-alt2-fill"></span><?php comments_number( 0, 1, '%'); ?></a>
            </div><!-- post-comments-badge -->

            <?php edit_post_link( 'Bewerken', '<div><i class="entypo-pencil LB"></i> ', '</div>'); ?> <!-- makes it possible to hit Edit, and it will take us to the actual post to edit it -->
            
        </div><!-- post-details -->
		<?php
		endif; ?>
    </header><!-- .entry-header -->

    <?php if(has_post_thumbnail() ) { // check for feature image   ?>
    <div>
        <?php the_post_thumbnail();?>
    </div>   <!-- post-image -->
    <?php } ?>

    <?php if ( is_single() ) : ?>
    <div class="post-body">
        <?php the_content(); ?>
    </div> <!-- post-content -->

    <?php else : ?>
	<div class="post-excerpt">
       <?php the_excerpt(); ?>
    </div><!-- post-excerpt -->

    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
