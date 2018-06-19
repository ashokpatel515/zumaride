<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>


<script>
jQuery(".sign_up").click(function(){
    jQuery(".signup_block").toggle();
});
jQuery(".close_btn").click(function(){
    jQuery(".signup_block , .promotions , .online").hide();
});
jQuery(".promotion_li").click(function(){
    jQuery(".promotions").toggle();
});
jQuery(".online_li").click(function(){
    jQuery(".online").toggle();
});
jQuery("li.rider").click(function() { 
    jQuery("div#wpcf7-f163-o1").hide();
	jQuery("div#wpcf7-f182-o2").show();
});
jQuery("li.driver").click(function() { 
    jQuery("div#wpcf7-f163-o1").show();
	jQuery("div#wpcf7-f182-o2").hide();
});

jQuery("li.driver").click(function() { 
    jQuery(this).addClass('add-active');
	jQuery('li.rider').removeClass('add-active');
});
jQuery("li.rider").click(function() { 
    jQuery(this).addClass('add-active');
	jQuery('li.driver').removeClass('add-active');
});
</script>

</body>
</html>
