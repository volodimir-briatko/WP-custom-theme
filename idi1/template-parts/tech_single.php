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
			<li><a href="<?php echo get_permalink(47);?>"><?php echo get_the_title(47); ?></a></li>
			<li><span><?php the_title(); ?></span></li>
		</ul>
	</div>
</div>
<!--text_page-->
<section class="has-bg blog_item">
	<div class="container">
		<h2 class="stitle"><?php the_title(); ?></h2>
		
		<div class="text_page text_page1">
			<?php 
			$content = get_the_content();
			if ( !empty(get_field('info_button_description')) || !empty(get_field('info_button_text')) ){
				$info = '<div class="d-flex justify-content-between align-items-center services__calculate">
				<p>'.nl2br(get_field('info_button_description')).'</p>
				<p><a href="'.get_theme_mod('setting_calclink', '').'" class="sbtn sbtn_inv sbtn_big" draggable="false">'.get_field('info_button_text').'</a></p>
			</div>';
			$content = str_replace('{custom_info}',$info,$content);
			}
			echo wpautop($content);	
			?>
		</div>
		<script>
			var text_tables = document.querySelectorAll('.text_page table');
			for ( i=0; i<text_tables.length; i++ ) {
			  text_tables[i].insertAdjacentHTML("beforeBegin", '<div class="table">'+text_tables[i].outerHTML+'</div>');
			  text_tables[i].remove();
			}
		</script>	
	</div>
</section>
<!--text_page END-->
<?php get_template_part( 'template-parts/gotquestions' ); ?>

<!--featured-->
<section class="featured">
	<?php get_template_part( 'template-parts/feautured_products' ); ?>
</section>
<!--END featured-->