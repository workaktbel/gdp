<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
global $USER;

$lang = Bitrix\Main\Application::getInstance()->getContext()->getLanguage();
?>

<div class="video_block_wr asd">
    <div class="block_inner">
        <div class="block_left">
            <div class="title"><?=$arResult["NAME"]?></div>
            <div class="text"><?echo $arResult["PREVIEW_TEXT"];?></div>
            <div class="btns">
                <?if($arResult["DISPLAY_PROPERTIES"]["BTN_TEXT"]["VALUE"]):?>
                    <a class="btn_button green" href="<?if(SITE_DIR == '/'):?>/uchastki.php<?else:?>/en/uchastki/<?endif?>"><?=$arResult["DISPLAY_PROPERTIES"]["BTN_TEXT"]["VALUE"]?></a>
                <?endif;?>
                <?if($arResult["DISPLAY_PROPERTIES"]["FILE_UPL"]["FILE_VALUE"]["SRC"]):?>
					<a class="btn_button blue prezentatsiya" href="<?if(SITE_DIR == '/'):?>/prezentatsiya.php<?else:?>/en/prezentatsiya/<?endif?>" target="_blank"><?=$arResult["DISPLAY_PROPERTIES"]["FILE_UPL"]["DESCRIPTION"]?></a>
                <?endif;?>
                <a class="btn_button orange" href="#my-form">
                    <? if (SITE_ID == 's1'):?>
                        Стать инвестором
                    <? else: ?>
                        Become an investor
                    <? endif; ?>
                </a>
				<?php if ($lang != "en"): ?>
					<?php if ($USER->IsAuthorized()): ?>
						<a class="btn_button dark_blue" href="personal/">Личный кабинет</a>
					<?php else: ?>
						<a class="btn_button dark_blue" data-toggle="modal" data-target="#authModal">Личный кабинет</a>
					<?php endif; ?>
				<?php endif; ?>
            </div>
        </div>
        <div class="block_right">
            <?php if (isset($arResult['DISPLAY_PROPERTIES']['VIDEO'])): ?>
                <video id="mainVideo" width="400" height="300" loop autoplay playsinline muted>
                    <source src="<?=$arResult['DISPLAY_PROPERTIES']['VIDEO']['VALUE']['path']?>">
                </video>
            <?php endif; ?>
            <!--<video id="mainVideo" width="400" height="300" poster="/upload/iblock/1b3/1b3ad3b3608182caddd6116deb9501b6.png" loop="" autoplay="" playsinline="" muted="">
                <source src="/upload/video/видео для сайта рус версия.mp4" type="video/ogg; codecs=&quot;theora, vorbis&quot;">
                <source src="/upload/video/видео для сайта рус версия.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
                <source src="/upload/video/видео для сайта рус версия.mp4" type="video/webm; codecs=&quot;vp8, vorbis&quot;">
            </video>-->
            <div class="controls-btn" style="display: flex;">
                <div class="mute-btns">
                    <button class="mute-btn mute-video">
                        <span class="unmute"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.82 57.69"><defs><style>.cls-1{fill:navy;}</style></defs><g id="kontyr"><path class="cls-1" d="M22.92,33.59H17.25V21.27h5.66S29,16.74,29,16.71s0,21.36,0,21.36Z"></path><path class="cls-1" d="M36.66,36.7l-1.92-1.92a10.92,10.92,0,0,0,0-14.71l1.91-1.91A13.54,13.54,0,0,1,36.66,36.7Z"></path><path class="cls-1" d="M32.8,32.83,30.88,30.9a5.42,5.42,0,0,0,0-6.95L32.8,22A8.12,8.12,0,0,1,32.8,32.83Z"></path></g></svg></span>
                        <span class="mute"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.87 57.69"><defs><style>.cls-1{fill:navy;}</style></defs><g id="kontyr"><path class="cls-1" d="M22.72,21.27H17.06V33.59h5.67l6.09,4.48s0-21.35,0-21.36S22.72,21.27,22.72,21.27Z"></path><polygon class="cls-1" points="41.9 23.78 40.36 22.24 36.74 25.85 33.13 22.24 31.59 23.78 35.2 27.39 31.59 31 33.13 32.55 36.74 28.93 40.36 32.55 41.9 31 38.29 27.39 41.9 23.78"></polygon></g></svg></span>
                    </button>
                </div>
                <script>
                    $("#mainVideo").prop('muted', true);
                    $(".controls-btn .mute-btn").addClass('mute-video');

                    $(".controls-btn .mute-btn").on('click', function () {
                        if ($("#mainVideo").prop('muted')) {
                            $("#mainVideo").prop('muted', false);
                            $(".controls-btn .mute-btn").removeClass('mute-video');
                        } else {
                            $("#mainVideo").prop('muted', true);
                            $(".controls-btn .mute-btn").addClass('mute-video');
                        }
                    });
                    let intViewportWidth = window.innerWidth;

                    if ((intViewportWidth <= 1024) && (intViewportWidth >= 768)) {
                        $('#mainVideo').prop('muted', true);
                    }
                </script>

                <div class="social-style">
                    <a href="https://t.me/gdpquadrat" target="_blank"> <svg class="social-size2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.87 57.69"><defs><style>.cls-1{fill:navy;}.cls-2{fill:#fff;}</style></defs><title>ИконкиСайт</title><g id="kontyr"><path class="cls-1" d="M37.59,39.91H21.37a4.71,4.71,0,0,1-4.74-4.65V19.53a4.71,4.71,0,0,1,4.74-4.66H37.59a4.71,4.71,0,0,1,4.74,4.66V35.26A4.71,4.71,0,0,1,37.59,39.91Z"></path><path class="cls-2" d="M20.61,26.63,25,28.79l2.22,5.51,2.85-2.54,5.2,3.11,3-14.95Zm7.16,3.11-.51,2.91-1.49-4.24,9.85-5.83Z"></path></g></svg></a>
                    <a href="https://www.youtube.com/channel/UCQjLnM6zsJAjqbs4KVACT8g" target="_blank"> <svg class="social-size2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.55 57.76"><defs><style>.cls-1{fill:navy;}</style></defs>&gt;<g id="kontyr"><path class="cls-1" d="M45.74,22.44c-.31-4.9-3.92-5.31-5.22-5.44-2.9-.31-23.36-.31-25.63,0-1.3.17-4.92.54-5.23,5.44S9.37,33.13,9.49,35c.12,2,0,6.33,5.74,6.63s19.23.3,24.94,0S45.79,37,45.92,35C46,33.13,46.05,27.34,45.74,22.44ZM24.17,34.61V24.1l9.32,5.21Z"></path></g></svg></a>
                    <a href="https://zen.yandex.ru/id/61374eaaecb47e2095416ec9" target="_blank"> <svg class="social-size2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.87 57.69"><defs><style>.cls-1{fill:navy;}.cls-2{fill:#fff;}</style></defs><title>ИконкиСайт</title><g id="kontyr"><path class="cls-1" d="M37.59,39.91H21.37a4.71,4.71,0,0,1-4.74-4.65V19.53a4.71,4.71,0,0,1,4.74-4.66H37.59a4.71,4.71,0,0,1,4.74,4.66V35.26A4.71,4.71,0,0,1,37.59,39.91Z"></path><path class="cls-2" d="M29.63,14.87c0,.93.06,1.85.11,2.77,0,.57.06,1.15.11,1.72a12.08,12.08,0,0,0,.68,3.41,6.11,6.11,0,0,0,4.3,3.79,13.7,13.7,0,0,0,2.3.42c1.1.11,2.21.17,3.32.21l1.83.06h0v.29l-1.33,0c-1.13.06-2.27.1-3.4.18a13.94,13.94,0,0,0-2.93.51A6.45,6.45,0,0,0,32,29.77a6.29,6.29,0,0,0-1.62,2.62,11,11,0,0,0-.46,2.28c-.09,1-.15,1.95-.22,2.92,0,.56,0,1.11-.06,1.67,0,.18,0,.37,0,.55s0,.11-.1.1h-.19c0-.12,0-.24,0-.35-.05-1.1-.08-2.2-.15-3.3-.05-.75-.13-1.51-.24-2.26a7.53,7.53,0,0,0-1-3,6.2,6.2,0,0,0-3.6-2.69,12.7,12.7,0,0,0-2.21-.43c-1.13-.14-2.28-.19-3.42-.23l-1.86-.07h-.16a0,0,0,0,0,0,0c0-.26,0-.26.24-.27,1,0,1.91-.06,2.87-.11a26,26,0,0,0,2.92-.26A9,9,0,0,0,25.51,26a6,6,0,0,0,3-3.39A10.4,10.4,0,0,0,29,20.5a26.86,26.86,0,0,0,.23-2.69c0-.7.06-1.4.09-2.1,0-.28,0-.56,0-.84Z"></path></g></svg></a>
                    <a href="https://vk.com/public195913879" target="_blank">
                        <svg class="social-size2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.87 57.69"><defs><style>.cls-1{fill:navy;}.cls-2{fill:#fff;}</style></defs><title>ИконкиСайт</title><g id="kontyr"><path class="cls-1" d="M37.59,39.91H21.37a4.71,4.71,0,0,1-4.74-4.65V19.53a4.71,4.71,0,0,1,4.74-4.66H37.59a4.71,4.71,0,0,1,4.74,4.66V35.26A4.71,4.71,0,0,1,37.59,39.91Z"></path><path class="cls-2" d="M31.24,24.43v2.26a1.26,1.26,0,0,0,0,.27.29.29,0,0,0,.38.23.92.92,0,0,0,.44-.25c.25-.26.5-.51.73-.79A19.29,19.29,0,0,0,35,22.8l.33-.66a.83.83,0,0,1,.81-.51h2.37a.63.63,0,0,1,.19,0,.47.47,0,0,1,.36.59,3.35,3.35,0,0,1-.27.77,19.53,19.53,0,0,1-1.31,2.26c-.44.67-.89,1.33-1.33,2a2.28,2.28,0,0,0-.17.3.45.45,0,0,0,0,.53c.19.22.38.44.58.64.39.39.75.81,1.12,1.22s.8.9,1.16,1.39a4.33,4.33,0,0,1,.57,1,1.08,1.08,0,0,1,.07.47.46.46,0,0,1-.49.47H37.66c-.38,0-.76,0-1.14,0a1.28,1.28,0,0,1-1-.43l-.73-.8a14.4,14.4,0,0,0-1.89-1.77,2.24,2.24,0,0,0-.84-.43,1.1,1.1,0,0,0-.36,0,.35.35,0,0,0-.29.21,1,1,0,0,0-.09.44v2a.64.64,0,0,1-.55.7,3.56,3.56,0,0,1-.92.11,6.84,6.84,0,0,1-3.74-1,10.22,10.22,0,0,1-2.46-2.08,21,21,0,0,1-1.9-2.62,22,22,0,0,1-1.3-2.38,11.92,11.92,0,0,1-.89-2.4c-.05-.21-.08-.44-.11-.66a.54.54,0,0,1,.57-.58q1.2,0,2.4,0a.81.81,0,0,1,.76.38,1.84,1.84,0,0,1,.17.38,18.87,18.87,0,0,0,.88,2.14,14.49,14.49,0,0,0,1.58,2.65,4.53,4.53,0,0,0,.86.89.72.72,0,0,0,.42.15.23.23,0,0,0,.25-.18,1.54,1.54,0,0,0,0-.3c0-1.23,0-2.46,0-3.69a2.17,2.17,0,0,0-.55-1.44,1.72,1.72,0,0,1-.25-.37.39.39,0,0,1,.25-.59l.16,0h3.72l.19,0a.41.41,0,0,1,.33.44c0,.32,0,.63,0,.94v1.52Z"></path></g></svg>
                    </a>
                    <a href="https://www.instagram.com/sezstupinoquadrat/" target="_blank">
                        <svg style="width: 34px;" class="social-size2"  version="1.0" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 251.000000 251.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,251.000000) scale(0.100000,-0.100000)"
                               fill="#000080" stroke="none">
                                <path d="M770 2034 c-161 -43 -293 -191 -320 -359 -13 -78 -13 -772 0 -849 13
-79 57 -170 113 -232 53 -59 155 -116 235 -133 68 -14 838 -15 913 -1 167 31
312 177 348 348 14 68 15 808 1 883 -22 115 -117 247 -217 302 -101 54 -130
57 -593 56 -341 0 -436 -3 -480 -15z m745 -194 c122 -12 185 -40 249 -111 78
-87 81 -105 81 -484 0 -293 -2 -335 -18 -375 -39 -99 -104 -161 -207 -196 -49
-17 -87 -19 -370 -19 -307 0 -316 1 -375 24 -81 32 -163 115 -190 191 -17 48
-20 90 -23 345 -4 312 2 374 43 456 31 61 104 124 168 145 29 10 86 21 127 24
118 11 405 10 515 0z"/>
                                <path d="M913 1712 c-58 -23 -91 -55 -116 -110 -20 -44 -22 -66 -25 -318 -5
-381 8 -433 125 -491 l58 -28 300 0 300 0 60 30 c117 58 128 100 123 488 -3
281 -3 283 -29 332 -18 35 -39 59 -74 80 l-48 30 -316 2 c-279 2 -321 0 -358
-15z m698 -83 c49 -26 43 -107 -10 -129 -75 -31 -134 58 -76 115 26 27 54 31
86 14z m-230 -100 c66 -29 141 -110 164 -178 38 -116 1 -262 -84 -332 -66 -54
-118 -73 -206 -73 -94 0 -152 23 -214 86 -167 167 -91 450 139 515 57 16 138
9 201 -18z"/>
                                <path d="M1155 1415 c-64 -39 -90 -86 -90 -165 0 -56 4 -73 28 -109 39 -58
119 -96 186 -87 57 8 118 49 149 101 50 87 11 220 -78 265 -57 29 -143 27
-195 -5z"/>
                            </g>
                        </svg>
                    </a>
                    <a href="https://ru-ru.facebook.com/sezstupinoquadrat/" target="_blank">
                        <svg style="width: 34px;" class="social-size2" version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="34" height="34" viewBox="0 0 252.000000 252.000000"
                             preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,252.000000) scale(0.100000,-0.100000)"
                               fill="#000080" stroke="none">
                                <path d="M765 2022 c-120 -42 -214 -125 -268 -240 l-32 -67 -3 -440 c-4 -496
-1 -516 68 -623 44 -69 100 -119 173 -155 79 -39 127 -46 280 -47 l137 0 -2
262 -3 263 -75 5 -75 5 0 120 0 120 75 5 75 5 6 115 c4 85 12 130 29 174 56
146 202 212 424 191 46 -4 82 -13 91 -22 11 -10 15 -37 15 -98 0 -117 2 -115
-86 -115 -141 0 -184 -41 -184 -172 l0 -78 119 0 c66 0 122 -4 125 -8 5 -9
-30 -217 -39 -233 -4 -5 -51 -9 -106 -9 l-99 0 0 -265 0 -265 138 0 c153 0
228 14 302 57 116 69 201 192 220 319 12 88 12 735 0 834 -22 170 -133 304
-299 360 -57 19 -84 20 -508 20 -399 -1 -454 -3 -498 -18z"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

