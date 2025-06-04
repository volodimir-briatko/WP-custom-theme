<?php
$args = array( 'orderby' => 'sort', 'order' => 'ASC' );
$menu2 =	wp_get_nav_menu_items( 'menu1', $args );
$products_menu =	wp_get_nav_menu_items( 'Products-menu', $args );
$services_menu =	wp_get_nav_menu_items( 'Services-menu', $args );
$technologies_menu =	wp_get_nav_menu_items( 'Technologies-menu', $args );
?>
</main>

<footer class="footer">
	<div class="container">
		<div class="footer__box footer__box_1">
			<div>
				<a href="#" class="footer__logo">
					<img src="<?php echo( get_theme_mod('logo_upload', '') );?>" alt="">
				</a>
				<p class="footer__loc"><?php echo get_theme_mod('setting_address', ''); ?></p>
				<div class="footer__contacts">
					<a href="tel:<?php echo str_replace(array('-',' '),'',get_theme_mod('setting_tel', '')); ?>" class="footer__phone"><?php echo get_theme_mod('setting_tel', ''); ?></a>
					<ul class="footer__socials footer__socials_1">
						<li><a href="<?php echo get_theme_mod('setting_watsap', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer/viber.svg" alt=""></a></li>
						<li><a href="<?php echo get_theme_mod('setting_tg', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer/telegram.svg" alt=""></a></li>
					</ul>
				</div>
			</div>
			<div>
				<div class="footer__menus">
					<div>
						<ul class="footer__big-menu">
							<?php if (!empty($menu2)): foreach ($menu2 as $k => $p): ?>
								<li><a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
								<?php endforeach; endif;?>
						</ul>
					</div>
					<div>
						<ul class="footer__menu footer__menu_2">
							<?php if (!empty($services_menu)): foreach ($services_menu as $k => $p): if ($k<5): ?>
							<li <?php if ($k==0):?>class="big-size"<?php endif;?>><a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
							<?php endif; endforeach; endif;?>
							<li class="all-size"><a href="<?php echo get_permalink(101);?>">All services</a></li>
						</ul>
					</div>
					<div>
						<ul class="footer__menu footer__menu_3">
							<?php if (!empty($products_menu)): foreach ($products_menu as $k => $p): if ($k<5): ?>
							<li <?php if ($k==0):?>class="big-size"<?php endif;?>><a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
							<?php endif; endforeach; endif;?>
							<li class="all-size"><a href="<?php echo get_permalink(106);?>">All products</a></li>
						</ul>
					</div>
					<div>
						<ul class="footer__menu footer__menu_4">
							<?php if (!empty($technologies_menu)): foreach ($technologies_menu as $k => $p): if ($k<5): ?>
							<li <?php if ($k==0):?>class="big-size"<?php endif;?>><a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
							<?php endif; endforeach; endif;?>
							<li class="all-size"><a href="<?php echo get_permalink(47);?>">All technologies</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__box footer__box_2">
			<div>
				<p class="footer__copyright"><?php echo str_replace('{year}',date('Y'),get_theme_mod('setting_copiright', '')); ?></p>
			</div>
			<div>
				<ul class="footer__socials footer__socials_2">
					<li><a href="<?php echo get_theme_mod('setting_fb', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer/facebook.svg" alt=""></a></li>
					<li><a href="<?php echo get_theme_mod('setting_in', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer/instagram.svg" alt=""></a></li>
					<li><a href="<?php echo get_theme_mod('setting_youtube', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer/yt.svg" alt=""></a></li>
				</ul>
				<ul class="footer__bottom-menu">
					<li><a href="<?php echo get_permalink(17);?>">Terms &amp; conditions</a></li>
					<li><a href="<?php echo get_permalink(3);?>">Privacy policy</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<?php if(is_front_page()): ?>
<div class="move_dots">
	<div class="move_dot"><span></span></div>
	<div class="move_dot move_dot1"><span></span></div>
	<div class="move_dot"><span></span></div>
	<div class="move_dot move_dot1"><span></span></div>
	<div class="move_dot"><span></span></div>
	<div class="move_dot move_dot1"><span></span></div>
	<div class="move_dot"><span></span></div>
	<div class="move_dot move_dot1"><span></span></div>
	<div class="move_dot"><span></span></div>
	<div class="move_dot move_dot1"><span></span></div>
</div>
<?php endif; ?>
<div class="modal_search" >
	<button type="button" class="modal_search__close"></button>
	<div class="modal_search__wrap">
		<div class="products__search modal_search__line">
			<?php echo get_search_form(); ?>
			
		</div>
	</div>
</div>

<!-- popup-video -->
	<div class="popup "  id="popup-video">
		<button type="button" class="modal__close" onclick="close_popups();"></button>
		<div class="popup__video"></div>
	</div>
	<!-- popup-video END-->


	<!-- popup-form -->
	<div class="popup "  id="popup-form">
		<button type="button" class="modal__close" onclick="close_popups();"></button>
		<div class="popup__form">
			<div class="h5">Quick order</div>
			<?php echo do_shortcode('[contact-form-7 id="462" title="product-form"]');?>
		</div>
	</div>
	<!-- popup-form END-->

<?php wp_footer(); ?>
<?php if(is_front_page()): ?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/main_animation.js"></script>
<?php endif;?>
</body>
</html>
