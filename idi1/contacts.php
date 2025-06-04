x<?php
/*
Template Name: Contacts
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

<section class="has-bg contacts">
  <div class="container">
    <h2 class="stitle contacts__title"><?php echo get_the_title($post_id); ?></h2>
    <div class="row contacts__box">
      <div class="col-lg-6">
        <p class="contacts__top-text"><?php echo get_theme_mod('setting_address', ''); ?></p>
        <div class="contacts-info">
          <a href="tel:<?php echo str_replace(array('-',' '),'',get_theme_mod('setting_tel', '')); ?>" class="contacts-info__phone"><?php echo get_theme_mod('setting_tel', ''); ?></a>
          <ul class="socials contacts-info__socials">
            <li><a href="<?php echo get_theme_mod('setting_watsap', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/contacts/viber.svg" alt=""></a></li>            
            <li><a href="<?php echo get_theme_mod('setting_tg', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/contacts/telegram.svg" alt=""></a></li>
            
          </ul>
          <a href="mailto:eugene.lebedev@vidi-corp.com" class="contacts-info__mail"><?php echo get_theme_mod('setting_email', ''); ?></a>
        </div>
        
        <div class="contacts__form">
          <h3 class="contacts__stitle">Get in touch</h3>
         
            <?php echo do_shortcode('[contact-form-7 id="153" title="contact-form"]');?>
            
              
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contacts__map">
          <div class="contacts__map-box">
            <div id="map" class="contacts__map-area"></div>
            <script>
              function initMap() {
                var uluru = {lat: 51.5200007, lng: -0.1103007};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 17,
                  center: uluru,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                /*
                var marker = new google.maps.Marker({
                  position: {lat: 51.5200007, lng: -0.1103007},
                  map: map,
                  title:"uite 436 Unit 3A 34-35 Hatton Garden Holborn London EC1N 8DX" 
                });
                */
                var image =
                  "<?php bloginfo('template_url'); ?>/assets/img/contacts/map-logo.svg";
                  var beachMarker = new google.maps.Marker({
                  position: { lat: 51.5200007, lng: -0.1103007 },
                  map,
                  icon: image,
                });
              }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHW-NEtViaXERw7Cj0R7pjDMDpbolnb-0&callback=initMap"></script>
          </div>

        </div>
        
        <div class="contacts__follow">
          <h3 class="contacts__stitle contacts__follow-title">Follow us</h3>
          <ul class="socials contacts__follow-socials">
            <li><a href="<?php echo get_theme_mod('setting_fb', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/contacts/fb.svg" alt=""></a></li>
            <li><a href="<?php echo get_theme_mod('setting_in', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/contacts/in.svg" alt=""></a></li>
            <li><a href="<?php echo get_theme_mod('setting_youtube', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/contacts/yt.svg" alt=""></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!--featured-->
<section class="featured">
  <?php get_template_part( 'template-parts/feautured_products' ); ?>
</section>
<!--END featured-->

<?php get_footer(); ?>