<?php
/*
Template Name: Cases
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

<section class="has-bg cases">
  <div class="container">
    <h2 class="stitle cases__title"><?php echo get_the_title($post_id); ?></h2>
    <div class="row cases__selects">
         
<?php
/*
global $wpdb;
$data = $wpdb->get_results("SELECT meta_key, count(*) as count FROM $wpdb->postmeta WHERE meta_key NOT LIKE '\_oembed%' GROUP BY meta_key");
print_r( $data );
*/
 ?>
      <div class="col-md-3">
        <select class="cselect" name="services_filter" id="services_filter">
          <option value="0">All services</option>
          <?php 

         $args = array( 'post_type' => 'services', 'posts_per_page' => 1000,  'orderby' => 'date', 'order'=>'ASC' );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :        
        while ( $the_query->have_posts() ):
          $the_query->the_post();
          $gID = get_the_ID();       
          echo '<option value="'.$gID.'">'.get_the_title( $gID ).'</option>';
        endwhile; wp_reset_postdata();  
        endif; 
        ?> 
        </select>
      </div>
      <div class="col-md-3">
        <select class="cselect" name="technologies_filter" id="technologies_filter">
          <option value="0">All technologies</option>
          <?php 
        $args = array( 'post_type' => 'technologies', 'posts_per_page' => 1000,  'orderby' => 'date', 'order'=>'ASC' );

        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :        
        while ( $the_query->have_posts() ):
          $the_query->the_post();
          $gID = get_the_ID();    

          echo '<option value="'.$gID.'">'.get_the_title( $gID ).'</option>' ;
        endwhile; wp_reset_postdata();  
        endif; 
        ?> 
        </select>
      </div>
    </div>

    <?php 
        $technologies = array();
        $args1 = array( 'post_type' => 'technologies', 'posts_per_page' => 1000 );
        $the_query = new WP_Query( $args1 );
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ){
            $the_query->the_post();
            $gID = get_the_ID();
            $technologies[$gID] = array(
                  'title' => get_the_title($gID)
                );
          }
          wp_reset_postdata();
        }

        $datasource = array();
        $args1 = array( 'post_type' => 'datasource', 'posts_per_page' => 1000 );
        $the_query = new WP_Query( $args1 );
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ){
            $the_query->the_post();
            $gID = get_the_ID();
            $datasource[$gID] = array(
                  'title' => get_the_title($gID)
                );
          }
          wp_reset_postdata();
        }

        $args = array( 'post_type' => 'cases', 'posts_per_page' => 1000,  'orderby' => 'date', 'order'=>'DESC' );

       
          ?>
          <div id="cases_content">
            <?php get_template_part( 'template-parts/cases_item', '', $args ); ?>
          </div>
        
       
         
     

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