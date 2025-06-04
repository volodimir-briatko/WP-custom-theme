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

        $datasources = array();
        $args1 = array( 'post_type' => 'datasource', 'posts_per_page' => 1000 );
        $the_query = new WP_Query( $args1 );
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ){
            $the_query->the_post();
            $gID = get_the_ID();
            $datasources[$gID] = array(
                  'title' => get_the_title($gID)
                );
          }
          wp_reset_postdata();
        }

        $args = array( 'post_type' => 'cases', 'posts_per_page' => 5,  'orderby' => 'date', 'order'=>'DESC' );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
          ?>
 <section class="solved">
	<div class="container">
		<h2 class="stitle solved__title">Solved Cases</h2>
		<div class="solved__box">
			<div class="swiper solved__cases-box">
				<ul class="swiper-wrapper solved__cases">
          <?php
        $i=0;
        while ( $the_query->have_posts() ):
          $the_query->the_post();
          $gID = get_the_ID();
        ?>
        <li class="swiper-slide">
						<div class="solved-case">
							<div>
								<div class="of-img solved-case__img">
									<a href="<?php echo get_permalink( $gID );?>"><?php the_post_thumbnail( $gID ); ?></a>
								</div>
							</div>
							<div>
								<div class="solved-case__main">
									<h3><a href="<?php echo get_permalink( $gID );?>"><?php the_title(); ?></a></h3>
									<?php 

              $cases_data_source = ''; 
              $cases_data_source_ids = get_field('cases_data_source',$gID);
              if (!empty($cases_data_source_ids)){
                $cases_data_source_ids = explode(',',$cases_data_source_ids);
                foreach ($cases_data_source_ids as $k=>$p) {    

                  if (!empty( $datasources[intval(trim($p))]['title'] )){
                  
                    if ($k>0){
                      $cases_data_source .= ', ';
                    }                  
                    $cases_data_source .= $datasources[intval(trim($p))]['title']; 
                  }
                  
                }
              }


              $cases_analysis_tool = ''; 
              $cases_analysis_tool_ids = get_field('cases_analysis_tool',$gID);
              if (!empty($cases_analysis_tool_ids)){
                $cases_analysis_tool_ids = explode(',',$cases_analysis_tool_ids);
                foreach ($cases_analysis_tool_ids as $k=>$p) {    

                  if (!empty( $technologies[intval(trim($p))]['title'] )){
                  
                    if ($k>0){
                      $cases_analysis_tool .= ', ';
                    }                  
                    $cases_analysis_tool .= $technologies[intval(trim($p))]['title']; 
                  }
                  
                }
              }
              
              ?>
									 <?php if (!empty($cases_data_source)): ?><h4>Data Source: <?php echo $cases_data_source;?></h4><?php endif?>
									 <?php if (!empty($cases_analysis_tool)): ?><h4>Analysis Tool: <?php echo $cases_analysis_tool;?></h4><?php endif?>
									 <p><?php echo nl2br(get_the_excerpt($gID)); ?></p>
									<a href="<?php echo get_permalink( $gID );?>" class="read-more">View case</a>
								</div>
							</div>
						</div>
					</li>
       
          <?php  $i++; endwhile; wp_reset_postdata();  ?>   
        
      </ul>
			</div>
			<div class="swiper-nav">
				<a href="<?php echo get_permalink(23);?>" class="sbtn swiper-nav__view-all">View all</a>
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
</section>
      <?php endif; ?>   

					
					
				