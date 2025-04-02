(function($){
	'use strict'

	let HT = {}

	HT.openDropdown = (className) =>{
		$(`.${className}`).click(function(){
			let _this = $(this.lastElementChild);
			if(_this.hasClass('openChevron')){
				_this.removeClass('openChevron');
				_this.addClass('closeChevron');
			}else{
				_this.addClass('openChevron');
				_this.removeClass('closeChevron');
			}
		})
	};

	HT.swiper = (className) =>{
		new Swiper(`.${className}`, {
			// Optional parameters
			direction: 'horizontal',
			loop: false,
		  
			// If we need pagination
			pagination: {
			  el: '.swiper-pagination',
			  clickable: true
			},
		  
			// Navigation arrows
			// navigation: {
			//   nextEl: '.swiper-button-next',
			//   prevEl: '.swiper-button-prev',
			// },
		  });
	};

	$(document).ready(function(){
		HT.openDropdown('department-wrapper');
		HT.openDropdown('dropdown-btn');
		HT.openDropdown('nav-link');
		HT.swiper('swiper');
	});
})(jQuery)