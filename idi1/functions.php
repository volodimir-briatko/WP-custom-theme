<?php

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' ); 


// include custom jQuery
function shapeSpace_include_custom_jquery() {
 wp_deregister_script('jquery');
 //wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');


add_action( 'wp_enqueue_scripts', 'custom_style' );
function custom_style() {
	// css files
	wp_enqueue_style( 'libs.min', get_template_directory_uri().'/assets/css/libs.min.css' );
	wp_enqueue_style( 'style.min', get_template_directory_uri().'/assets/css/styles.css' );

	
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );
function custom_scripts() {
	// js files
	wp_deregister_script('jquery');
	wp_enqueue_script( 'libs.min', get_template_directory_uri() .'/assets/js/libs.min.js', array(), '1.1', true );
	wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/scripts.js', array(), '1.2', true );
}

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

add_theme_support( 'title-tag' );







?><?php

add_action('init', 'my_custom_init');
function my_custom_init(){

	//Technologies
	register_post_type('technologies', array(
		'labels'             => array(
			'name'               => 'Technologies', 
			'singular_name'      => 'Technologies', 
			'add_new'            => 'Add item',
			'add_new_item'       => 'Add item',
			'edit_item'          => 'Redact item',
			'new_item'           => 'New item',
			'view_item'          => 'View ',
			'search_items'       => 'Find item',
			'not_found'          => 'No items found',
			'not_found_in_trash' => 'No entries found in the trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Technologies'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'rewrite' => array( 'slug'=>'technologies', 'with_front' => false ),
		'has_archive' => false,


		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt','custom-fields','page-attributes'),




	) );


	//Cases
	register_post_type('cases', array(
		'labels'             => array(
			'name'               => 'Cases', 
			'singular_name'      => 'Cases', 
			'add_new'            => 'Add item',
			'add_new_item'       => 'Add item',
			'edit_item'          => 'Redact item',
			'new_item'           => 'New item',
			'view_item'          => 'View ',
			'search_items'       => 'Find item',
			'not_found'          => 'No items found',
			'not_found_in_trash' => 'No entries found in the trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Cases'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'rewrite' => array( 'slug'=>'cases', 'with_front' => false ),
		'has_archive' => false,


		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt','custom-fields','page-attributes'),

	) );

	//services
	register_post_type('services', array(
		'labels'             => array(
			'name'               => 'Services', 
			'singular_name'      => 'Services', 
			'add_new'            => 'Add item',
			'add_new_item'       => 'Add item',
			'edit_item'          => 'Redact item',
			'new_item'           => 'New item',
			'view_item'          => 'View ',
			'search_items'       => 'Find item',
			'not_found'          => 'No items found',
			'not_found_in_trash' => 'No entries found in the trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Services'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'rewrite' => array( 'slug'=>'services', 'with_front' => false ),
		'has_archive' => false,


		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','custom-fields','page-attributes'),

	) );

	//services
	register_post_type('datasource', array(
		'labels'             => array(
			'name'               => 'Data Source', 
			'singular_name'      => 'Data Source', 
			'add_new'            => 'Add item',
			'add_new_item'       => 'Add item',
			'edit_item'          => 'Redact item',
			'new_item'           => 'New item',
			'view_item'          => 'View ',
			'search_items'       => 'Find item',
			'not_found'          => 'No items found',
			'not_found_in_trash' => 'No entries found in the trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Data Source'

		  ),
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail','custom-fields','page-attributes'),

	) );


	//testimonials
	register_post_type('testimonials', array(
		'labels'             => array(
			'name'               => 'Testimonials', 
			'singular_name'      => 'Testimonials', 
			'add_new'            => 'Add item',
			'add_new_item'       => 'Add item',
			'edit_item'          => 'Redact item',
			'new_item'           => 'New item',
			'view_item'          => 'View ',
			'search_items'       => 'Find item',
			'not_found'          => 'No items found',
			'not_found_in_trash' => 'No entries found in the trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Testimonials'

		  ),
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail','custom-fields','page-attributes'),

	) );

	//customers
	register_post_type('customers', array(
		'labels'             => array(
			'name'               => 'Our customers', 
			'singular_name'      => 'Our customers', 
			'add_new'            => 'Add item',
			'add_new_item'       => 'Add item',
			'edit_item'          => 'Redact item',
			'new_item'           => 'New item',
			'view_item'          => 'View ',
			'search_items'       => 'Find item',
			'not_found'          => 'No items found',
			'not_found_in_trash' => 'No entries found in the trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Our customers'

		  ),
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail','custom-fields','page-attributes'),

	) );
}

/*
add_action('admin_menu', function(){
   add_theme_page('Settings1', 'Settings1', 'edit_theme_options', 'customize.php');
});
*/
	add_action('customize_register', function($customizer){
    
    $customizer->add_section(
        'example_section_one',
        array(
            'title' => 'Settings',
            'description' => 'Contacts',
            'priority' => 11,
        )
    );

function add_setting1($customizer,$name1,$name2,$type='text'){
	$customizer->add_setting(
	    $name1,
	    array('default' => '')
	);
	if ($type==='file_upload'){
		$customizer->add_control(
		    new WP_Customize_Upload_Control(
		        $customizer,
		        $name1,
		        array(
		            'label' => $name2,
		            'section' => 'example_section_one',
		            'settings' => $name1
		        )
		    )
		);
	} else {
		$customizer->add_control(
	    $name1,
	    array(
	        'label' => $name2,
	        'section' => 'example_section_one',
	        'type' => $type,
	    )
		);	
	}
	
}
	add_setting1($customizer,'setting_tel','Telephone');
	add_setting1($customizer,'setting_address','Address','textarea');
	add_setting1($customizer,'setting_copiright','Copiright','textarea');
	add_setting1($customizer,'setting_email','Email');
	add_setting1($customizer,'setting_calclink','Link to calculator');
	add_setting1($customizer,'setting_tg','Telegram link');
	add_setting1($customizer,'setting_watsap','Watsapp link');

	add_setting1($customizer,'setting_fb','Facebook link');
	add_setting1($customizer,'setting_youtube','Youtube link');
	add_setting1($customizer,'setting_in','Linkedin link');
	add_setting1($customizer,'logo_upload','Logo','file_upload');

});


/*
add_filter('manage_posts_columns', 'my_add_post_column_yoast_wpseo_metadesc');
function my_add_post_column_yoast_wpseo_metadesc($columns) {
	if (strripos($_SERVER['REQUEST_URI'], 'post_type=dt_care') !== false) {
    	$columns['yoast_wpseo_metadesc'] = __('Категория');
	}
    return $columns;
}


add_action('manage_posts_custom_column' , 'my_set_posts_column_value_meta_desc', 10, 2);
function my_set_posts_column_value_meta_desc($column, $post_id) {
    if ($column == 'yoast_wpseo_metadesc') {
    	echo  get_field( 'micro_category', $post_id );
        //echo get_post_meta($post_id, '_yoast_wpseo_metadesc', true);
    }
}
*/


/*
add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	$mimes['ico']  = 'image/x-icon';
	return $mimes;
}
*/




function main_newbie_memo( $post_type ) {
	$get_post_type = get_post_type();
	if ($get_post_type=='cases'){

?>
    <div class="meta-box-sortables ui-sortable" style="margin-bottom: 20px;">
    <div class="after-title-help postbox" style="margin-top:10px;margin-bottom:0;">
       <div class="postbox-header"><h2 class="hndle ui-sortable-handle">Analysis Tool</h2>
<div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="box_info_company-handle-order-higher-description"><span class="screen-reader-text">Move up</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="box_info_company-handle-order-higher-description">Move Analysis Tool box up</span><button type="button" class="handle-order-lower" aria-disabled="true" aria-describedby="box_info_company-handle-order-lower-description"><span class="screen-reader-text">Move down</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="box_info_company-handle-order-lower-description">Move Analysis Tool box down</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Analysis Tool</span><span class="toggle-indicator" aria-hidden="true"></span></button></div></div>
        

<div class="insta_photos_list">
					<?php 
 	$args2 = array( 'post_type' => 'technologies', 'posts_per_page' => 1000, 'orderby' => 'sort', 'order' => 'ASC' );
   $the_query2 = new WP_Query( $args2 );
   if ( $the_query2->have_posts() ) {
   	 while ( $the_query2->have_posts() ){
                $the_query2->the_post();
                $postid2 = get_the_ID();
   				echo '<div>';
   				echo '<label>'.get_the_post_thumbnail( null, 'thumbnail' ).'  <br> <input type="checkbox" class="photos_choice" value="'.$postid2.'"></label>';
   				echo '</div>';
   		}
   		
   } 
   wp_reset_postdata();
				?>
				</div>



    </div>
    </div>


    <div class="meta-box-sortables ui-sortable" style="margin-bottom: 20px;">
    <div class="after-title-help postbox" style="margin-top:10px;margin-bottom:0;">
       <div class="postbox-header"><h2 class="hndle ui-sortable-handle">Services</h2>
<div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="box_info_company-handle-order-higher-description"><span class="screen-reader-text">Move up</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="box_info_company-handle-order-higher-description2">Move Services box up</span><button type="button" class="handle-order-lower" aria-disabled="true" aria-describedby="box_info_company-handle-order-lower-description"><span class="screen-reader-text">Move down</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="box_info_company-handle-order-lower-description2">Move Services box down</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Services</span><span class="toggle-indicator" aria-hidden="true"></span></button></div></div>
        

<div class="insta_photos_list">
					<?php 
 	$args2 = array( 'post_type' => 'services', 'posts_per_page' => 1000, 'orderby' => 'sort', 'order' => 'ASC' );
   $the_query2 = new WP_Query( $args2 );
   if ( $the_query2->have_posts() ) {
   	 while ( $the_query2->have_posts() ){
                $the_query2->the_post();
                $postid2 = get_the_ID();
   				echo '<div>';
   				echo '<label>  <input type="checkbox" class="photos_choice" value="'.$postid2.'"> <br>  '.get_the_title().'</label>';
   				echo '</div>';
   		}
   		

   }  
   wp_reset_postdata();
				?>
				</div>



    </div>
    </div>

    
<?php
}

	if ($get_post_type=='cases' || $get_post_type=='product'){
   	?>
   		<div class="meta-box-sortables ui-sortable" style="margin-bottom: 20px;">
    <div class="after-title-help postbox" style="margin-top:10px;margin-bottom:0;">
       <div class="postbox-header"><h2 class="hndle ui-sortable-handle">Data Source</h2>
<div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="box_info_company-handle-order-higher-description"><span class="screen-reader-text">Move up</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="box_info_company-handle-order-higher-description3">Move Data Source box up</span><button type="button" class="handle-order-lower" aria-disabled="true" aria-describedby="box_info_company-handle-order-lower-description"><span class="screen-reader-text">Move down</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="box_info_company-handle-order-lower-description3">Move Data Source box down</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Data Source</span><span class="toggle-indicator" aria-hidden="true"></span></button></div></div>
        

<div class="insta_photos_list">
					<?php 


   $my_posts = get_posts( array(
	'numberposts' => 1000,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'datasource',
	'suppress_filters' => true, 
) );

foreach( $my_posts as $post ){
	setup_postdata( $post );
	$postid2 =  $post->ID;

   echo '<div>';
   				echo '<label>   <input type="checkbox" class="photos_choice2" value="'.$postid2.'"><br>'.get_the_post_thumbnail( $postid2, 'thumbnail' ).'<br>'.$post->post_title.'</label>';
   				echo '</div>';
}

wp_reset_postdata(); // reset

				?>
				</div>



    </div>
    </div>

   	<?php		
   		}

   		if ($get_post_type=='technologies' ){
   	?>
   		<div class="meta-box-sortables ui-sortable" style="margin-bottom: 20px;">
    <div class="after-title-help postbox" style="margin-top:10px;margin-bottom:0;">
       <div class="postbox-header">
       	<h2 class="hndle ui-sortable-handle">Products</h2>
<div class="handle-actions hide-if-no-js"><button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="box_info_company-handle-order-higher-description"><span class="screen-reader-text">Move up</span><span class="order-higher-indicator" aria-hidden="true"></span></button><span class="hidden" id="box_info_company-handle-order-higher-technologies">Move Products box up</span><button type="button" class="handle-order-lower" aria-disabled="true" aria-describedby="box_info_company-handle-order-lower-description"><span class="screen-reader-text">Move down</span><span class="order-lower-indicator" aria-hidden="true"></span></button><span class="hidden" id="box_info_company-handle-order-lower-technologies">Move Products box down</span><button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Toggle panel: Products</span><span class="toggle-indicator" aria-hidden="true"></span></button></div></div>
        

<div class="insta_photos_list">
					<?php 


   $my_posts = get_posts( array(
	'numberposts' => 1000,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'product',
	'suppress_filters' => true, 
) );

foreach( $my_posts as $post ){
	setup_postdata( $post );
	$postid2 =  $post->ID;

   echo '<div>';
   				echo '<label>   <input type="checkbox" class="photos_choice3" value="'.$postid2.'"><br>'.$post->post_title.'</label>';
   				echo '</div>';
}

wp_reset_postdata(); // reset

				?>
				</div>



    </div>
    </div>

   	<?php		
   		}

   	if ($get_post_type=='cases' || $get_post_type=='product' || $get_post_type=='technologies'){
?>
	<style>
		.insta_photos_list {
			display: flex;
			width: 100%;
			flex-wrap: wrap;
			padding-top: 15px;
		}
		.insta_photos_list div {
			width: 100px;
			margin-right: 15px;
			text-align:center;
			padding-bottom:15px;
			text-align: center;
			margin-top: 10px;
		}
		.insta_photos_list div img {
			width: auto;
			height: 60px;
			margin-top: 5px;
		}
		#cases_analysis_tool, #product_data_source, #cases_data_source, #tech_products_ids {
			 display: none; 
		}
		</style>
<script>
			jQuery(document).ready(function ($) {
				if ($('#tech_products_ids input').length>0){
            var spl =	$('#tech_products_ids input').val().split(',');
            for (i=0; i<spl.length; i++){
                $('.photos_choice3[value="'+spl[i]+'"]').attr('checked',true);
            }
            var is_checked,tIds;
				// add box
				$('.photos_choice3').click(function () {
				    tIds = '';
					$('.photos_choice3').each(function(){
					    is_checked = $(this).is(':checked');
                        if(is_checked){ 
                            tIds += $(this).val()+',';
                        }
					})
					$('#tech_products_ids input').val(tIds)
				});
			}


				if ($('#cases_analysis_tool input').length>0){
            var spl =	$('#cases_analysis_tool input').val().split(',');
            for (i=0; i<spl.length; i++){
                $('.photos_choice[value="'+spl[i]+'"]').attr('checked',true);
            }
            var is_checked,tIds;
				// add box
				$('.photos_choice').click(function () {
				    tIds = '';
					$('.photos_choice').each(function(){
					    is_checked = $(this).is(':checked');
                        if(is_checked){ 
                            tIds += $(this).val()+',';
                        }
					})
					$('#cases_analysis_tool input').val(tIds)
				});
			}
		
			if ($('#cases_data_source input').length>0 || $('#product_data_source input').length>0){
				if ($('#cases_data_source input').length>0){
					var spl =	$('#cases_data_source input').val().split(',');
				} else {
					var spl =	$('#product_data_source input').val().split(',');
				}
            
            for (i=0; i<spl.length; i++){
                $('.photos_choice2[value="'+spl[i]+'"]').attr('checked',true);
            }
            var is_checked,tIds;
				// add box
				$('.photos_choice2').click(function () {
				    tIds = '';
					$('.photos_choice2').each(function(){
					    is_checked = $(this).is(':checked');
                        if(is_checked){ 
                            tIds += $(this).val()+',';
                        }
					})
					$('#cases_data_source input,#product_data_source input').val(tIds)
				});
			}

			});
		</script>
<?php
   	}

}

	add_action( 'edit_form_advanced', 'main_newbie_memo' );




new My_Best_Metaboxes;

class My_Best_Metaboxes {

	public $post_type = 'product';

	static $meta_key = 'faq_question';
	static $meta_key2 = 'faq_answear';

	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_metabox' ) );
		add_action( 'save_post_' . $this->post_type, array( $this, 'save_metabox' ) );
		add_action( 'admin_print_footer_scripts', array( $this, 'show_assets' ), 10, 999 );
	}

	## add metaboxes
	public function add_metabox() {
		add_meta_box( 'box_faq', 'FAQ', array( $this, 'render_metabox' ), $this->post_type, 'advanced', 'high' );
	}

	## view metaboxes in admin page
	public function render_metabox( $post ) {

		?>
		 <button type="button" class=" add-company-address" title="Add question"><span class="dashicons dashicons-plus-alt"></span> Add question</button>
		<table class="form-table company-info">
			<tr>
			
				<td class="company-address-list">
					
					<?php
					$input = '<input type="text" placeholder="question" name="'. self::$meta_key .'[]" value="%s">';
					$input2 = '<textarea  placeholder="answear" name="'. self::$meta_key2 .'[]" >%s</textarea>';

					$addresses = get_post_meta( $post->ID, self::$meta_key, true );
					$service_text = get_post_meta( $post->ID, self::$meta_key2, true );

					if ( is_array( $addresses ) ) {
						foreach ( $addresses as $key => $addr ) {
							echo '
					<table style="width: 100%" class="item-address_td">
						<tr>
							<td><span class="item-address" >';
						printf( $input, esc_attr( $addr ) );

						printf( $input2, esc_attr( $service_text[$key] ) );
						echo '
					</span></td>
				<td style="width: 22px"><span class="dashicons dashicons-trash remove-company-address"></span></td>
			</tr>
		</table>
					';
							//printf( $input, esc_attr( $addr ) );
						}
					} else {
						echo '
					<table style="width: 100%" class="item-address_td">
						<tr>
							<td><span class="item-address" >';
						printf( $input, '' );
						printf( $input2, '' );
						echo '
					</span></td>
				<td style="width: 22px"><span class="dashicons dashicons-trash remove-company-address"></span></td>
			</tr>
		</table>
					';
					}
					?>
				
				</td>
			</tr>

		</table>

		<?php
	}

	## save fields
	public function save_metabox( $post_id ) {

		// Check if it's not an autosave.
		if ( wp_is_post_autosave( $post_id ) )
			return;

		if ( isset( $_POST[self::$meta_key] ) && is_array( $_POST[self::$meta_key] ) ) {
			$addresses = $_POST[self::$meta_key];

			$addresses = array_map( 'sanitize_text_field', $addresses ); // clear

			$addresses = array_filter( $addresses ); //  clear empty

			if ( $addresses ) 
				update_post_meta( $post_id, self::$meta_key, $addresses );
			else 
				delete_post_meta( $post_id, self::$meta_key );

		}
		if ( isset( $_POST[self::$meta_key2] ) && is_array( $_POST[self::$meta_key2] ) ) {
			$addresses2 = $_POST[self::$meta_key2];

			$addresses2 = array_map( 'sanitize_text_field', $addresses2 ); // clear

			$addresses2 = array_filter( $addresses2 ); // clear empty

			if ( $addresses2 ) 
				update_post_meta( $post_id, self::$meta_key2, $addresses2 );
			else 
				delete_post_meta( $post_id, self::$meta_key2 );

		}
	}

	## add scripts and styles
	public function show_assets() {
		if ( is_admin() && get_current_screen()->id == $this->post_type ) {
			$this->show_styles();
			$this->show_scripts();
		}
	}

	## view css
	public function show_styles() {
		?>
		<style>
		.company-address-list {
			vertical-align: top;
		}
		td.company-address-list, td.company-address-list td {
			padding: 10px 0;
			vertical-align: top;
		}
			.add-company-address {
				color: #00a0d2;
				cursor: pointer;
			}
			.company-address-list .item-address {
				display: flex;
				
				margin-bottom: 5px;
				flex-direction: column;
			}
			.company-address-list .item-address input,
			.company-address-list .item-address textarea {
				width: 100%;
				margin-top: 5px;
			}
			.remove-company-address {
				color: brown;
				cursor: pointer;
			}
		</style>
		<?php
	}

	## view JS
	public function show_scripts() {
		?>
		<script>
			jQuery(document).ready(function ($) {

				var $companyInfo = $('.company-info');

				// add box
				$('.add-company-address').click(function () {
					var $list = $('.company-address-list');
						$item = $('.item-address_td:first').clone();

					$item.find('input').val(''); 
					$item.find('textarea').val(''); 

					$list.append( $item );
				});

				// delete box
				$companyInfo.on('click', '.remove-company-address', function () {
					if ($('.item-address').length > 1) {
						$(this).closest('.item-address_td').remove();
					}
					else {
						$(this).closest('.item-address_td').find('input').val('');
						$(this).closest('.item-address_td').find('textarea').val('');
					}
				});

			});
		</script>
		<?php
	}

}

/*

 function footer_enqueue_scripts(){ 
	 remove_action('wp_head','wp_print_scripts'); 
	 remove_action('wp_head','wp_print_head_scripts',9); 
	 remove_action('wp_head','wp_enqueue_scripts',1); 
	 add_action('wp_footer','wp_print_scripts',5); 
	 add_action('wp_footer','wp_enqueue_scripts',5); 
	 add_action('wp_footer','wp_print_head_scripts',5); 
 } 
 add_action('after_setup_theme','footer_enqueue_scripts');

if ( !is_admin() ) wp_deregister_script('jquery'); remove_action( 'wp_head', 'rsd_link' ); remove_action( 'wp_head', 'wlwmanifest_link' ); remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); remove_action( 'wp_head', 'wp_generator' ); remove_action( 'wp_head', 'feed_links_extra', 3 );
*/

	add_action( 'pre_get_posts', 'search_filter' );
	function search_filter( $query ){

		if( ! is_admin() && $query->is_main_query() && $query->is_search ){
			if (empty($query->query['post_type'])){
				$query->set( 'post_type', 'page' );
				$query->set( 'post_type', 'post' );
				$query->set( 'post_type', 'product' );
				$query->set( 'post_type', 'services' );
				$query->set( 'post_type', 'cases' );
				$query->set( 'post_type', 'technologies' );	
			}
			
		}
	}




?>