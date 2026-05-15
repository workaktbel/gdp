$(document).ready(function () {

    if ($('.nms-residents__slider').length) {

        var $slider = $('.nms-residents__slider');

        function moveDots() {
            var $dots = $slider.find('.slick-dots');
            var $activeImg = $slider.find('.slick-current .nms-residents__img--wrapper');
            if ($dots.length && $activeImg.length) {
                $activeImg.append($dots);
            }
        }

        // init ОБЯЗАТЕЛЬНО до .slick()
        $slider.on('init', function () {
            setTimeout(moveDots, 50);
        });

        $slider.on('afterChange', moveDots);

        $slider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            fade: false,
            speed: 500,
            infinite: false,
            autoplay: true,
            prevArrow: '.nms-residents__arrow--prev',
            nextArrow: '.nms-residents__arrow--next',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        adaptiveHeight: true,
                    }
                },
            ],

            customPaging: function (slider, i) {
                return '<button type="button">' + (i + 1) + '</button>';
            }
        });

        // Обновляем индекс при смене слайда
        $slider.on('afterChange', function (event, slick, currentSlide) {
            // Индекс уже проставлен в PHP, но если нужна динамика:
            $('.nms-residents__item').each(function (i) {
                $(this).find('.nms-residents__index').text(
                    String(i + 1).padStart(2, '0')
                );
            });

        });
    }

    // reviews slider

    var $revSlider = $('.nms-reviews__slider');

    $revSlider.slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        fade: false,
        speed: 500,
        infinite: false,
        //autoplay: true,
        prevArrow: '.nms-reviews__arrow--prev',
        nextArrow: '.nms-reviews__arrow--next',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //main news slider
    var $newsSlider = $('.nms-news__slider');

    $newsSlider.slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        fade: false,
        speed: 500,
        infinite: false,
        //autoplay: true,
        prevArrow: '.nms-news__arrow--prev',
        nextArrow: '.nms-news__arrow--next',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

});

// Кастомный видеоплеер
$(document).ready(function () {
    $('.nms-video').each(function () {
        var $block = $(this);
        var $video = $block.find('.nms-video__player');
        var video = $video[0]; // нативный элемент
        var $playBtn = $block.find('.nms-video__play');
        var $muteBtn = $block.find('.nms-video__mute');
        var $muteOff = $block.find('.nms-video__mute-off');
        var $muteOn = $block.find('.nms-video__mute-on');

        if (!video) return;

        // По умолчанию видео без звука
        video.muted = true;

        // --- Play / Pause ---
        function togglePlay() {
            if (video.paused) {
                video.play();
                $block.addClass('is-playing');
            } else {
                video.pause();
                $block.removeClass('is-playing');
            }
        }

        // Клик по кнопке play
        $playBtn.on('click', function (e) {
            e.stopPropagation();
            togglePlay();
        });

        // Клик по самому видео — тоже пауза/плей
        $video.on('click', togglePlay);

        // Видео закончилось — показать кнопку снова
        $video.on('ended', function () {
            $block.removeClass('is-playing');
        });

        // --- Mute / Unmute ---
        $muteBtn.on('click', function () {
            video.muted = !video.muted;

            if (video.muted) {
                $muteOff.show();
                $muteOn.hide();
            } else {
                $muteOff.hide();
                $muteOn.show();
            }
        });
    });
});
