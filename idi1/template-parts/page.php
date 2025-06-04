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
$post_id = get_the_ID();
$text_page_class = '';
switch ($post_id) {
    case 17:
        $text_page_class = 'text_page__terms';
        break;
}
?>

<div class="crumbs">
	<div class="container">
		<ul class="crumbs__list">
			<li><a href="/"><span>Home</span></a></li>
			<li><span><?php the_title(); ?></span></li>
		</ul>
	</div>
</div>
<!--text_page-->
<section class="has-bg blog_item">
	<div class="container">
		<h2 class="stitle"><?php the_title(); ?></h2>
		<div class="text_page <?php echo $text_page_class; ?>">
			<?php if ($post_id==17):?>
			<aside class="text_page__sidebar">
				<?php the_field('terms_navigation'); ?>
			</aside>
			<?php endif;?>
			<?php echo wpautop(get_the_content()); ?>
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

