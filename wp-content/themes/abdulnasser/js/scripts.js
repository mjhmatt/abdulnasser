(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		/*------------------------------------*\
			PACKERY
		\*------------------------------------*/

		var $container = $('.packery').packery({
			itemSelector: 'a',
		});



		$('.cat-item').click(function() {
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

					$('.cat-item').removeClass('active');
					$this.addClass('active');
				}
			});

			return false;
		});



		
	});
	
})(jQuery, this);
