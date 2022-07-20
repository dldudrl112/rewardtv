(function($){
	$(document).ready(function() {
		$('#main_slide').slick({
			dots: true,
			centerPadding: '20px',
			slidesToShow: 1,
			arrows: 0
		});
		$('#best_slide').slick({
			dots: true,
			centerPadding: '20px',
			slidesToShow: 3,
			arrows: 0,
			responsive: [
			{
				breakpoint: 992,
				settings: {
					centerPadding: '20px',
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					centerMode: true,
					centerPadding: '0px',
					slidesToShow: 1
				}
			}
			]
		});

		$(".carousel").swipe({
			swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
				if (direction == 'left') $(this).carousel('next');
				if (direction == 'right') $(this).carousel('prev');
			},
			allowPageScroll:"vertical"
		});

		$('.category li').on('click', function() {
			$(this).addClass('active');
			$(this).siblings().removeClass('active');
		});
	});

})(jQuery);