
		jQuery(document).ready(function($){
			$('.owl-carousel-1').owlCarousel({
				autoplay:true, //Автозапуск слайдера
                smartSpeed:3000, //Время движения слайда
                autoplayTimeout:6000, //Время смены слайда
                nav: false,
                items: 1,
                loop: true,
                // center: true,
                responsive:{ //Адаптация в зависимости от разрешения экрана

		        0:{

		            items:1

		        },

		        600:{

		            items:1

		        },

		        1000:{

		            items:1

		        }

		    }

			});

			$('.owl-carousel-2').owlCarousel({
				// autoplay:true, //Автозапуск слайдера
				margin: 18,
                smartSpeed:2000, //Время движения слайда
                autoplayTimeout:5000, //Время смены слайда
                nav: true,
                navText: [
                       '<i class="icon-icon-left" aria-hidden="true"></i>',
                       '<i class="icon-icon-right" aria-hidden="true"></i>'
                   ],

                items: 3,
                loop: true,
                center: true,
                responsive:{ //Адаптация в зависимости от разрешения экрана

		        0:{

		            items:1

		        },

		        600:{

		            items:2

		        },

		        1000:{

		            items:3

		        }

		    }

			});

			$(function() {
			 	$(".fancybox").fancybox({
			 		
			 	});
			});

			$(function($){
				$('.phone').mask('+7(999) 999-9999');
			});

			$(window).resize(function () {
				if($(window).width() < 767) {
					

				}
			});

		});
