<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>	
	<meta name="google-site-verification" content="_i1hm66O9jEl9D3pB9HM0QS_2Q5Ngr073QmUlLEqVw0" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<style type="text/css">
		.preloader {
			background: #040d17;
			display: flex;
			align-items: center;
			justify-content: center;
			width: 100%;
			height: 100%;
			position: fixed;
			left: 0;
			top: 0;
			z-index: 999999;
			flex-direction: column;
			transition:all 0.5s ease;
			visibility: hidden;
			opacity: 1;
		}
		.preloader__area {
			margin-top: 25px;
			background-color: #000305;
			width: 200px;
			height: 5px;
			position: relative;
		}
		.preloader__drag {
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			background: #2b519b;
			transform-origin: 0 0;
			transform:scaleX(0);
			transition:transform linear;
		}
		.preloader.preloader__opened {
			visibility: visible;
			opacity: 1;
		}
	</style>
	<?php wp_head(); ?>
	<?php $post_id = get_the_ID(); ?>
	<?php 
		$args = array( 'orderby' => 'sort', 'order' => 'ASC' );
		$menu2 =	wp_get_nav_menu_items( 'menu1', $args );				
		$products_menu =	wp_get_nav_menu_items( 'Products-menu', $args );
		$services_menu =	wp_get_nav_menu_items( 'Services-menu', $args );
		$technologies_menu =	wp_get_nav_menu_items( 'Technologies-menu', $args );				
	?>

</head>
<body <?php if (is_front_page()){ echo 'class="mainpage "'; }?>>
	<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<div class="preloader preloader__opened" id="preloader">
	<div><img src="<?php bloginfo('template_url'); ?>/assets/img/preloader_ico.svg" width="42" height="40" alt="Preloader"></div>
	<div class="preloader__area">
		<div class="preloader__drag" id="preloader__drag"></div>
	</div>
</div>

<script type="text/javascript">       
    function preloader__exit(){
    	setTimeout(function(){
        	document.querySelector('#preloader').classList.remove("preloader__opened");
        },preloader_zz1);
    }
    var i2 = 0;
    var preload_interval;
    var elem = document.getElementById("preloader__drag");
    var width1=0;
    var preloader_zz1 = 0.2;
    elem.style.transitionDuration = preloader_zz1+"s";


function preloader__move(tt,preloader_zz) {
     if (width1 >= 100) {
        
        clearTimeout(preload_interval);
        preloader__exit();
        i2 = 0;
      } else {
        width1+=preloader_zz;
        elem.style.transform = "scaleX("+width1/100+")";
        preload_interval = setTimeout(function(){
            preloader__move(tt,preloader_zz);
        }, tt);
      }       
}
preloader__move(preloader_zz1*1000,5);
</script>

	<!-- header -->
	<header class="header">
		<div class="container-fluid">
			<div class="header__box">
				<div>
					<a href="/" class="header__logo">
						
						<img src="<?php echo( get_theme_mod('logo_upload', '') );?>" alt="">
					</a>
				</div>
				<div>
					<ul class="header__btns">
						<li>
							<a href="<?php echo get_permalink(106);?>" class="sbtn header__btn">Products</a>
						</li>
						<li>
							<a href="<?php echo get_theme_mod('setting_calclink', '');?>" class="sbtn sbtn_inv header__btn">Service enquiry</a>
						</li>
					</ul>

					<button class="header__search-btn"></button>

					<button class="header__menu-btn"></button>

				</div>
			</div>
		</div>
		<div class="menu">
			<div class="container">
				<div class="menu__wrap">
					<div class="menu__box menu__box_mob">
						<ul class="menu-mob">

							<li class="menu-mob__item menu-mob__item_submenu">
								<!--Services-->
								<a href="<?php echo get_permalink(101);?>"><?php echo get_the_title(101); ?></a>
								<span></span>
							</li>
							<li class="menu-mob__item menu-mob__item_submenu">
								<!--Products-->
								<a href="<?php echo get_permalink(106);?>"><?php echo get_the_title(106); ?></a>
								<span></span>
							</li>
							<li class="menu-mob__item menu-mob__item_submenu">
								<!--Technologies-->
								<a href="<?php echo get_permalink(47);?>"><?php echo get_the_title(47); ?></a>
								<span></span>
							</li>
							<?php if (!empty($menu2)): foreach ($menu2 as $k => $p): ?>
								<li class="menu-mob__item"><a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
								<?php endforeach; endif;?>
							
						</ul>
						
						<ul class="menu__submenus">
							<li>
								<!--Services-->
								<ul class="menu-submenu">
							<?php if (!empty($services_menu)): foreach ($services_menu as $k => $p):  ?>
							<li><?php if ($k==0):?><span></span><?php endif;?> <a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
							<?php  endforeach; endif;?>
								</ul>
							</li>
							<li>
								<!--Products-->
								<ul class="menu-submenu">
									<?php if (!empty($products_menu)): foreach ($products_menu as $k => $p):  ?>
							<li><?php if ($k==0):?><span></span><?php endif;?> <a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
							<?php  endforeach; endif;?>
								</ul>
							</li>
							<li>
								<!--Technologies-->
								<ul class="menu-submenu">
									<?php if (!empty($technologies_menu)): foreach ($technologies_menu as $k => $p):  ?>
							<li><?php if ($k==0):?><span></span><?php endif;?> <a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
							<?php  endforeach; endif;?>
								</ul>
							</li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>

						
						
					</div>
					<div class="menu__box menu__box_1">	
						<div>
							<ul class="menu__links">
								<?php if (!empty($services_menu)): foreach ($services_menu as $k => $p): if ($k<5): ?>
							<li <?php if ($k==0):?>class="big-size"<?php endif;?>><a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
							<?php endif; endforeach; endif;?>
							<li class="all-size"><a href="<?php echo get_permalink(101);?>">All services</a></li>
							</ul>
						</div>		
						<div>
							<ul class="menu__links">
								<?php if (!empty($products_menu)): foreach ($products_menu as $k => $p): if ($k<5): ?>
							<li <?php if ($k==0):?>class="big-size"<?php endif;?>><a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
							<?php endif; endforeach; endif;?>
							<li class="all-size"><a href="<?php echo get_permalink(106);?>">All products</a></li>
							</ul>
						</div>		
						<div>
							<ul class="menu__links">
								<?php if (!empty($technologies_menu)): foreach ($technologies_menu as $k => $p): if ($k<5): ?>
							<li <?php if ($k==0):?>class="big-size"<?php endif;?>><a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
							<?php endif; endforeach; endif;?>
							<li class="all-size"><a href="<?php echo get_permalink(47);?>">All technologies</a></li>
							</ul>
						</div>	
					</div>
					<div class="menu__box menu__box_2">	
						<div>
							<a href="<?php echo get_theme_mod('setting_calclink', '');?>" class="sbtn sbtn_inv menu__btn menu__btn_1">Service enquiry</a>
						</div>		
						<div>
							<a href="<?php echo get_permalink(106);?>" class="sbtn menu__btn menu__btn_2">Products</a>
						</div>		
						<div>
							<a href="tel:<?php echo str_replace(array('-',' '),'',get_theme_mod('setting_tel', '')); ?>" class="menu__phone"><?php echo get_theme_mod('setting_tel', ''); ?></a>
						
							<ul class="menu__socials">
								<li>
									<a href="<?php echo get_theme_mod('setting_watsap', '');?>" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/footer/viber.svg" alt="">
									</a>
								</li>
								<li>
									<a href="<?php echo get_theme_mod('setting_tg', '');?>" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/footer/telegram.svg" alt="">
									</a>
								</li>
							</ul>
						</div>	
					</div>
					<div class="menu__box menu__box_3">	
						<div>
							<ul class="menu__bottom-links">
								<?php if (!empty($menu2)): foreach ($menu2 as $k => $p): ?>
								<li><a href="<?php echo $p->url;?>"><?php echo $p->title;?></a></li>
								<?php endforeach; endif; ?>
								
							</ul>
						</div>		
						<div>
							<p class="menu__loc"><?php echo get_theme_mod('setting_address', ''); ?></p>
						</div>	
					</div>
				</div>
			</div>
			<ul class="mob-btns menu__mob-btns">
				<li>
					<a href="<?php echo get_theme_mod('setting_calclink', '');?>">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/header/mob-1.svg" width="24" height="24" alt="" draggable="false">
						<span>enquiry</span>
					</a>
				</li>
				<li>
					<a href="<?php echo get_permalink(106);?>">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/header/mob-2.svg" width="24" height="24" alt="" draggable="false">
						<span>products</span>
					</a>
				</li>
				<!--
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/header/mob-3.svg" alt="" draggable="false">
						<span>profile</span>
					</a>
				</li>
			-->
			</ul>
		</div>
	</header>
<!-- END header -->
<main class="main <?php if (is_front_page()){ echo 'main_home'; }?>">