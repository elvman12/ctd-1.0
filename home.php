<?php

/**
 * Main template for displaying the blog pages (when recent posts are not set to be the home page) *
 * @link https://codex.wordpress.org/Template_Hierarchy *
 * @package ClickTime_Design
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        

		<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; $c=0;?>
        <?php while (have_posts()) : the_post(); ?>        

        <?php $c++;
        if( !$paged && $c == 1) :?>        

        <div class="ctd-featured-blog">
        <?php //the_post_thumbnail(); ?>
        <?php echo "<a href=\""; the_permalink(); echo "\">"; the_title('<h1 class="ctd-blog-title">','</h1>'); echo "</a>"; ?>
        <div class="blog-image"> <?php the_post_thumbnail(); ?> </div>
        <?php the_excerpt(); ?> 
        <div class="ctd-read-more"><a class="blogroll-more" href=" <?php the_permalink(); ?> ">Continue Reading</a></div>
        </div>        

        <?php else :?>        

        <!--<div class="ctd-blog-entry">-->        

        <div class="ctd-search-title">
        <?php echo "<a href=\""; the_permalink(); echo "\">"; the_title('<h2 class="entry-title">','</h2>'); echo "</a>"; ?>
        </div>

        <div class="ctd-search-entry">
        <div class="blog-image"> <?php the_post_thumbnail('thumbnail'); ?> </div>
        <?php the_excerpt(); ?>        

        <!--<div class="ctd-read-more"><a class="blogroll-more" href=" <?php //the_permalink(); ?> ">Continue Reading</a></div>-->		

        </div>

        <?php endif;?>        

        <?php endwhile; ?>         

        <?php

        /* Add Numbered Pagination Here  */		

			echo "<div class=\"ctd-pagination\">";			

			global $wp_query;
			$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'prev_text' => __('«'),
				'next_text' => __('»'),
				'show_all' => false,
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );
			
			echo "</div>";	
		?>    

        <?php endif; ?>     

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();