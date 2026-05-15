<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\UI\Extension;
use Bitrix\Main\Page\Asset;

Extension::load('ui.bootstrap4');
// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.maskedinput.min.js");
?><!DOCTYPE html>
<!-- saved from url=(0028)http://testkvadrat.tilda.ws/ -->
<html class="js-focus-visible" data-js-focus-visible="" lang="<?=LANGUAGE_ID?>">
<?php $APPLICATION->AddHeadString('<link rel="canonical" href="https://gdpquadrat.com' . $APPLICATION->GetCurDir() . '"/>');
// Подключаем обработчик hreflang
require_once $_SERVER['DOCUMENT_ROOT'].'/local/php_interface/hreflang_handler.php';

$hreflangTags = generateHreflangTags();
if ($hreflangTags) {
    $APPLICATION->AddHeadString($hreflangTags);
}


$APPLICATION->SetPageProperty('robots', 'index, follow');
 ?>
<head class="head">

	<?$APPLICATION->ShowHead();?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--metatextblock-->
    <title><?$APPLICATION->ShowTitle();?></title>
	
	<meta property="og:title" content="<?=$APPLICATION->ShowTitle();?>"/>
	<meta property="og:url" content="https://gdpquadrat.com<?=$APPLICATION->GetCurPage(false);?>" />
	<meta property="og:description" content="<?=$APPLICATION->ShowProperty("description");?>"/>
	<meta property="og:type" content="website" />

    <link rel="shortcut icon" href="/favicon.svg" type="image/x-icon">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    <!-- Assets -->

	<?php


		$APPLICATION->SetAdditionalCSS($APPLICATION->GetTemplatePath('images/ilda-grid-3.0.min.css'));
		$APPLICATION->SetAdditionalCSS($APPLICATION->GetTemplatePath('images/tilda-blocks-2.12.css'));
		$APPLICATION->SetAdditionalCSS($APPLICATION->GetTemplatePath('images/tilda-animation-1.0.min.css'));
		$APPLICATION->SetAdditionalCSS($APPLICATION->GetTemplatePath('images/tilda-menusub-1.0.min.css'));
		$APPLICATION->SetAdditionalCSS($APPLICATION->GetTemplatePath('images/tilda-slds-1.4.min.css'));
		$APPLICATION->SetAdditionalCSS($APPLICATION->GetTemplatePath('images/tilda-zoom-2.0.min.css'));
		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("images/jquery-1.10.2.min.js"));
		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("images/tildasimplestat-0.1.min.js"));
		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("images/tilda-scripts-2.8.min.js"));
		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("js/jquery.maskedinput2.js"));
		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("js/slick.min.js"));
		?>
		
		<?
		// $APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("assets/js/bootstrap.bundle.min.js"));
		// $APPLICATION->SetAdditionalCSS($APPLICATION->GetTemplatePath('assets/css/bootstrap.min.css'));
		$APPLICATION->SetAdditionalCSS($APPLICATION->GetTemplatePath('assets/css/custom.css'));
		?>
			<?
				//if (substr_count($APPLICATION->GetCurDir(), "/video/") == 0)
				$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("images/tilda-blocks-2.7.js"));
			?>
		<?

		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("images/lazyload-1.3.min.js"));
		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("images/tilda-animation-1.0.min.js"));
		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("images/tilda-menusub-1.0.min.js"));
		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("images/tilda-slds-1.4.min.js"));
		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("images/hammer.min.js"));
		$APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("images/tilda-zoom-2.0.min.js"));
    $APPLICATION->AddHeadScript($APPLICATION->GetTemplatePath("js/custom.js"));
        $APPLICATION->SetAdditionalCss("/local/templates/gdpquadrat/template_styles.css");
	?>
    <style type="text/css">@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}</style>
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style:  normal;
            font-family: 'Circular-Loom';
            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
        }
        @font-face {
            font-weight: 500;
            font-style:  normal;
            font-family: 'Circular-Loom';
            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
        }
        @font-face {
            font-weight: 700;
            font-style:  normal;
            font-family: 'Circular-Loom';
            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
        }
        @font-face {
            font-weight: 900;
            font-style:  normal;
            font-family: 'Circular-Loom';
            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
        }
    </style>
<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "5i9zuorgYRzN4Rgfh9syc0Hg8NIP82yb"]);
</script>

<script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>





		
<style>
.video {
    background: #0a007f !important;
}
	</style>
<script type="text/javascript">
	const el23 = document.querySelector('.video');
	if (el23 !== null) {
		el23.classList.remove("t-active");
	}
</script>
		<script type="text/javascript" async src="//smartcallback.ru/api/SmartCallBack.js?t=smIR6HXrfPfQZPZeeNVk" charset="utf-8"></script>
		<meta name="yandex-verification" content="34e140c7a6d9d39b" />
    <link href="/local/templates/gdpquadrat/assets/css/animate.css" type="text/css" data-template-style="true" rel="stylesheet">
    <script type="text/javascript" src="/local/templates/gdpquadrat/assets/js/wow.js"></script>
    <script>
        // $(function(){
        //     wow = new WOW(
        //         {
        //             animateClass: 'animated',
        //             offset:       100
        //         }
        //     );
        //     wow.init();
        // })
    </script>

    <?php if ($APPLICATION->GetCurPage(false) === '/' || $APPLICATION->GetCurPage(false) === '/en/') { ?>
        <!-- Marquiz script start -->
        <script>
            (function(w, d, s, o){
                var j = d.createElement(s); j.async = true; j.src = '//script.marquiz.ru/v2.js';j.onload = function() {
                    if (document.readyState !== 'loading') Marquiz.init(o);
                    else document.addEventListener("DOMContentLoaded", function() {
                        Marquiz.init(o);
                    });
                };
                d.head.insertBefore(j, d.head.firstElementChild);
            })(window, document, 'script', {
                    host: '//quiz.marquiz.ru',
                    region: 'ru',
                    id: '69ba8a7379776000195ee300',
                    autoOpen: 20,
                    autoOpenFreq: 'once',
                    openOnExit: false,
                    disableOnMobile: false
                }
            );
        </script>
        <!-- Marquiz script end -->
    <?php } ?>

</head>
<body class="t-body" style="margin: 0px;" cz-shortcut-listen="true">

<!-- RuTarget --> <script>(function(w, d, s, p) { var f = d.getElementsByTagName(s)[0], j = d.createElement(s); j.async = true; j.src = '//cdn.rutarget.ru/static/tag/tag.js'; f.parentNode.insertBefore(j, f); w[p] = {rtgNoSync: false, rtgSyncFrame: true}; })(window, document, 'script', '_rtgParams');</script> <!-- /RuTarget -->
<?$APPLICATION->ShowPanel();?>
<!--allrecords-->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(38142565, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38142565" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<div class="main_wrapper">
<div class="top_wrapper">
    <?php
    $mainPage = "";
    $curPage = $APPLICATION->GetCurPage(false);
    if (
        $curPage === '/'
        || $curPage === '/en/'
        || preg_match('#^/uchastki/.+/.+/#', $curPage)
    ) {
        $mainPage = "class='main_page'";
    }
    ?>
<div id="header" <?= $mainPage;?> >
	<div class="container-xxl">
		<div class="row justify-content-between">
            <div class="col-auto">
                <div class="logo_header">
                    <?if(SITE_ID == "s1"):?>
                    <a href="/">
                        <?else:?>
                        <a href="/en/">
                            <?endif;?>

                            <?php
                            $curPage = $APPLICATION->GetCurPage(false);
                            $isMainStyle = ($curPage === '/' || $curPage === '/en/' || preg_match('#^/uchastki/.+/.+/#', $curPage));
                            ?>

                            <?if(SITE_ID == "s1"):?>
                                <?if ($isMainStyle): ?>
                                    <img src="<?=$APPLICATION->GetTemplatePath('images/LogoRUSW.svg')?>" class="pc" alt="Company">
                                    <img src="<?=$APPLICATION->GetTemplatePath('images/LogoRUS.svg')?>" class="mobile" alt="Company">
                                <?else:?>
                                    <img src="<?=$APPLICATION->GetTemplatePath('images/LogoRUS.svg')?>" class="pc" alt="Company">
                                <?endif;?>
                            <?else:?>
                                <?if ($isMainStyle): ?>
                                    <img src="<?=$APPLICATION->GetTemplatePath('images/LogoENGW.svg')?>" class="pc" alt="Company">
                                    <img src="<?=$APPLICATION->GetTemplatePath('images/LogoENG.svg')?>" class="mobile" alt="Company">
                                <?else:?>
                                    <img src="<?=$APPLICATION->GetTemplatePath('images/LogoENG.svg')?>" class="pc" alt="Company">
                                <?endif;?>
                            <?endif;?>
                        </a>
                </div>
            </div>
			<div class="col-auto d-none d-xl-block">
				<div class="menu_header">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"topmenu",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "top",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(
								0 => "",
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "N",
							"ROOT_MENU_TYPE" => "top",
							"USE_EXT" => "N"
						),
						false,
						array(
							"ACTIVE_COMPONENT" => "Y"
						)
					);?>
				</div>
			</div>
			<div class="col-auto d-none d-xl-block">
				<div class="info_header">
					<div class="header_phone"><a href="tel:84951520721">+7 (495) 152-07-21</a></div>
					<div class="header_icon">
						<div class="header_icon_search" data-bs-toggle="modal" data-bs-target="#searchModal">
							<svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M9.85966 17.8994C8.13572 17.9014 6.46288 17.314 5.11852 16.2348C3.77416 15.1556 2.83902 13.6494 2.46815 11.9658C2.09728 10.2822 2.31296 8.52244 3.07942 6.97825C3.84589 5.43406 5.1171 4.1982 6.6823 3.4756C8.24749 2.75299 10.0126 2.58703 11.6851 3.00524C13.3575 3.42345 14.8368 4.4007 15.8777 5.77497C16.9186 7.14924 17.4585 8.83797 17.4079 10.5612C17.3573 12.2844 16.7193 13.9385 15.5997 15.2494L16.8697 16.6294C18.4942 14.8214 19.3613 12.458 19.2916 10.0284C19.2218 7.59875 18.2206 5.28896 16.495 3.57712C14.7695 1.86528 12.4518 0.882465 10.0217 0.832113C7.59156 0.78176 5.23514 1.66773 3.44015 3.30662C1.64517 4.94552 0.549082 7.21185 0.378763 9.6365C0.208445 12.0611 0.976942 14.4585 2.52518 16.3322C4.07342 18.2059 6.28284 19.4126 8.69612 19.7025C11.1094 19.9924 13.5417 19.3432 15.4897 17.8894L14.2197 16.5094C12.946 17.4144 11.4221 17.9003 9.85966 17.8994Z" fill="black"/>
								<path d="M21.3102 21.4909L16.8702 16.6309C16.4545 17.097 15.9921 17.5192 15.4902 17.8909L19.9202 22.7509C20.0108 22.846 20.1193 22.9223 20.2394 22.9755C20.3595 23.0287 20.4889 23.0577 20.6202 23.0609C20.8544 23.0607 21.0797 22.9713 21.2502 22.8109C21.4319 22.643 21.5401 22.4103 21.5513 22.1632C21.5625 21.9161 21.4759 21.6745 21.3102 21.4909Z" fill="black"/>
								<path d="M16.8697 16.63L15.5997 15.25C15.1915 15.7234 14.7282 16.1464 14.2197 16.51L15.4897 17.89C15.9916 17.5183 16.454 17.0961 16.8697 16.63Z" fill="black"/>
							</svg>
						</div>
						<?php
						global $USER;
						if ($USER->IsAuthorized()):
						?>
							<?if(SITE_ID == "s1"):?>
								<a class="header_icon_lk" href="/personal/">
									<svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.8804 12.7393C16.115 11.9312 17.0566 10.7471 17.5659 9.36215C18.0752 7.97725 18.125 6.46517 17.708 5.04974C17.2911 3.63431 16.4294 2.39075 15.2507 1.50311C14.072 0.615478 12.6388 0.13095 11.1632 0.121243C9.6877 0.111535 8.24825 0.577164 7.05794 1.44921C5.86763 2.32126 4.98972 3.55338 4.55416 4.96321C4.1186 6.37303 4.14854 7.88562 4.63954 9.27711C5.13054 10.6686 6.05651 11.865 7.28039 12.6893C5.39842 13.4378 3.78434 14.7338 2.64693 16.4096C1.50951 18.0854 0.901102 20.0639 0.900391 22.0893C0.900391 22.3412 1.00048 22.5829 1.17864 22.761C1.3568 22.9392 1.59844 23.0393 1.85039 23.0393C2.10235 23.0393 2.34398 22.9392 2.52214 22.761C2.7003 22.5829 2.80039 22.3412 2.80039 22.0893C2.80039 19.9092 3.66642 17.8184 5.20797 16.2769C6.74952 14.7353 8.84031 13.8693 11.0204 13.8693C13.2005 13.8693 15.2913 14.7353 16.8328 16.2769C18.3744 17.8184 19.2404 19.9092 19.2404 22.0893C19.2404 22.3412 19.3405 22.5829 19.5186 22.761C19.6968 22.9392 19.9384 23.0393 20.1904 23.0393C20.4423 23.0393 20.684 22.9392 20.8621 22.761C21.0403 22.5829 21.1404 22.3412 21.1404 22.0893C21.1381 20.0865 20.5422 18.1294 19.428 16.4652C18.3138 14.801 16.7312 13.5044 14.8804 12.7393ZM6.15039 6.99928C6.15039 6.01037 6.44364 5.04367 6.99304 4.22143C7.54245 3.39918 8.32334 2.75832 9.23697 2.37988C10.1506 2.00144 11.1559 1.90243 12.1258 2.09535C13.0957 2.28828 13.9867 2.76448 14.6859 3.46375C15.3852 4.16301 15.8614 5.05392 16.0543 6.02383C16.2472 6.99373 16.1482 7.99907 15.7698 8.9127C15.3914 9.82633 14.7505 10.6072 13.9282 11.1566C13.106 11.706 12.1393 11.9993 11.1504 11.9993C9.82431 11.9993 8.55254 11.4725 7.61486 10.5348C6.67717 9.59713 6.15039 8.32536 6.15039 6.99928Z" fill="black"/>
									</svg>
								</a>
							<?else:?>
								<a class="header_icon_lk" href="/en/personal/">
									<svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.8804 12.7393C16.115 11.9312 17.0566 10.7471 17.5659 9.36215C18.0752 7.97725 18.125 6.46517 17.708 5.04974C17.2911 3.63431 16.4294 2.39075 15.2507 1.50311C14.072 0.615478 12.6388 0.13095 11.1632 0.121243C9.6877 0.111535 8.24825 0.577164 7.05794 1.44921C5.86763 2.32126 4.98972 3.55338 4.55416 4.96321C4.1186 6.37303 4.14854 7.88562 4.63954 9.27711C5.13054 10.6686 6.05651 11.865 7.28039 12.6893C5.39842 13.4378 3.78434 14.7338 2.64693 16.4096C1.50951 18.0854 0.901102 20.0639 0.900391 22.0893C0.900391 22.3412 1.00048 22.5829 1.17864 22.761C1.3568 22.9392 1.59844 23.0393 1.85039 23.0393C2.10235 23.0393 2.34398 22.9392 2.52214 22.761C2.7003 22.5829 2.80039 22.3412 2.80039 22.0893C2.80039 19.9092 3.66642 17.8184 5.20797 16.2769C6.74952 14.7353 8.84031 13.8693 11.0204 13.8693C13.2005 13.8693 15.2913 14.7353 16.8328 16.2769C18.3744 17.8184 19.2404 19.9092 19.2404 22.0893C19.2404 22.3412 19.3405 22.5829 19.5186 22.761C19.6968 22.9392 19.9384 23.0393 20.1904 23.0393C20.4423 23.0393 20.684 22.9392 20.8621 22.761C21.0403 22.5829 21.1404 22.3412 21.1404 22.0893C21.1381 20.0865 20.5422 18.1294 19.428 16.4652C18.3138 14.801 16.7312 13.5044 14.8804 12.7393ZM6.15039 6.99928C6.15039 6.01037 6.44364 5.04367 6.99304 4.22143C7.54245 3.39918 8.32334 2.75832 9.23697 2.37988C10.1506 2.00144 11.1559 1.90243 12.1258 2.09535C13.0957 2.28828 13.9867 2.76448 14.6859 3.46375C15.3852 4.16301 15.8614 5.05392 16.0543 6.02383C16.2472 6.99373 16.1482 7.99907 15.7698 8.9127C15.3914 9.82633 14.7505 10.6072 13.9282 11.1566C13.106 11.706 12.1393 11.9993 11.1504 11.9993C9.82431 11.9993 8.55254 11.4725 7.61486 10.5348C6.67717 9.59713 6.15039 8.32536 6.15039 6.99928Z" fill="black"/>
									</svg>
								</a>
							<?endif;?>
						<?php else: ?>
						<div class="header_icon_lk" data-bs-toggle="modal" data-bs-target="#authModal">
							<svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.8804 12.7393C16.115 11.9312 17.0566 10.7471 17.5659 9.36215C18.0752 7.97725 18.125 6.46517 17.708 5.04974C17.2911 3.63431 16.4294 2.39075 15.2507 1.50311C14.072 0.615478 12.6388 0.13095 11.1632 0.121243C9.6877 0.111535 8.24825 0.577164 7.05794 1.44921C5.86763 2.32126 4.98972 3.55338 4.55416 4.96321C4.1186 6.37303 4.14854 7.88562 4.63954 9.27711C5.13054 10.6686 6.05651 11.865 7.28039 12.6893C5.39842 13.4378 3.78434 14.7338 2.64693 16.4096C1.50951 18.0854 0.901102 20.0639 0.900391 22.0893C0.900391 22.3412 1.00048 22.5829 1.17864 22.761C1.3568 22.9392 1.59844 23.0393 1.85039 23.0393C2.10235 23.0393 2.34398 22.9392 2.52214 22.761C2.7003 22.5829 2.80039 22.3412 2.80039 22.0893C2.80039 19.9092 3.66642 17.8184 5.20797 16.2769C6.74952 14.7353 8.84031 13.8693 11.0204 13.8693C13.2005 13.8693 15.2913 14.7353 16.8328 16.2769C18.3744 17.8184 19.2404 19.9092 19.2404 22.0893C19.2404 22.3412 19.3405 22.5829 19.5186 22.761C19.6968 22.9392 19.9384 23.0393 20.1904 23.0393C20.4423 23.0393 20.684 22.9392 20.8621 22.761C21.0403 22.5829 21.1404 22.3412 21.1404 22.0893C21.1381 20.0865 20.5422 18.1294 19.428 16.4652C18.3138 14.801 16.7312 13.5044 14.8804 12.7393ZM6.15039 6.99928C6.15039 6.01037 6.44364 5.04367 6.99304 4.22143C7.54245 3.39918 8.32334 2.75832 9.23697 2.37988C10.1506 2.00144 11.1559 1.90243 12.1258 2.09535C13.0957 2.28828 13.9867 2.76448 14.6859 3.46375C15.3852 4.16301 15.8614 5.05392 16.0543 6.02383C16.2472 6.99373 16.1482 7.99907 15.7698 8.9127C15.3914 9.82633 14.7505 10.6072 13.9282 11.1566C13.106 11.706 12.1393 11.9993 11.1504 11.9993C9.82431 11.9993 8.55254 11.4725 7.61486 10.5348C6.67717 9.59713 6.15039 8.32536 6.15039 6.99928Z" fill="black"/>
							</svg>
						</div>
						<?php endif; ?>
					</div>
					<div class="header_lang">
						<?if(SITE_ID == "s1"):?>
							<span class="selected">РУС</span><span>|</span><a href="/en/" class="title">ENG</a>
						<?else:?>
							<?
							$url = str_replace ( "/en" , "", $APPLICATION->GetCurPage(false));
							?>
							<a href="/" class="title">RUS</a><span>|</span><span class="selected">ENG</span>
						<?endif;?>
					</div>
				</div>
			</div>
			<div class="col-auto d-xl-none d-block">
				<div class="header_mobile">
					<div class="header_lang">
						<?if(SITE_ID == "s1"):?>
							<a href="/en/" class="title">ENG</a>
						<?else:?>
							<a href="/" class="title">RUS</a>
						<?endif;?>
					</div>
					<div class="header_phone">
						<a href="tel:84951351893">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.7433 4.04951C21.466 5.76432 20.8534 7.40783 19.9406 8.88631C17.349 13.7002 13.3641 17.6212 8.50644 20.1371C7.60791 20.5966 6.66432 20.9621 5.69065 21.228C4.69421 21.6309 3.58006 21.6313 2.58334 21.2291C1.58663 20.8269 0.785326 20.0537 0.348543 19.0725C0.178923 18.8291 0.066482 18.5505 0.019596 18.2576C-0.19093 16.3124 1.33539 15.6289 2.65118 14.722C3.07898 14.3369 3.63447 14.1237 4.21038 14.1237C4.7863 14.1237 5.34179 14.3369 5.76959 14.722C7.75644 16.2861 8.15117 16.365 10.0196 14.6563C11.8943 12.9533 13.6527 11.1266 15.2828 9.18861C16.3749 7.87426 16.217 7.3091 15.0328 6.06046C14.6035 5.6787 14.3252 5.15618 14.248 4.58731C14.1707 4.01845 14.2998 3.44075 14.6117 2.9586C14.8291 2.55291 15.08 2.16603 15.3617 1.80198C16.1775 0.763642 17.0064 -0.353555 18.5722 0.106466C20.138 0.566488 21.9012 2.51172 21.7433 4.04951Z" fill="black"/>
							</svg>
						</a>
					</div>
					<div class="header_burger">
						<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="0.966309" y="0.744629" width="44.0336" height="44.0336" fill="#1400C4"/>
						<rect x="12.5" y="14.8306" width="20" height="2" fill="white"/>
						<rect x="12.5" y="21.8306" width="20" height="2" fill="white"/>
						<rect x="12.5" y="28.8306" width="20" height="2" fill="white"/>
						</svg>
					</div>
					<div class="header_close_menu">
						<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="0.966309" y="0.744629" width="44.0336" height="44.0336" fill="#1400C4"/>
						<path d="M31.0726 14.4238L14.9287 30.5677" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M31.0777 30.5774L14.9204 14.4167" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menu_mobile_wrap">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"mobilemenu",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "top",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(
								0 => "",
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "N",
							"ROOT_MENU_TYPE" => "top",
							"USE_EXT" => "N"
						),
						false,
						array(
							"ACTIVE_COMPONENT" => "Y"
						)
					);?>
			</div>
</div>

    <div class="main-content <?= $APPLICATION->GetCurPage(false) === '/' || $APPLICATION->GetCurPage(false) === '/en/'? "main_page" : "";?>" data-hook="blocks-collection-content-node">
        <?
        $curPage = $APPLICATION->GetCurPage(false);
        if (
            $curPage !== '/'
            && $curPage !== '/en/'
            && !preg_match('#^/uchastki/.+/.+/#', $curPage)
        ) {
            $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "s1"
                )
            );
        }?>
	<?$url = array(
		'/',
		'/en/',
		'/',
		'/en/infrastruktura/',
		'/infrastruktura/',
		'/en/contacts/',
		'/contacts/',
		'/investoru/',
		'/en/investoru/'
	);?>
