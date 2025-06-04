<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Vidi
 * @since Vidi
 */
if (isset($_POST['ajax_query'])){
	get_template_part( 'ajax_query' );
	exit;
}
get_header();
/* Start the Loop */



while ( have_posts() ) :
	the_post();
	if(is_front_page()){
		get_template_part( 'template-parts/mainpage' );
	} else if (is_product_category() || is_product_tag()){
		get_template_part( 'template-parts/products_taxonomy' );
	} else {
		get_template_part( 'template-parts/page' );
	} 
	


endwhile; // End of the loop.

get_footer();
