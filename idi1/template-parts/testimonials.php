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
        $testimonials = array();
        
        if (is_front_page()){ 
          $testimonial_perpage = 3;
          $testimonial_class = 'clients-say__list-box_1';
        } else {
          $testimonial_perpage = 1000;
          $testimonial_class = 'clients-say__list-box_2';
        }
       
       
        $args = array( 'post_type' => 'testimonials', 'posts_per_page' => $testimonial_perpage,  'orderby' => 'date', 'order'=>'DESC' );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
          ?>

<div class="clients-say__box">
      <div class="swiper clients-say__list-box <?php echo $testimonial_class;?>">
        <ul class="swiper-wrapper clients-say__list">
					  <?php
        while ( $the_query->have_posts() ):
          $the_query->the_post();
          $gID = get_the_ID();
          $video_url = get_field('testimonials_video',$gID);
          $video_url1 = parse_url($video_url, PHP_URL_QUERY);
           mb_parse_str($video_url1,$video_url1);
          $video_url1 = $video_url1['v'];

        ?>
        <li class="swiper-slide">
            <div class="clients-sitem">
              <div class="of-img clients-sitem__img">
                <?php the_post_thumbnail();?>
                <a href="<?php echo $video_url; ?>" onclick="get_video('<?php echo $video_url1; ?>'); return false;"></a>
              </div>
              <div class="clients-sitem__main">
                <p class="clients-sitem__name"><?php the_title(); ?></p>
                <p class="clients-sitem__info"><?php echo get_field('testimonials_сompany',$gID); ?> <br><?php echo get_field('testimonials_position',$gID); ?></p>
              </div>
            </div>
          </li> 
					
					 <?php endwhile; wp_reset_postdata();  ?>  
				</ul>
      </div>

      <div class="swiper-nav">
        <a href="<?php echo get_permalink(21);?>#testimonials" class="sbtn swiper-nav__view-all">All testimonials</a>
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
	<?php endif; ?>   