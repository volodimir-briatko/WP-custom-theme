<?php
$main_page_id = get_the_ID();
?>
<section class="top" id="top_block">
	<div class="top__scroll">
		<span>scroll</span>
		<div><div></div></div>
	</div>
	<ul class="socials top__socials">
		<li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer/instagram.svg" alt=""></a></li>
		<li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer/facebook.svg" alt=""></a></li>
		<li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer/inst.svg" alt=""></a></li>
	</ul>
	<div class="container top__box__container">
		<div class="row top__box">
			<div class="col-lg-6 top__box__left">
				<div class="top__heading">
					<h2 class="top__title">
						<span>
						<span class="top__title_text top__title_abs active" id="icon-Financial" data-url="<?php echo get_permalink(115);?>">Financial</span>
						<span class="top__title_text top__title_abs" id="icon-Business" data-url="<?php echo get_permalink(302);?>">Business</span>
						<span class="top__title_text top__title_abs" id="icon-Web" data-url="<?php echo get_permalink(116);?>">Web Marketing</span>
						<span class="top__title_text top__title_abs" id="icon-Product" data-url="<?php echo get_permalink(301);?>">Product</span>


						</span>
						<span>Analysis</span>
					</h2>
					<p class="top__subtitle">connecting veni and vici using data</p>
				</div>
				<ul class="top__btns">
					<li><a href="<?php echo get_permalink(115);?>" class="sbtn sbtn_inv top__btn" id="details-id">Details</a></li>
					<li><a href="<?php echo get_permalink(101);?>" class="sbtn top__btn">All services</a></li>
				</ul>
			</div>
			<div class="col-lg-6">
				<div class="top__img-box">
					<div class="top__img">
						<canvas class="canvas" ></canvas>
						<div class="swiper top__mobslider" id="top__mobslider">
							<div class="swiper-wrapper ">
								<div class="swiper-slide" data-id="icon-Financial">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/mob-Financial.png" alt="">
								</div>
								<div class="swiper-slide" data-id="icon-Business">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/mob-Business.png" alt="">
								</div>
								<div class="swiper-slide" data-id="icon-Web">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/mob-Web.png" alt="">
								</div>
								<div class="swiper-slide" data-id="icon-Product">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/mob-Product.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>



<section class="about">
	<div id="about__before" class="about__before parallax"></div>
	<div class="container">
		<h2 class="stitle about__title">About Vidi</h2>
		<div class="row about__box about__box_1">
			<div class="col-lg-6">
				<div class="about__text">
					<?php echo wpautop(get_the_content()); ?>
				</div>
				<a href="<?php echo get_permalink(21);?>" class="read-more about__read-more">Read more</a>
			</div>
			<div class="col-lg-6 " id="about__text__list">
				<?php echo get_field('mainpage_1_icons_list',$main_page_id);?>
			</div>
		</div>
		<div class="row about__box about__box_2">
			<div class="col-lg-6">
				<ul class="about__statistics">
					<li>
						<b class="wow_calback" data-number="27" id="numb1">0</b>
						<span>Years <br>experience</span> 
					</li>
					<li>
						<b><span class="wow_calback" data-number="340" id="numb2">0</span>+</b>
						<span>Completed <br>projects</span> 
					</li>
					<li>
						<b class="wow_calback" data-number="25" id="numb3">0</b>
						<span>Talented <br>professionals</span> 
					</li>
					<li>
						<b ><span class="wow_calback" data-number="210" id="numb4">0</span>+</b>
						<span>Satisfied <br>clients</span> 
					</li>
				</ul>
			</div>
			<div class="col-lg-6">
				<div class="of-img about__img">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/about/people.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="data" id="data-block">
	<div class="data__wrap"></div>
	<div class="data__fixed" id="data__fixed">
	<div class="container">
		<h2 class="stitle data__title not-wow">Data Processing</h2>
		<div class="data__box">
			<div class="row">
				<div class="d-none d-sm-block col-lg-4">
					<div class="data__img">
<svg width="299" height="279" viewBox="0 0 299 279" fill="none" xmlns="http://www.w3.org/2000/svg" id="data__svg" class="data__svg">
<g data-n="42" class="svg-g"><rect x="125" y="230" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="180" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="120" width="9" height="9" fill="#2B519B"></rect><rect x="175" y="160" width="9" height="9" fill="#3860AC"></rect><rect x="115" y="240" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="140" width="9" height="9" fill="#3860AC"></rect><rect x="290" y="30" width="9" height="9" fill="#2B519B"></rect><rect x="250" y="240" width="9" height="9" fill="#2B519B"></rect><rect x="250" y="170" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="160" width="9" height="9" fill="#3860AC"></rect><rect x="260" y="240" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="190" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="250" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="140" width="9" height="9" fill="#4584CC"></rect><rect x="10" y="220" width="9" height="9" fill="#4584CC"></rect><rect x="40" y="200" width="9" height="9" fill="#4584CC"></rect><rect x="250" y="20" width="9" height="9" fill="#2B519B"></rect><rect x="290" y="130" width="9" height="9" fill="#2B519B"></rect></g><g data-n="41" class="svg-g"><rect x="105" y="220" width="9" height="9" fill="#3860AC"></rect><rect x="145" y="170" width="9" height="9" fill="#3860AC"></rect><rect x="40" y="70" width="9" height="9" fill="#4584CC"></rect><rect x="70" y="100" width="9" height="9" fill="#4584CC"></rect><rect x="175" y="50" width="9" height="9" fill="#3860AC"></rect><rect x="240" y="100" width="9" height="9" fill="#2B519B"></rect><rect x="210" y="260" width="9" height="9" fill="#2B519B"></rect><rect x="105" y="180" width="9" height="9" fill="#3860AC"></rect><rect x="220" y="40" width="9" height="9" fill="#2B519B"></rect><rect x="60" y="20" width="9" height="9" fill="#4584CC"></rect><rect x="70" y="70" width="9" height="9" fill="#4584CC"></rect><rect x="175" y="20" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="210" width="9" height="9" fill="#3860AC"></rect><rect x="175" y="210" width="9" height="9" fill="#3860AC"></rect><rect x="260" y="190" width="9" height="9" fill="#2B519B"></rect><rect x="260" y="250" width="9" height="9" fill="#2B519B"></rect><rect x="70" y="230" width="9" height="9" fill="#4584CC"></rect><rect x="250" y="250" width="9" height="9" fill="#2B519B"></rect></g><g data-n="40" class="svg-g"><rect x="270" y="120" width="9" height="9" fill="#2B519B"></rect><rect x="230" width="9" height="9" fill="#2B519B"></rect><rect x="50" y="150" width="9" height="9" fill="#4584CC"></rect><rect x="240" y="250" width="9" height="9" fill="#2B519B"></rect><rect x="80" y="90" width="9" height="9" fill="#4584CC"></rect><rect x="145" y="50" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="160" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="160" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="20" width="9" height="9" fill="#2B519B"></rect><rect y="70" width="9" height="9" fill="#4584CC"></rect><rect x="105" y="210" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="60" width="9" height="9" fill="#3860AC"></rect><rect x="145" y="80" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="110" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="100" width="9" height="9" fill="#2B519B"></rect><rect x="230" y="190" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="190" width="9" height="9" fill="#3860AC"></rect><rect x="280" y="260" width="9" height="9" fill="#2B519B"></rect></g><g data-n="39" class="svg-g"><rect x="70" y="140" width="9" height="9" fill="#4584CC"></rect><rect x="240" y="160" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="170" width="9" height="9" fill="#2B519B"></rect><rect x="145" y="200" width="9" height="9" fill="#3860AC"></rect><rect y="240" width="9" height="9" fill="#4584CC"></rect><rect y="60" width="9" height="9" fill="#4584CC"></rect><rect x="165" y="10" width="9" height="9" fill="#3860AC"></rect><rect y="250" width="9" height="9" fill="#4584CC"></rect><rect x="10" y="180" width="9" height="9" fill="#4584CC"></rect><rect x="185" y="50" width="9" height="9" fill="#3860AC"></rect><rect x="80" y="10" width="9" height="9" fill="#4584CC"></rect><rect x="250" y="260" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="90" width="9" height="9" fill="#3860AC"></rect><rect x="155" y="20" width="9" height="9" fill="#3860AC"></rect><rect x="230" y="10" width="9" height="9" fill="#2B519B"></rect><rect y="140" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="170" width="9" height="9" fill="#2B519B"></rect><rect x="165" y="260" width="9" height="9" fill="#3860AC"></rect></g><g data-n="38" class="svg-g"><rect x="230" y="20" width="9" height="9" fill="#2B519B"></rect><rect x="105" y="240" width="9" height="9" fill="#3860AC"></rect><rect x="230" y="150" width="9" height="9" fill="#2B519B"></rect><rect x="105" y="40" width="9" height="9" fill="#3860AC"></rect><rect x="240" y="90" width="9" height="9" fill="#2B519B"></rect><rect x="115" y="230" width="9" height="9" fill="#3860AC"></rect><rect x="280" y="120" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="180" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="10" width="9" height="9" fill="#3860AC"></rect><rect x="290" y="210" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="80" width="9" height="9" fill="#4584CC"></rect><rect x="125" y="150" width="9" height="9" fill="#3860AC"></rect><rect x="260" y="120" width="9" height="9" fill="#2B519B"></rect><rect y="200" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="180" width="9" height="9" fill="#2B519B"></rect><rect x="80" y="220" width="9" height="9" fill="#4584CC"></rect><rect x="260" y="220" width="9" height="9" fill="#2B519B"></rect><rect x="30" y="140" width="9" height="9" fill="#4584CC"></rect></g><g data-n="37" class="svg-g"><rect x="270" y="40" width="9" height="9" fill="#2B519B"></rect><rect x="165" y="100" width="9" height="9" fill="#3860AC"></rect><rect y="100" width="9" height="9" fill="#4584CC"></rect><rect x="40" y="40" width="9" height="9" fill="#4584CC"></rect><rect x="210" y="90" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="170" width="9" height="9" fill="#4584CC"></rect><rect x="105" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="70" width="9" height="9" fill="#4584CC"></rect><rect x="135" y="220" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="160" width="9" height="9" fill="#3860AC"></rect><rect x="220" y="270" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="60" width="9" height="9" fill="#2B519B"></rect><rect x="175" width="9" height="9" fill="#3860AC"></rect><rect x="270" y="230" width="9" height="9" fill="#2B519B"></rect><rect x="50" y="260" width="9" height="9" fill="#4584CC"></rect><rect x="60" y="230" width="9" height="9" fill="#4584CC"></rect><rect x="40" y="230" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="150" width="9" height="9" fill="#4584CC"></rect></g><g data-n="36" class="svg-g"><rect x="260" y="80" width="9" height="9" fill="#2B519B"></rect><rect x="240" y="230" width="9" height="9" fill="#2B519B"></rect><rect x="105" y="60" width="9" height="9" fill="#3860AC"></rect><rect x="40" y="90" width="9" height="9" fill="#4584CC"></rect><rect x="145" y="70" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="100" width="9" height="9" fill="#4584CC"></rect><rect x="210" y="60" width="9" height="9" fill="#2B519B"></rect><rect x="125" y="130" width="9" height="9" fill="#3860AC"></rect><rect x="230" y="130" width="9" height="9" fill="#2B519B"></rect><rect x="70" y="150" width="9" height="9" fill="#4584CC"></rect><rect x="70" y="80" width="9" height="9" fill="#4584CC"></rect><rect x="185" y="140" width="9" height="9" fill="#3860AC"></rect><rect x="230" y="200" width="9" height="9" fill="#2B519B"></rect><rect x="220" y="210" width="9" height="9" fill="#2B519B"></rect><rect x="250" y="180" width="9" height="9" fill="#2B519B"></rect><rect x="165" y="230" width="9" height="9" fill="#3860AC"></rect><rect x="30" y="120" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="50" width="9" height="9" fill="#2B519B"></rect></g><g data-n="35" class="svg-g"><rect x="290" y="140" width="9" height="9" fill="#2B519B"></rect><rect x="10" y="190" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="40" width="9" height="9" fill="#4584CC"></rect><rect y="260" width="9" height="9" fill="#4584CC"></rect><rect x="210" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="80" width="9" height="9" fill="#3860AC"></rect><rect x="115" y="60" width="9" height="9" fill="#3860AC"></rect><rect x="115" y="220" width="9" height="9" fill="#3860AC"></rect><rect x="70" y="160" width="9" height="9" fill="#4584CC"></rect><rect x="10" y="90" width="9" height="9" fill="#4584CC"></rect><rect x="210" y="100" width="9" height="9" fill="#2B519B"></rect><rect x="270" y="50" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="120" width="9" height="9" fill="#4584CC"></rect><rect x="260" y="70" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="70" width="9" height="9" fill="#3860AC"></rect><rect x="70" y="180" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="220" width="9" height="9" fill="#4584CC"></rect><rect x="210" y="110" width="9" height="9" fill="#2B519B"></rect></g><g data-n="34" class="svg-g"><rect x="80" y="170" width="9" height="9" fill="#4584CC"></rect><rect x="115" y="120" width="9" height="9" fill="#3860AC"></rect><rect x="70" y="120" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="270" width="9" height="9" fill="#2B519B"></rect><rect x="230" y="260" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="200" width="9" height="9" fill="#2B519B"></rect><rect x="80" y="80" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="140" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="90" width="9" height="9" fill="#3860AC"></rect><rect y="10" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="30" width="9" height="9" fill="#2B519B"></rect><rect x="185" y="270" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="230" width="9" height="9" fill="#4584CC"></rect><rect x="50" y="100" width="9" height="9" fill="#4584CC"></rect><rect x="155" y="270" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="260" width="9" height="9" fill="#3860AC"></rect><rect x="165" y="120" width="9" height="9" fill="#3860AC"></rect><rect x="70" y="10" width="9" height="9" fill="#4584CC"></rect></g><g data-n="33" class="svg-g"><rect x="40" y="160" width="9" height="9" fill="#4584CC"></rect><rect x="105" y="270" width="9" height="9" fill="#3860AC"></rect><rect x="145" y="120" width="9" height="9" fill="#3860AC"></rect><rect x="280" y="30" width="9" height="9" fill="#2B519B"></rect><rect x="30" y="110" width="9" height="9" fill="#4584CC"></rect><rect x="165" y="90" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="10" width="9" height="9" fill="#3860AC"></rect><rect x="220" y="250" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="210" width="9" height="9" fill="#2B519B"></rect><rect x="210" y="210" width="9" height="9" fill="#2B519B"></rect><rect x="185" y="250" width="9" height="9" fill="#3860AC"></rect><rect x="220" y="120" width="9" height="9" fill="#2B519B"></rect><rect x="115" y="40" width="9" height="9" fill="#3860AC"></rect><rect x="115" y="100" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="90" width="9" height="9" fill="#2B519B"></rect><rect x="50" y="70" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="50" width="9" height="9" fill="#2B519B"></rect><rect x="125" y="50" width="9" height="9" fill="#3860AC"></rect></g><g data-n="32" class="svg-g"><rect x="155" y="260" width="9" height="9" fill="#3860AC"></rect><rect x="70" y="110" width="9" height="9" fill="#4584CC"></rect><rect x="60" y="70" width="9" height="9" fill="#4584CC"></rect><rect x="165" y="220" width="9" height="9" fill="#3860AC"></rect><rect x="50" y="130" width="9" height="9" fill="#4584CC"></rect><rect x="125" y="60" width="9" height="9" fill="#3860AC"></rect><rect x="50" y="50" width="9" height="9" fill="#4584CC"></rect><rect x="185" y="190" width="9" height="9" fill="#3860AC"></rect><rect x="145" y="100" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="80" width="9" height="9" fill="#3860AC"></rect><rect x="240" y="270" width="9" height="9" fill="#2B519B"></rect><rect x="250" y="190" width="9" height="9" fill="#2B519B"></rect><rect x="60" y="260" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="220" width="9" height="9" fill="#2B519B"></rect><rect x="240" width="9" height="9" fill="#2B519B"></rect><rect x="240" y="70" width="9" height="9" fill="#2B519B"></rect><rect x="50" y="30" width="9" height="9" fill="#4584CC"></rect><rect y="120" width="9" height="9" fill="#4584CC"></rect></g><g data-n="31" class="svg-g"><rect x="60" y="150" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="180" width="9" height="9" fill="#2B519B"></rect><rect x="290" y="230" width="9" height="9" fill="#2B519B"></rect><rect x="80" y="30" width="9" height="9" fill="#4584CC"></rect><rect x="260" y="150" width="9" height="9" fill="#2B519B"></rect><rect x="145" y="240" width="9" height="9" fill="#3860AC"></rect><rect x="115" y="140" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="230" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="210" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="30" width="9" height="9" fill="#2B519B"></rect><rect x="240" y="20" width="9" height="9" fill="#2B519B"></rect><rect y="90" width="9" height="9" fill="#4584CC"></rect><rect x="165" y="180" width="9" height="9" fill="#3860AC"></rect><rect y="80" width="9" height="9" fill="#4584CC"></rect><rect x="145" y="130" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="10" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="20" width="9" height="9" fill="#4584CC"></rect><rect y="210" width="9" height="9" fill="#4584CC"></rect></g><g data-n="30" class="svg-g"><rect x="125" width="9" height="9" fill="#3860AC"></rect><rect x="115" y="270" width="9" height="9" fill="#3860AC"></rect><rect x="80" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="90" width="9" height="9" fill="#2B519B"></rect><rect x="50" y="230" width="9" height="9" fill="#4584CC"></rect><rect x="230" y="70" width="9" height="9" fill="#2B519B"></rect><rect x="145" width="9" height="9" fill="#3860AC"></rect><rect x="50" y="210" width="9" height="9" fill="#4584CC"></rect><rect x="145" y="140" width="9" height="9" fill="#3860AC"></rect><rect x="290" y="190" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="190" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="130" width="9" height="9" fill="#3860AC"></rect><rect x="175" y="110" width="9" height="9" fill="#3860AC"></rect><rect x="80" y="140" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="60" width="9" height="9" fill="#2B519B"></rect><rect x="290" y="90" width="9" height="9" fill="#2B519B"></rect><rect x="240" y="190" width="9" height="9" fill="#2B519B"></rect><rect x="60" y="110" width="9" height="9" fill="#4584CC"></rect></g><g data-n="29" class="svg-g"><rect x="185" y="180" width="9" height="9" fill="#3860AC"></rect><rect x="230" y="80" width="9" height="9" fill="#2B519B"></rect><rect x="10" y="110" width="9" height="9" fill="#4584CC"></rect><rect x="40" y="240" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="60" width="9" height="9" fill="#4584CC"></rect><rect x="105" y="110" width="9" height="9" fill="#3860AC"></rect><rect x="260" y="20" width="9" height="9" fill="#2B519B"></rect><rect x="20" y="50" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="110" width="9" height="9" fill="#2B519B"></rect><rect x="40" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="230" width="9" height="9" fill="#4584CC"></rect><rect x="230" y="210" width="9" height="9" fill="#2B519B"></rect><rect y="270" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="120" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="150" width="9" height="9" fill="#3860AC"></rect><rect x="50" y="180" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="270" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="200" width="9" height="9" fill="#4584CC"></rect></g><g data-n="28" class="svg-g"><rect x="175" y="150" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="250" width="9" height="9" fill="#3860AC"></rect><rect x="165" y="30" width="9" height="9" fill="#3860AC"></rect><rect y="50" width="9" height="9" fill="#4584CC"></rect><rect x="175" y="180" width="9" height="9" fill="#3860AC"></rect><rect x="230" y="180" width="9" height="9" fill="#2B519B"></rect><rect x="240" y="240" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="260" width="9" height="9" fill="#4584CC"></rect><rect x="135" y="200" width="9" height="9" fill="#3860AC"></rect><rect x="155" y="170" width="9" height="9" fill="#3860AC"></rect><rect x="145" y="230" width="9" height="9" fill="#3860AC"></rect><rect x="60" y="170" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="100" width="9" height="9" fill="#2B519B"></rect><rect y="130" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="20" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="200" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="230" width="9" height="9" fill="#3860AC"></rect><rect x="115" y="250" width="9" height="9" fill="#3860AC"></rect></g><g data-n="27" class="svg-g"><rect x="70" y="260" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="270" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="140" width="9" height="9" fill="#4584CC"></rect><rect x="70" y="20" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="50" width="9" height="9" fill="#4584CC"></rect><rect x="125" y="170" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="200" width="9" height="9" fill="#2B519B"></rect><rect x="165" y="80" width="9" height="9" fill="#3860AC"></rect><rect x="175" y="80" width="9" height="9" fill="#3860AC"></rect><rect x="155" y="40" width="9" height="9" fill="#3860AC"></rect><rect x="290" y="110" width="9" height="9" fill="#2B519B"></rect><rect x="145" y="160" width="9" height="9" fill="#3860AC"></rect><rect x="60" y="40" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="10" width="9" height="9" fill="#2B519B"></rect><rect x="165" y="110" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="110" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="200" width="9" height="9" fill="#3860AC"></rect><rect x="280" y="40" width="9" height="9" fill="#2B519B"></rect></g><g data-n="26" class="svg-g"><rect x="290" y="170" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="230" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="80" width="9" height="9" fill="#2B519B"></rect><rect x="20" y="250" width="9" height="9" fill="#4584CC"></rect><rect x="105" y="250" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="150" width="9" height="9" fill="#2B519B"></rect><rect x="260" y="260" width="9" height="9" fill="#2B519B"></rect><rect x="230" y="40" width="9" height="9" fill="#2B519B"></rect><rect x="210" y="230" width="9" height="9" fill="#2B519B"></rect><rect x="80" y="100" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="190" width="9" height="9" fill="#2B519B"></rect><rect x="125" y="80" width="9" height="9" fill="#3860AC"></rect><rect x="60" y="220" width="9" height="9" fill="#4584CC"></rect><rect x="260" y="170" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="160" width="9" height="9" fill="#3860AC"></rect><rect x="115" y="70" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="50" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="130" width="9" height="9" fill="#3860AC"></rect></g><g data-n="25" class="svg-g"><rect x="135" y="30" width="9" height="9" fill="#3860AC"></rect><rect x="220" y="130" width="9" height="9" fill="#2B519B"></rect><rect x="210" y="250" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="20" width="9" height="9" fill="#4584CC"></rect><rect x="105" y="20" width="9" height="9" fill="#3860AC"></rect><rect x="80" y="70" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="200" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="50" width="9" height="9" fill="#4584CC"></rect><rect x="230" y="230" width="9" height="9" fill="#2B519B"></rect><rect y="190" width="9" height="9" fill="#4584CC"></rect><rect x="20" y="230" width="9" height="9" fill="#4584CC"></rect><rect x="10" y="270" width="9" height="9" fill="#4584CC"></rect><rect x="60" y="140" width="9" height="9" fill="#4584CC"></rect><rect x="70" y="90" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="210" width="9" height="9" fill="#4584CC"></rect><rect x="220" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="120" width="9" height="9" fill="#3860AC"></rect><rect x="125" y="100" width="9" height="9" fill="#3860AC"></rect></g><g data-n="24" class="svg-g"><rect x="230" y="100" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="180" width="9" height="9" fill="#3860AC"></rect><rect x="60" y="190" width="9" height="9" fill="#4584CC"></rect><rect x="70" y="270" width="9" height="9" fill="#4584CC"></rect><rect x="240" y="180" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="100" width="9" height="9" fill="#2B519B"></rect><rect x="125" y="120" width="9" height="9" fill="#3860AC"></rect><rect x="230" y="270" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="10" width="9" height="9" fill="#2B519B"></rect><rect x="80" y="260" width="9" height="9" fill="#4584CC"></rect><rect x="175" y="270" width="9" height="9" fill="#3860AC"></rect><rect x="30" y="250" width="9" height="9" fill="#4584CC"></rect><rect x="115" y="20" width="9" height="9" fill="#3860AC"></rect><rect x="60" y="100" width="9" height="9" fill="#4584CC"></rect><rect x="250" y="40" width="9" height="9" fill="#2B519B"></rect><rect x="20" y="90" width="9" height="9" fill="#4584CC"></rect><rect x="175" y="170" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="150" width="9" height="9" fill="#4584CC"></rect></g><g data-n="23" class="svg-g"><rect x="155" y="60" width="9" height="9" fill="#3860AC"></rect><rect x="230" y="30" width="9" height="9" fill="#2B519B"></rect><rect x="260" y="160" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="240" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="10" width="9" height="9" fill="#3860AC"></rect><rect x="260" y="50" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="250" width="9" height="9" fill="#2B519B"></rect><rect x="60" y="50" width="9" height="9" fill="#4584CC"></rect><rect x="210" y="170" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="150" width="9" height="9" fill="#2B519B"></rect><rect x="20" y="220" width="9" height="9" fill="#4584CC"></rect><rect x="125" y="200" width="9" height="9" fill="#3860AC"></rect><rect x="155" y="80" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="130" width="9" height="9" fill="#4584CC"></rect><rect x="115" y="130" width="9" height="9" fill="#3860AC"></rect><rect x="70" y="30" width="9" height="9" fill="#4584CC"></rect><rect x="240" y="30" width="9" height="9" fill="#2B519B"></rect><rect x="115" y="170" width="9" height="9" fill="#3860AC"></rect></g><g data-n="22" class="svg-g"><rect x="145" y="90" width="9" height="9" fill="#3860AC"></rect><rect x="290" y="80" width="9" height="9" fill="#2B519B"></rect><rect x="30" y="270" width="9" height="9" fill="#4584CC"></rect><rect x="165" y="150" width="9" height="9" fill="#3860AC"></rect><rect x="210" y="200" width="9" height="9" fill="#2B519B"></rect><rect x="115" y="190" width="9" height="9" fill="#3860AC"></rect><rect x="115" y="180" width="9" height="9" fill="#3860AC"></rect><rect x="30" y="260" width="9" height="9" fill="#4584CC"></rect><rect x="185" y="240" width="9" height="9" fill="#3860AC"></rect><rect x="210" y="30" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="150" width="9" height="9" fill="#3860AC"></rect><rect x="260" y="210" width="9" height="9" fill="#2B519B"></rect><rect x="125" y="140" width="9" height="9" fill="#3860AC"></rect><rect x="60" y="130" width="9" height="9" fill="#4584CC"></rect><rect y="30" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="120" width="9" height="9" fill="#4584CC"></rect><rect x="60" y="180" width="9" height="9" fill="#4584CC"></rect><rect x="230" y="240" width="9" height="9" fill="#2B519B"></rect></g><g data-n="21" class="svg-g"><rect x="240" y="80" width="9" height="9" fill="#2B519B"></rect><rect x="20" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="130" width="9" height="9" fill="#2B519B"></rect><rect x="240" y="140" width="9" height="9" fill="#2B519B"></rect><rect x="165" y="250" width="9" height="9" fill="#3860AC"></rect><rect x="210" y="180" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="210" width="9" height="9" fill="#3860AC"></rect><rect x="270" y="160" width="9" height="9" fill="#2B519B"></rect><rect x="50" y="250" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="160" width="9" height="9" fill="#4584CC"></rect><rect x="230" y="120" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="220" width="9" height="9" fill="#4584CC"></rect><rect x="175" y="200" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="100" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="240" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="270" width="9" height="9" fill="#4584CC"></rect><rect x="105" y="90" width="9" height="9" fill="#3860AC"></rect><rect x="30" width="9" height="9" fill="#4584CC"></rect></g><g data-n="20" class="svg-g"><rect x="165" y="40" width="9" height="9" fill="#3860AC"></rect><rect x="270" y="190" width="9" height="9" fill="#2B519B"></rect><rect x="230" y="90" width="9" height="9" fill="#2B519B"></rect><rect x="125" y="240" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="80" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="250" width="9" height="9" fill="#4584CC"></rect><rect x="70" y="130" width="9" height="9" fill="#4584CC"></rect><rect y="110" width="9" height="9" fill="#4584CC"></rect><rect x="115" y="200" width="9" height="9" fill="#3860AC"></rect><rect x="210" y="20" width="9" height="9" fill="#2B519B"></rect><rect x="125" y="90" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="50" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="90" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="110" width="9" height="9" fill="#2B519B"></rect><rect x="270" y="150" width="9" height="9" fill="#2B519B"></rect><rect x="145" y="20" width="9" height="9" fill="#3860AC"></rect><rect x="220" y="30" width="9" height="9" fill="#2B519B"></rect><rect x="230" y="220" width="9" height="9" fill="#2B519B"></rect></g><g data-n="19" class="svg-g"><rect x="230" y="140" width="9" height="9" fill="#2B519B"></rect><rect x="270" y="70" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="90" width="9" height="9" fill="#2B519B"></rect><rect x="70" y="250" width="9" height="9" fill="#4584CC"></rect><rect x="60" y="90" width="9" height="9" fill="#4584CC"></rect><rect x="250" y="50" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="120" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="170" width="9" height="9" fill="#3860AC"></rect><rect x="230" y="110" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="260" width="9" height="9" fill="#3860AC"></rect><rect x="155" y="140" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="210" width="9" height="9" fill="#4584CC"></rect><rect x="250" y="160" width="9" height="9" fill="#2B519B"></rect><rect x="145" y="10" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="70" width="9" height="9" fill="#3860AC"></rect><rect x="70" y="240" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="180" width="9" height="9" fill="#4584CC"></rect><rect x="175" y="130" width="9" height="9" fill="#3860AC"></rect></g><g data-n="18" class="svg-g"><rect x="60" y="10" width="9" height="9" fill="#4584CC"></rect><rect y="230" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="30" width="9" height="9" fill="#4584CC"></rect><rect x="260" y="10" width="9" height="9" fill="#2B519B"></rect><rect x="60" y="270" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="20" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="180" width="9" height="9" fill="#4584CC"></rect><rect x="155" y="220" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="230" width="9" height="9" fill="#3860AC"></rect><rect x="10" width="9" height="9" fill="#4584CC"></rect><rect x="240" y="150" width="9" height="9" fill="#2B519B"></rect><rect x="105" y="100" width="9" height="9" fill="#3860AC"></rect><rect x="30" y="130" width="9" height="9" fill="#4584CC"></rect><rect x="230" y="50" width="9" height="9" fill="#2B519B"></rect><rect y="150" width="9" height="9" fill="#4584CC"></rect><rect x="250" y="220" width="9" height="9" fill="#2B519B"></rect><rect x="20" y="60" width="9" height="9" fill="#4584CC"></rect><rect x="105" y="120" width="9" height="9" fill="#3860AC"></rect></g><g data-n="17" class="svg-g"><rect x="210" y="140" width="9" height="9" fill="#2B519B"></rect><rect x="175" y="250" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="200" width="9" height="9" fill="#4584CC"></rect><rect x="165" y="130" width="9" height="9" fill="#3860AC"></rect><rect x="270" y="240" width="9" height="9" fill="#2B519B"></rect><rect x="125" y="210" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="80" width="9" height="9" fill="#3860AC"></rect><rect x="155" y="30" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="140" width="9" height="9" fill="#3860AC"></rect><rect x="60" y="250" width="9" height="9" fill="#4584CC"></rect><rect x="240" y="10" width="9" height="9" fill="#2B519B"></rect><rect x="175" y="260" width="9" height="9" fill="#3860AC"></rect><rect x="50" width="9" height="9" fill="#4584CC"></rect><rect x="115" y="210" width="9" height="9" fill="#3860AC"></rect><rect x="175" y="60" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="270" width="9" height="9" fill="#3860AC"></rect><rect x="145" y="180" width="9" height="9" fill="#3860AC"></rect><rect x="115" y="30" width="9" height="9" fill="#3860AC"></rect></g><g data-n="16" class="svg-g"><rect x="240" y="40" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="50" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="40" width="9" height="9" fill="#4584CC"></rect><rect x="175" y="240" width="9" height="9" fill="#3860AC"></rect><rect x="50" y="270" width="9" height="9" fill="#4584CC"></rect><rect x="10" y="80" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="40" width="9" height="9" fill="#2B519B"></rect><rect x="270" y="200" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="100" width="9" height="9" fill="#3860AC"></rect><rect x="220" y="110" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="10" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="220" width="9" height="9" fill="#2B519B"></rect><rect x="30" y="150" width="9" height="9" fill="#4584CC"></rect><rect x="145" y="220" width="9" height="9" fill="#3860AC"></rect><rect x="210" y="50" width="9" height="9" fill="#2B519B"></rect><rect y="220" width="9" height="9" fill="#4584CC"></rect><rect x="145" y="190" width="9" height="9" fill="#3860AC"></rect><rect x="40" y="130" width="9" height="9" fill="#4584CC"></rect></g><g data-n="15" class="svg-g"><rect x="230" y="170" width="9" height="9" fill="#2B519B"></rect><rect x="135" width="9" height="9" fill="#3860AC"></rect><rect x="50" y="220" width="9" height="9" fill="#4584CC"></rect><rect x="145" y="60" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="200" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="200" width="9" height="9" fill="#2B519B"></rect><rect x="270" width="9" height="9" fill="#2B519B"></rect><rect x="185" y="120" width="9" height="9" fill="#3860AC"></rect><rect x="145" y="110" width="9" height="9" fill="#3860AC"></rect><rect x="30" y="80" width="9" height="9" fill="#4584CC"></rect><rect x="60" y="160" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="170" width="9" height="9" fill="#4584CC"></rect><rect x="145" y="270" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="250" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="80" width="9" height="9" fill="#2B519B"></rect><rect x="270" y="60" width="9" height="9" fill="#2B519B"></rect><rect x="165" y="200" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="200" width="9" height="9" fill="#3860AC"></rect></g><g data-n="14" class="svg-g"><rect x="230" y="160" width="9" height="9" fill="#2B519B"></rect><rect x="290" y="150" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="190" width="9" height="9" fill="#4584CC"></rect><rect x="60" y="120" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="230" width="9" height="9" fill="#4584CC"></rect><rect x="145" y="250" width="9" height="9" fill="#3860AC"></rect><rect x="125" y="70" width="9" height="9" fill="#3860AC"></rect><rect x="165" y="60" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="160" width="9" height="9" fill="#3860AC"></rect><rect x="260" y="110" width="9" height="9" fill="#2B519B"></rect><rect x="175" y="220" width="9" height="9" fill="#3860AC"></rect><rect x="125" y="20" width="9" height="9" fill="#3860AC"></rect><rect x="30" y="70" width="9" height="9" fill="#4584CC"></rect><rect x="240" y="110" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="50" width="9" height="9" fill="#2B519B"></rect><rect x="260" y="140" width="9" height="9" fill="#2B519B"></rect><rect x="145" y="210" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="120" width="9" height="9" fill="#4584CC"></rect></g><g data-n="13" class="svg-g"><rect x="260" y="270" width="9" height="9" fill="#2B519B"></rect><rect x="220" y="200" width="9" height="9" fill="#2B519B"></rect><rect x="115" y="110" width="9" height="9" fill="#3860AC"></rect><rect x="220" y="90" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="160" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="60" width="9" height="9" fill="#4584CC"></rect><rect x="10" y="60" width="9" height="9" fill="#4584CC"></rect><rect x="125" y="110" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="190" width="9" height="9" fill="#3860AC"></rect><rect x="165" y="210" width="9" height="9" fill="#3860AC"></rect><rect x="80" y="190" width="9" height="9" fill="#4584CC"></rect><rect x="260" y="230" width="9" height="9" fill="#2B519B"></rect><rect x="230" y="60" width="9" height="9" fill="#2B519B"></rect><rect x="240" y="200" width="9" height="9" fill="#2B519B"></rect><rect x="20" y="30" width="9" height="9" fill="#4584CC"></rect><rect y="180" width="9" height="9" fill="#4584CC"></rect><rect x="280" y="140" width="9" height="9" fill="#2B519B"></rect><rect width="9" height="9" fill="#4584CC"></rect></g><g data-n="12" class="svg-g"><rect x="50" y="90" width="9" height="9" fill="#4584CC"></rect><rect x="240" y="210" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="220" width="9" height="9" fill="#2B519B"></rect><rect x="10" y="20" width="9" height="9" fill="#4584CC"></rect><rect x="60" y="200" width="9" height="9" fill="#4584CC"></rect><rect x="20" y="10" width="9" height="9" fill="#4584CC"></rect><rect x="125" y="260" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="70" width="9" height="9" fill="#3860AC"></rect><rect x="270" y="170" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="40" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="240" width="9" height="9" fill="#4584CC"></rect><rect x="115" y="50" width="9" height="9" fill="#3860AC"></rect><rect x="165" y="240" width="9" height="9" fill="#3860AC"></rect><rect x="50" y="10" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="140" width="9" height="9" fill="#2B519B"></rect><rect x="270" y="250" width="9" height="9" fill="#2B519B"></rect><rect y="20" width="9" height="9" fill="#4584CC"></rect><rect x="250" width="9" height="9" fill="#2B519B"></rect></g><g data-n="11" class="svg-g"><rect x="10" y="50" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="260" width="9" height="9" fill="#2B519B"></rect><rect x="290" y="220" width="9" height="9" fill="#2B519B"></rect><rect x="125" y="270" width="9" height="9" fill="#3860AC"></rect><rect x="175" y="40" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="210" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="260" width="9" height="9" fill="#2B519B"></rect><rect x="70" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="260" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="130" width="9" height="9" fill="#2B519B"></rect><rect y="170" width="9" height="9" fill="#4584CC"></rect><rect x="40" y="150" width="9" height="9" fill="#4584CC"></rect><rect x="125" y="220" width="9" height="9" fill="#3860AC"></rect><rect x="280" y="110" width="9" height="9" fill="#2B519B"></rect><rect x="50" y="190" width="9" height="9" fill="#4584CC"></rect><rect x="280" y="270" width="9" height="9" fill="#2B519B"></rect><rect x="70" y="170" width="9" height="9" fill="#4584CC"></rect><rect x="20" y="20" width="9" height="9" fill="#4584CC"></rect></g><g data-n="10" class="svg-g"><rect x="185" y="70" width="9" height="9" fill="#3860AC"></rect><rect x="260" width="9" height="9" fill="#2B519B"></rect><rect x="135" y="20" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="100" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="20" width="9" height="9" fill="#2B519B"></rect><rect x="175" y="120" width="9" height="9" fill="#3860AC"></rect><rect x="60" y="60" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="100" width="9" height="9" fill="#2B519B"></rect><rect x="80" y="130" width="9" height="9" fill="#4584CC"></rect><rect x="50" y="170" width="9" height="9" fill="#4584CC"></rect><rect x="30" y="10" width="9" height="9" fill="#4584CC"></rect><rect x="40" y="210" width="9" height="9" fill="#4584CC"></rect><rect x="50" y="120" width="9" height="9" fill="#4584CC"></rect><rect x="210" y="80" width="9" height="9" fill="#2B519B"></rect><rect x="240" y="170" width="9" height="9" fill="#2B519B"></rect><rect x="10" y="160" width="9" height="9" fill="#4584CC"></rect><rect x="240" y="260" width="9" height="9" fill="#2B519B"></rect><rect x="230" y="250" width="9" height="9" fill="#2B519B"></rect></g><g data-n="9" class="svg-g"><rect x="30" y="90" width="9" height="9" fill="#4584CC"></rect><rect x="260" y="40" width="9" height="9" fill="#2B519B"></rect><rect x="165" y="70" width="9" height="9" fill="#3860AC"></rect><rect x="210" y="240" width="9" height="9" fill="#2B519B"></rect><rect x="240" y="50" width="9" height="9" fill="#2B519B"></rect><rect x="175" y="100" width="9" height="9" fill="#3860AC"></rect><rect x="70" y="50" width="9" height="9" fill="#4584CC"></rect><rect x="20" y="190" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="60" width="9" height="9" fill="#4584CC"></rect><rect x="185" y="40" width="9" height="9" fill="#3860AC"></rect><rect x="50" y="40" width="9" height="9" fill="#4584CC"></rect><rect x="60" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="160" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="70" width="9" height="9" fill="#2B519B"></rect><rect x="175" y="140" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="130" width="9" height="9" fill="#2B519B"></rect><rect x="260" y="180" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="110" width="9" height="9" fill="#3860AC"></rect></g><g data-n="8" class="svg-g"><rect x="290" y="250" width="9" height="9" fill="#2B519B"></rect><rect x="290" y="60" width="9" height="9" fill="#2B519B"></rect><rect x="220" y="150" width="9" height="9" fill="#2B519B"></rect><rect x="280" y="80" width="9" height="9" fill="#2B519B"></rect><rect x="60" y="30" width="9" height="9" fill="#4584CC"></rect><rect x="115" y="160" width="9" height="9" fill="#3860AC"></rect><rect x="145" y="30" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="170" width="9" height="9" fill="#3860AC"></rect><rect x="50" y="20" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="10" width="9" height="9" fill="#2B519B"></rect><rect x="220" y="240" width="9" height="9" fill="#2B519B"></rect><rect x="210" y="160" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="100" width="9" height="9" fill="#4584CC"></rect><rect x="125" y="40" width="9" height="9" fill="#3860AC"></rect><rect x="125" y="10" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="70" width="9" height="9" fill="#4584CC"></rect><rect x="105" y="30" width="9" height="9" fill="#3860AC"></rect><rect x="175" y="30" width="9" height="9" fill="#3860AC"></rect></g><g data-n="7" class="svg-g"><rect x="280" y="230" width="9" height="9" fill="#2B519B"></rect><rect x="50" y="60" width="9" height="9" fill="#4584CC"></rect><rect x="20" y="40" width="9" height="9" fill="#4584CC"></rect><rect x="145" y="260" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="150" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="120" width="9" height="9" fill="#4584CC"></rect><rect x="80" y="240" width="9" height="9" fill="#4584CC"></rect><rect x="40" y="30" width="9" height="9" fill="#4584CC"></rect><rect x="70" y="200" width="9" height="9" fill="#4584CC"></rect><rect x="125" y="160" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="110" width="9" height="9" fill="#3860AC"></rect><rect x="290" width="9" height="9" fill="#2B519B"></rect><rect x="260" y="100" width="9" height="9" fill="#2B519B"></rect><rect x="250" y="140" width="9" height="9" fill="#2B519B"></rect><rect x="290" y="70" width="9" height="9" fill="#2B519B"></rect><rect x="10" y="260" width="9" height="9" fill="#4584CC"></rect><rect x="50" y="240" width="9" height="9" fill="#4584CC"></rect><rect x="185" y="220" width="9" height="9" fill="#3860AC"></rect></g><g data-n="6" class="svg-g"><rect x="145" y="40" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="130" width="9" height="9" fill="#4584CC"></rect><rect x="165" y="160" width="9" height="9" fill="#3860AC"></rect><rect x="240" y="120" width="9" height="9" fill="#2B519B"></rect><rect x="210" y="270" width="9" height="9" fill="#2B519B"></rect><rect x="115" width="9" height="9" fill="#3860AC"></rect><rect x="175" y="90" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="130" width="9" height="9" fill="#3860AC"></rect><rect x="40" y="110" width="9" height="9" fill="#4584CC"></rect><rect x="115" y="80" width="9" height="9" fill="#3860AC"></rect><rect x="175" y="230" width="9" height="9" fill="#3860AC"></rect><rect x="40" y="250" width="9" height="9" fill="#4584CC"></rect><rect x="165" y="140" width="9" height="9" fill="#3860AC"></rect><rect x="270" y="210" width="9" height="9" fill="#2B519B"></rect><rect x="185" y="60" width="9" height="9" fill="#3860AC"></rect><rect x="125" y="190" width="9" height="9" fill="#3860AC"></rect><rect x="175" y="10" width="9" height="9" fill="#3860AC"></rect><rect x="210" y="220" width="9" height="9" fill="#2B519B"></rect></g><g data-n="5" class="svg-g"><rect x="10" y="30" width="9" height="9" fill="#4584CC"></rect><rect x="20" y="260" width="9" height="9" fill="#4584CC"></rect><rect x="115" y="260" width="9" height="9" fill="#3860AC"></rect><rect x="165" y="20" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="60" width="9" height="9" fill="#2B519B"></rect><rect x="220" y="160" width="9" height="9" fill="#2B519B"></rect><rect x="40" y="270" width="9" height="9" fill="#4584CC"></rect><rect x="280" y="70" width="9" height="9" fill="#2B519B"></rect><rect x="30" y="240" width="9" height="9" fill="#4584CC"></rect><rect x="185" y="230" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="170" width="9" height="9" fill="#4584CC"></rect><rect x="185" y="10" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="240" width="9" height="9" fill="#4584CC"></rect><rect x="250" y="270" width="9" height="9" fill="#2B519B"></rect><rect x="115" y="10" width="9" height="9" fill="#3860AC"></rect><rect x="175" y="190" width="9" height="9" fill="#3860AC"></rect><rect x="135" y="170" width="9" height="9" fill="#3860AC"></rect><rect x="270" y="80" width="9" height="9" fill="#2B519B"></rect></g><g data-n="4" class="svg-g"><rect x="135" y="100" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="140" width="9" height="9" fill="#4584CC"></rect><rect x="40" y="180" width="9" height="9" fill="#4584CC"></rect><rect x="175" y="70" width="9" height="9" fill="#3860AC"></rect><rect x="125" y="250" width="9" height="9" fill="#3860AC"></rect><rect x="145" y="150" width="9" height="9" fill="#3860AC"></rect><rect x="185" y="100" width="9" height="9" fill="#3860AC"></rect><rect x="50" y="80" width="9" height="9" fill="#4584CC"></rect><rect x="50" y="110" width="9" height="9" fill="#4584CC"></rect><rect x="210" y="70" width="9" height="9" fill="#2B519B"></rect><rect x="125" y="180" width="9" height="9" fill="#3860AC"></rect><rect x="155" y="130" width="9" height="9" fill="#3860AC"></rect><rect x="260" y="90" width="9" height="9" fill="#2B519B"></rect><rect x="105" y="150" width="9" height="9" fill="#3860AC"></rect><rect x="165" y="170" width="9" height="9" fill="#3860AC"></rect><rect x="210" y="120" width="9" height="9" fill="#2B519B"></rect><rect x="210" y="150" width="9" height="9" fill="#2B519B"></rect><rect x="30" y="210" width="9" height="9" fill="#4584CC"></rect></g><g data-n="3" class="svg-g"><rect x="80" y="110" width="9" height="9" fill="#4584CC"></rect><rect x="185" y="30" width="9" height="9" fill="#3860AC"></rect><rect x="165" y="50" width="9" height="9" fill="#3860AC"></rect><rect x="260" y="30" width="9" height="9" fill="#2B519B"></rect><rect x="70" y="220" width="9" height="9" fill="#4584CC"></rect><rect x="165" width="9" height="9" fill="#3860AC"></rect><rect x="20" y="180" width="9" height="9" fill="#4584CC"></rect><rect x="185" width="9" height="9" fill="#3860AC"></rect><rect x="70" y="190" width="9" height="9" fill="#4584CC"></rect><rect x="60" y="210" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="240" width="9" height="9" fill="#2B519B"></rect><rect x="165" y="190" width="9" height="9" fill="#3860AC"></rect><rect x="250" y="70" width="9" height="9" fill="#2B519B"></rect><rect x="10" y="170" width="9" height="9" fill="#4584CC"></rect><rect x="270" y="20" width="9" height="9" fill="#2B519B"></rect><rect x="70" y="40" width="9" height="9" fill="#4584CC"></rect><rect x="260" y="130" width="9" height="9" fill="#2B519B"></rect><rect x="165" y="270" width="9" height="9" fill="#3860AC"></rect></g><g data-n="2" class="svg-g"><rect x="250" y="10" width="9" height="9" fill="#2B519B"></rect><rect x="50" y="200" width="9" height="9" fill="#4584CC"></rect><rect x="240" y="220" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="240" width="9" height="9" fill="#3860AC"></rect><rect x="240" y="60" width="9" height="9" fill="#2B519B"></rect><rect x="30" y="190" width="9" height="9" fill="#4584CC"></rect><rect x="125" y="30" width="9" height="9" fill="#3860AC"></rect><rect y="160" width="9" height="9" fill="#4584CC"></rect><rect x="290" y="10" width="9" height="9" fill="#2B519B"></rect><rect x="185" y="20" width="9" height="9" fill="#3860AC"></rect><rect x="70" y="210" width="9" height="9" fill="#4584CC"></rect><rect x="280" width="9" height="9" fill="#2B519B"></rect><rect x="10" y="40" width="9" height="9" fill="#4584CC"></rect><rect x="50" y="140" width="9" height="9" fill="#4584CC"></rect><rect x="210" y="130" width="9" height="9" fill="#2B519B"></rect><rect x="210" y="40" width="9" height="9" fill="#2B519B"></rect><rect x="155" y="50" width="9" height="9" fill="#3860AC"></rect><rect x="105" y="260" width="9" height="9" fill="#3860AC"></rect></g><g data-n="1" class="svg-g"><rect x="210" y="10" width="9" height="9" fill="#2B519B"></rect><rect x="220" y="180" width="9" height="9" fill="#2B519B"></rect><rect x="60" y="80" width="9" height="9" fill="#4584CC"></rect><rect x="70" y="60" width="9" height="9" fill="#4584CC"></rect><rect x="155" width="9" height="9" fill="#3860AC"></rect><rect x="210" y="190" width="9" height="9" fill="#2B519B"></rect><rect x="115" y="90" width="9" height="9" fill="#3860AC"></rect><rect x="10" y="150" width="9" height="9" fill="#4584CC"></rect><rect y="40" width="9" height="9" fill="#4584CC"></rect><rect x="220" y="230" width="9" height="9" fill="#2B519B"></rect><rect x="115" y="150" width="9" height="9" fill="#3860AC"></rect><rect x="60" y="240" width="9" height="9" fill="#4584CC"></rect><rect x="250" y="210" width="9" height="9" fill="#2B519B"></rect><rect x="30" y="100" width="9" height="9" fill="#4584CC"></rect><rect x="260" y="60" width="9" height="9" fill="#2B519B"></rect><rect x="240" y="130" width="9" height="9" fill="#2B519B"></rect><rect x="50" y="160" width="9" height="9" fill="#4584CC"></rect><rect x="260" y="200" width="9" height="9" fill="#2B519B"></rect></g>


</svg>

					</div>
				</div>
				<div class="col-lg-8">
					<ul class="data__list">
						<li >
							<img src="<?php bloginfo('template_url'); ?>/assets/img/data/1.svg" alt="">
							<h4  >Connecting To Data</h4>
							<p  >Very rarely nowadays you find that all data for your business is in a single source. We help you to combine all your data together to give you a wholistic view on your business.</p>
						</li>
						<li  >
							<img src="<?php bloginfo('template_url'); ?>/assets/img/data/1.svg" alt="">
							<h4  >Data Pre-processing</h4>
							<p  >We bring your data to the right format for the <a href="#">analysis</a>. We also combine all your data to a single dataset/data model.</p>
						</li>
						<li  >
							<img src="<?php bloginfo('template_url'); ?>/assets/img/data/2.svg" alt="">
							<h4  >Data Analysis & Visualizations</h4>
							<p  >We analyse your <a href="#">business</a> by writing formulas for the KPIs that you want to track. We then present you the findings of our analysis in a form of dashboard with data visualisation.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<?php 

        $args = array( 'post_type' => 'services', 'posts_per_page' => 1000,  'orderby' => 'date', 'order'=>'DESC' );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
          ?>
         
          
<section class="services">
	<div class="container">
		<div class="services__box">
			<div class="row">
				<div class="col-lg-5">
					<h2 class="stitle services__title">Services</h2>
					<ul class="services__list">
						<?php
				          $i=0;
				        while ( $the_query->have_posts() ):
				          $the_query->the_post();
				          $gID = get_the_ID();
				        ?>
						<li <?php if ($i==0):?>class="_active"<?php endif;?>>
							<span><?php echo get_the_title( $gID );?></span>
							<div class="service">
								<div class="of-img service__img">
									<a href="<?php echo get_permalink( $gID );?>"><?php the_post_thumbnail( $gID ); ?></a>
								</div>
								<div class="service__text">
									<?php echo get_field('service_excerpt', $gID );?>
								</div>
								<a href="<?php echo get_permalink( $gID );?>" class="read-more service__read-more">Read more</a>
							</div>
						</li>
						  <?php $i++; endwhile; wp_reset_postdata();  ?>         
					</ul>
				</div>
				<div class="d-none d-lg-block col-lg-7">
					<ul class="services__tabs">
						<?php
				          $i=0;
				        while ( $the_query->have_posts() ):
				          $the_query->the_post();
				          $gID = get_the_ID();
				        ?>
						<li <?php if ($i==0):?>class="_active"<?php endif;?>>
							<div class="service">
								<div class="of-img service__img">
									<a href="<?php echo get_permalink( $gID );?>"><?php the_post_thumbnail( $gID ); ?></a>
								</div>
								<div class="service__text">
									<?php echo get_field('service_excerpt', $gID );?>
								</div>
								<a href="<?php echo get_permalink( $gID );?>" class="read-more service__read-more">Read more</a>
							</div>
						</li>
						<?php $i++; endwhile; wp_reset_postdata();  ?>       
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>   

<?php get_template_part( 'template-parts/gotquestions' ); ?>


<?php
  $args = array( 'post_type' => 'customers', 'posts_per_page' => 1000,  'orderby' => 'date', 'order'=>'DESC' );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
          ?>
<section class="customers">
	<div id="customers__before" class="customers__before parallax"></div>
	<div class="container">
		<h2 class="stitle customers__title">Our customers</h2>
		<div class="customers__list-box">
			<ul class="row customers__list">
				<?php
				          $i=1;
				        while ( $the_query->have_posts() ):
				          $the_query->the_post();
				          $gID = get_the_ID();
				        ?>
				<li class="col-3 delay-<?php echo $i; ?>" >
					<div class="customers__list-item">
						<?php the_post_thumbnail( $gID ); ?>
					</div>
				</li>
				<?php $i++; if ($i>4) $i = 1;  ?>
				<?php endwhile; ?>
				
			</ul>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="featured">
	<div id="featured__before" class="featured__before parallax"></div>
	<?php get_template_part( 'template-parts/feautured_products' ); ?>
</section>

<?php get_template_part( 'template-parts/solved_cases' ); ?>


<section class="clients-say">
	<div class="container">
		<h2 class="stitle clients-say__title">What clients say</h2>
		<p class="clients-say__text">Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condimentum, diam arcu tristique nibh, nec egestas diam elit at nulla.</p>
		
		<?php get_template_part( 'template-parts/testimonials' ); ?>
							
		<div class="clients-say__bottom">
			<div>
				<p class="clients-say__bottom-text">Don’t take our word for it. See what our clients say about us!</p>
			</div>
			<div>
				<a href="<?php echo get_permalink(21);?>#testimonials" class="sbtn clients-say__bottom-btn">All testimonials</a>
			</div>
		</div>
		


	</div>
</section>

<?php
$result = wp_get_recent_posts( [
'numberposts'      => 5,
'offset'           => 0,
'category'         => 0,
'orderby'          => 'post_date',
'order'            => 'DESC',
'include'          => '',
'exclude'          => '',
'meta_key'         => '',
'meta_value'       => '',
'post_type'        => 'post',
'post_status'      => 'publish',
'suppress_filters' => true,
], OBJECT );

?>
<?php

?>
<?php if (!empty($result)):?>
<section class="blog-posts">
	<div class="blog-posts__before parallax" id="blog_posts_before"></div>
	<div class="container">
		<h2 class="stitle blog-posts__title">Blog posts</h2>
				
		<div class="blog-posts__box">
					
			<div class="swiper blog-posts__list-box">
				<ul class="swiper-wrapper blog-posts__list">
					<?php 
					foreach( $result as $post ):
					setup_postdata( $post );
					?>	
					<li class="swiper-slide">
						<div class="blog-pitem">
							<div class="of-img blog-pitem__img">
								<?php the_post_thumbnail();?>
							</div>
							<div class="blog-pitem__main">
								<span class="blog-pitem__date"><?php the_date('j F Y'); ?></span>
								<h4 class="blog-pitem__title"><?php echo the_title(); ?></h4>
							</div>
							<a href="<?php the_permalink();?>" class="blog-pitem__link"></a>
						</div>
					</li>
					<?php
					endforeach;
					wp_reset_postdata();
					?>
				</ul>	
			</div>
			
			<div class="swiper-nav">
				<a href="#" class="sbtn swiper-nav__view-all">View all</a>
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

<section class="discuss">
	<div class="container">
		<div class="row align-items-md-end discuss__heading">
			<div class="col-xl-6">
				<h2 class="discuss__title">Let’s discuss <span>your project!</span></h2>
			</div>
			<div class="col-xl-6">
				<p class="discuss__subtitle">Interested in working together? <br>Drop us a line and let’s chat!</p>
			</div>
		</div>
	
			<?php echo do_shortcode('[contact-form-7 id="152" title="mainpage-form"]');?>

	</div>
</section>