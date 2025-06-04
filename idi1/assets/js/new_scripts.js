$(function(){
	 $('section p,  section h3, section .h3, section h4, section .h4, section h2, section h1, section .h2, section .h1, section ul li, .discuss-form__row ').each(function () {

          if (!$(this).hasClass('wow') && !$(this).hasClass('not-wow') && $(this).is(":visible") ){
            $(this).addClass('fadeInUp wow');
          }
      });

        new WOW().init();
       
});
