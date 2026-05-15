$(document).ready(function(){
    console.log('init custom.js');

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

	const arrElementsFirColumn = [
		$("#rec234093698 .tn-elem[data-elem-id='1601571206172']"),
		$("#rec234093698 .tn-elem[data-elem-id='1601571335476']"),
		$("#rec234093698 .tn-elem[data-elem-id='1601571616229']")
	];	
	const arrElementsSecColumn = [
		$("#rec234093698 .tn-elem[data-elem-id='1601571226043']"),
		$("#rec234093698 .tn-elem[data-elem-id='1601571354245']"),
		$("#rec234093698 .tn-elem[data-elem-id='1603643177022']")
	];

	arrElementsFirColumn.forEach(elem => {
		elem.addClass('js_hidden');
	})
	arrElementsSecColumn.forEach(elem => {
		elem.addClass('js_hidden');
	})

});

document.onreadystatechange = function(){
   if(document.readyState === 'complete'){
      
		// const arrElementsFirColumn = [
		// 	document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601571206172']"),
		// 	document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601571335476']"),
		// 	document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601571616229']")
		// ];	
		// const arrElementsSecColumn = [
		// 	document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601571226043']"),
		// 	document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601571354245']"),
		// 	document.querySelector("#rec234093698 .tn-elem[data-elem-id='1603643177022']")
		// ];

		

		// function editLocationIcons(arrElem, arrElem2) {
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

			if(window.innerWidth <= 479) {
				[arrElementsFirColumn[2], arrElementsSecColumn[2]] = [arrElementsSecColumn[2], arrElementsFirColumn[2]];
			}

			let elemFirstColumn = document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601570622430']"),
				elemSecondColumn = document.querySelector("#rec234093698 .tn-elem[data-elem-id='1603643177011']");

			setParams(elemFirstColumn,arrElementsFirColumn);
			setParams(elemSecondColumn,arrElementsSecColumn);
			
			function setParams(getData, setData) {
				let coords = getData.getBoundingClientRect();

				setData.forEach(iconElem => {
					iconElem.style.left = coords.left + "px";
				});
			}

			if($('.js_hidden')) {
				$('.js_hidden').removeClass("js_hidden")
			}
		}

		setTimeout(() => editLocationIcons(), 1);
		window.addEventListener('resize', ()=>{
			setTimeout(() => editLocationIcons(), 1)
		})
   }
}

// document.addEventListener('DOMContentLoaded', function() {
//    let elem = document.querySelector("#rec234093698 .tn-elem[data-elem-id='1601035622049']");

// 		function createMessageUnder(elem, html) {
// 		// создаём элемент, который будет содержать сообщение
// 		let message = document.createElement('div');
// 		// для стилей лучше было бы использовать css-класс здесь
// 		message.style.cssText = "position:fixed; color: red";
		
// 		// устанавливаем координаты элементу, не забываем про "px"!
// 		let coords = elem.getBoundingClientRect();
		
// 		message.style.left = coords.left + "px";
// 		message.style.top = coords.bottom + "px";
		
// 		console.log(coords.left + "px")
// 		console.log(coords.bottom + "px")
		
// 		message.innerHTML = html;
		
// 		return message;
// 		}
// }, false);