$(document).ready(function(){
    console.log('init custom.js');
	
	$(document).on('click','.header_burger',function(){
		if ($(this).hasClass('opened')) {
			$(this).removeClass('opened');
			$('.header_close_menu').removeClass('opened');
			$('.menu_mobile_wrap').removeClass('opened');
		} else {
			$(this).addClass('opened');
			$('.header_close_menu').addClass('opened');
			$('.menu_mobile_wrap').addClass('opened');
		}
	});
	$(document).on('click','.header_close_menu',function(){
		if ($(this).hasClass('opened')) {
			$(this).removeClass('opened');
			$('.header_burger').removeClass('opened');
			$('.menu_mobile_wrap').removeClass('opened');
		} else {
			$(this).addClass('opened');
			$('.header_burger').addClass('opened');
			$('.menu_mobile_wrap').addClass('opened');
		}
	});
	// $(document).on('click','.menu_mobile a',function(){
		// $('.header_burger').removeClass('opened');
		// $('.menu_mobile_wrap').removeClass('opened');
		// $('.header_close_menu').removeClass('opened');
	// });
	// $(document).on('click','#header .menu_top ul li.dropdown a',function(){
		// dropdown = $(this).next();
		// console.log('asdf');
		// if ($(dropdown).hasClass('opened')) {
			// $(dropdown).removeClass('opened');
			// $('#header').removeClass('opened');
		// } else {
			// $(dropdown).addClass('opened');
			// $('#header').addClass('opened');
		// }
	// });
	
	$( "#header .menu_top ul li.dropdown" ).hover(function(){
		$('#header').addClass('opened');
	},function(){
		$('#header').removeClass('opened');
	});

	if($('.img-carousel').length) {
		$('.img-carousel').slick({
			dots: true,
			arrows: false,
		});
	}

	

    $(document).on('click','.js-link',function(){

        $('.js-link').removeClass('active');
        $(this).addClass('active');
        var containerID = $(this).data('container');
        console.log(containerID);
        container = $('#' + containerID);
        url = $(this).attr('href');

        container.addClass('loading');

        $.ajax({
            type: "GET",
            url: url,
            success: function(data) {

                var html = $(data).find('#' + containerID);

                container.html(html.html()).removeClass('loading');
            },
            error: function(data){

            }
        });

        return false;
    });

    $(document).on('click','.js-pagination',function(){

        container = $(this).parents('.js-container');
        url = $(this).attr('href');
        id = container.attr('id');
        __this = $(this);

        var preloader = $('#preloader');
        container.append(preloader.html()).addClass('loading');

        console.log('id = ' + id);
        $.ajax({
            type: "GET",
            url: url,
            contentType: 'html',
            success: function(data) {

                __this.remove();
                console.log(data);
                var html = $(data).find('#' + id + '');
                console.log('#' + id + '');
                console.log(html.html());
                container.append(html.html()).removeClass('loading');
                container.find('.preloader').remove();
            },
            error: function(data){

            }
        });

        return false;
    });

	const elementsHiddenJs = [
		$("#rec234093698 .tn-elem[data-elem-id='1601571206172']"),
		$("#rec234093698 .tn-elem[data-elem-id='1601571335476']"),
		$("#rec234093698 .tn-elem[data-elem-id='1601571616229']"),
		$('#rec234093701 .tn-elem[data-elem-id="1601489646333"]'),
		$("#rec234093698 .tn-elem[data-elem-id='1601571226043']"),
		$("#rec234093698 .tn-elem[data-elem-id='1601571354245']"),
		$("#rec234093698 .tn-elem[data-elem-id='1603643177022']")
	];	

	elementsHiddenJs.forEach(elem => {
		if(elem) {
			elem.addClass('js_hidden');
		}
	})
	
	// $(document).on('click', '.comagic-c-callback__form-field__send-button',function(){
		// var _rutarget = window._rutarget || [];
		// _rutarget.push({'event': 'thankYou', 'conv_id': 'call'});
		// var parent = $(this).parent('.comagic-c-callback__form__inputs-wrapper');
		// var val = parent.find('.comagic-c-callback__form-field__phone').html()
		// console.log("ewrt");
		
		// regexp = /\+7 \([0-9]{3,}\) [0-9]{3,}-[0-9]{2,}-[0-9]{2,}/g;
		// if (regexp.test(val)) {
			// console.log("Y");
		// } else {
			// console.log("N");
		// }
	// });
	
	// var $page = $('html, body');
	// $('a[href*="#"]').click(function() {
		// $page.animate({
			// scrollTop: $($.attr(this, 'href')).offset().top - 100
		// }, 1000);
		// return false;
	// });
});

document.onreadystatechange = function(){
   if(document.readyState === 'complete'){
      
		function editLocationIcons(arrElem, arrElem2) {

			const arrElementsFirColumn = [
				document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601571335476']"),
				document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601571616229']"),
				document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601571206172']")
			];	
			const arrElementsSecColumn = [
				document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601571226043']"),
				document.querySelector("#rec234093698 .tn-elem[data-elem-id='1603643177022']"),
				document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601571354245']")
			];

			if(window.innerWidth <= 479 && arrElementsFirColumn[2] && arrElementsSecColumn[2]) {
				[arrElementsFirColumn[2], arrElementsSecColumn[2]] = [arrElementsSecColumn[2], arrElementsFirColumn[2]];
			}

			let elemFirstColumn = document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601570622430']"),
				elemSecondColumn = document.querySelector("#rec234093698 .tn-elem[data-elem-id='1603643177011']");

			setParams(elemFirstColumn,arrElementsFirColumn);
			setParams(elemSecondColumn,arrElementsSecColumn);
			
			function setParams(getData, setData) {
				if(setData[0]) {
					let coords = getData.getBoundingClientRect();

					setData.forEach(iconElem => {
						iconElem.style.left = coords.left + "px";
					});
				}
			}

			if($('.js_hidden')) {
				$('.js_hidden').removeClass("js_hidden")
			}
		}

		function editLocSocialInfras() {
			
			const elemCurrent = document.querySelector('#rec234093701 .tn-elem[data-elem-id="1601033870370"]'),
				shadowCurrent = document.querySelector('#rec234093701 .tn-elem[data-elem-id="1601489646333"]')

				if(window.innerWidth <= 959 && elemCurrent && shadowCurrent) {
					shadowCurrent.setAttribute('style', `width: ${elemCurrent.offsetWidth}px !important;left:${elemCurrent.offsetLeft}px`);
					elemCurrent.classList.remove('js_hidden')
				}
		}
		setTimeout(() => editLocSocialInfras(), 0)
		
		setTimeout(() => editLocationIcons(), 1);
		window.addEventListener('resize', ()=>{
			setTimeout(() => {
				editLocationIcons();
				editLocSocialInfras();
			}, 1)
		})
   }
}


$(document).ready(function(){
	$('#invest_form .phone').mask("+7 (999) 999-99-99");
});

//
$(document).ready(function(){
	var url = window.location.href;
	// if (url.includes('personal')) {
		// $("#phone").mask("+7 (999) 999-99-99");
	// }
	
	$(document).on('change', '#uk_file', function() {
		var arrExt = ['doc', 'docx', 'xls', 'xlsx', 'zip', 'rar', 'jpg', 'pdf', 'png'];
		name = document.getElementById('uk_file').files[0].name;
		ext = name.split('.').pop();
		if ($.inArray(ext, arrExt) == -1) {
			document.getElementById('uk_file').value="";
			$('.file-group').append('<label id="name-error" class="error" for="name">Загрузка файла только в doc, docx, xls, xlsx, zip, rar, jpg, pdf, png</label>')
		} else {
			$(this).siblings('#name-error').remove();
		}
		
	});
	
	$(document).on('click', '#sendEmailForm', function(e) {
		$('.error').remove();
		error = 0;
		if ($('#uk_name').val() == "") {
			parent = $('#uk_name').parent();
			$(parent).append('<label id="name-error" class="error" for="uk_name">Введите имя</label>')
			error = 1;
		}
		var pattern = /^[a-z0-9_.+-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
		if ($('#uk_email').val() == "") {
			parent = $('#uk_email').parent();
			$(parent).append('<label id="name-error" class="error" for="uk_email">Введите E-Mail</label>')
			error = 1;
		} else {
			if($('#uk_email').val().search(pattern) != 0) {
				parent = $('#uk_email').parent();
				$(parent).append('<label id="name-error" class="error" for="uk_email">E-Mail указан не корректно</label>')
			error = 1;
			}
		}
		if (error == 0) {
			var $that = $('#mailUK'),
			formData = new FormData($that.get(0));
			console.log(formData.getAll("uk_files"));
			$.ajax({
				url: '/personal/ajax_mail.php',
				method: 'post',
				contentType: false,
				processData: false,
				data: formData,
				success: function(data){
					const successModal = new bootstrap.Modal(document.getElementById('successModal'));
					successModal.show();
				}
			});
		}
	});
	
	$(document).on('click', '#sendEditCompanyForm', function(e) {
		$('.error').remove();
		error = 0;
		if ($('#name').val() == "") {
			parent = $('#name').parent();
			$(parent).append('<label id="name-error" class="error" for="name">Введите наименование компании</label>')
			error = 1;
		}
		if ($('#about').val() == "") {
			parent = $('#about').parent();
			$(parent).append('<label id="name-error" class="error" for="about">Введите описание компании</label>')
			error = 1;
		}
		if ($('#phone').val() == "") {
			parent = $('#phone').parent();
			$(parent).append('<label id="name-error" class="error" for="phone">Введите номер телефона</label>')
			error = 1;
		}
		var pattern = /^[a-z0-9_.+-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
		if ($('#email').val() == "") {
			parent = $('#email').parent();
			$(parent).append('<label id="name-error" class="error" for="email">Введите E-Mail</label>')
			error = 1;
		} else {
			if($('#email').val().search(pattern) != 0) {
				parent = $('#email').parent();
				$(parent).append('<label id="name-error" class="error" for="email">E-Mail указан не корректно</label>')
			error = 1;
			}
		}
		
		if (error == 0) {
			var $that = $('#editCompany'),
			formData = new FormData($that.get(0));
			$.ajax({
				url: '/personal/ajax.php',
				method: 'post',
				contentType: false,
				processData: false,
				data: formData,
				success: function(data){
					const successModal = new bootstrap.Modal(document.getElementById('successModal'));
					successModal.show();
					 // console.log(data);
				}
			});
		}
		// $('form#editCompany').submit();
		// alert('dsfg');
	});
});

$(document).ready(function(){
	$('.laws .law_icon svg').on('click', function() {
		id = $(this).data('id');
		if ($(this).hasClass('active')) {
			$('.laws .law_icon svg').removeClass('active');
			$('.laws_info_wrap').removeClass('active');
			$('.laws_info_desc').removeClass('active');
		} else {
			$('.laws .law_icon svg').removeClass('active');
			$('.laws_info_wrap').removeClass('active');
			$('.laws_info_desc').removeClass('active');
			$(this).addClass('active');
			
			if($(window).width() >= 768){
				$('.laws_info .laws_info_wrap').addClass('active');
			}
			
			$('.laws_info_wrap[data-id="'+id+'"]').addClass('active');
			$('.laws_info_desc[data-id="'+id+'"]').addClass('active');
		}
	});
	$('.laws .law_title').on('click', function() {
		id = $(this).data('id');
		if ($(this).hasClass('active')) {
			$('.laws .law_icon svg').removeClass('active');
			$('.laws .law_title').removeClass('active');
			$('.laws_info_wrap').removeClass('active');
			$('.laws_info_desc').removeClass('active');
		} else {
			$('.laws .law_icon svg').removeClass('active');
			$('.laws .law_title').removeClass('active');
			$('.laws_info_wrap').removeClass('active');
			$('.laws_info_desc').removeClass('active');
			$(this).addClass('active');
			
			if($(window).width() >= 768){
				$('.laws_info .laws_info_wrap').addClass('active');
			}
			
			$('.laws_info_wrap[data-id="'+id+'"]').addClass('active');
			$('.laws_info_desc[data-id="'+id+'"]').addClass('active');
		}
	});
	$('.laws .law_title').on('touch', function() {
		id = $(this).data('id');
		if ($(this).hasClass('active')) {
			$('.laws .law_icon svg').removeClass('active');
			$('.laws .law_title').removeClass('active');
			$('.laws_info_wrap').removeClass('active');
			$('.laws_info_desc').removeClass('active');
		} else {
			$('.laws .law_icon svg').removeClass('active');
			$('.laws .law_title').removeClass('active');
			$('.laws_info_wrap').removeClass('active');
			$('.laws_info_desc').removeClass('active');
			$(this).addClass('active');
			
			if($(window).width() >= 768){
				$('.laws_info .laws_info_wrap').addClass('active');
			}
			
			$('.laws_info_wrap[data-id="'+id+'"]').addClass('active');
			$('.laws_info_desc[data-id="'+id+'"]').addClass('active');
		}
	});
	
});

$(document).ready(function(){
	if($(window).width() >= 768){
		
		$set = $('.residents_list .resident_item');
		$setHover = $('.residents_list .resident_item_hover');
		countElements = $('.residents_list .resident_item').length;
		
		$( ".resident_item" ).hover(function(){
			$('.resident_item').addClass('grey');
			$(this).addClass('active');			
			$(this).removeClass('grey');
			
			parent = $(this).parent('.resident_item_wrap');
			widthFull = $('#residents').outerWidth();
			widthElement = $(parent).outerWidth();
			countInRow = Math.round(widthFull / widthElement);
			countFullRow = Math.trunc(countElements / countInRow);
			countLastRow = countElements - (countFullRow * countInRow);
			
			var n = $set.index(this);
			
			if (countLastRow > 0 && n > (countElements - countLastRow - 1)) {
				$(this).addClass('last');	
			}
			if (countLastRow == 0 && n > (countElements - countInRow - 1)) {
				$(this).addClass('last');	
			}
			
			parents = $(this).parents(".residents_list");
			parent = $(this).parents(".resident_item_wrap");
		},
		function() {
			$('.resident_item').removeClass('grey');
			$(this).removeClass('active');
			$(this).removeClass('last');
		});
		
		$( ".resident_item_hover" ).hover(function(){
			parent = $(this).prev('.resident_item');
			$('.resident_item').addClass('grey');
			$(parent).addClass('active');
			$(parent).removeClass('grey');
			
			parentWrap = $(this).parent('.resident_item_wrap');
			widthFull = $('#residents').outerWidth();
			widthElement = $(parentWrap).outerWidth();
			countInRow = Math.round(widthFull / widthElement);
			countFullRow = Math.trunc(countElements / countInRow);
			countLastRow = countElements - (countFullRow * countInRow);
			
			var n = $setHover.index(this);
			
			if (countLastRow > 0 && n > (countElements - countLastRow - 1)) {
				$(parent).addClass('last');	
			}
			if (countLastRow == 0 && n > (countElements - countInRow - 1)) {
				$(parent).addClass('last');	
			}
		},
		function() {
			parent = $(this).prev('.resident_item');
			$('.resident_item').removeClass('grey');
			$(parent).removeClass('active');
			$(parent).removeClass('last');
		});
		
	} else {
	
		$( ".resident_item" ).on('click',function(){
			
			if ($(this).hasClass('active')) {
				window.open($(this).data('url'), '_self')
			}
			
			$('.resident_item').addClass('grey');
			$('.resident_item').removeClass('active');
			$(this).addClass('active');
			$(this).removeClass('grey');
		})
	}
});

$(document).ready(function(){
	if($(window).width() < 768){
		$('.benefits_cards').slick({
			dots: false,
			arrows: false,
			centerMode: true,
		});
	}
	if($(window).width() < 768){
		$('.block-404-news-list').slick({
			dots: false,
			arrows: false,
			centerMode: true,
		});
	}
	
	$('.digest_rec_slider').slick({
		dots: false,
		arrows: true,
		centerMode: false,
		slidesToShow: 4,
		appendArrows: ".digest_rec_slider_arrows",
		prevArrow: '<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1.29102" y="1.22266" width="30.5042" height="30.5042" fill="#F5F5F5"/><rect x="1.29102" y="1.22266" width="30.5042" height="30.5042" stroke="#F5F5F5"/><path d="M18.851 20.4746L19.791 19.5346L16.7377 16.4746L19.791 13.4146L18.851 12.4746L14.851 16.4746L18.851 20.4746Z" fill="black"/></svg>',
		nextArrow: '<svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="31.2988" y="31.7285" width="30.5042" height="30.5042" transform="rotate(-180 31.2988 31.7285)" fill="#F5F5F5"/><rect x="31.2988" y="31.7285" width="30.5042" height="30.5042" transform="rotate(-180 31.2988 31.7285)" stroke="#F5F5F5"/><path d="M13.7388 12.4766L12.7988 13.4166L15.8522 16.4766L12.7988 19.5366L13.7388 20.4766L17.7388 16.4766L13.7388 12.4766Z" fill="black"/></svg>',
		responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
					centerMode: true,
					arrows: false,
                }
            },
		]
	});
	
	
	$('#uk_files').on('change', function() {
		$('.selected_files').html('');
		$.each(this.files, function(i, el) {
			var filename = el.name;
			$('.selected_files').append('<span class="selected_file"><svg data-id="'+i+'" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99809 6.2246L11.793 1.42968C12.069 1.15369 12.069 0.707595 11.793 0.431603C11.517 0.155611 11.0709 0.155611 10.7949 0.431603L6.00001 5.22652L1.20507 0.431603C0.929082 0.155611 0.482986 0.155611 0.206994 0.431603C-0.068998 0.707595 -0.068998 1.15369 0.206994 1.42968L5.00191 6.2246L0.206994 11.0195C-0.068998 11.2955 -0.068998 11.7416 0.206994 12.0176C0.344638 12.1552 0.525336 12.2244 0.706034 12.2244C0.886732 12.2244 1.06743 12.1552 1.20507 12.0176L5.99999 7.22268L10.7949 12.0176C10.9325 12.1552 11.1132 12.2244 11.2939 12.2244C11.4746 12.2244 11.6553 12.1552 11.793 12.0176C12.069 11.7416 12.069 11.2955 11.793 11.0195L6.99809 6.2246Z" fill="#7E7E7E"/></svg>'+filename+'</span>')
		});
	});
	
	$('.file-upload .file-label').on('dragover', function(e) {
	   e.preventDefault();
	   e.stopPropagation();
	});

	$('.file-upload .file-label').on('dragenter', function(e) {
	   e.preventDefault();
	   e.stopPropagation();
	});
	$('.file-upload .file-label').on('drop', function(e) {
		if (e.originalEvent.dataTransfer && e.originalEvent.dataTransfer.files.length) {
			e.preventDefault();
			e.stopPropagation();
			
			var dt = e.originalEvent.dataTransfer;
			var files = dt.files;
			
			$("#uk_files").prop("files", files);
			
			$.each(files, function(i, el) {
				var filename = el.name;
				$('.selected_files').append('<span class="selected_file"><svg data-id="'+i+'" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99809 6.2246L11.793 1.42968C12.069 1.15369 12.069 0.707595 11.793 0.431603C11.517 0.155611 11.0709 0.155611 10.7949 0.431603L6.00001 5.22652L1.20507 0.431603C0.929082 0.155611 0.482986 0.155611 0.206994 0.431603C-0.068998 0.707595 -0.068998 1.15369 0.206994 1.42968L5.00191 6.2246L0.206994 11.0195C-0.068998 11.2955 -0.068998 11.7416 0.206994 12.0176C0.344638 12.1552 0.525336 12.2244 0.706034 12.2244C0.886732 12.2244 1.06743 12.1552 1.20507 12.0176L5.99999 7.22268L10.7949 12.0176C10.9325 12.1552 11.1132 12.2244 11.2939 12.2244C11.4746 12.2244 11.6553 12.1552 11.793 12.0176C12.069 11.7416 12.069 11.2955 11.793 11.0195L6.99809 6.2246Z" fill="#7E7E7E"/></svg>'+filename+'</span>')
			});
		}
	});
	
	
	$('#img').on('change', function() {
		$('.preload_img').html('');
		$.each(this.files, function(i, el) {
			var src = URL.createObjectURL(el)
			$('.preload_img').append('<img src="'+src+'" class="preload_img"><span class="del_img"><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="0.856858" y1="15.4477" x2="14.4501" y2="1.85447" stroke="#717171" stroke-width="2"/><path d="M14.0513 15.7646L0.783261 1.32593" stroke="#717171" stroke-width="2"/></svg></span>')
		});
	});
	$('#logo').on('change', function() {
		$('.preload_logo').html('');
		$.each(this.files, function(i, el) {
			var src = URL.createObjectURL(el)
			$('.preload_logo').append('<img src="'+src+'" class="preload_logo"><span class="del_logo"><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="0.856858" y1="15.4477" x2="14.4501" y2="1.85447" stroke="#717171" stroke-width="2"/><path d="M14.0513 15.7646L0.783261 1.32593" stroke="#717171" stroke-width="2"/></svg></span>')
		});
	});
	
	$('.logo-upload .file-label').on('dragover', function(e) {
	   e.preventDefault();
	   e.stopPropagation();
	});

	$('.logo-upload .file-label').on('dragenter', function(e) {
	   e.preventDefault();
	   e.stopPropagation();
	});
	$('.logo-upload .file-label').on('drop', function(e) {
		if (e.originalEvent.dataTransfer && e.originalEvent.dataTransfer.files.length) {
			e.preventDefault();
			e.stopPropagation();
			
			$('.preload_logo').html('');
			
			var dt = e.originalEvent.dataTransfer;
			var files = dt.files;
			
			$("#logo").prop("files", files);
			
			$.each(files, function(i, el) {
				var src = URL.createObjectURL(el)
				$('.preload_logo').append('<img src="'+src+'" class="preload_logo"><span class="del_logo"><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="0.856858" y1="15.4477" x2="14.4501" y2="1.85447" stroke="#717171" stroke-width="2"/><path d="M14.0513 15.7646L0.783261 1.32593" stroke="#717171" stroke-width="2"/></svg></span>')
			});
		}
	});
	$('.img-upload .file-label').on('dragover', function(e) {
	   e.preventDefault();
	   e.stopPropagation();
	});

	$('.img-upload .file-label').on('dragenter', function(e) {
	   e.preventDefault();
	   e.stopPropagation();
	});
	$('.img-upload .file-label').on('drop', function(e) {
		if (e.originalEvent.dataTransfer && e.originalEvent.dataTransfer.files.length) {
			e.preventDefault();
			e.stopPropagation();
			$('.preload_img').html('');
			
			var dt = e.originalEvent.dataTransfer;
			var files = dt.files;
			
			$("#img").prop("files", files);
			
			$.each(files, function(i, el) {
				var src = URL.createObjectURL(el)
				$('.preload_img').append('<img src="'+src+'" class="preload_img"><span class="del_img"> width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="0.856858" y1="15.4477" x2="14.4501" y2="1.85447" stroke="#717171" stroke-width="2"/><path d="M14.0513 15.7646L0.783261 1.32593" stroke="#717171" stroke-width="2"/></svg></span>')
			});
		}
	});
	
	$(document).on('click', '.editcompany_block_wrap .del_img', function() {
		$('.preload_img').html('');
		$('#img').val('');
		$('#img_old').val('');
	});
	$(document).on('click', '.editcompany_block_wrap .del_logo', function() {
		$('.preload_logo').html('');
		$('#logo').val('');
		$('#logo_old').val('');
	});
	$(document).on('click', '.mailtomc_block_wrap .selected_file svg', function() {
		parent = $(this).parent('.selected_file');
		id = $(this).data('id');
		
		let newData = new DataTransfer();
		
		fileList = $("#uk_files").prop("files");
		
		Array.from(fileList).forEach((file, index) => {
			if (index !== id) newData.items.add(file);
		});
		
		$("#uk_files").prop("files", newData.files);
		console.log($("#uk_files").prop("files"));
		
		fileList = $("#uk_files").prop("files");
		$('.selected_files').html('');
		$.each(fileList, function(i, el) {
			var filename = el.name;
			$('.selected_files').append('<span class="selected_file"><svg data-id="'+i+'" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99809 6.2246L11.793 1.42968C12.069 1.15369 12.069 0.707595 11.793 0.431603C11.517 0.155611 11.0709 0.155611 10.7949 0.431603L6.00001 5.22652L1.20507 0.431603C0.929082 0.155611 0.482986 0.155611 0.206994 0.431603C-0.068998 0.707595 -0.068998 1.15369 0.206994 1.42968L5.00191 6.2246L0.206994 11.0195C-0.068998 11.2955 -0.068998 11.7416 0.206994 12.0176C0.344638 12.1552 0.525336 12.2244 0.706034 12.2244C0.886732 12.2244 1.06743 12.1552 1.20507 12.0176L5.99999 7.22268L10.7949 12.0176C10.9325 12.1552 11.1132 12.2244 11.2939 12.2244C11.4746 12.2244 11.6553 12.1552 11.793 12.0176C12.069 11.7416 12.069 11.2955 11.793 11.0195L6.99809 6.2246Z" fill="#7E7E7E"/></svg>'+filename+'</span>')
		});
	});
});

$(document).ready(function(){
	var map = $(".map_bg img");
	if ($(map).length) {
		var naturalWidth = map[0].naturalWidth;
		var naturalHeight = map[0].naturalHeight;
		var width = map[0].width;
		var height = map[0].height;
		var kw = width/naturalWidth;
		var kh = height/naturalHeight;
		
		$('.map_uchastok svg').each(function(i, el){
			var uchastokNaturalWidth = el.width.baseVal.value;
			var uchastokNaturalHeight = el.height.baseVal.value;
			var uchastokWidth = kw * uchastokNaturalWidth;
			var uchastokHeight = kh * uchastokNaturalHeight;
			$(el).css("width", uchastokWidth+"px");
			$(el).css("height", uchastokHeight+"px");
			
			parent = $(el).parent('.map_uchastok');
			var naturalTop = $(parent).data('top');
			var naturalLeft = $(parent).data('left');
			
			kt = naturalHeight/naturalTop;
			kl = naturalWidth/naturalLeft;
			
			var top = height/kt;
			var left = width/kl;
			
			$(parent).css("top", top+"px");
			$(parent).css("left", left+"px");
		})
		
		
		
		$(".map_uchastok svg").hover(function(){
			parent = $(this).parents('.map_uchastok');
			$(parent).addClass('hover');
		}, function(){
			parent = $(this).parents('.map_uchastok');
			$(parent).removeClass('hover');
		});
	}
	
	$('.parent>a').on('click', function(event) {
		event.preventDefault();
		parent = $(this).parent('.parent');
		if ($(parent).hasClass('active')) {
			$(parent).removeClass('active');
		}else{
			$(parent).addClass('active');
		}
	});
});



$(document).ready(function () {
	$('.js-form-submit').prop('disabled', false);

	$('.js-enabled-submit').change(function () {
		// Находим связанную кнопку submit
		var submitButton = $(this).closest('form').find('.js-form-submit');

		// Если кнопка не найдена в форме, ищем её глобально
		if (submitButton.length === 0) {
			submitButton = $('.modal-footer .js-form-submit');
		}

		// Переключаем состояние disabled
		submitButton.prop('disabled', function (i, val) {
			return !val;
		});
	});
});

window.addEventListener('load', () => {
const stickyBlock = document.querySelector('.benefits-line');
let isFixed = false;
let originalOffsetTop = null;
let ticking = false;

function init() {
	stickyBlock.style.position = 'static';
	stickyBlock.style.bottom = 'auto';

	const rect = stickyBlock.getBoundingClientRect();
	originalOffsetTop = rect.top + window.scrollY;

	stickyBlock.style.position = 'fixed';
	stickyBlock.style.bottom = '0';
	stickyBlock.style.left = '0';
	stickyBlock.style.right = '0';
	isFixed = true;

	console.log('Original position:', originalOffsetTop); // для дебага
}

function updatePosition() {
	if (!ticking) {
		window.requestAnimationFrame(() => {
			const scrollY = window.scrollY || window.pageYOffset;
			const windowHeight = window.innerHeight;
			const blockHeight = stickyBlock.offsetHeight;

			const triggerPoint = originalOffsetTop - windowHeight + blockHeight;

			//console.log('Scroll:', scrollY, 'Trigger:', triggerPoint); // дебаг

			if (scrollY >= triggerPoint) {
				if (isFixed) {
					stickyBlock.style.position = 'relative';
					stickyBlock.style.bottom = 'auto';
					stickyBlock.style.left = 'auto';
					stickyBlock.style.right = 'auto';
					isFixed = false;
					console.log('Switched to relative');
				}
			} else {
				if (!isFixed) {
					stickyBlock.style.position = 'fixed';
					stickyBlock.style.bottom = '0';
					stickyBlock.style.left = '0';
					stickyBlock.style.right = '0';
					isFixed = true;
					console.log('Switched to fixed');
				}
			}

			ticking = false;
		});
		ticking = true;
	}
}

if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', () => {
		setTimeout(init, 100); // небольшая задержка для рендера
	});
} else {
	setTimeout(init, 100);
}

window.addEventListener('scroll', updatePosition, { passive: true });
window.addEventListener('resize', () => {
	setTimeout(() => {
		const wasFixed = isFixed;
		stickyBlock.style.position = 'static';
		const rect = stickyBlock.getBoundingClientRect();
		originalOffsetTop = rect.top + window.scrollY;

		if (wasFixed) {
			stickyBlock.style.position = 'fixed';
			stickyBlock.style.bottom = '0';
		}
		updatePosition();
	}, 100);
});
});

document.addEventListener('DOMContentLoaded', function () {
	document.querySelectorAll('.uch-detail--acc-title').forEach(function (title) {
		title.addEventListener('click', function () {
			var section = this.closest('.uch-detail--acc-section');
			section.classList.toggle('is-open');
		});
	});
});

document.addEventListener('DOMContentLoaded', function () {
	var $big = $('.js-uch-product-slider-big');
	var $small = $('.js-uch-product-slider-small');
	var $progress = $('.uch-detail--product-slider__progress-bar');

	if (!$big.length) return;

	var totalSlides = $big.children().length;

	// Обновление полосы прогресса
	function updateProgress(slick, currentSlide) {
		var percent = ((currentSlide + 1) / totalSlides) * 100;
		$progress.css('width', percent + '%');
	}

	$big.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		asNavFor: '.js-uch-product-slider-small',
		prevArrow: '<button class="uch-slider-arrow uch-slider-arrow--prev"></button>',
		nextArrow: '<button class="uch-slider-arrow uch-slider-arrow--next"></button>',
	});

	$small.slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.js-uch-product-slider-big',
		focusOnSelect: true,
		
		arrows: false,
		responsive: [
			{
				breakpoint: 1480,
				settings: {
					slidesToShow: 3,
				}
			},
			
		]
	});

	// Инициализация прогресса
	updateProgress(null, 0);

	// Обновление при смене слайда
	$big.on('afterChange', function (event, slick, currentSlide) {
		updateProgress(slick, currentSlide);
	});
});

document.addEventListener('DOMContentLoaded', function () {
	var $slider = $('.js-related-slider');

	if (!$slider.length) return;

	$slider.slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		prevArrow: '<button class="uch-related-arrow uch-related-arrow--prev"></button>',
		nextArrow: '<button class="uch-related-arrow uch-related-arrow--next"></button>',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
});

$(document).ready(function () {
	var $slider = $('.ln-infrastructure-list__wr');
	if (!$slider.length) return;

	function initSlider() {
		if ($(window).width() < 1400) {
			if (!$slider.hasClass('slick-initialized')) {
				$slider.slick({
					slidesToShow: 3,
					slidesToScroll: 1,
					arrows: true,
					dots: false,
					prevArrow: '<button class="ln-inf-arrow uch-related-arrow uch-related-arrow--prev ln-inf-arrow--prev"></button>',
					nextArrow: '<button class="ln-inf-arrow uch-related-arrow uch-related-arrow--next ln-inf-arrow--next"></button>',
					responsive: [
						{ breakpoint: 1280, settings: { slidesToShow: 2 } },
						{ breakpoint: 768, settings: { slidesToShow: 1 } },
						
					]
				});
			}
		} else {
			if ($slider.hasClass('slick-initialized')) {
				$slider.slick('unslick');
			}
		}
	}

	initSlider();
	$(window).on('resize', initSlider);
});

$(document).ready(function () {
	function reorder() {
		if ($(window).width() < 1200) {
			// Перемещаем блок категорий после слайдера
			$('.uch-detail--product-info__title').insertBefore('.uch-detail--product-slider');
		} else {
			// Возвращаем на место
			$('.uch-detail--product-info__title').insertBefore('.uch-detail--product-info__description');
		}
	}
	reorder();
	$(window).on('resize', reorder);
});