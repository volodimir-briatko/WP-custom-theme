<?php
/*
Template Name: Services
*/
$post_id = get_the_ID();

get_header();

?>
<?php  ?>
<div class="crumbs">
  <div class="container">
    <ul class="crumbs__list">
      <li><a href="/"><span>Home</span></a></li>
      <li><span><?php echo get_the_title($post_id); ?></span></li>
    </ul>
  </div>
</div>

<section class="has-bg pservices">
  <div class="container">
    <h2 class="stitle pservices__title"><?php echo get_the_title($post_id); ?></h2>

    <div class="pservices__top-text">
     <?php echo get_post( $post_id )->post_content; ?>
    </div>
    <?php 

        $args = array( 'post_type' => 'services', 'posts_per_page' => 1000,  'orderby' => 'date', 'order'=>'DESC' );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
          ?>
          <ul class=" pservices__list">
          <?php
          $i=0;
        while ( $the_query->have_posts() ):
          $the_query->the_post();
          $gID = get_the_ID();
        ?>
        <li>
        <div class="row pservices-item  <?php if ($i%2!=0) echo 'pservices-item_inv'; ?> ">
          <div class="col-md-6">            
            <div class="service__text pservices-item__text">
              <h4><a href="<?php echo get_permalink( $gID );?>"><?php echo get_the_title( $gID );?></a></h4>
              <?php echo get_field('service_excerpt', $gID );?>
            </div>
            <a href="<?php echo get_permalink( $gID );?>" class="read-more pservices-item__read-more" draggable="false">Read more</a>           
          </div>
          <div class="col-md-6">
            <div class="pservices-item__img">
              <a href="<?php echo get_permalink( $gID );?>"><?php the_post_thumbnail( $gID ); ?></a>
            </div>
          </div>
        </div>
      </li>
        
          <?php $i++; endwhile; wp_reset_postdata();  ?>   
        
      </ul>
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