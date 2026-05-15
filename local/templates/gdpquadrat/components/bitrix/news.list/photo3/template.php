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
$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
global $USER;
$monthArr = array(
	1 => "Январь",
	2 => "Февраль",
	3 => "Март",
	4 => "Апрель",
	5 => "Май",
	6 => "Июнь",
	7 => "Июль",
	8 => "Август",
	9 => "Сентябрь",
	10 => "Октябрь",
	11 => "Ноябрь",
	12 => "Декабрь",
);
$monthArrEN = array(
	1 => "January",
	2 => "February",
	3 => "March",
	4 => "April",
	5 => "May",
	6 => "June",
	7 => "July",
	8 => "August",
	9 => "September",
	10 => "October",
	11 => "November",
	12 => "December",
);

?>
<style>
    @media(min-width:1200px){
        .t-slds__items-wrapper.t-slds_animated-none.t-slds__witharrows{
            width:652px !important;
            height:395px !important;
            left:16%;
        }
        .t-margin_auto{
            margin-right:0px;
        }
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>


<div class="t-container" style="padding-bottom:0px;
            margin: 0 auto;
position: relative">
    <div class="  hnovosti ">
	    <?if(SITE_DIR == '/en/'):?>
		    <span>News</span>
	    <?else:?>
		    <span><?=$arParams["PAGER_TITLE"]?></span>
	    <?endif?>
    </div>
    <div >
        <div>
            <ul class=" bxslider" >
				<?foreach($arResult['ITEMS'] as $key => $item):?>
				<?php
				$month = date('n', strtotime($item["ACTIVE_FROM"]));
				$year = date('Y', strtotime($item["ACTIVE_FROM"]));
				?>

                    <li class=" slide" >
                        <div class="slide-block">
                            <img class="slide-img1" src='<?=$item["DETAIL_PICTURE"]["SRC"]?>'></img>
								<br>
								
								<center>
									<?php if (LANGUAGE_ID == "en"): ?>
									<div class="rg_date"><?=$monthArrEN[$month];?> <?=$year;?></div>
									<?php else: ?>
									<div class="rg_date"><?=$monthArr[$month];?> <?=$year;?></div>
									<?php endif; ?>
									<span class="slide-title" style="text-align: center;">
										<a href="<?echo $item["DETAIL_PAGE_URL"]?>" style="text-decoration: none;"><?=$item['NAME']?></a>
									</span>
								<span style="text-align:center;padding-left:20px;"><a href="<?echo $item["DETAIL_PAGE_URL"]?>" style="text-decoration: none;"><? if(SITE_ID == 's1'):?>Подробнее...<? else:?>More...<? endif; ?></a> </span></center>
                                
								
								

                            

                        </div>
                    </li>

				<?endforeach;?>








            </ul>
            <div class="pronext"></div>
            <div class="proprev"></div>
        </div>
    </div>
    <script type="text/javascript"> $(document).ready(function () {


            var count=<?=count($arResult['ITEMS'])?>;
            count=2;
            if(count>1){
                $('.bxslider').bxSlider({

                    nextText: `<div class="r t-slds__arrow_wrapper-right" data-slide-direction="right" style="height: 550px;">
                  <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 40px; height: 40px;background-color: unset;">
                     <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 9px;">
                         <svg style="transform: rotate(180deg);"width="16" height="38" viewBox="0 0 16 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <desc>Right</desc>
						<path d="M0.758134 20.0428L13.709 37.5703C14.1333 38.1442 14.8203 38.1432 15.2439 37.5673C15.6671 36.9915 15.666 36.0586 15.2417 35.4842L3.06172 18.9999L15.2421 2.51572C15.6664 1.94127 15.6675 1.00901 15.2443 0.433075C15.032 0.144363 14.7538 7.55882e-06 14.4756 7.5345e-06C14.1981 7.51024e-06 13.921 0.143398 13.709 0.430107L0.758134 17.9572C0.553767 18.2331 0.439087 18.6087 0.439087 18.9999C0.439087 19.3912 0.554095 19.7663 0.758134 20.0428Z" fill="#0A007F"/>
						</svg>
                     </div>
                  </div>
               </div>`,
                    prevText: `<div class=" t-slds__arrow_wrapper-left" data-slide-direction="left" style="height: 550px;">
                  <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 40px; height: 40px;background-color: unset;">
                     <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 9px;">
                         <svg style="transform: rotate(180deg);"width="16" height="38" viewBox="0 0 16 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <desc>Left</desc>
						<path d="M0.758134 20.0428L13.709 37.5703C14.1333 38.1442 14.8203 38.1432 15.2439 37.5673C15.6671 36.9915 15.666 36.0586 15.2417 35.4842L3.06172 18.9999L15.2421 2.51572C15.6664 1.94127 15.6675 1.00901 15.2443 0.433075C15.032 0.144363 14.7538 7.55882e-06 14.4756 7.5345e-06C14.1981 7.51024e-06 13.921 0.143398 13.709 0.430107L0.758134 17.9572C0.553767 18.2331 0.439087 18.6087 0.439087 18.9999C0.439087 19.3912 0.554095 19.7663 0.758134 20.0428Z" fill="#0A007F"/>
						</svg>
                     </div>
                  </div>
               </div>`,
                    touchEnabled: false,
                    nextSelector: '.pronext',
                    prevSelector: '.proprev',
                    pager: false,
                    adaptiveHeight: true,
                    width: '100%'

                });

            }


            var size = 400,
                newsContent= $('.js-slice'),
                newsText = newsContent.text();

            if(newsText.length > size){
                newsContent.text(newsText.slice(0, size));
            }


        });
        // $('.t670').bind('displayChanged', function () {
        //     t_slds_updateSlider('123321244545534');
        //     t_slds_positionArrows('123321244545534');
        // });



    </script>
    <style type="text/css">
.slide-title a {
    font-size:16px;
    color: #090080!Important;

	}
	
        .hnovosti{
            color: #090080;
            font-size: 25px;
            font-family: 'ProximaNova',Arial,sans-serif;
            line-height: 1.55;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            margin-left: 0;
        }
         .pronext a,  .proprev a{
            position: absolute;
            top: 50%;
            margin-top: -30px;
            outline: 0;
            width: 32px;
            height: 32px;
        }
		.slide-date{font-family: 'ProximaNova',Arial,sans-serif;}
        .pronext .bx-next {
            right: -100px;
        }
        .proprev .bx-prev {
            left: -100px;
        }



        .slide-block .slide-img1{

            width:  auto;
            max-height: 360px;
			margin: 0 auto;
            
        }
        .slide-block{
            margin: 20px;
        }

        .slide-description{
            margin-top:15px;
            width: 100%;
            height: 100%;
            font-weight: 500;
            font-family: 'ProximaNova' !important;
            font-style: normal;
            font-size: 14px;
            color: #202020;
            line-height: 23px;
        }
        .slide-block .slider-text{
            width: 70%;
			float: right;
        }

        .bx-wrapper {
            margin-bottom: 0px;
            -moz-box-shadow: unset;
            -webkit-box-shadow: unset;
            box-shadow: unset;
            border: 0px;
            background: unset;
        }

		 @media (max-width: 500px) {
            .slide-description {
				height:100%;
				text-align: justify;
            }
        }
        @media (max-width: 1500px) {
            .pronext .bx-next {
                right: -70px;
            }
            .proprev .bx-prev {
                left: -70px;
            }
        }
        @media (max-width: 1400px) {

            .pronext .bx-next {
                right: -40px;
            }
            .proprev .bx-prev {
                left: -25px;
            }
            .slide-block {
                margin-right: 40px;
                margin-left: 40px;
            }
        }
		@media (min-width: 1400px){
			.hnovosti{
				margin-left:15px !important;
					}
								  }
        @media (max-width: 1010px) {
            .slide-description{
                margin-top:15px;
            }
            .slide-block{
                margin: 30px;
                 margin-top:15px;
                height: 290px;    
            }
            .slide-block .slider-text{
                width: 100%;
                margin-top: 10px;
                float: unset;
            }
            .slide-block .slide-img{
                width: 100%;
                float: unset;
            }
            .pronext .bx-next {
                right: 10px;
            }
            .proprev .bx-prev {
                left: 10px;
            }

        }


		@media	(max-width: 639px){
			.slide-description{
				font-size: 8px;
				font-family: 'ProximaNova',Arial,sans-serif;
				line-height: 1.25;
				font-weight: 400;
			}
            .slide-block .slide-img1{

                max-height: 150px;

            }
		}
		@media	(max-width: 480px){
			.slide-description{
    width: 100%;
    display: inline-block;
				height:auto;
				text-align:justify;
			}
		}
        #rec123321244545534 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec123321244545534 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }



@media	(min-width: 1401px){
		.bx-viewport {
			height: 460px!Important;
		}
		}
@media	(max-width: 420px) {
.bx-viewport {
			height: 305px!Important;
		}
		}		
@media	(min-width: 421px) and (max-width: 620px) {
.bx-viewport {
			height: 350px!Important;
		}
		}	
@media	(min-width: 621px) and (max-width: 750px) {
.bx-viewport {
			height: 400px!Important;
		}
		}			
	@media	(min-width: 751px) and (max-width: 1400px) {
.bx-viewport {
			height: 500px!Important;
		}
		}			
		</style>
</div>