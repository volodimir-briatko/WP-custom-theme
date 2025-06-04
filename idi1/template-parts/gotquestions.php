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
<!--gotquestions-->
<section class="gotquestions">
	<div class="container">
		<h2 class="gotquestions__title">Got questions?</h2>
		<div class="gotquestions__box">
			<div class="row">
				<div class="col-xl-6">
					<a href="tel:<?php echo str_replace(array('-',' '),'',get_theme_mod('setting_tel', '')); ?>" class="gotquestions__phone"><?php echo get_theme_mod('setting_tel', ''); ?></a>
					<ul class="gotquestions__socials">
						<li><a href="<?php echo get_theme_mod('setting_watsap', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/gotquestions/viber.svg" alt=""></a></li>
						<li><a href="<?php echo get_theme_mod('setting_tg', '');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/gotquestions/telegram.svg" alt=""></a></li>
					</ul>
				</div>
				<div class="col-xl-6">
					<span class="gotquestions__oremail">or email</span>
					<a href="mailto:eugene.lebedev@vidi-corp.com" class="gotquestions__email"><?php echo get_theme_mod('setting_email', ''); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--END gotquestions-->