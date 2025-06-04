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

<div class="crumbs">
	<div class="container">
		<ul class="crumbs__list">
			<li><a href="/"><span>Home</span></a></li>
			<li><a href="/blog/">Blog</a></li>
			<li><span><?php the_title(); ?></span></li>
		</ul>
	</div>
</div>
<!--text_page-->
<section class="has-bg blog_item">
	<div class="container">
		<h2 class="stitle"><?php the_title(); ?></h2>
		<div class="blog__date"><?php the_date('j F Y'); ?></div>
		<div class="blog__tags">
			<?php  the_tags( '','',''); ?>
		
		</div>
		<div class="text_page">
			<?php echo wpautop(get_the_content()); ?>
		</div>
		<script>
			var text_tables = document.querySelectorAll('.text_page table');
			for ( i=0; i<text_tables.length; i++ ) {
			  text_tables[i].insertAdjacentHTML("beforeBegin", '<div class="table">'+text_tables[i].outerHTML+'</div>');
			  text_tables[i].remove();
			}
		</script>	
		<div class="d-flex justify-content-between blog_item__nav">

			<div class="blog_item__nav-item">
			<?php				
				$previous_post_link = get_previous_post_link('%link', '%title', 0);
				if ($previous_post_link):
			?>
				<p><?php echo $previous_post_link;?></p>
				<p><?php echo str_replace( '<a ', '<a class="read-more read-more__left" ', get_previous_post_link( '%link', 'previous article', 0 ) ); ?></p>
				
			<?php endif;?>
			</div>
			<div class="blog_item__nav-item">
			<?php
				$next_post_link = get_next_post_link('%link', '%title', 0);
				if ($next_post_link):
			?>
				<p><?php echo $next_post_link;?></p>
				<p><?php echo str_replace( '<a ', '<a class="read-more" ', get_next_post_link( '%link', 'next article', 0 ) ); ?></p>
			<?php endif;?>
			</div>
		</div>
	<?php

	

	?>
	</div>
</section>
<!--text_page END-->
<?php get_template_part( 'template-parts/gotquestions' ); ?>

<!--featured-->
<section class="featured">
	<?php get_template_part( 'template-parts/feautured_products' ); ?>
</section>
<!--END featured-->