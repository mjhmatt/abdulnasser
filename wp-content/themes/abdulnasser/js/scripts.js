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
		

		$('.caro-holder ul').bxSlider({
			auto: false,
			mode: 'horizontal',
			autoHover: true,
			adaptiveHeight: true,
			adaptiveHeightSpeed: 0,
			infiniteLoop: false,
			video: true,
			useCSS: false,
			onSliderLoad: function(){
				// AddThis
				addthis.toolbox('.sharer');
				setTimeout(function(){
					$('.caro-holder .caro-contain').each(function(){
					 $('.caro-el').css('max-height',$(window).height()-400);
					});
				},100);
			},
			onSlideAfter: function(){
				$('.caro-el').css('max-height',$(window).height()-400);
			}

		});

		$(window).on('resize', function(){
		    $('.caro-el').css('max-height',$(window).height()-400);
		});

		$('.cat-mobile').click(function(){

			$('.cat-sidebar').removeClass('no-display');

		});
		$('.plus-tag').click(function(){

			$(this).parent().parent().find('.text-content').removeClass('no-display');

		});

		$('.text-content .cross').click(function(){

			$(this).parent().addClass('no-display');

		});
		
		
		
	});

	$(window).load(function() {
	 // executes when complete page is fully loaded, including all frames, objects and images
	 $( "body" ).fadeTo( "fast" , 1, function() {
	    // Animation complete.
	  });
	});
	
})(jQuery, this);
