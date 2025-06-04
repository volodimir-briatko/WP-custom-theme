<?php
/*
Template Name: Products2
*/
$post_id = get_the_ID();
get_header();

?>
<div class="crumbs">
  <div class="container">
    <ul class="crumbs__list">
      <li><a href="/"><span>Home</span></a></li>
      <li><span><?php echo get_the_title($post_id); ?></span></li>
    </ul>
  </div>
</div>

<section class="has-bg products">
  <div class="container">
    <h2 class="stitle products__title"><?php echo get_the_title($post_id); ?></h2>
    <div class="products__search">

      <form role="search" autocomplete="off"  method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="text"  value="<?php echo get_search_query(); ?>"  name="s" id="products_search_inp" class="discuss-form__input search-field" placeholder="Start typing your data source">
  <input type="hidden" value="product" name="post_type" />
  <button type="submit" class="products__search-submit"></button>
<?php  
  $args = array( 'post_type' => 'product', 'posts_per_page' => 1000,  'orderby' => 'date', 'order'=>'DESC' );

        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : ?>
  <div id="products-search-list" class="products__search_list">
    <ul id="popup-cities-list">
     <?php
        while ( $the_query->have_posts() ):
          $the_query->the_post();
          $gID = get_the_ID();
        ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <? endwhile; wp_reset_postdata(); ?>
  </ul>
</div>
<? endif; ?>
</form>


    </div>
    

    <?php 
    /*
        $datasource = array();
        $args1 = array( 'post_type' => 'datasource', 'posts_per_page' => 1000 );
        $the_query = new WP_Query( $args1 );
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ){
            $the_query->the_post();
            $gID = get_the_ID();
            $thumb = get_the_post_thumbnail( $gID );
            $datasource[$gID] = array(
                  'title' => get_the_title($gID),
                   'thumb' => $thumb
                );
          }
          wp_reset_postdata();
        }
        */

        $args = array( 'post_type' => 'product', 'posts_per_page' => 1000,  'orderby' => 'date', 'order'=>'DESC' );

          if (!empty($_GET['ids'])){
    $ids1 = explode(',',$_GET['ids']);
    $ids = array();
    foreach ($ids1 as $id1) {
      $ids[] = intval($id1);
    }
    if(!empty($ids)){
      $args['post__in'] = $ids;
    }
  }
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
          ?>
           <div class="products__block">
      <ul class=" products__list">
          <?php
        while ( $the_query->have_posts() ):
          $the_query->the_post();
          $gID = get_the_ID();

          get_template_part( 'woocommerce/content-product' ); 

        ?>
        
       
          <?php endwhile; wp_reset_postdata();  ?>   
        
      </ul>
      </div>
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
</section>

<?php get_template_part( 'template-parts/gotquestions' ); ?>
<!--featured-->
<section class="featured">
  <?php get_template_part( 'template-parts/feautured_products' ); ?>
</section>
<!--END featured-->

<?php get_footer(); ?>