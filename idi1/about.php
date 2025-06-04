<?php
/*
Template Name: About
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

<section class="has-bg about-main">
  <div class="container">
    <h2 class="stitle about-main__title"><?php echo get_the_title($post_id); ?></h2>
    <div class="about-main__content">
      <div class="of-img about-main__img">
        <?php the_post_thumbnail( $post_id ); ?>
      </div>
      <?php echo wpautop(get_post( $post_id )->post_content); ?>
    </div>  
  </div>
</section>

<section class="prevented">
  <div class="container">
    <ul class="row prevented__list">
      <li class="col-sm-6">
        <div class="row prevented-item">
          <div class="col-xl-6">
            <div class="prevented-item__logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/prevented/1.svg" alt="">
            </div>
          </div>
          <div class="col-xl-6">
            <p class="prevented-item__text">
              (+1,150 every month)
              <b>Prevented 3850 kg</b>
              <span>of Carbon with Climeworks</span>
            </p>
          </div>
        </div>
      </li>
      <li class="col-sm-6">
        <div class="row prevented-item">
          <div class="col-xl-6">
            <div class="prevented-item__logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/prevented/2.svg" alt="">
            </div>
          </div>
          <div class="col-xl-6">
            <p class="prevented-item__text">
              (+4000 every month)
              <b>Prevented 8000 kg</b>
              <span>of Carbon with Tradewater</span>
            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="values">
  <div class="container">
    <h3 class="stitle values__title">Company Values</h3>
    <ul class="row values__list">
      <li class="col-lg-6">
        <div class="values-item">
          <div>
            <div class="values-item__img">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/values/1.svg" alt="">
            </div>
          </div>
          <div>
            <div class="values-item__text">
              <h4>Quality first</h4>
              <p>We pay a great deal of attention to setting expectations for our deliverables and meeting or exceeding them.</p>
            </div>
          </div>
        </div>
      </li>
      <li class="col-lg-6">
        <div class="values-item">
          <div>
            <div class="values-item__img">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/values/2.svg" alt="">
            </div>
          </div>
          <div>
            <div class="values-item__text">
              <h4>Make an impact</h4>
              <p>For us Vidi Corp is not just the company. This is our way to make a positive impact on our world and the way our clients work.</p>
            </div>
          </div>
        </div>
      </li>
      <li class="col-lg-6">
        <div class="values-item">
          <div>
            <div class="values-item__img">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/values/3.svg" alt="">
            </div>
          </div>
          <div>
            <div class="values-item__text">
              <h4>Speed of execution</h4>
              <p>It is important for us that clients start getting value from working with us shortly after we start the work</p>
            </div>
          </div>
        </div>
      </li>
      <li class="col-lg-6">
        <div class="values-item">
          <div>
            <div class="values-item__img">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/values/4.svg" alt="">
            </div>
          </div>
          <div>
            <div class="values-item__text">
              <h4>Responsiveness</h4>
              <p>We emphasise the quick responses to communication from our clients</p>
            </div>
          </div>
        </div>
      </li>
      <li class="col">
        <div class="values-item">
          <div>
            <div class="values-item__img">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/values/5.svg" alt="">
            </div>
          </div>
          <div>
            <div class="values-item__text">
              <h4>Hire and develop the brightest</h4>
              <p>We greatly appreciate that the quality of our talent directly translates into the quality of our work. This is why we make sure that we hire highly professional developers and give them the support they need to tackle the complex problems our clients face.</p>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="clients-say noslider" id="testimonials">
  <div class="container ">
    <h2 class="stitle clients-say__title">What clients say</h2>
        
    <?php get_template_part( 'template-parts/testimonials' ); ?>
    
  </div>
</section>

<?php get_template_part( 'template-parts/gotquestions' ); ?>
<!--featured-->
<section class="featured">
  <?php get_template_part( 'template-parts/feautured_products' ); ?>
</section>
<!--END featured-->

<?php get_footer(); ?>