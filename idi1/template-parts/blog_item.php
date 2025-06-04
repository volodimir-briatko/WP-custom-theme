<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Vidi
 * @since Vidi
 */

?>

<li>
	<article class="blog-article">
		<div class="of-img blog-article__img">
			<?php the_post_thumbnail();?>
		</div>
		<span class="blog-article__date"><?php the_date('j F Y'); ?></span>
		<h4 class="blog-article__title"><?php the_title(); ?></h4>
		<a href="<?php the_permalink();?>" class="blog-article__link"></a>
	</article>
</li>