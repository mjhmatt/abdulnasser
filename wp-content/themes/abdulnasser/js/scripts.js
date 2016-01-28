(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		 //addthis.init();


		
		// DOM ready, take it away

		/*------------------------------------*\
			PACKERY
		\*------------------------------------*/

		var $container = $('.packery').packery({
			itemSelector: 'a',
		});

		$('.desktop .cat-item, .cat-sidebar .cat-item').click(function() {
			var $this = $(this),
				href = $this.attr('data-href');

			$.ajax({
				url: href,
				success: function(data) {
					var $data = $(data),
						posts = $data.find('.packery a'),
						pckry = Packery.data($('.packery')[0]);


					pckry.remove($('.packery a'));
					pckry.layout();

					$('.packery').append(posts);
					pckry.appended(posts);

				}
			});

			return false;
		});



		$('.cat-sidebar .cat-item').click(function(){
			$('.cat-sidebar').addClass('no-display');
			$('.cat-sidebar .plus-minus').insertBefore($(this));
		});

		$('.cat-item').click(function(){
			$('.cat-mobile .cat-item').text($(this).text());
			$('.cat-sidebar .plus-minus').insertBefore('.cat-sidebar .cat-item:contains("' + $(this).text() +'")');
			$('.cat-item').removeClass('active');
			$('.cat-item:contains("' + $(this).text() +'")').addClass('active');

		});
		
		$('.burger-button').click(function(){
			$('.burger-menu').toggleClass('active');
		});

		// $('.caro-holder ul').bxSlider({
		// 	auto: false,
		// 	mode: 'fade',
		// 	autoHover: true,
		// 	adaptiveHeight: true,
		// 	adaptiveHeightSpeed: 0,
		// 	infiniteLoop: false,
		// 	video: true,
		// 	useCSS: true,
		// 	onSliderLoad: function(){
		// 		// AddThis

		// 		setTimeout(function(){
		// 			$('.caro-holder .caro-contain').each(function(){
		// 			 $('.caro-el').css('max-height',$(window).height()-400);
		// 			});
		// 		},100);
		// 	},
		// 	onSlideAfter: function(){
		// 		$('.caro-el').css('max-height',$(window).height()-400);
		// 	}

		// });

		$('.caro-holder ul').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		  autoplay: false,
		  autoplaySpeed: 3000,
		  respondTo: 'min',
		  dots:true
		});
		$('.caro-holder .slick-slider, .caro-holder ul li.slick-slide').css('height',$(window).height()-50);


		$('.cross').click(function(){
			$(this).parent().removeClass('active');
            window.homeSlider.startAuto();
		});


		$('.open').click(function(){
			$(this).prev().addClass('active');
			window.homeSlider.stopAuto();

		});

		$(window).on('resize', function(){
		    $('.caro-el').css('max-height',$(window).height()-400);
		    $('.sliders, .sliders li').css('height',$(window).height()-50);
		    
		});

		$('.cat-mobile').click(function(){

			$('.cat-sidebar').removeClass('no-display');

		});
		$('.plus-tag').click(function(){
			var that = $(this);
			var textContainer = $(this).parent().parent();
			var textContent = $(this).parent().parent().find('.text-content');
			$(textContent).removeClass('no-display');
 
			if(($(window).width())<680){
		    	$(textContent).appendTo('body');
		    }
		    else {
		    	$(textContent).appendTo($(that).parent().parent());
		    }

		    $('.text-content .cross').click(function(){
		    	$(textContent).appendTo(textContainer);
				$(this).parent().addClass('no-display');

			});

		});

		$('.text-content .cross').click(function(){

			$(this).parent().addClass('no-display');

		});
		
		
	$(window).load(function() {
	 // executes when complete page is fully loaded, including all frames, objects and images
		 $( "body" ).fadeTo( "fast" , 1, function() {
		    // Animation complete.
		    setTimeout(function(){
		    	$container.packery();
		    },500);

		  });
		//window.homeSlider = $('.sliders').bxSlider({
		// 	auto: true,
		// 	mode: 'fade',
		// 	autoHover: true,
		// 	adaptiveHeight: true,
		// 	adaptiveHeightSpeed: 0,
		// 	infiniteLoop: true,
		// 	video: true,
		// 	useCSS: true,
		// 	onSliderLoad: function(){
		// 		// AddThis
		// 		setTimeout(function(){
		// 			 $('.bx-wrapper, .bx-viewport, .sliders').css('height',$(window).height()-50);
		// 			 console.log($(window).height());
		// 		},500);
		// 		setTimeout(function(){
		// 			$('.sliders').each(function(){
		// 			 $('.sliders li').css('height',$(window).height()-50);
		// 			});
		// 		},100);
		// 	},
		// 	onSlideAfter: function(){
		// 	}

		// });

		$('.sliders').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  respondTo: 'min'
		});
		$('.sliders, .sliders li').css('height',$(window).height()-50);
	});
		
	});

	
})(jQuery, this);
