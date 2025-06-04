window.addEventListener('load', function () {
	clearTimeout(preload_interval);
	document.getElementById("preloader__drag").style.transform = "scaleX(1)";
	setTimeout(function(){
		preloader__exit();
	},preloader_zz1);
});

$(function(){
	
	$("a, img").attr("draggable", "false");
	
	$(".header__menu-btn").click(function(e){
		e.preventDefault();
		if(!$(this).hasClass("_active") && $(".menu").is(":hidden")){
			$(".menu").fadeIn();
			$(this).addClass("_active");
			$("body").addClass("menu-opened");
		} else {
			$(".menu").fadeOut();
			$(this).removeClass("_active");
			$("body").removeClass("menu-opened");
		}
	});
	$(".header__search-btn").click(function(e){
		e.preventDefault();
		$(".modal_search").fadeIn();
	});
	$(".modal_search__close").click(function(e){
		e.preventDefault();
		$(".modal_search").fadeOut();
	});
	
	
	$(".menu-mob__item_submenu > span").click(function(e){
		$(".menu-mob").hide();
		$(".menu__submenus > li").eq($(this).parent().index()).fadeIn();
	});
	$(".menu-submenu span").click(function(e){
		$(this).parents(".menu-submenu").parent().hide();
		$(".menu-mob").fadeIn();
	});
	
	
	
	
	$(".services__list li").on("click", function(e) {
		e.preventDefault();
		var id = parseInt($(this).index());
		var ul = $(".services__list");
		if(!$(this).hasClass("_active")){
			ul.find("li._active .service").slideUp();
			ul.find("li._active").removeClass("_active");
			$(this).find(".service").slideDown();
			$(this).addClass("_active");
			var tabs = $(".services__tabs");
			tabs.find("._active").hide().removeClass("_active");
			tabs.children("li").eq(id).fadeIn().addClass("_active");
		}
	});
	
	const swiper1 = new Swiper('.featured__list-box', {
		slidesPerView: 1,	
		loop: true,
		spaceBetween: 30,
		navigation: {
			nextEl: '.featured .swiper-nav__arrow_right',
			prevEl: '.featured .swiper-nav__arrow_left',
		},
		breakpoints: {
// >= 			
//			576
//			768
//			992
//			1200			
			
			576: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 3,
			},
			1200: {
				slidesPerView: 3,
			},
		}
	});
	
	const swiper2 = new Swiper('.solved__cases-box', {
		slidesPerView: 1,	
		loop: true,
		navigation: {
			nextEl: '.solved .swiper-nav__arrow_right',
			prevEl: '.solved .swiper-nav__arrow_left',
		},
	});
	
	const swiper3 = new Swiper('.clients-say__list-box_1', {
		slidesPerView: 1,	
		loop: true,
		spaceBetween: 30,
		allowTouchMove: true,
		navigation: {
			nextEl: '.clients-say .swiper-nav__arrow_right',
			prevEl: '.clients-say .swiper-nav__arrow_left',
		},

		breakpoints: {
			576: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 3,
				allowTouchMove: false,
			},
			1200: {
				slidesPerView: 3,
				allowTouchMove: false,
			},
		}
	});

	var clients_say__list_box2_loop = true;
	 if ( device.mobile()==true || device.tablet()==true ){
	 	$('#testimonials').removeClass('noslider')
		 	const swiper32 = new Swiper('.clients-say__list-box_2', {
			slidesPerView: 1,	
			loop: clients_say__list_box2_loop,
			spaceBetween: 30,
			allowTouchMove: true,
			navigation: {
				nextEl: '.clients-say .swiper-nav__arrow_right',
				prevEl: '.clients-say .swiper-nav__arrow_left',
			},

			breakpoints: {
				576: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 3,
					allowTouchMove: false,
					
				},
				1200: {
					slidesPerView: 3,
					allowTouchMove: false,


				
	//				grid: {
	//					rows: 3,
	//				},
				},
			}
		});
	 }


	
	
	const swiper4 = new Swiper('.blog-posts__list-box', {
		slidesPerView: 1,	
		loop: true,
		spaceBetween: 30,
		allowTouchMove: true,
		
		navigation: {
			nextEl: '.blog-posts .swiper-nav__arrow_right',
			prevEl: '.blog-posts .swiper-nav__arrow_left',
		},

		breakpoints: {
			576: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 1,
			},
			992: {
				slidesPerView: 2,
				allowTouchMove: false,
			},
			1200: {
				slidesPerView: 2,
				allowTouchMove: false,
			},
		}
	});
	
	function headerCheck(){
		if($(window).scrollTop() > $(".header").height()){
			$(".header").addClass("header_scrolled");
		} else {
			$(".header").removeClass("header_scrolled");
		}
	}
	headerCheck();
	$(window).scroll(function(){
		headerCheck();
	});
	/*
	function topScroll(){
		$("html, body").animate({
			scrollTop: $(".top").next().offset().top - $(".header").height()
		}, 1000);
	}
	
	$("body").on("keydown", function(e){
		if(e.keyCode == 40 && $(window).scrollTop() <= $(".top").height()) {
			topScroll();
		}
	});
	*/
//	$(".top").bind('mousewheel', function(e){
//		if(e.originalEvent.wheelDelta/120 > 0) {}
//		else{
//			topScroll();
//		}
//	});
	/*
	$(".top__scroll").on("click", function(e){
		topScroll();
	});	
	*/
	$('input[type="file"]').change(function(){
		var value = $("input[type='file']").val();
		var value1 = value.split('\\');
		if (value1.length>0){
			$('.js-value').text(value1[value1.length-1]);
		} else {
			$('.js-value').text(value);
		}
		
	});
	
	
	$(".cselect").niceSelect();
	
});



$(function(){
	$(document).on("click", ".prods__thumb", function(){
		$(".prods__thumb._active").removeClass("_active");
		$(this).addClass("_active");
		$(".prods__big-img img").attr("src", $(this).find("a").attr("href")).removeAttr('srcset');
		return false;
	});

	$(".stars__item").click(function(e){
		e.preventDefault();
		var curId = $(this).index();
		var curValue = 0;
		$(this).parents(".stars").find(".stars__item").each(function(){
			if($(this).index() <= curId){
				$(this).addClass("_active");
				curValue++;
			} else {
				$(this).removeClass("_active");
			}
		});
		$(this).siblings(".stars__input-val").val(curValue);
	});

	$(".prods__tabs-switcher li").on("click", function(e){
		e.preventDefault();
		$(".prods__tabs-switcher li._active").removeClass("_active");
		$(this).addClass("_active");
		$(".prods__tab._active").hide().removeClass("_active");		
		$(".prods__tabs").find(".prods__tab").eq($(this).index()).fadeIn("fast").addClass("_active");
	});

	const swiper5 = new Swiper('.prods__thumbs-box', {
		slidesPerView: 4,	
		loop: false,
		spaceBetween: 10,
		breakpoints: {
			576: {
				slidesPerView: 5,
			},
		}
	});	

	$(".prods-faq__list-item").click(function() {
		var item = $(this),
			head = item.find(".prods-faq__list-heading"),
			itemActive = item.siblings("._active"),
			body = item.find(".prods-faq__list-text"),
			itemActiveBody = itemActive.find(".prods-faq__list-text");
		if (!item.hasClass("_active") && !body.is(":visible")) {
			//			itemActiveBody.slideUp();
			//			itemActive.removeClass("_active");
			body.slideDown("fast");
			item.addClass("_active");
		} else {
			body.css("display", "block").slideUp("fast");
			item.removeClass("_active");
		}
	});

	$(".prods__rating-link").click(function(e) {
		e.preventDefault();
		$(".prods__tabs-switcher li:nth-child(2)").click();
		$("html, body").animate({
			scrollTop: $(".prods__tab._active").offset().top - 50
		}, 1000);
	});


	
});


 var minlen = 2; // минимальная длина слова
 var keyint = 100; // интервал между нажатиями клавиш
 var term = '';
 var n = 0;
 var time_keyup = 0;
 var time_search = 0;
 
 function dosearch3() {
  term = jQuery('#products_search_inp').val();
  jQuery('#popup-cities-list span.highlight').each(function(){ //удаляем старую подсветку
   jQuery(this).after(jQuery(this).html()).remove();  
  });
  var t = '';
  jQuery('#popup-cities-list li a').each(function(){ // в селекторе задаем область поиска
   jQuery(this).html(jQuery(this).html().replace(new RegExp(term, 'ig'), '<span class="highlight">$&</span>')); // выделяем найденные фрагменты
   //n = jQuery('#popup-cities-list span.highlight').length; // количество найденных фрагментов
  // console.log('n = '+n);
   jQuery(this.parentNode).hide();
   //jQuery('.clear_li_3').show();
   jQuery(this).find('.highlight').parent('a').parent('li').show(); 
  });
  jQuery('#products-search-list').show();

 	if (  jQuery('#popup-cities-list li:visible').length>0 ){
 		jQuery('#products-search-list').show();
 	} else {
 		jQuery('#products-search-list').hide();
 	}
 }
$(function(){
	$("#products_search_inp").on("keyup change", function(){

		var d1 = new Date();
		  time_keyup = d1.getTime();
		  if (jQuery('#products_search_inp').val()!=term) // check is change string 
		   if (jQuery('#products_search_inp').val().length>=minlen) { // check string length
		    setTimeout(function(){ // wait next typing
		     var d2 = new Date();
		     time_search = d2.getTime();
		     if (time_search-time_keyup>=keyint) // check interval between typing
		      dosearch3(); // if all good make search 
		    }, keyint); 
		   } else {
		    	jQuery('#popup-cities-list li, #products-search-list').hide();
		   	//jQuery('#spresult3').html('&nbsp'); // if string is short - delete text from result DIV   
		   }
    
	});
});


//ajax requests
$(function(){
	$("#services_filter,#technologies_filter").on("change", function(){
		$.post("/", {
			'ajax_query':'cases_filter',
			'services_filter':$('#services_filter').val(),
			'technologies_filter':$('#technologies_filter').val(),
		}, function(data) {
			$('#cases_content').html(data);
		});
	});
});

$(function(){
	var ab_i = 1;
	$('#about__text__list ul li').each(function(){
		$(this).addClass('delay-'+ab_i);
		ab_i++;
		if (ab_i>3) ab_i = 1;
	})

	 $('section p, section h5, section .h5, section h6, section .h6, section h3, section .h3, section h4, section .h4, section h2, section h1, section .h2, section .h1, section  li, .discuss-form__row ').each(function () {

          if (!$(this).hasClass('wow') && !$(this).hasClass('not-wow') && $(this).is(":visible")  ){

          	if ($(this).parents(".service__text").length>0){
          		
          	} else if ($(this).parents(".popup").length>0){
          		
          	} else {
          		$(this).addClass('fadeInUp wow');
          	}
            
          }
      });

        new WOW().init();
       
});


function close_popups() {
	$('.popup').removeClass('popup__open');
	$('#popup-video .popup__video iframe').remove();
}
function get_video(video){
	if ( $('#popup-video .popup__video iframe').length<1 ){
		$('#popup-video .popup__video').append('<iframe width="560" height="325" src="https://www.youtube.com/embed/'+video+'?enablejsapi=1&rel=0&autoplay=1&&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
	}
	$('#popup-video').addClass('popup__open');
}

function open_popup(div){
	close_popups();
	$(div).addClass('popup__open');
}
function open_popup_form(product_name){
	$('#product_name_id').val(product_name);
	open_popup('#popup-form');
}

