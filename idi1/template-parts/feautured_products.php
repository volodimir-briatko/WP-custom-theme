<?php
/**
 * Template part for all
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Vidi
 * @since Vidi
 */

?>
<?php 
        $datasource = array();
        $args1 = array( 'post_type' => 'datasource', 'posts_per_page' => 1000 );
        $the_query = new WP_Query( $args1 );
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ){
            $the_query->the_post();
            $gID = get_the_ID();
            $thumb = get_the_post_thumbnail( $gID );
            if (empty($thumb) && has_post_thumbnail()){
                    $little_image = wp_get_attachment_image_src( get_post_thumbnail_id(),'thumbnail');
                    $thumb = '<img src="'.$little_image[0].'" width="40" height="40">';
                   }
            $datasource[$gID] = array(
                  'title' => get_the_title($gID),
                   'thumb' => $thumb
                );
          }
          wp_reset_postdata();
        }

       

        $args = array( 'post_type' => 'product', 'posts_per_page' => 6,  'orderby' => 'date', 'order'=>'DESC' );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
          ?>

<div class="container">
		<h2 class="stitle featured__title">Featured products</h2>
		<div class="featured__box">
			<div class="swiper featured__list-box">
				<ul class="swiper-wrapper featured__list">
					  <?php
        while ( $the_query->have_posts() ):
          $the_query->the_post();
          $gID = get_the_ID();


        ?>
					<li class="swiper-slide">
						<div class="featured-card">
							<div class="of-img featured-card__img">
								<a href="<?php echo get_permalink( $gID );?>">
                  <?php 
                  echo $gID; 
        
         
                   $thumb2 = get_the_post_thumbnail( $gID ); 
                   if (empty($thumb2) && has_post_thumbnail()){
                    $large_image = wp_get_attachment_image_src( get_post_thumbnail_id(),'large');
                    $thumb2 = '<img src="'.$large_image[0].'" width="350" height="240">';
                   }

                   echo $thumb2;
                  ?></a>
							</div>
							<div class="featured-card__main">
								<h4 class="featured-card__title"><a href="<?php echo get_permalink( $gID );?>"><?php the_title(); ?></a></h4>
								<p class="featured-card__prices">
									 <?php
            $product_price_for_month = get_field('product_price_for_month',$gID);
            $product_price_for_setup = get_field('product_price_for_setup',$gID);
            ?>
            <?php if (!empty($product_price_for_month)):?>
   
            <span><b>$<?php echo $product_price_for_month;?></b> / month and</span>
            <?php endif;?>
            <?php if (!empty($product_price_for_setup)):?>
            <span><b>$<?php echo $product_price_for_setup;?></b> set up costs</span>
            <?php endif;?>
								</p>
								<ul class="featured-card__btns">
									 <li><a href="<?php echo get_permalink(27);?>" class="sbtn sbtn_inv featured-card__btn">Customize</a></li>
                  <li><a href="#quick-order" class="sbtn featured-card__btn" onclick="open_popup_form('<?php the_title(); ?>'); return false;">Quick order</a></li>
								</ul>
								<?php 
              $product_data_source = '';
              $product_data_source_ids = get_field('product_data_source',$gID);

              if (!empty($product_data_source_ids)){
                $product_data_source_ids = explode(',',$product_data_source_ids);
                foreach ($product_data_source_ids as $k=>$p) {    

                  if (!empty( trim($p) ) && !empty($datasource[intval(trim($p))]['thumb']) ){
                    $product_data_source .= $datasource[intval(trim($p))]['thumb']; 
                  }
                  
                }
              }
              ?>
              <?php if (!empty($product_data_source)): ?>
                <p class="featured-card__used">
                  <span>Data sourse used:</span>
                  <?php echo $product_data_source; ?>
                </p>
              <?php endif;?>
							</div>
						</div>
					</li>
					 <?php endwhile; wp_reset_postdata();  ?>  
				</ul>
			</div>
			<div class="swiper-nav">
				<a href="<?php echo get_permalink(106);?>" class="sbtn swiper-nav__view-all">View all</a>
				<ul class="swiper-nav__arrows">
					<li>
						<button class="sbtn swiper-nav__arrow swiper-nav__arrow_left"></button>
					</li>
					<li>
						<button class="sbtn swiper-nav__arrow swiper-nav__arrow_right"></button>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php endif; ?>   