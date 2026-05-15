<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
// prr($arResult);
?>
<div class="main_page_banners">
	<div id="mainPageBannersCarousel" class="carousel slide carousel-fade h-100" data-ride="carousel">
		<div class="carousel-inner h-100">
<!--			--><?// foreach ($arResult["ITEMS"] as $key => $item): ?>
<!--			--><?//
//			$active = "";
//			if ($key == 0) $active = "active";
//			$renderImage = CFile::ResizeImageGet(
//				$item["DETAIL_PICTURE"],
//				Array(
//				   'width' => 1000,
//				   'height' => 1000
//				),
//				BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
//				false
//			);
//			?>
<!--				<div class="carousel-item h-100 --><?php //= $active; ?><!--">-->
<!--					<img src="--><?php //=$renderImage["src"]?><!--" class="d-block w-100 h-100">-->
<!--				</div>-->
<!--			--><?// endforeach; ?>
            <div class="carousel-item h-100 active">
                <picture>
                    <source srcset="/local/templates/gdpquadrat/images/main-banner-img-mobile-ver.jpg"
                            media="(max-width: 576px)">
                    <img src="/local/templates/gdpquadrat/images/main-banner-img.jpg" class="d-block w-100 h-100">
                </picture>
            </div>


		</div>
	</div>
</div>