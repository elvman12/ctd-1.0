<?php
/**
 * Template part for displaying results in search pages. *
 * @link https://codex.wordpress.org/Template_Hierarchy *
 * @package ClickTime_Design
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <div class="ctd-search-title">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    </div><!-- ctd-search-title -->

		<?php if ( 'post' === get_post_type() ) : ?>
		<!--<div class="entry-meta">
			<?php //clicktimedesign_posted_on(); ?>
		</div>--><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
    <div class="ctd-search-entry">
    	<?php the_post_thumbnail('thumbnail'); ?>
		<?php the_excerpt(); ?>
    </div><!-- .ctd-search-entry -->     
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php //clicktimedesign_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
