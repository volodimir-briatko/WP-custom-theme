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
$post_id = get_the_ID();
?>

<div class="crumbs">
	<div class="container">
		<ul class="crumbs__list">
			<li><a href="/"><span>Home</span></a></li>
			<li><a href="<?php echo get_permalink(23);?>"><?php echo get_the_title(23); ?></a></li>
			<li><span><?php the_title(); ?></span></li>
		</ul>
	</div>
</div>
<?php
	 $technologies = array();
	 $cases_analysis_tool_ids = get_field('cases_analysis_tool',$post_id);
	  if (!empty($cases_analysis_tool_ids)){
        $args1 = array( 'post_type' => 'technologies', 'posts_per_page' => 1000,'post__in' => explode(',',$cases_analysis_tool_ids) );
        $the_query = new WP_Query( $args1 );
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ){
            $the_query->the_post();
            $gID = get_the_ID();
            $thumb = get_the_post_thumbnail( $gID );
            $technologies[$gID] = array(
                  'title' => get_the_title($gID),
                  'thumb' => $thumb
                );
          }
          wp_reset_postdata();
        }
    }


       $datasources = array();
		 $cases_data_source_ids = get_field('cases_data_source',$post_id);
		  if (!empty($cases_analysis_tool_ids)){
	        $args1 = array( 'post_type' => 'datasource', 'posts_per_page' => 1000,'post__in' => explode(',',$cases_data_source_ids) );
	        $the_query = new WP_Query( $args1 );
	        if ( $the_query->have_posts() ) {
	          while ( $the_query->have_posts() ){
	            $the_query->the_post();
	            $gID = get_the_ID();
	      
	            $datasources[] = array(
	                  'title' => get_the_title($gID)
	                );
	          }
	          wp_reset_postdata();
	        }
	    }

?>
<!--text_page-->
<section class="has-bg blog_item">
	<div class="container">
		<h2 class="stitle"><?php the_title(); ?></h2>
		<div class="case__decription row">
			<?php if (!empty(get_field('cases_excerpt',$post_id))):?>
			<div class=" col-12 col-md-6 ">
				<div class="case__decription-text">
					<p><?php echo nl2br(get_field('cases_excerpt',$post_id)); ?></p>
				</div>
			</div>
			<?php endif;?>
			<div class="case__decription-data col-12 col-md-6">
				<?php if (!empty($datasources)): ?>
				<p><strong style="font-size: 130%; color: #4584CC;">Data Source</strong><br>
				<?php	
				$k = 0;
					foreach ($datasources as $p) {
						if (!empty($p['title'])){
							if ( $k>0) echo ', ';
							echo $p['title'];
							$k++;
						}
						
					}
				?>	</p>
				<?php endif;?>
				
				<?php if (!empty($technologies)): ?>
					<p><strong style="font-size: 130%; color: #4584CC;">Analysis Tool</strong></p>
				<p>
				<?php	
					$k = 0;
					foreach ($technologies as $p) {
						if ( !empty($p['title']) ){
						if ( $k>0) echo ', ';
						echo $p['thumb'].' '.$p['title'];
						$k++;
						}
					}
				?>	
				</p>
				<?php endif; ?>
			</div>
			
		</div>
		<div class="text_page text_page1">
			<?php 
		
			$content = get_the_content($post_id);
			if ( !empty(get_field('info_button_description')) || !empty(get_field('info_button_text')) ){
				$info = '<div class="d-flex justify-content-between align-items-center services__calculate">
				<p>'.nl2br(get_field('info_button_description')).'</p>
				<p><a href="'.get_theme_mod('setting_calclink', '').'" class="sbtn sbtn_inv sbtn_big" draggable="false">'.get_field('info_button_text').'</a></p>
			</div>';
			$content = (str_replace('{custom_info}',$info,$content));
			}
			echo wpautop($content);	
			?>
		</div>
		<script>
			var text_tables = document.querySelectorAll('.text_page table');
			for ( i=0; i<text_tables.length; i++ ) {
			  text_tables[i].insertAdjacentHTML("beforeBegin", '<div class="table">'+text_tables[i].outerHTML+'</div>');
			  text_tables[i].remove();
			}
		</script>	
		<div class="d-flex justify-content-between blog_item__nav">

			<div class="blog_item__nav-item">
			<?php
//print_r(get_previous_post());
//print_r(get_adjacent_post() );
//print_r( get_previous_post_link() );

				$previous_post_link = get_previous_post_link('%link', '%title', false);
				if ($previous_post_link):
				
			?>
				<p><?php echo $previous_post_link;?></p>
				<p><?php echo str_replace( '<a ', '<a class="read-more read-more__left" ', get_previous_post_link( '%link', 'previous case', false ) ); ?></p>
				
			<?php endif;?>
			</div>
			<div class="blog_item__nav-item">
			<?php
				$next_post_link = get_next_post_link('%link', '%title', false);
				if ($next_post_link):
			?>
				<p><?php echo $next_post_link;?></p>
				<p><?php echo str_replace( '<a ', '<a class="read-more" ', get_next_post_link( '%link', 'next case', false ) ); ?></p>
			<?php endif;?>
			</div>
		</div>
	</div>
</section>
<!--text_page END-->
<?php get_template_part( 'template-parts/gotquestions' ); ?>

<!--featured-->
<section class="featured">
	<?php get_template_part( 'template-parts/feautured_products' ); ?>
</section>
<!--END featured-->