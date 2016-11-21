<?php

/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package ClickTime_Design
*/
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">        

        <!-- Add a Footer Widget -->

		<?php if ( is_active_sidebar( 'footer_one' ) ) :
            dynamic_sidebar( 'footer_one' );
        endif; ?>        

        <!-- Add a Footer Widget -->
        <?php if ( is_active_sidebar( 'footer_two' ) ) : 
            dynamic_sidebar( 'footer_two' );
        endif; ?>        

        <!-- Add the Bottom Right Header Widget Area -->
        <?php if ( is_active_sidebar( 'footer_three' ) ) :	
            dynamic_sidebar( 'footer_three' );
		endif; ?>  			

		</div><!-- .site-info -->
	</footer><!-- #colophon -->    

    <div id="ctd-copyright">
		<?php
		$ctd_time = date('Y');
		echo "Copyright &copy; $ctd_time Click Time Design | All Rights Reserved<br>";
		echo "<a href=\"/web-design-copyright/\">Copyright</a> &middot; <a href=\"/privacy/\">Privacy</a> &middot; <a href=\"/sitemap/\">Sitemap</a> &middot; <a href=\"/terms-of-service/\">Terms of Service</a>";
		?> 
        </div>
        
        <div id="ctd-random-quote" style="text-align:center; font-size:13px; line-height:5px; margin-bottom:40px;">
    	<?php
		$args=array('post_type'=>'quote', 'orderby'=>'rand', 'posts_per_page'=>'1');

		$randomquote=new WP_Query($args);
		while ($randomquote->have_posts()) : $randomquote->the_post();
			$ctd_newtitle = get_the_title();
			$ctd_newtitle = preg_replace("/\([^)]+\)/","",$ctd_newtitle);
			$ctd_newtitle = str_replace(" &nbsp;&nbsp;", '', $ctd_newtitle);
			
		
			?><p style="font-weight:bold;"><?php echo '"' . $ctd_newtitle . '"'; //the_title('"','"');?></a></p>
            <?php $authorname = get_post_meta( $post->ID,'author-box-text',true); ?>
            <?php echo "-- " . $authorname;?>
        <?php    
		endwhile;
		wp_reset_postdata();
		?>
		
    </div>   

</div><!-- #page -->

<?php
wp_footer();
?>

</body>
</html>