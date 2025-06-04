<?php
/*
Template Name: Technologies
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

<section class="has-bg technologies">
  <div class="container">
    <h2 class="stitle technologies__title"><?php echo get_the_title($post_id); ?></h2>
    <div class="technologies__top-text">
      <?php echo get_post( $post_id )->post_content; ?>
    </div>

    <?php 
        $args = array( 'post_type' => 'technologies', 'posts_per_page' => 1000,  'orderby' => 'date', 'order'=>'DESC' );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
          ?>
          <ul class=" technologies__list">
          <?php
        while ( $the_query->have_posts() ):
          $the_query->the_post();
          $gID = get_the_ID();
        ?>
        <li class="technologies__item d-flex ">

        <div class="technologies__img">
          <?php the_post_thumbnail( $gID ); ?>
        </div>
        <div>
          <h5 class="h5"><a href="<?php echo get_permalink( $gID );?>"><?php the_title(); ?></a></h5>
          <div>
            <?php echo nl2br(get_the_excerpt($gID)); ?>
          </div>
          <div class="d-flex justify-content-between align-items-center technologies__nav ">
            <a href="<?php echo get_permalink( $gID );?>" class="read-more " draggable="false">Read more</a>
            <div class="d-flex  technologies__btns">
              <?php 
                $tech_products_ids = get_field('tech_products_ids',$gID);
                if (!empty($tech_products_ids)): ?>
              <a href="<?php echo get_permalink( 106 );?>?ids=<?php echo trim($tech_products_ids,',');?>" class="sbtn sbtn_lg " draggable="false">view products</a>
              <?php endif; ?>
              <a href="<?php echo get_theme_mod('setting_calclink', '');?>" class="sbtn sbtn_lg sbtn_inv " draggable="false">custom order</a>
            </div>
          </div>
        </div>
      </li>
          <?php endwhile; wp_reset_postdata();  ?>   
        
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