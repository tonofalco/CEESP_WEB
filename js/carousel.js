window.addEventListener('load', function(){
	new Glider(document.querySelector('.carousel_lista'), {
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: '.carousel_indicadores',
		arrows: {
			prev: '.carousel_anterior',
			next: '.carousel_siguiente'
		},
		responsive: [
			{
			  // screens greater than >= 775px
                breakpoint: 450,
                settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: 1,
				slidesToScroll: 1
			}
			},{
			  // screens greater than >= 1024px
                breakpoint: 800,
                settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
			}
		]
	});
});