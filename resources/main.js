(function ($) {
	"use strict";

	let HT = {};

	HT.openDropdown = (className) => {
		$(`.${className}`).click(function () {
			let _this = $(this.lastElementChild);
			if (_this.hasClass("openChevron")) {
				_this.removeClass("openChevron");
				_this.addClass("closeChevron");
			} else {
				_this.addClass("openChevron");
				_this.removeClass("closeChevron");
			}
		});
	};

	HT.saleCountDown = (saleTime) => {
		setInterval(() => {
			let saleEndTime = new Date(saleTime).getTime();
			let now = new Date().getTime();

			let timeLeft = saleEndTime - now;

			if (timeLeft < 0) {
				clearInterval();
			} else {
				let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
				let hours = Math.floor(
					(timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
				);
				let minutes = Math.floor(
					(timeLeft % (1000 * 60 * 60)) / (1000 * 60)
				);
				let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

				$(".days").text(days);
				$(".hours").text(hours);
				$(".minutes").text(minutes);
				$(".seconds").text(seconds);
			}
		}, 1000);
	};

	HT.swiper = (className) => {
		new Swiper(`.${className}`, {
			direction: "horizontal",
			loop: false,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
		});
	};

	HT.swiperFreedom = (className) => {
		new Swiper(`.${className}`, {
			slidesPerView: 6,
			spaceBetween: 30,
			freeMode: true,
			slidesOffsetAfter: 0,
			breakpoints: {
				1280: {
					slidesPerView: 5,
					spaceBetween: 10,
				},
				1024: {
					slidesPerView: 4,
					spaceBetween: 10,
				},
				800: {
					slidesPerView: 3,
					spaceBetween: 10,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 10,
				},
				600: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				414: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
				375: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	};

	$(document).ready(function () {
		HT.openDropdown("department-wrapper");
		HT.openDropdown("dropdown-btn");
		HT.openDropdown("nav-link");
		HT.swiper("swiper");
		HT.saleCountDown("1 January 2026 00:00:00");
		HT.swiperFreedom("freemode");
	});
})(jQuery);
