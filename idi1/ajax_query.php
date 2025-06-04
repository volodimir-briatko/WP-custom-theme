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

//cases_filter
if ($_POST['ajax_query']=='cases_filter' ):
  $services_filter = ''; //services
  $technologies_filter = ''; //techn
  if (!empty($_POST['services_filter']) && $_POST['services_filter']!=0){
      $services_filter = intval($_POST['services_filter']).',';
  }
  if (!empty($_POST['technologies_filter']) && $_POST['technologies_filter']!=0){
      $technologies_filter = intval($_POST['technologies_filter']).',';
  }
  $args = [
  'post_type'    => 'cases',
  'posts_per_page' => 1000,
  'orderby'    => 'date',
  'order'    => 'ASC',
  'meta_query'   => [
    'relation' => 'AND',
    [
      'key'     => 'cases_analysis_tool',
      'value'   => $services_filter,
      'compare' => 'LIKE'
    ],
    [
      'key'     => 'cases_analysis_tool',
      'value'   => $technologies_filter,
      'compare' => 'LIKE'
    ]
  ]
];

 get_template_part( 'template-parts/cases_item', '', $args );
 endif; 
 ?> 



