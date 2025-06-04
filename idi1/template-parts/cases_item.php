<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Vidi
 * @since Vidi
 */
global $datasource;
global $technologies;
?>
<?php
 $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
?>
<ul class=" cases__list">
          <?php
        $i=0;
        while ( $the_query->have_posts() ):
          $the_query->the_post();
          $gID = get_the_ID();
        ?>
<li>
          
        <div class="row case <?php if ($i%2!=0) echo 'case_inv'; ?> ">
          <div class="col-lg-6">
            <div class="of-img case__img">
              <a href="<?php echo get_permalink( $gID );?>"><?php the_post_thumbnail( $gID ); ?></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="case__main">
            	<?php
              /*
$meta_values = get_post_meta( $gID, 'cases_analysis_tool', true  );
echo $meta_values;
*/
            	?>
              <h3><a href="<?php echo get_permalink( $gID );?>"><?php the_title(); ?></a></h3>
              <?php 
              $cases_data_source = '';
              $cases_data_source_ids = get_field('cases_data_source',$gID);
              if (!empty($cases_data_source_ids)){
                $cases_data_source_ids = explode(',',$cases_data_source_ids);
                foreach ($cases_data_source_ids as $k=>$p) {                
                  if (!empty( trim($p) ) && !empty($datasource[intval(trim($p))]['title']) ){
                    if ($k>0){
                      $cases_data_source .= ', ';
                    }                  
                    $cases_data_source .= $datasource[intval(trim($p))]['title']; 
                  }
                  
                }
              }


              $cases_analysis_tool = ''; 
              $cases_analysis_tool_ids = get_field('cases_analysis_tool',$gID);
              if (!empty($cases_analysis_tool_ids)){
                $cases_analysis_tool_ids = explode(',',$cases_analysis_tool_ids);
                foreach ($cases_analysis_tool_ids as $k=>$p) {                
                  if (!empty( trim($p) ) && !empty($technologies[intval(trim($p))]['title'])  ){
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
    <?php else: ?>
      <div class="h5">No cases for the specified parameters</div>
       <?php endif; ?>   