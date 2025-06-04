<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="crumbs">
  <div class="container">
    <ul class="crumbs__list">
      <li><a href="/"><span>Home</span></a></li>
      <li><span>404</span></li>
    </ul>
  </div>
</div>
<section class="has-bg page404">
	
  <div class="container">
  	<div class="text_page">
  		<p class="page404__img"><img src="<?php bloginfo('template_url'); ?>/assets/img/404.svg" ></p>
  		<p class="page404__p">Unfortunately the page you’re looking for is not here. You might like<br> to try going back to the <a href="/">homepage</a>.</p>
  	</div>
  		
  	</div>
  </section>
	
<!--featured-->
<section class="featured">
  <?php get_template_part( 'template-parts/feautured_products' ); ?>
</section>
<!--END featured-->
<?php
get_footer();
