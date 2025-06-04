<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
			<li><span>Search result</span></li>
		</ul>
	</div>
</div>
<section class="has-bg search">
	<div class="container">
		<h2 class="stitle">
		<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Search results for "%s"' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
	</h2>
		<div class="h5 search__heading">New search</div>
		<div class="products__search search__form">
			<?php echo get_search_form(); ?>		
		</div>
		<p class="search__not-happy">If you are not happy with the results below please do another search</p>
<?php


if ( have_posts() ):
	?>
	
		<?php
		/*
		printf(
			esc_html(
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
*/
		?>

	<ul class="search__list">
	<?php
	// Start the Loop.
	while ( have_posts() ):
		the_post();
		?>
		<li class="search__item">
				<p class="search__title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
				<div class="search__descr text_page">
					<?php the_excerpt();?>
				</div>	
			</li>
		
	<?php 
	/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		//get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
		endwhile; // End the loop. 

	// Previous/next page navigation.
	//twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.

	?>
</ul>
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

	<?php else: ?>
		<p class="h5">No results were found for this request.</p>
	<?php endif; ?>
	</div>
</section>
	<?php get_template_part( 'template-parts/gotquestions' ); ?>

<!--featured-->
<section class="featured">
	<?php get_template_part( 'template-parts/feautured_products' ); ?>
</section>
<!--END featured-->

<?php get_footer(); ?>
