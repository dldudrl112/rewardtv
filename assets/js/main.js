(function($){
	$(document).ready(function() {
		$('#main_slide').slick({
			dots: true, // 스크롤바 아래 점으로 페이지네이션 여부
			infinite : true, //무한 반복 옵션	 
			autoplay : true,			// 자동 스크롤 사용 여부
			autoplaySpeed : 4000,  // 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
			centerPadding: '20px',
			slidesToShow: 1, 	// 한 화면에 보여질 컨텐츠 개수
			arrows: 0	// 옆으로 이동하는 화살표 표시 여부
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