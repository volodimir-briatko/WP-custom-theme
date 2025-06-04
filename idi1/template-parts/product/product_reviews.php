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

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! comments_open() ) {
	return;
}
?>


<div class="prods__tab" id="tab-2">
				<div class="prods-reviews">
					<h3 class="prods__tab-title prods-reviews__title"><?php
			$count = $product->get_review_count();
			if (  wc_review_ratings_enabled() ) {
				/* translators: 1: reviews count 2: product name */
				$reviews_title = sprintf( esc_html( _n( '%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'woocommerce' ) ), esc_html( $count ), '<span>' . get_the_title() . '</span>' );
				echo apply_filters( 'woocommerce_reviews_title', $reviews_title, $count, $product ); // WPCS: XSS ok.
			} 
			?></h3>	
<?php

$args = array(
	'author_email'        => '',
	'author__in'          => '',
	'author__not_in'      => '',
	'include_unapproved'  => '',
	'fields'              => '',
	'comment__in'         => '',
	'comment__not_in'     => '',
	'karma'               => '',
	'number'              => '',
	'offset'              => '',
	'no_found_rows'       => true,
	'orderby'             => '',
	'order'               => 'DESC',
	'parent'              => '',
	'post_author__in'     => '',
	'post_author__not_in' => '',
	'post_id'             => $product->id,
	'post__in'            => '',
	'post__not_in'        => '',
	'post_author'         => '',
	'post_name'           => '',
	'post_parent'         => '',
	'post_status'         => '',
	'post_type'           => 'product',
	'status'              => 'all',
	'type'                => '',
	'type__in'            => '',
	'type__not_in'        => '',
	'user_id'             => '',
	'search'              => '',
	'count'               => false,
	'meta_key'            => '',
	'meta_value'          => '',
	'meta_query'          => '',
	'date_query'          => null, // See WP_Date_Query
	'hierarchical'        => false,
	'update_comment_meta_cache'  => true,
	'update_comment_post_cache'  => false,
);

if( $comments = get_comments( $args ) ): ?>
	<ul class="prods-reviews__list">
	<?php foreach( $comments as $comment ): 

$rating1 = get_comment_meta( $comment->comment_ID, 'rating', true );
if (empty($rating1)) $rating1 = 5;
$rating1 = intval($rating1);
		?>
		<li>
							<div class="prods-reviews__item">
								<div class="prods-reviews__rating">
									<div class="stars stars_disabled">
										<button class="stars__item <?php if($rating1>=1) echo '_active'; ?>"></button>
										<button class="stars__item <?php if($rating1>=2) echo '_active'; ?>"></button>
										<button class="stars__item <?php if($rating1>=3) echo '_active'; ?>"></button>
										<button class="stars__item <?php if($rating1>=4) echo '_active'; ?>"></button>
										<button class="stars__item <?php if($rating1>=5) echo '_active'; ?>"></button>
									</div>
								</div>
								<div class="prods-reviews__main">
								
									<div>
										<div class="of-img prods-reviews__photo">
											<img src="<?php bloginfo('template_url'); ?>/assets/img/product-single/avatar.jpg" alt="">
										</div>
									</div>
									<div>
										<p class="prods-reviews__info"><?php echo $comment->comment_author;?> – <?php echo $comment->comment_date;?></p>
										<div class="prods-reviews__text">
											<?php echo $comment->comment_content;?>
										</div>
									</div>
								</div>
							</div>
						</li>
<?php endforeach; ?>
</ul>
<?php else: ?>
<p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'woocommerce' ); ?></p>
<?php endif; ?>


				
					<div class="prods-reviews__add">

						<h3 class="prods__tab-title prods-reviews__add-title">Add a review </h3>
						
<div class="discuss-form prods-reviews__discuss-form">
<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>
		<div id="review_form_wrapper">
			<div id="review_form">
				<?php
				$commenter    = wp_get_current_commenter();
				$comment_form = array(
					/* translators: %s is product title */
					'title_reply'         => have_comments() ? esc_html__( '' ) : sprintf( esc_html__( '', 'woocommerce' ), get_the_title() ),
					/* translators: %s is product title */
					'title_reply_to'      => '',
					'title_reply_before'  => '',
					'title_reply_after'   => '',
					'comment_notes_after' => '',
					'submit_button'        => '<button type="submit" id="submit"  name="submit" class="submit sbtn sbtn_inv discuss-form__submit">Send</button>',
					'submit_field' => '<div class="discuss-form__row discuss-form__row_submit">
								<div>
									<label class="form-cb discuss-form__cb">
										<input type="checkbox">
										<span></span>
										<span>I’m not a robot</span>
									</label>
								</div>
								<div>%1$s %2$s</div>
								</div>',
					'logged_in_as'        => '',
					'comment_field'       => '',
				);

				$comment_form['fields'] = array('cookies' => '');
				$comment_form['must_log_in'] = 	'';
							$form_html = ''; 
							if ( wc_review_ratings_enabled() ){ 
								$form_html.=' 
							<div class="prods-reviews__add-rating">
								<p>Your rating *</p>
								<div class="stars">
									<button class="stars__item _active"></button>
									<button class="stars__item _active"></button>
									<button class="stars__item _active"></button>
									<button class="stars__item _active"></button>
									<button class="stars__item "></button>
									<input type="hidden" name="rating" id="rating" class="stars__input-val" value="4">
								</div>
							</div>'; 
							}
							 $form_html.='  
							<div class="discuss-form__row">
								<input type="text" class="discuss-form__input"  id="author" name="author" placeholder="Your Name" required >
							</div>
							<div class="discuss-form__row">
								<input type="email" id="email" name="email" class="discuss-form__input" placeholder="Email" required >
							</div> 
							<div class="discuss-form__row">
								<textarea class="discuss-form__input discuss-form__input_tarea" id="comment" name="comment" placeholder="Review" required></textarea>
							</div>
							'; 
				$comment_form['comment_field'] .= $form_html;	

				comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
				?>
			</div>
		</div>
	<?php else : ?>
		<p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?></p>
	<?php endif; ?>
</div>
						
						
						
					</div>					
				</div>
			</div>