<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
global $datasource;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<?php 
	$gID = get_the_ID();
	 
?>
<li <?php wc_product_class( 'products__item', $product ); ?>>
	<div class="featured-card">
              <div class="of-img featured-card__img">
                <a href="<?php echo get_permalink( $gID );?>"><?php the_post_thumbnail( $gID ); ?></a>
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
                  <li><a href="#quick-order" onclick="open_popup_form('<?php the_title(); ?>'); return false;" class="sbtn featured-card__btn">Quick order</a></li>
                  <!--
                  <li><a href="<?php echo get_permalink( $gID );?>" class="sbtn featured-card__btn featured-card__btn_cart">Add to cart</a></li>
                -->
                </ul>
                 <?php 
              $product_data_source = '';
              $product_data_source_ids = get_field('product_data_source',$gID);

              if (!empty($product_data_source_ids)){
              	 $product_data_source_ids = trim($product_data_source_ids,',');
                //$product_data_source_ids = explode(',',$product_data_source_ids);

   
        $args1 = array('post__in' => array($product_data_source_ids), 'post_type' => 'datasource', 'posts_per_page' => 1000 );
        $the_query = new WP_Query( $args1 );
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ){
            $the_query->the_post();
            $gID = get_the_ID();
            $thumb = get_the_post_thumbnail( $gID );
  
          }
          $product_data_source .= $thumb; 
          wp_reset_postdata();
        }  
/*
                foreach ($product_data_source_ids as $k=>$p) {                
                  if (!empty( trim($p) ) && !empty($datasource[intval(trim($p))]['thumb']) ){
                    $product_data_source .= $datasource[intval(trim($p))]['thumb']; 
                  }
                  
                }
*/
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
