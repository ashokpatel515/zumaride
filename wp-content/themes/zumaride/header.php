<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<?php wp_head(); ?>



<link href="<?php echo get_template_directory_uri(); ?>/animate.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/viewportchecker.js"></script> 
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.services_ul , .txione , .cycloneslider-caption-description').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInUp', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
});    

jQuery(document).ready(function() {
	jQuery('.mobile_banner , .custom-logo, .cmn_line , div#pgc-13-1-1 , #sfsi-widget-2, section#sow-editor-4').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
});    

jQuery(document).ready(function() {
	jQuery('.mobile_banner .siteorigin-widget-tinymce.textwidget, .contact_head , div#pgc-13-1-0 , #media_image-3').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInRight', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
}); 


        
</script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
<div class="signup_block">
	<div class="signup_form"><div class="close_btn">X</div>
		<h2>Sign Up</h2>
		<ul class="d_r_info">
			<li class="driver add-active">Drivers info</li>
			<li class="rider">Rider info</li>
		</ul>
		<?php echo do_shortcode( '[contact-form-7 id="163" class="driver-form" title="Contact Driver form"]' ); ?>
		<?php echo do_shortcode( '[contact-form-7 id="182" class="rider-form" title="Contact Rider form"]' ); ?>
	</div>
</div>

<div class="promotions">
	<div class="signup_form"><div class="close_btn">X</div>
		<h2>Promotions</h2>
		<p><strong>Drivers:</strong> up to 500.00 bonus check details.<br>  
		<strong>Riders:</strong> check coupons in your mail.<br>
		We charge less and pay more to drivers.</p>
	</div>
</div>

<div class="online">
	<div class="signup_form"><div class="close_btn">X</div>
		<h2>Online Booking</h2>
		<?php echo do_shortcode( '[contact-form-7 id="184" title="online Booking"]' ); ?>
	</div>
</div>

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>
		<div class="site-branding">
	<div class="wrap">

		<?php the_custom_logo(); ?>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->
		
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top2">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
		
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
		
		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->


		

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
		

	<?php if( function_exists('cyclone_slider') ) cyclone_slider('home-slider'); ?>

