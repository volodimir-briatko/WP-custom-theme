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
			<li><a href="<?php echo get_permalink(106);?>"><?php echo get_the_title(106); ?></a></li>
			<li><span><?php the_title(); ?></span></li>
		</ul>
	</div>
</div>
<!--prods-->
<section class="has-bg prods">
	<div class="container">
		<h2 class="stitle prods__title"><?php the_title(); ?></h2>
		<div class="row prods__main">
			<div class="col-lg-6">
				<?php
		//print_r($product->get_attributes());
			//print_r($product);
	$attachment_ids = $product->get_gallery_image_ids();
	
				?>
				<?php if (!empty($attachment_ids)): ?>
				<div class="of-img prods__big-img">
					<?php echo wp_get_attachment_image($attachment_ids[0], 'full'); ?>
				</div>
				<div class="swiper prods__thumbs-box">
					<ul class="swiper-wrapper prods__thumbs">
						<?php foreach( $attachment_ids as $k=>$attachment_id ): ?>
					   <li class="swiper-slide">
							<div class="of-img prods__thumb <?php if ($k==0):?>_active<?php endif;?>">
								<a href="<?php  echo wp_get_attachment_url( $attachment_id );?>"><?php  echo wp_get_attachment_image($attachment_id, 'thumbnail'); ?></a>
							</div>
						</li> 	

					    <?php endforeach; ?>					    
					</ul>
				</div>
			<?php endif;?>
			</div>
			<div class="col-lg-6">
				<div class="prods__info">
					<?php if (!empty($product->short_description)):?>
					<div class="prods__text text_page"><?php echo wpautop($product->short_description);?></div>
					<?php endif;?>
					<p class="prods__costs">
						<?php
						$product_price_for_month = get_field('product_price_for_month',$product->id);
						$product_price_for_setup = get_field('product_price_for_setup',$product->id);
						?>
						<?php if (!empty($product_price_for_month)):?>
						<span>$<?php echo $product_price_for_month;?></span> / month 
						<?php endif;?>
						<?php if (!empty($product_price_for_setup)):?>
						and <span>$<?php echo $product_price_for_setup;?></span> set up costs
						<?php endif;?>
					</p>
					<?php
			$count = $product->review_count;
			if (  wc_review_ratings_enabled() ):
				?>
					<div class="prods__rating">
						<div class="stars stars_disabled product_stars_disabled">
							<?php
							$rait = ($product->get_average_rating())-0;
				
							?>
<button class="stars__item _active"><span style="<?php if ($rait>=1){echo 'width:100%"';} else if ($rait>0 ) {echo 'width:'.(($rait-0)/1*100).'%';}   ?>"></span></button>
<button class="stars__item _active"><span style="<?php if ($rait>=2){echo 'width:100%"';} else if ($rait>1 ) {echo 'width:'.(($rait-1)/1*100).'%';} ?>"></span></button>
<button class="stars__item _active"><span style="<?php if ($rait>=3){echo 'width:100%"';} else if ($rait>2 ) {echo 'width:'.(($rait-2)/1*100).'%';} ?>"></span></button>
<button class="stars__item _active"><span style="<?php if ($rait>=4){echo 'width:100%"';} else if ($rait>3 ) {echo 'width:'.(($rait-3)/1*100).'%';} ?>"></span></button>
<button class="stars__item _active"><span style="<?php if ($rait>=5){echo 'width:100%';} else if ($rait>4 ) {echo 'width:'.(($rait-4)/1*100).'%';} ?>"></span></button>
						</div>
					
						<a href="#tab-2" class="prods__rating-link">(<?php echo $count; ?> customer review)</a>
					</div>
				<?php endif;?>
					<ul class="row prods__description">
						<?php
						$product_dashboards_link = get_field('product_dashboards_link',$product->id);
						$product_raising_access = get_field('product_raising_access',$product->id);
						$product_video_demo = get_field('product_video_demo',$product->id);
						?>
						<?php if (!empty($product_dashboards_link)):?>
						<li class="col-sm-6">
							<a href="<?php echo $product_dashboards_link;?>" target="_blank" class="prods__description-item">
								<span>
									<img class="prods__description-img" src="<?php bloginfo('template_url'); ?>/assets/img/product-single/icon-1.svg" alt="Dashboards Link" width="20" height="20">
								</span>
								<span>
									<span class="prods__description-text-1">Dashboards Link</span>
									<span class="prods__description-text-2">Interact with the dashboard</span>
								</span>
							</a>
						</li>
						<?php endif;?>
						<?php if (!empty($product_raising_access)):?>
						<li class="col-sm-6">
							<a href="<?php echo $product_raising_access;?>" target="_blank" class="prods__description-item">
								<span>
									<img class="prods__description-img" src="<?php bloginfo('template_url'); ?>/assets/img/product-single/icon-2.svg" alt="Raising Access" width="20" height="20">
								</span>
								<span>
									<span class="prods__description-text-1">Raising Access</span>
									<span class="prods__description-text-2">Step-by-step instructions</span>
								</span>
							</a>
						</li>
						<?php endif;?>
						<?php if (!empty($product_video_demo)):?>
						<li class="col-sm-6">
							<a href="<?php echo $product_video_demo;?>" target="_blank" class="prods__description-item">
								<span>
									<img class="prods__description-img" src="<?php bloginfo('template_url'); ?>/assets/img/product-single/icon-3.svg" alt="Video Demo" width="20" height="20">
								</span>
								<span>
									<span class="prods__description-text-1">Video Demo</span>
									<span class="prods__description-text-2">Overview of functionality</span>
								</span>
							</a>
						</li>
						<?php endif;?>
						<li class="col-sm-6">
							<a href="<?php echo get_permalink(27);?>" target="_blank" class="prods__description-item">
								<span>
									<img class="prods__description-img" src="<?php bloginfo('template_url'); ?>/assets/img/product-single/icon-4.svg" alt="Help Desk" width="20" height="20">
								</span>
								<span>
									<span class="prods__description-text-1">Help Desk</span>
									<span class="prods__description-text-2">Technical support</span>
								</span>
							</a>
						</li>
					</ul>
					<ul class="row prods__btns">
						<li class="col-sm-6">
							<a href="<?php echo get_theme_mod('setting_calclink', '');?>" class="sbtn sbtn_inv prods__btn">Customize product</a>
						</li>
						<li class="col-sm-6">
							<a href="javascript:;" class="sbtn prods__btn" onclick="open_popup_form('<?php the_title(); ?>');">Order product</a>
						</li>
					</ul>


	
					<ul class="prods__links">	
						<li>
							<?php echo wc_get_product_category_list( $product->get_id(), ', ', '' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '' ); ?>
						</li>
						<li>
							<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '' ); ?>
						</li>
					</ul>
				</div>
			</div>
		</div>


		<?php
		$faq_questions = get_post_meta($product->id,'faq_question' );
    	$faq_answears = get_post_meta( $product->id,'faq_answear' );
		?>
		<ul class="prods__tabs-switcher">
			<li class="_active"><a href="#tab-1">Description</a></li>
			<li><a href="#tab-2">Reviews (<?php echo $count; ?>)</a></li>
			<?php if (!empty($faq_questions)): ?>
			<li><a href="#tab-3">FAQ</a></li>
		<?php endif; ?>
		</ul>
		<div class="prods__tabs">
			<div class="prods__tab _active" id="tab-1">
				<div class="prods-description text_page">
					<?php if (!empty($product->description)):?>
					<?php echo wpautop($product->description);?>
					<?php endif;?>
				</div>
			</div>
			<?php get_template_part( 'template-parts/product/product_reviews' ); ?>
			
			<?php
    
    if (!empty($faq_questions)):
      
?>
<div class="prods__tab" id="tab-3">
				<div class="prods-faq">
					<h3 class="prods__tab-title  prods-faq__title">Frequently Asked Question</h3>

					<ul class="prods-faq__list">
						<?php foreach ($faq_questions[0] as $key => $question): ?>
						<li class="prods-faq__list-item <?php if ($key==0) echo '_active';?>">
							<h4 class="prods-faq__list-heading"><?php echo $question;?></h4>
							<?php if (!empty($faq_answears[0][$key])):?>
							<p class="prods-faq__list-text"><?php echo $faq_answears[0][$key];?></p>
							<?php endif; ?>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
<?php endif;  ?>
			
		</div>
	</div>
</section>
<!--prods END-->


<?php get_template_part( 'template-parts/gotquestions' ); ?>

<!--featured-->
<section class="featured">
	<?php get_template_part( 'template-parts/feautured_products' ); ?>
</section>
<!--END featured-->

