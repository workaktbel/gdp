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
?>
<style>
.slider { /* блок */ 
  background: rgba(240,240,240,.5);
  text-align: center;
}

/* резиновый iframe: чтобы видео занимало всё доступное пространство и пропорционально уменьшалось/увеличивалось при изменении экрана монитора */ 
.slider div {
  position: relative;
  padding-top: 56.25%;
}
.slider iframe {
  position: absolute;
  top: .5%;
  left: .5%;
  width: 99%;
  height: 99%;
}

/* стиль CSS для кнопок-переключателей (я немного побаловалась), который можно изменять или вовсе не использовать */ 
.slider a {  /* вид кнопок */ 
  display: inline-block;
  padding: 0 .5em;
  text-decoration: none;
  color: blue;
}
.slider a:visited {  /* вид кнопок просмотренных видео */ 
  color: rgb(204,204,203);
}
.slider a:hover {  /* вид кнопок при наведении */ 
  transform: scale(1.5);
}
.slider a:not(:active):focus {  /* блокировка второго клика, но не третьего */ 
  pointer-events: none;
}
.slider a::before {  /* из-за Mozilla Firefox приходится использовать псевдоэлемент */ 
  content: "\25cf";
  position: absolute;
  color: rgba(0,0,1,.1);
  transition: color 0s 9999999s;  /* нужен, чтобы запомнился цвет после нажатия кнопки, подробнее про transition */ 
}
.slider a:nth-of-type(1)::before {  /* вид первой кнопки при загрузки страницы */ 
  color: #0a007f;
}
.slider span:active a::before {  /* для неактивных кнопок псевдоэлемент не нужен */ 
  color: rgba(0,0,0,0);
  transition: color 0s;
}
.slider span:active a:nth-of-type(1)::before {  /* вид неактивной первой кнопки, чтобы она выглядела как посещённая */ 
  color: #ccc;
  transition: color 0s;
}
.slider span:active a:active::before {  /* вид нажатой кнопки [в Internet Explorer отсутствует всплытие :active] */ 
  color: green;
  transition: color 0s;
}
.h_iframe1 iframe {
    width:300px;
   
}
.h_iframe1 {
    width: 300px;
   
}
</style>
<div class="t-container" style="padding-bottom:0px;
            margin: 0 auto;
position: relative">
    <div class="  hnovosti " style="font-family: 'ProximaNova',Arial; font-size: 32px; color:  #0a007f " >
        <span style="font-family: 'ProximaNova',Arial; font-size: 32px; color:  #0a007f ">ОСОБАЯ ТЕРРИТОРИЯ</span>
    </div>
<div class="slider" style="    width: 650px;
    margin: auto;">
  <div class="h_iframe"><iframe src="//www.youtube.com<?=$arResult["PROPERTIES"]["YOUTUBE"]["VALUE"]['0']?>?rel=0" width="100%" allowfullscreen frameborder="0" name="slider"></iframe></div>
  <span>
  	<?$i=-1;foreach ($arResult["PROPERTIES"]["YOUTUBE"]["VALUE"] as $val): $i++;?>
		    <a href="//www.youtube.com<?=$val?>?rel=0&autoplay=1" class="slider1" target="slider" gost_tema="<?=$arResult["PROPERTIES"]["GOST_TEMA"]["VALUE"][$i]?>">●
		</a>
		<?endforeach;?>
  </span>
</div><br/>
<div style="text-align: center; font-family: 'ProximaNova',Arial; font-size: 16px;">
  <?//=$arResult['PREVIEW_TEXT']?>
	<span style="font-weight: bold; font-family: 'ProximaNova',Arial; font-size: 16px; color: #0a007f ;"> ОСОБАЯ ТЕРРИТОРИЯ</span>
  <span style="font-size: 16px !important; font-family: 'ProximaNova',Arial; color: black"><?=$arResult["NAME"]?> 

	  <span class="gost_tema"><?=$arResult["PROPERTIES"]["GOST_TEMA"]["VALUE"][0]?></span>
<br/><br/><br/>
                <span style="text-align: left">
								<?if (!empty($arResult["PROPERTIES"]["DETAIL"]["~VALUE"]['TEXT'])):?>
									<?=$arResult["PROPERTIES"]["DETAIL"]["~VALUE"]['TEXT']?>
								<?endif;?>
                </span>
              </span>
</div>
</div>

<script>
$(document).ready(function(){

	$( ".slider1" ).click(function() {

	  var tema_gost = $(this).attr("gost_tema");
		//alert(tema_gost);
		$(".gost_tema").text(tema_gost);
	});
});
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

            width: 55%;
            max-height: 100%;
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
             .slider{

              width: 100% !important;
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
                margin: 40px;
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


    @media  (max-width: 639px){
      .slide-description{
        font-size: 8px;
        font-family: 'ProximaNova',Arial,sans-serif;
        line-height: 1.25;
        font-weight: 400;
      }
    }
    @media  (max-width: 480px){
      .slide-description{
    width: 100%;
    display: inline-block;
        height:auto;
        text-align:justify;
      }
    }
        #rec123321244545534 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec123321244545534 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }



@media  (min-width: 1401px){
    .bx-viewport {
      height: 421px!Important;
    }
    }
@media  (max-width: 420px) {
.bx-viewport {
      height: 305px!Important;
    }
    }   
@media  (min-width: 421px) and (max-width: 620px) {
.bx-viewport {
      height: 350px!Important;
    }
    } 
@media  (min-width: 621px) and (max-width: 750px) {
.bx-viewport {
      height: 400px!Important;
    }
    }     
  @media  (min-width: 751px) and (max-width: 1400px) {
.bx-viewport {
      height: 500px!Important;
    }
    }     
    </style>
