<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
// prr($arResult);
$count = count($arResult["ITEMS"]);
$i = 1;
$ufCardText = $APPLICATION->GetPageProperty("UF_CARD_TEXT");
$ufCardTextEn = $APPLICATION->GetPageProperty("UF_CARD_TEXT_EN");
?>

<?php if ($arResult["ITEMS"]): ?>
<div class="list_items_inner">
	<?php foreach($arResult["ITEMS"] as $item): ?>
		<div class="item_block">
			<div class="left slider_block_wr">
<!--				<div class="swiper_arrow">-->
<!--					<div class="swiper_arrow_btn-prev swiper-item--><?php //=$i;?><!---prev"></div>-->
<!--					<div class="swiper_arrow_btn-next swiper-item--><?php //=$i;?><!---next"></div>-->
<!--				</div>-->
				<div class="swiper mySwiper_item<?=$i;?>" data-id="mySwiper_item<?=$i;?>" data-arrow="item<?=$i;?>">
					<div class="swiper-wrapper">
						<?php foreach($item["PROPERTIES"]["FILES"]["VALUE"] as $file): ?>
							<div class="swiper-slide">
								<img src="<?= CFile::GetPath($file); ?>" alt="">
							</div>
						<?php endforeach; ?>
<!--                        --><?php //if (!empty($item["PREVIEW_PICTURE"])): ?>
<!--                            <img src="--><?php //= $item["PREVIEW_PICTURE"]["SRC"]; ?><!--" alt="--><?php //= $item["NAME"]; ?><!--">-->
<!--                        --><?php //endif; ?>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="item_name">
					<div class="name">
						<?if(SITE_ID == "s1"):?>
							<?= $item["NAME"]; ?>
						<?else:?>
							<?= $item["PROPERTIES"]["TITLE_EN"]["VALUE"]; ?>
						<?endif;?>
					</div>
					<div class="square">
						<?= $item["PROPERTIES"]["SQUARE"]["VALUE"]; ?>
						<?if(SITE_ID == "s1"):?>
							&nbspга
						<?else:?>
							&nbspha
						<?endif;?>
					</div>
				</div>

                <div class="text">

                    <?if(SITE_ID == "s1"):?>
                        <?= htmlspecialcharsbx($ufCardText) ?>
                        Продажа земельного участка общей площадью <?= $item["PROPERTIES"]["SQUARE"]["VALUE"]; ?> га, с удобным подъездом, круглосуточное видеонаблюдение
                    <?else:?>
                        <?= htmlspecialcharsbx($ufCardTextEn) ?>
                        Sale of a land plot with a total area of <?= $item["PROPERTIES"]["SQUARE"]["VALUE"]; ?> ha, with convenient access, 24/7 video surveillance
                    <?endif;?>
                </div>
				<div class="square">
					<?= $item["PROPERTIES"]["SQUARE"]["VALUE"]; ?>
					<?if(SITE_ID == "s1"):?>
						&nbspга
					<?else:?>
						&nbspha
					<?endif;?>
				</div>
				<a href="<?= htmlspecialcharsbx($item["DETAIL_PAGE_URL"]); ?>" class="btn " data-name="<?= $item["NAME"]; ?>">
					<?if(SITE_ID == "s1"):?>
						Узнать подробнее
					<?else:?>
						Learn more
					<?endif;?>
				</a>
			</div>
		</div>
		<?php
			$i++;
			if ($i <= $count) echo "<div class='hr'></div>";
		?>
	<?php endforeach; ?>
</div>
    <?php
// Показываем кнопку если есть ещё страницы
    if (!empty($arResult["NAV_RESULT"]) && $arResult["NAV_RESULT"]->NavPageNomer < $arResult["NAV_RESULT"]->NavPageCount): ?>
        <div class="btn_show_more"
             data-section-id="<?= (int)($GLOBALS["arFilter"]["SECTION_ID"] ?? 0) ?>"
             data-next-page="<?= (int)($arResult["NAV_RESULT"]->NavPageNomer + 1) ?>"
             data-site-id="<?= SITE_ID ?>"
             data-card-text="<?= htmlspecialcharsbx($APPLICATION->GetPageProperty('UF_CARD_TEXT')) ?>"
             data-card-text-en="<?= htmlspecialcharsbx($APPLICATION->GetPageProperty('UF_CARD_TEXT_EN')) ?>">
            <?php if (SITE_ID == "s1"): ?>Показать еще<?php else: ?>Show more<?php endif; ?>
        </div>
    <?php endif; ?>
<?php endif;?>