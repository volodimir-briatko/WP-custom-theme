<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Vidi
 * @since Vidi
 */
$post_id = get_the_ID();
get_header();

$description = get_the_archive_description();

?>

<div class="crumbs">
	<div class="container">
		<ul class="crumbs__list">
			<li><a href="/"><span>Home</span></a></li>
			
			<?php 

			$cat_name = get_cat_name(get_queried_object_id());

			if (!empty($cat_name) && !is_page_template('blog.php')):?>
			<li><a href="/blog/"><span>Blog</span></a></li>
			<li><span><?php echo $cat_name;?></span></li>
			<?php else:?>
			<li><span>Blog</span></li>	
			<?php endif; ?>
			
		</ul>
	</div>
</div>



<section class="has-bg blog">
	<div class="container">
		<h2 class="stitle blog__title"><?php if ( is_page_template('blog.php')) {echo get_the_title($post_id);} else {the_archive_title();} ?></h2>
		<div class="row blog__box">
			<div class="col-lg-9">

				<?php 
		
				if ( have_posts() ) :
					if (is_page_template('blog.php')):

					$args = array( 'post_type' => 'post', 'posts_per_page' => 100,  'orderby' => 'date', 'order'=>'DESC' );	
					$the_query = new WP_Query($args);

					if ( $the_query->have_posts() ) :
						?>
						<ul class="blog__list">
						<?php
					while ( $the_query->have_posts() ): 
					 $the_query->the_post();
				?>
					<?php get_template_part( 'template-parts/blog_item' ); ?>

					<?php endwhile; wp_reset_postdata(); ?>
					</ul>
					<?php endif; ?>
					
				<?php else: ?>
					<ul class="blog__list">
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
						<?php get_template_part( 'template-parts/blog_item' ); ?>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>	

			<?php else : ?>

				no blogs here

			<?php endif; ?>				
			
			<!--
				<ul class="pagination">
					<li>
						<a class="pagination__link pagination__link_disabled" href="#">
							<svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6 1L1 7L6 13" stroke="#3879D6" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</li>
					<li>
						<a class="pagination__link pagination__link_active" href="#">1</a>
					</li>
					<li>
						<a class="pagination__link" href="#">2</a>
					</li>
					<li>
						<a class="pagination__link" href="#">3</a>
					</li>
					<li>
						<a class="pagination__link" href="#">
							<svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 1L6 7L1 13" stroke="#3879D6" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</li>
				</ul>
				-->
			</div>
			<aside class="col-lg-3 aside">
			
				<div class="aside__block">
					<h4 class="aside__title">Recent posts</h4>
					<ul class="aside__list">
						<?php
						$result = wp_get_recent_posts( [
						'numberposts'      => 5,
						'offset'           => 0,
						'category'         => 0,
						'orderby'          => 'post_date',
						'order'            => 'DESC',
						'include'          => '',
						'exclude'          => '',
						'meta_key'         => '',
						'meta_value'       => '',
						'post_type'        => 'post',
						'post_status'      => 'publish',
						'suppress_filters' => true,
					], OBJECT );
					foreach( $result as $post ):
						setup_postdata( $post );
						?>
						<li><a href="<?php the_permalink();?>"><?php echo the_title(); ?></a></li>
						<?php
					endforeach;
					wp_reset_postdata();
						?>
						
					</ul>
				</div>
				
				
					<?php 
						$categories = get_categories( [
						'taxonomy'     => 'category',
						'type'         => 'post',
						'child_of'     => 0,
						'parent'       => '',
						'orderby'      => 'name',
						'order'        => 'ASC',
						'hide_empty'   => 1,
						'hierarchical' => 1,
						'number'       => 0,
						'pad_counts'   => false,
					] );
						if( $categories ):
					?>
					<div class="aside__block">
					<h4 class="aside__title">Categories</h4>
					<ul class="aside__list">
						
						
					<?php
						
						foreach( $categories as $cat ):
					?>
								
								<li><a href="/blog/<?php echo $cat->slug;?>/"><?php echo $cat->name;?></a></li>
						<?php
					endforeach;
					
						 ?>
					</ul>
					</div>
				<?php endif; ?>
				
				
				<?php
				$tags = get_tags( [
						'number'       => 0,
						'offset'       => 0,
						'orderby'      => 'id',
						'order'        => 'ASC',
						'hide_empty'   => true,
						'fields'       => 'all',
						'slug'         => '',
						'hierarchical' => true,
						'name__like'   => '',
						'pad_counts'   => false,
						'get'          => '',
						'child_of'     => 0,
						'parent'       => '',
						] );
				if( $tags ):
					?>
				<div class="aside__block">
					<h4 class="aside__title">Tags</h4>
					<ul class="tags-list aside__tags-list">

					<?php foreach ($tags as $tag): ?>
					<li><a href="/tag/<?php echo $tag->slug;?>/"><?php echo $tag->name;?></a></li>
					<?php endforeach; ?>		
					
					</ul>
				</div>
				<?php endif; ?>
			</aside>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/gotquestions' ); ?>



<?php get_footer(); ?>
