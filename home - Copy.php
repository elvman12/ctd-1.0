<?php
/**
 * Main template for displaying the blog pages (when recent posts are not set to be the home page)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy *
 * @package ClickTime_Design
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		        
		<?php
              
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				
				echo "<div class=\"ctd-blog-entry\">";
							
				echo "<a href=\""; the_permalink(); echo "\">"; the_title('<h1 class="ctd-blog-title">','</h1>'); echo "</a>";
				echo "<div class=\"stupid-thumb\">"; the_post_thumbnail('thumbnail'); echo "</div>";
				the_excerpt();
				
				echo "<div class=\"spacer30\">";
				echo "<hr>";
				echo "</div>";				
				
			endwhile;			
			
			/* Add Numbered Pagination Here  */			
			echo "<div class=\"ctd-pagination\">";
			
			global $wp_query;
			$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'prev_text' => __('«'),
				'next_text' => __('»'),
				'show_all' => true,
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );

			echo "</div>"; 

		endif; ?>
        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
