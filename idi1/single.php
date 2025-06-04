<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	if (get_post_type()=='technologies'){
		get_template_part( 'template-parts/tech_single' );
	} else if (get_post_type()=='cases'){
		get_template_part( 'template-parts/cases_single' );
	} else if (get_post_type()=='services'){
		get_template_part( 'template-parts/services_single' );
	} else if (get_post_type()=='product'){
		include_once( 'template-parts/product/product_single.php' );
	}  else {
		
		
		
		get_template_part( 'template-parts/blog_single' );
	}

	



	
endwhile; // End of the loop.

get_footer();
