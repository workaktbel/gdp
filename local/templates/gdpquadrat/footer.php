<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
	<?$url = array(
		'/',
		'/en/',
		'/',
		'/en/infrastruktura/',
		'/infrastruktura/',
		'/en/contacts/',
		'/contacts/',
		'/investoru/',
		'/en/investoru/',
	);?>


	
</div>
<a href="#" id="scroll_top"  <?= $APPLICATION->GetCurPage(false) === '/' || $APPLICATION->GetCurPage(false) === '/en/' ? "class='main_page'" : "";?> title="Наверх">
<svg style="transform: rotate(90deg);" width="16" height="38" viewBox="0 0 16 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <desc>up</desc>
						<path d="M0.758134 20.0428L13.709 37.5703C14.1333 38.1442 14.8203 38.1432 15.2439 37.5673C15.6671 36.9915 15.666 36.0586 15.2417 35.4842L3.06172 18.9999L15.2421 2.51572C15.6664 1.94127 15.6675 1.00901 15.2443 0.433075C15.032 0.144363 14.7538 7.55882e-06 14.4756 7.5345e-06C14.1981 7.51024e-06 13.921 0.143398 13.709 0.430107L0.758134 17.9572C0.553767 18.2331 0.439087 18.6087 0.439087 18.9999C0.439087 19.3912 0.554095 19.7663 0.758134 20.0428Z" fill="#0A007F"></path>
						</svg>
</a>
<a href="#" id="scroll_bottom"  <?= $APPLICATION->GetCurPage(false) === '/' || $APPLICATION->GetCurPage(false) === '/en/' ? "class='main_page'" : "";?> title="Вниз">
<svg style="transform: rotate(270deg);" width="16" height="38" viewBox="0 0 16 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <desc>up</desc>
						<path d="M0.758134 20.0428L13.709 37.5703C14.1333 38.1442 14.8203 38.1432 15.2439 37.5673C15.6671 36.9915 15.666 36.0586 15.2417 35.4842L3.06172 18.9999L15.2421 2.51572C15.6664 1.94127 15.6675 1.00901 15.2443 0.433075C15.032 0.144363 14.7538 7.55882e-06 14.4756 7.5345e-06C14.1981 7.51024e-06 13.921 0.143398 13.709 0.430107L0.758134 17.9572C0.553767 18.2331 0.439087 18.6087 0.439087 18.9999C0.439087 19.3912 0.554095 19.7663 0.758134 20.0428Z" fill="#0A007F"></path>
						</svg>
</a>
<style>
#scroll_bottom {
	position: fixed;
	bottom: 120px;
	right: 30px;
	z-index: 900;
	width: 32px;
	height: 32px;
	border-radius: 50%;
	opacity: 0.5;
}
#scroll_top {
	display: none;
	position: fixed;
	bottom: 150px;
	right: 30px;
	z-index: 900;
	width: 32px;
	height: 32px;
	border-radius: 50%;
	opacity: 0.5;
}
#scroll_top:hover {
 	opacity: 1;
}
</style>
<script>
$(function(){
	$('#scroll_bottom').click(function(){
		$('html, body').animate({scrollTop: $(document).height() - $(window).height()}, 600);
		return false;
	});
});
</script>
<script>
$(function(){
	$(window).scroll(function(){
		if($(window).scrollTop() > 100) {
			$('#scroll_top').show();
		} else {
			$('#scroll_top').hide();
		}
	});
 
	$('#scroll_top').click(function(){
		$('html, body').animate({scrollTop: 0}, 600);
		return false;
	});
});
</script>
<!-- rutarget -->
<script>
$(document).ready(function(){
	console.log('sdfg');
	var url = window.location.href;
	if (url.includes('uchastki')) {
		var _rutarget = window._rutarget || [];
		_rutarget.push({'event': 'thankYou', 'conv_id': 'plot'});
	} else if (url.includes('prezentatsiya.php')) {
		var _rutarget = window._rutarget || [];
		_rutarget.push({'event': 'thankYou', 'conv_id': 'presentation'});
	} //else {
		// var _rutarget = window._rutarget || [];
		// _rutarget.push({'event': 'otherPage'});
	// }
	
	$(document).on('click', '.uchastki', function() {
		var _rutarget = window._rutarget || [];
		_rutarget.push({'event': 'thankYou', 'conv_id': 'plot'});
	});
	
	$(document).on('click', '.prezentatsiya', function() {
		var _rutarget = window._rutarget || [];
		_rutarget.push({'event': 'thankYou', 'conv_id': 'presentation'});
	});
	
	$(document).on('click', 'a[href^="tel"]',function(){
		var _rutarget = window._rutarget || [];
		_rutarget.push({'event': 'thankYou', 'conv_id': 'number'});
	});
});
</script>

<!-- End of footer -->
<script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>
<script type="text/javascript">
if((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent))===false && typeof(sessionStorage)!='undefined' && sessionStorage.getItem('visited')!=='y'){	
	var style=document.createElement('style');
	style.type='text/css';
	style.innerHTML='@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
	document.getElementsByTagName('head')[0].appendChild(style);
	$(document).ready(function() {	$('.t-records').addClass('t-records_animated');	
	setTimeout(function(){ 
		$('.t-records').addClass('t-records_visible'); 
		sessionStorage.setItem('visited','y');	},400);	
	});
}
</script>
<style>
.video {
    background: #0a007f !important;
}
	</style>
<script type="text/javascript">
	const el2 = document.querySelector('.video');
	if (el2 !== null) {
		el2.classList.remove("t-active");
	}
 </script>
  <?
	global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
if ($dir <> "/infrastruktura/"):
?>
<style>
@media screen and (max-width: 479px) {
				#rec253128080 .t396 .tn-atom__img {
						width: 80% !important;
						 margin-top: 28% !important;
    					margin-left: -50px !important;
					}
	}
</style>
<?endif;?>
<?
	global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
if ($dir == "/infrastruktura/"):
?>
<style>
@media screen and (max-width: 479px) {
				#rec253128080 .t396 .tn-atom__img {
						width: 80% !important;
						    margin-top: -2% !important;
    						margin-left: 0px !important;
					}
	}
</style>
<?endif;?>

<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<?$APPLICATION->IncludeComponent("bitrix:search.form","header",Array(
						"USE_SUGGEST" => "N",
						"PAGE" => "#SITE_DIR#search/index.php"
					)
				);?> 
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<?if(SITE_ID == "s1"):?>
					<div class="modal-title" id="authModalLabel">Вход в личный кабинет</div>
				<?else:?>
					<div class="modal-title" id="authModalLabel">Login to your personal account</div>
				<?endif;?>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line x1="1.12114" y1="15.3124" x2="14.7143" y2="1.71922" stroke="#717171" stroke-width="2"/>
							<path d="M14.3157 15.6294L1.04773 1.19068" stroke="#717171" stroke-width="2"/>
						</svg>
					</span>
				</button>
			</div>
			<div class="modal-body">
				<?
				if(SITE_ID == "s1") {
					$APPLICATION->IncludeComponent(
						"bitrix:system.auth.form",
						"modal",
						Array(
							"AUTH_URL" => "/",
							"FORGOT_PASSWORD_URL" => "/personal/auth/forget.php",
							"PROFILE_URL" => "/personal/",
							"SHOW_ERRORS" => "Y" 
						)
					);
				} else {
					$APPLICATION->IncludeComponent(
						"bitrix:system.auth.form",
						"modal",
						Array(
							"AUTH_URL" => "/",
							"FORGOT_PASSWORD_URL" => "/en/personal/auth/forget.php",
							"PROFILE_URL" => "/en/personal/",
							"SHOW_ERRORS" => "Y" 
						)
					);
				}
				?>
			</div>
			<div class="modal-footer 123">
				<input type="submit" class="btn_button dark mb-3 js-form-submit" form="authModalForm" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" />
				<?if(SITE_ID == "s1"):?>
                 <label for="conf-log" class="conf">
                        <input type="checkbox" class="conf__input js-enabled-submit" id="conf-log" checked>
					<div class="personal_data-text center-text">Отправляя данную форму, вы соглашаетесь на <a href="/upload/Согласие_на_обработку_персональных_данных.pdf" target="_blank">обработку персональных данных</a></div>
                 </label>
				<?else:?>
                 <label for="conf-log" class="conf">
                        <input type="checkbox" class="conf__input js-enabled-submit" id="conf-log" checked>
					<div class="personal_data-text center-text">By submitting this form, you agree to the <a href="/upload/Согласие_на_обработку_персональных_данных.pdf" target="_blank">processing of personal data</a></div>
                 </label>
				<?endif;?>
			</div>
		</div>
	</div>
</div>

</div>
<!--<div class="benefits-line">-->
<!--    <div class="container-xxl">-->
<!--        <div class="row justify-content-between align-items-center">-->
<!--            <div class="col-auto">-->
<!--                <div class="benefits-line__left">-->
<!--                    <svg width="73" height="42" viewBox="0 0 73 42" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path d="M0.5 10.5C0.5 4.97716 4.97715 0.5 10.5 0.5H42.5615C48.0844 0.5 52.5615 4.97715 52.5615 10.5V13.3203C52.5615 13.6144 52.5254 13.9074 52.4539 14.1927C52.1737 15.3111 51.3733 16.2269 50.3025 16.6543L50.1125 16.7301C49.5377 16.9595 49.0241 17.3195 48.6124 17.7817L48.4852 17.9245C46.5434 20.1042 46.9804 23.4979 49.4109 25.1147L50.0417 25.5343C50.9614 26.1461 51.6739 27.0226 52.0849 28.048L52.1371 28.1782C52.4175 28.8775 52.5615 29.624 52.5615 30.3773V32.5C52.5615 38.0228 48.0844 42.5 42.5615 42.5H10.5C4.97715 42.5 0.5 38.0229 0.5 32.5V29.2667C0.5 28.8809 0.562321 28.4977 0.684554 28.1318C0.924556 27.4133 1.38613 26.7895 2.00295 26.3499L3.08246 25.5805C4.25859 24.7422 5.02212 23.4428 5.18196 22.0074C5.3709 20.3107 4.69456 18.6325 3.38186 17.541L2.16154 16.5263C1.0978 15.4649 0.5 14.0239 0.5 12.5212V10.5Z" fill="#FF7C00"/>-->
<!--                        <path d="M0.5 10.5C0.5 4.97716 4.97715 0.5 10.5 0.5H42.5615C48.0844 0.5 52.5615 4.97715 52.5615 10.5V13.3203C52.5615 13.6144 52.5254 13.9074 52.4539 14.1927C52.1737 15.3111 51.3733 16.2269 50.3025 16.6543L50.1125 16.7301C49.5377 16.9595 49.0241 17.3195 48.6124 17.7817L48.4852 17.9245C46.5434 20.1042 46.9804 23.4979 49.4109 25.1147L50.0417 25.5343C50.9614 26.1461 51.6739 27.0226 52.0849 28.048L52.1371 28.1782C52.4175 28.8775 52.5615 29.624 52.5615 30.3773V32.5C52.5615 38.0228 48.0844 42.5 42.5615 42.5H10.5C4.97715 42.5 0.5 38.0229 0.5 32.5V29.2667C0.5 28.8809 0.562321 28.4977 0.684554 28.1318C0.924556 27.4133 1.38613 26.7895 2.00295 26.3499L3.08246 25.5805C4.25859 24.7422 5.02212 23.4428 5.18196 22.0074C5.3709 20.3107 4.69456 18.6325 3.38186 17.541L2.16154 16.5263C1.0978 15.4649 0.5 14.0239 0.5 12.5212V10.5Z" fill="#7DDE1C"/>-->
<!--                        <path d="M56.3738 9.01031C56.7234 4.82466 60.2226 1.60547 64.4228 1.60547C68.8837 1.60547 72.4999 5.22169 72.4999 9.68254V13.1834C72.4999 13.5686 72.4526 13.9523 72.359 14.3259C72.0921 15.3909 71.461 16.3288 70.575 16.9771L69.7678 17.5678C66.8587 19.6964 67.0621 24.1026 70.1549 25.9542L70.4393 26.1245C71.404 26.702 72.0996 27.6393 72.3729 28.73C72.4572 29.0668 72.4999 29.4126 72.4999 29.7598V33.3039C72.4999 37.7724 68.8774 41.3949 64.4088 41.3949C60.2125 41.3949 56.7126 38.1868 56.3483 34.0063L55.9373 29.2902C55.9025 28.8906 55.9501 28.4881 56.0772 28.1077C56.3095 27.4123 56.7941 26.8293 57.4353 26.4739L59.8487 25.136C60.853 24.5794 61.5814 23.6312 61.8604 22.5174C62.2665 20.8968 61.6603 19.191 60.3227 18.19L57.5461 16.112C56.5124 15.3385 55.9498 14.0872 56.0572 12.8005L56.3738 9.01031Z" fill="#FF7C00"/>-->
<!--                        <path d="M56.3738 9.01031C56.7234 4.82466 60.2226 1.60547 64.4228 1.60547C68.8837 1.60547 72.4999 5.22169 72.4999 9.68254V13.1834C72.4999 13.5686 72.4526 13.9523 72.359 14.3259C72.0921 15.3909 71.461 16.3288 70.575 16.9771L69.7678 17.5678C66.8587 19.6964 67.0621 24.1026 70.1549 25.9542L70.4393 26.1245C71.404 26.702 72.0996 27.6393 72.3729 28.73C72.4572 29.0668 72.4999 29.4126 72.4999 29.7598V33.3039C72.4999 37.7724 68.8774 41.3949 64.4088 41.3949C60.2125 41.3949 56.7126 38.1868 56.3483 34.0063L55.9373 29.2902C55.9025 28.8906 55.9501 28.4881 56.0772 28.1077C56.3095 27.4123 56.7941 26.8293 57.4353 26.4739L59.8487 25.136C60.853 24.5794 61.5814 23.6312 61.8604 22.5174C62.2665 20.8968 61.6603 19.191 60.3227 18.19L57.5461 16.112C56.5124 15.3385 55.9498 14.0872 56.0572 12.8005L56.3738 9.01031Z" fill="#7DDE1C"/>-->
<!--                        <path d="M18.717 29.1422L34.3314 13.519" stroke="white" stroke-linecap="round"/>-->
<!--                        <path d="M33.0298 25.7368C33.5873 25.7368 34.1218 25.9585 34.5161 26.353C34.9104 26.7475 35.1323 27.2823 35.1323 27.8403C35.1323 28.3984 34.9104 28.9341 34.5161 29.3286C34.1218 29.7229 33.5871 29.9448 33.0298 29.9448C32.4724 29.9448 31.9377 29.723 31.5435 29.3286C31.1491 28.9341 30.9272 28.3984 30.9272 27.8403C30.9273 27.2824 31.1493 26.7475 31.5435 26.353C31.9377 25.9585 32.4723 25.7368 33.0298 25.7368ZM20.0181 12.7173C20.5755 12.7173 21.1101 12.939 21.5044 13.3335C21.8986 13.7279 22.1205 14.2629 22.1206 14.8208C22.1206 15.3789 21.8987 15.9146 21.5044 16.3091C21.1101 16.7035 20.5755 16.9253 20.0181 16.9253C19.4607 16.9253 18.926 16.7034 18.5317 16.3091C18.1374 15.9146 17.9155 15.3789 17.9155 14.8208C17.9156 14.2629 18.1375 13.7279 18.5317 13.3335C18.926 12.939 19.4606 12.7173 20.0181 12.7173Z" fill="white" stroke="white"/>-->
<!--                        <path d="M31.7396 0.5H21.3092C11.4773 0.5 6.56399 0.5 3.50878 3.55173C1.21867 5.83532 0.646143 9.16046 0.500409 14.8056C0.482192 15.5295 1.07554 16.1076 1.77558 16.2924C2.89025 16.5829 3.87714 17.2351 4.58165 18.1468C5.28617 19.0586 5.66851 20.1784 5.66877 21.3309C5.66877 23.7499 4.01885 25.7835 1.78079 26.3694C1.07814 26.5517 0.484795 27.1297 0.505614 27.8536C0.648745 33.504 1.22387 36.8265 3.50878 39.1101M42.1388 0.760386C45.5453 1.09368 47.8354 1.8462 49.5426 3.55173C51.8275 5.83532 52.4052 9.16046 52.5483 14.8056C52.5666 15.5295 51.9732 16.1076 51.2732 16.2924C50.1585 16.5829 49.1716 17.2351 48.4671 18.1468C47.7626 19.0586 47.3802 20.1784 47.38 21.3309C47.38 23.7499 49.0299 25.7835 51.268 26.3694C51.9706 26.5517 52.5639 27.1297 52.5431 27.8536C52.4 33.504 51.8249 36.8265 49.54 39.1101C46.4848 42.1618 41.5714 42.1618 31.7396 42.1618H21.3092C18.2748 42.1618 15.701 42.1618 13.5124 42.0707" stroke="white" stroke-linecap="round"/>-->
<!--                        <path d="M69.4939 3.55188C68.2118 2.271 66.6009 1.52765 64.4352 1.0957C62.2695 1.52765 60.6586 2.271 59.3765 3.55188C57.0916 5.83547 56.5139 9.16061 56.3708 14.8058C56.3526 15.5297 56.9459 16.1077 57.6459 16.2926C58.7606 16.583 59.7475 17.2352 60.452 18.147C61.1565 19.0587 61.5389 20.1786 61.5391 21.3311C61.5391 23.7501 59.8892 25.7837 57.6511 26.3696C56.9485 26.5518 56.3552 27.1299 56.376 27.8538C56.5191 33.5041 57.0942 36.8267 59.3791 39.1103C60.6616 40.3913 62.2715 41.1346 64.4352 41.5659C66.5989 41.1346 68.2088 40.3913 69.4913 39.1103C71.7762 36.8267 72.3513 33.5041 72.4944 27.8538C72.5153 27.1299 71.9219 26.5518 71.2193 26.3696C68.9812 25.7837 67.3313 23.7501 67.3313 21.3311C67.3315 20.1786 67.7139 19.0587 68.4184 18.147C69.1229 17.2352 70.1098 16.583 71.2245 16.2926C71.9245 16.1077 72.5179 15.5297 72.4996 14.8058C72.3565 9.16061 71.7788 5.83547 69.4939 3.55188Z" stroke="white" stroke-linecap="round"/>-->
<!--                        <path d="M54.5505 0.785156V42.1616" stroke="white" stroke-linecap="round" stroke-dasharray="10 10"/>-->
<!--                    </svg>-->
<!---->
<!--                    <p class="benefits-line__caption">-->
<!--                        --><?//if(SITE_ID == "s1"):?>
<!--                            Как успеть получить льготы, до ужесточения правил 1&nbsp;апреля?-->
<!--                            --><?//else:?>
<!--                            How can you get benefits before the rules get stricter on April 1?-->
<!--                                --><?//endif;?>
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-12 col-lg-auto">-->
<!--                --><?//if(SITE_ID == "s1"):?>
<!--                    <a href="https://gdpquadrat.com/novosti/posledniy-shans-kak-uspet-poluchit-lgoty-v-oez-stupino-kvadrat-do-uzhestocheniya-pravil-1-aprelya/" class="benefits-line__btn">-->
<!--                        Подробнее-->
<!--                    --><?//else:?>
<!--                        <a href="https://gdpquadrat.com/en/novosti/last-chance-how-to-get-tax-benefits-in-the-stupino-quadrat-sez/" class="benefits-line__btn">-->
<!--                            More details-->
<!--                        --><?//endif;?>
<!--                    </a>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="footer_wrapper">
<div id="footer" <?= $APPLICATION->GetCurPage(false) === '/' || $APPLICATION->GetCurPage(false) === '/en/' ? "class='main_page'" : "";?>>
	<div class="container-xxl h-100">
		<div class="row justify-content-between h-100">
			<div class="col-auto d-flex">
				<div class="footer_logo">
					<a href="/">
					<?if(SITE_ID == "s1"):?>
						<img src="<?=$APPLICATION->GetTemplatePath('images/LogoRUSW.svg')?>" class="pc" alt="Company">
					<?else:?>
						<img src="<?=$APPLICATION->GetTemplatePath('images/LogoENGW.svg')?>" class="pc" alt="Company">
					<?endif;?>
					</a>
				</div>
				<div class="legal_info ms-3 py-2 d-none d-lg-block">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
						   "AREA_FILE_SHOW" => "file",
						   "PATH" => "/include/legal_info.php",
						   "EDIT_TEMPLATE" => ""
					   )
					);?>
				</div>
				
			</div>
			<div class="col-auto">
			<?
			CModule::IncludeModule("iblock");
			$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
			$arFilter = Array("IBLOCK_ID"=> 52, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
			while($ob = $res->GetNextElement()){ 
				$arFields = $ob->GetFields();  
				$arProps = $ob->GetProperties();
				$socials[$arFields["ID"]] = $arFields;
				$socials[$arFields["ID"]]["PROPS"] = $arProps;
			}
			?>
				<div class="footer_social">
					<?php foreach ($socials as $social): ?>
					<div class="main_page_social_icon">
						<a href="<?= $social["PROPS"]["LINK"]["VALUE"]; ?>" target="_blank">
							<?= $social["PROPS"]["SVG"]["~VALUE"]; ?>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="row legal_info mt-2 pb-2 d-flex d-lg-none">
			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				   "AREA_FILE_SHOW" => "file",
				   "PATH" => "/include/legal_info.php",
				   "EDIT_TEMPLATE" => ""
			   )
			);?>
		</div>
		
	</div>
</div>
</div>
</body>
<loom-container id="lo-engage-ext-container">
    <div></div>
    <loom-shadow classname="resolved"></loom-shadow>
</loom-container>
</html>
