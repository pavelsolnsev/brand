$(function () {
    /* Inits */
    initLazy();
    initMenu();
    innitrightMarquee()
    innitleftMarquee();
    // missPopup();
    initScroll();

	
    /* Lazy */
    function initLazy() {

        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200
            ;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src
                                    ;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }

    function initScroll() {
		if (!$('.scroll').length) return;

		$(document).on('click scroll.init', '.scroll', function(event) {
			event.preventDefault();
			$.fancybox.close();

			var
			hrefId = $(this).attr('href') || $(this).data('href'),
			posTop = $(hrefId).offset().top - $('.header').height() + 0.5
			;
			$('html, body').animate({scrollTop: posTop}, 100);
		});
	}

    function missPopup() {

		let forms = document.querySelectorAll('.popup-price form');
		let buttons = document.querySelectorAll('.price-button');

		for ( let button of buttons ) {

			button.addEventListener('click', function() {

			if ( !localStorage.name && !localStorage.phone && !localStorage.email ) { return }

				for ( let form of forms ) {

					form.querySelector('input[name="name"]').value = localStorage.name;
					form.querySelector('input[name="phone"]').value = localStorage.phone;
					form.querySelector('input[name="email"]').value = localStorage.email;

					let mergelead = document.createElement('input');
							mergelead.type = 'hidden';
							mergelead.name = 'mergelead';
							mergelead.value = sessionStorage.getItem('mergelead');

					form.insertAdjacentElement('beforeend', mergelead);

					let link = button.getAttribute('href');

					let event = document.createEvent('Event');
					event.initEvent('submit', true, true);
					document.querySelector(`${link} form`).dispatchEvent(event);
				}
			})
		}
	}


    $('.popup-menu__link').click(function () {
        $.fancybox.close();
    });
    /*burger*/
    function initMenu() {
        $('.header__menu').on('click', function () {
            $('.header__nav').toggleClass('active')

        });
        $('.header__nav-link').on('click', function () {
            $('.ham, .header__nav').removeClass('active');
        });
    }
    /*menu fixed*/
    function initScrollHeader() {
        const header = $('.header');
        const scroll = $(window).scrollTop();
        if (scroll >= 40) {
            header.addClass('fixed');

        } else {
            header.removeClass('fixed');
        }
    }
    $(window).scroll(() => initScrollHeader())


    /*speakers hover layout*/
    $(".speakers__item").hover(

        function () {
            
            var window_width = $(window).width();


            if (window_width > 1565) {
                $(this).closest('.speakers__box').addClass("hover");
                $(this).mousemove(function (e) {
                    // положение элемента
                    var width = $(this).width(),
                        pos = $(this).offset(),
                        elem_left = pos.left,
                        elem_top = pos.top,
                        // положение курсора внутри элемента
                        Xinner = e.pageX - elem_left,
                        Yinner = e.pageY - elem_top
                        ;
                    // console.log("X: " + Xinner + " Y: " + Yinner); // вывод результата в консоль
                    if (Xinner > (width / 2)) {

                        // $(this).css({ 'transform': 'rotate3d(0, 39.1, 1, -30deg)' });
                        $(this).css({ 'transform': 'rotate3d(0, 1, 0, 20deg)' });
                    }
                    else {
                        // $(this).css({ 'transform': 'rotate3d(0, 39.1, 1, 30deg)' });
                        $(this).css({ 'transform': 'rotate3d(0, 1, 0, -15deg)' });
                    }
                });
            }
        }, function () {
            $(this).closest('.speakers__box').removeClass("hover");
            $(this).css({ 'transform': 'unset' });
        });
    /*Marquee skroling bar to the right*/
    function innitrightMarquee() {
        let a;

        if (document.body.clientWidth > 767) { a = 75 }
        else if (document.body.clientWidth > 320) { a = 30 };

        $('.marquee__right').marquee({
            duration: 20000,
            gap: 0,
            delayBeforeStart: 0,
            direction: 'right',
            duplicated: true,
            startVisible: true,
            speed: a
        });
    }
    /*Marquee skroling bar to the left*/
    function innitleftMarquee() {
        let a;

        if (document.body.clientWidth > 767) { a = 75 }
        else if (document.body.clientWidth > 320) { a = 30 };

        $('.marquee__left').marquee({
            duration: 20000,
            gap: 0,
            delayBeforeStart: 0,
            direction: 'left',
            duplicated: true,
            startVisible: true,
            speed: a
        });
    }

    /* Слайдеры */
    let $stage_slider = $('.stage__bloks'),
        settingsStage = {
            mobileFirst: true,
            dots: false,
            arrows: false,
            infinite: false,
            centerMode: false,
            slidesToShow: 1.227,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 767,
                    settings: "unslick"
                }
            ]

        }


    $stage_slider.slick(settingsStage);

    $(window).on('resize', function () {
        if (!$stage_slider.hasClass('slick-initialized')) {
            return $stage_slider.slick(settingsStage);
        }
    });

    let $partners_slider = $('.partners__blocks'),
        settingsPartners = {
            mobileFirst: true,
            dots: false,
            arrows: false,
            infinite: false,
            centerMode: false,
            slidesToShow: 1.227,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 767,
                    settings: "unslick"
                }
            ]

        }


    $partners_slider.slick(settingsPartners);

    $(window).on('resize', function () {
        if (!$partners_slider.hasClass('slick-initialized')) {
            return $partners_slider.slick(settingsPartners);
        }
    });

    /*Спикеры убирание data-more-hidden*/
    $('[data-more-button]').on('init.more click', function (event) {
        var
            $container = $('[data-more-options]', $(this).parent()),
            options = {},
            visible = 0,
            window_width = $(window).width(),
            $items
            ;

        options = $container.data('more-options');

        if (event.type == 'init') {
            visible = window_width > 991 ? options.init_desktop : options.init_mobile;

            /*if ( window_width > 991 && window_width < 1200 && visible % 2 == 0 ) {
            visible--;
            }*/
        }
        else {
            visible = window_width > 991 ? options.show_desktop : options.show_mobile;
        }

        $items = $(options.target + '[data-more-hidden]', $container);
        $items.slice(0, visible).removeAttr('data-more-hidden');

        $('html, body')
            .animate({ scrollTop: '+=1' }, 0)
            .animate({ scrollTop: '-=1' }, 0)
            ;

        if ($items.length - visible <= 0) {
            $(this).addClass('d-none');
        }

    })
        .trigger('init.more');

    //Слайдеры
    let $speakers_slider = $('.concept__block'),
        settingsSpeakers = {
            mobileFirst: true,
            infinite: false,
            arrows: true,
            dots: false,
            centerPadding: '0px',
            canterMode: false,
            slidesToShow: 1.3,
            slidesToScroll: 1,

            centerPadding: '80px',


        }


    $speakers_slider.slick(settingsSpeakers);

    $(window).on('resize', function () {
        if (!$speakers_slider.hasClass('slick-initialized')) {
            return $speakers_slider.slick(settingsSpeakers);
        }
    });
    $(window).on('resize', function () {
        if (!$speakers_slider.hasClass('slick-initialized')) {
            return $speakers_slider.slick(settingsSpeakers);
        }
    });
    //organizator slider
    let $organizator_slider = $('.organizator__block'),
        settingsOrganizator = {
            mobileFirst: true,
            infinite: false,
            arrows: false,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        }


    $organizator_slider.slick(settingsOrganizator);

    $(window).on('resize', function () {
        if (!$organizator_slider.hasClass('slick-initialized')) {
            return $organizator_slider.slick(settingsOrganizator);
        }
    });

    
    //partners slider woow!
    let $brands_slider = $('.brands__block'),
        settingsBrands = {
            infinite: false,
            mobileFirst: false,

            centerMode: true,
            slidesToShow: 1.6,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            centerPadding: '0px',
            responsive: [
                {
                    breakpoint: 991,
                    settings: "unslick"
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1.1,
                        slidesToScroll: 1
                    }

                },
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 1.25,
                        slidesToScroll: 1
                    }

                }

            ]
        }
    if ($brands_slider.length) {
        var currentSlide;
        var slidesCount;
        var sliderCounter = document.createElement('div');
        sliderCounter.classList.add('slider__counter');

        var updateSliderCounter = function (slick, currentIndex) {
            currentSlide = slick.slickCurrentSlide() + 1;
            slidesCount = slick.slideCount;
            $(sliderCounter).text(currentSlide + ' / ' + slidesCount)
        };

        $brands_slider.on('init', function (event, slick) {
            $brands_slider.append(sliderCounter);
            updateSliderCounter(slick);
        });

        $brands_slider.on('afterChange', function (event, slick, currentSlide) {
            updateSliderCounter(slick, currentSlide);
        });
    }



    $brands_slider.slick(settingsBrands);

    $(window).on('resize', function () {
        if (!$brands_slider.hasClass('slick-initialized')) {
            return $brands_slider.slick(settingsBrands);
        }
    });

    /* scrolToLink */
    function scrolToLink() {
        $("a.scroll-link").click(function () {
        let elementClick = $(this).attr("href");
        let destination = $(elementClick).offset().top;
        $("html, body")
            .stop()
            .animate({ scrollTop: destination - $(".header").outerHeight() }, 600);
        });
    }
    scrolToLink();

});










// // Таймер для "Чёрной пятницы"  //
// document.addEventListener('DOMContentLoaded', function () {
//     // конечная дата, например 1 июля 2021 (месяц наединицу меньше(начинается с 0 - это важно))
//     const deadline = new Date(2021, 13, 12);
//     // id таймера
//     let timerId = null;
//     // склонение числительных
//     function declensionNum(num, words) {
//       return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
//     }
//     // вычисляем разницу дат и устанавливаем оставшееся времени в качестве содержимого элементов
//     function countdownTimer() {
//       const diff = deadline - new Date();
//       if (diff <= 0) {
//         clearInterval(timerId);
//          document.getElementsByClassName('black-fryday')[0].style.display = 'none';
//       }
//       const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
//       const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
//       const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
//       const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
//       $days.textContent = days < 10 ? '0' + days : days;
//       $hours.textContent = hours < 10 ? '0' + hours : hours;
//       $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
//       $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
//       $days.dataset.title = declensionNum(days, ['день', 'дня', 'дней']);
//       $hours.dataset.title = declensionNum(hours, ['час', 'часа', 'часов']);
//       $minutes.dataset.title = declensionNum(minutes, ['минута', 'минуты', 'минут']);
//       $seconds.dataset.title = declensionNum(seconds, ['секунда', 'секунды', 'секунд']);
//     }
//     // получаем элементы, содержащие компоненты даты
//     const $days = document.querySelector('.timer__days');
//     const $hours = document.querySelector('.timer__hours');
//     const $minutes = document.querySelector('.timer__minutes');
//     const $seconds = document.querySelector('.timer__seconds');
//     // вызываем функцию countdownTimer
//     countdownTimer();
//     // вызываем функцию countdownTimer каждую секунду
//     timerId = setInterval(countdownTimer, 1000);
//   });




// // Таймер для "Чёрной пятницы"  для блоков с ценами //
// document.addEventListener('DOMContentLoaded', function () {
//     // конечная дата, например 1 июля 2021 (месяц наединицу меньше(начинается с 0 - это важно))
//     const deadline = new Date(2021, 13, 12);
//     // id таймера
//     let timerId = null;
//     // склонение числительных
//     function declensionNum(num, words) {
//       return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
//     }
//     // вычисляем разницу дат и устанавливаем оставшееся времени в качестве содержимого элементов
//     function countdownTimer() {
//       const diff = deadline - new Date();

//       const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
//       const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
//       const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
//       const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
//       $days.textContent = days < 10 ? '0' + days : days;
//       $hours.textContent = hours < 10 ? '0' + hours : hours;
//       $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
//       $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
//       $days.dataset.title = declensionNum(days, ['день', 'дня', 'дней']);
//       $hours.dataset.title = declensionNum(hours, ['час', 'часа', 'часов']);
//       $minutes.dataset.title = declensionNum(minutes, ['минута', 'минуты', 'минут']);
//       $seconds.dataset.title = declensionNum(seconds, ['секунда', 'секунды', 'секунд']);
//     }
//     // получаем элементы, содержащие компоненты даты
//     const $days = document.querySelector('.timer__days1');
//     const $hours = document.querySelector('.timer__hours1');
//     const $minutes = document.querySelector('.timer__minutes1');
//     const $seconds = document.querySelector('.timer__seconds1');
//     // вызываем функцию countdownTimer
//     countdownTimer();
//     // вызываем функцию countdownTimer каждую секунду
//     timerId = setInterval(countdownTimer, 1000);
//   });

//   // Таймер для "Чёрной пятницы"  для блоков с ценами //
// document.addEventListener('DOMContentLoaded', function () {
//     // конечная дата, например 1 июля 2021 (месяц наединицу меньше(начинается с 0 - это важно))
//     const deadline = new Date(2021, 13, 12);
//     // id таймера
//     let timerId = null;
//     // склонение числительных
//     function declensionNum(num, words) {
//       return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
//     }
//     // вычисляем разницу дат и устанавливаем оставшееся времени в качестве содержимого элементов
//     function countdownTimer() {
//       const diff = deadline - new Date();

//       const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
//       const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
//       const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
//       const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
//       $days.textContent = days < 10 ? '0' + days : days;
//       $hours.textContent = hours < 10 ? '0' + hours : hours;
//       $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
//       $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
//       $days.dataset.title = declensionNum(days, ['день', 'дня', 'дней']);
//       $hours.dataset.title = declensionNum(hours, ['час', 'часа', 'часов']);
//       $minutes.dataset.title = declensionNum(minutes, ['минута', 'минуты', 'минут']);
//       $seconds.dataset.title = declensionNum(seconds, ['секунда', 'секунды', 'секунд']);
//     }
//     // получаем элементы, содержащие компоненты даты
//     const $days = document.querySelector('.timer__days2');
//     const $hours = document.querySelector('.timer__hours2');
//     const $minutes = document.querySelector('.timer__minutes2');
//     const $seconds = document.querySelector('.timer__seconds2');
//     // вызываем функцию countdownTimer
//     countdownTimer();
//     // вызываем функцию countdownTimer каждую секунду
//     timerId = setInterval(countdownTimer, 1000);
//   });




//   // Таймер для "Чёрной пятницы"  для блоков с ценами //
// document.addEventListener('DOMContentLoaded', function () {
//     // конечная дата, например 1 июля 2021 (месяц наединицу меньше(начинается с 0 - это важно))
//     const deadline = new Date(2021, 13, 12);
//     // id таймера
//     let timerId = null;
//     // склонение числительных
//     function declensionNum(num, words) {
//       return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
//     }
//     // вычисляем разницу дат и устанавливаем оставшееся времени в качестве содержимого элементов
//     function countdownTimer() {
//       const diff = deadline - new Date();

//       const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
//       const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
//       const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
//       const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
//       $days.textContent = days < 10 ? '0' + days : days;
//       $hours.textContent = hours < 10 ? '0' + hours : hours;
//       $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
//       $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
//       $days.dataset.title = declensionNum(days, ['день', 'дня', 'дней']);
//       $hours.dataset.title = declensionNum(hours, ['час', 'часа', 'часов']);
//       $minutes.dataset.title = declensionNum(minutes, ['минута', 'минуты', 'минут']);
//       $seconds.dataset.title = declensionNum(seconds, ['секунда', 'секунды', 'секунд']);
//     }
//     // получаем элементы, содержащие компоненты даты
//     const $days = document.querySelector('.timer__days3');
//     const $hours = document.querySelector('.timer__hours3');
//     const $minutes = document.querySelector('.timer__minutes3');
//     const $seconds = document.querySelector('.timer__seconds3');
//     // вызываем функцию countdownTimer
//     countdownTimer();
//     // вызываем функцию countdownTimer каждую секунду
//     timerId = setInterval(countdownTimer, 1000);
//   });



//   // Таймер для "Чёрной пятницы"  для блоков с ценами //
// document.addEventListener('DOMContentLoaded', function () {
//     // конечная дата, например 1 июля 2021 (месяц наединицу меньше(начинается с 0 - это важно))
//     const deadline = new Date(2021, 13, 12);
//     // id таймера
//     let timerId = null;
//     // склонение числительных
//     function declensionNum(num, words) {
//       return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
//     }
//     // вычисляем разницу дат и устанавливаем оставшееся времени в качестве содержимого элементов
//     function countdownTimer() {
//       const diff = deadline - new Date();

//       const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
//       const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
//       const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
//       const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
//       $days.textContent = days < 10 ? '0' + days : days;
//       $hours.textContent = hours < 10 ? '0' + hours : hours;
//       $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
//       $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
//       $days.dataset.title = declensionNum(days, ['день', 'дня', 'дней']);
//       $hours.dataset.title = declensionNum(hours, ['час', 'часа', 'часов']);
//       $minutes.dataset.title = declensionNum(minutes, ['минута', 'минуты', 'минут']);
//       $seconds.dataset.title = declensionNum(seconds, ['секунда', 'секунды', 'секунд']);
//     }
//     // получаем элементы, содержащие компоненты даты
//     const $days = document.querySelector('.timer__days4');
//     const $hours = document.querySelector('.timer__hours4');
//     const $minutes = document.querySelector('.timer__minutes4');
//     const $seconds = document.querySelector('.timer__seconds4');
//     // вызываем функцию countdownTimer
//     countdownTimer();
//     // вызываем функцию countdownTimer каждую секунду
//     timerId = setInterval(countdownTimer, 1000);
//   });

  
