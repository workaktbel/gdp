

document.addEventListener("DOMContentLoaded", function () {
    const sliderItems = document.querySelectorAll('.list_items_inner .item_block .slider_block_wr');

    if (sliderItems.length > 0) {
        sliderItems.forEach(function(sliderWrapper) {
            const slider = sliderWrapper.querySelector('.swiper');
            if (!slider) return;

            const sliderId = slider.dataset.id;
            const arrow = slider.dataset.arrow;

            if (!sliderId || !arrow) return;

            const sliderClass = '.' + sliderId;

            new Swiper(sliderClass, {
                loop: false,
                slidesPerView: 1,
                loopedSlides: 1,
                navigation: {
                    nextEl: '.swiper-' + arrow + '-next',
                    prevEl: '.swiper-' + arrow + '-prev',
                },
                lazy: true
            });
        });
    }

    const slidertag = document.querySelector('.mySwiper_tag');
    let swiperInstance = null;

    function initTagSlider() {
        if (!slidertag) return;

        const slidertagId = slidertag.dataset.id;
        const arrowTag = slidertag.dataset.arrow;
        const sliderClassTag = '.' + slidertagId;

        if (window.innerWidth <= 767 && !swiperInstance) {
            swiperInstance = new Swiper(sliderClassTag, {
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 20,
                loopedSlides: 1,
                navigation: {
                    nextEl: '.swiper-' + arrowTag + '-next',
                    prevEl: '.swiper-' + arrowTag + '-prev',
                },
                lazy: true
            });
        } else if (window.innerWidth > 767 && swiperInstance) {
            swiperInstance.destroy(true, true);
            swiperInstance = null;
        }
    }

    initTagSlider();

    window.addEventListener('resize', initTagSlider);

    const accorItems = document.querySelectorAll('.accor_item .accor_name');

    if(accorItems.length > 0) {
        accorItems.forEach(function(item){
            item.addEventListener('click', function () {
                const currentBlock = this.parentElement;

                document.querySelectorAll('.accor_item').forEach(block => {
                    if (block !== currentBlock) {
                        block.classList.remove('opened');
                    }
                });
                currentBlock.classList.toggle('opened');
            });
        });
    }

    $('.type-phone input').mask("+7 (999) 999-99-99");
});

$(function() {
    $('#scroll_bottom').click(function() {
        $('html, body').animate({ scrollTop: $(document).height() - $(window).height() }, 600);
        return false;
    });
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $('#scroll_top').show();
        } else {
            $('#scroll_top').hide();
        }
    });

    $('#scroll_top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 600);
        return false;
    });

    $('.btn_list_open').on('click', function(){
        if($('.list_items_map').hasClass('opened')){
            $('.list_items_map').removeClass('opened');
            $(this).removeClass('active')
        } else {
            $('.list_items_map').addClass('opened');
            $(this).addClass('active');
        }
    });
});

$(document).ready(function(){

    $(document).on('click', '.btn_show_more', function () {
        var $btn = $(this);
        var targetContainer = $('.list_items_inner');

        var sectionId = parseInt($btn.attr('data-section-id'), 10);
        var nextPage  = parseInt($btn.attr('data-next-page'), 10);

        if (!sectionId || !nextPage) return;

        if ($btn.data('loading')) return;
        $btn.data('loading', true);

        var oldText = $btn.text();
        $btn.addClass('is-loading');
        $btn.text((typeof SITE_ID !== 'undefined' && SITE_ID === 's1') ? 'Загрузка…' : 'Загрузка…');
        var siteId = $btn.attr('data-site-id');
        $.ajax({
            type: 'POST',
            url: '/local/ajax/uchastki_more.php',
            dataType: 'json',
            data: {
                section_id: sectionId,
                page: nextPage,
                site_id: siteId,
                card_text: $btn.attr('data-card-text') || '',
                card_text_en: $btn.attr('data-card-text-en') || ''
            },

            success: function (resp) {
                // удалить все старые кнопки
                $('.btn_show_more').remove();

                if (resp && resp.html) {
                    targetContainer.append("<div class='hr'></div>");
                    targetContainer.append(resp.html);
                }

                if (resp && resp.next_page) {
                    var $newBtn = $('<div class="btn_show_more"></div>');
                    $newBtn.attr('data-section-id', sectionId);
                    $newBtn.attr('data-next-page', resp.next_page);
                    $newBtn.text(oldText);
                    targetContainer.after($newBtn);
                }
                console.log('ajax debug:', resp.debug);
            },

            error: function (xhr) {
                console.log('ajax error', xhr.status, xhr.responseText);

                $btn.data('loading', false).removeClass('is-loading').text(oldText);
            },

            complete: function () {

                $btn.data('loading', false).removeClass('is-loading');
            }
        });
    });
	
	var moreModal = $('[data-remodal-id=more-pop]').remodal();
	
	$(document).on('click', '.more-pop', function(){
		name = $(this).data('name');
		$('#moreModal .uchastok').val(name);
		moreModal.open();
		console.log(name);
	});

});

