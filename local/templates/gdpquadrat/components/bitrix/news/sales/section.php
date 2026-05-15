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
$APPLICATION->SetAdditionalCss("/local/templates/gdpquadrat/assets/css/swiper-bundle.min.css");
$APPLICATION->SetAdditionalCss("/local/templates/gdpquadrat/assets/css/slick.css");
$APPLICATION->SetAdditionalCss("/local/templates/gdpquadrat/assets/css/slick-theme.css");
$APPLICATION->SetAdditionalCss("/local/templates/gdpquadrat/assets/css/remodal-default-theme.css");
$APPLICATION->SetAdditionalCss("/local/templates/gdpquadrat/assets/css/sales.css");
$APPLICATION->AddHeadScript("/local/templates/gdpquadrat/assets/js/swiper-bundle.min.js");
$APPLICATION->AddHeadScript("/local/templates/gdpquadrat/assets/js/remodal.min.js");
$APPLICATION->AddHeadScript("/local/templates/gdpquadrat/assets/js/sales.js");

$sectionId = $arResult["VARIABLES"]["SECTION_ID"];
$arFilter = array("IBLOCK_ID" => 56, "ID" => $sectionId);
$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter, false, array("UF_NAME_EN", "UF_TITLE_1", "UF_TITLE_2", "UF_CARD_TEXT", "UF_TITLE_1_EN", "UF_TITLE_2_EN", "UF_CARD_TEXT_EN", "UF_DESCRIPTION_EN", "UF_META_TITLE_EN", "UF_META_DESCRIPTION_EN"));

while ($arSection = $rsSections->GetNext()) {
	$section = $arSection;
}


if(SITE_ID == "s1") {
	$APPLICATION->AddChainItem(mb_ucfirst($section["NAME"]));
    $APPLICATION->SetPageProperty("UF_CARD_TEXT", $section["~UF_CARD_TEXT"]);
} else {
	$APPLICATION->AddChainItem(mb_ucfirst($section["UF_NAME_EN"]));
    $APPLICATION->SetPageProperty("UF_CARD_TEXT_EN", $section["~UF_CARD_TEXT_EN"]);
}



use Bitrix\Iblock\SectionTable;
use Bitrix\Iblock\InheritedProperty\SectionValues;

$sectionCode = $arResult["VARIABLES"]["SECTION_CODE"];
$sectionId = $arResult["VARIABLES"]["SECTION_ID"];

$arFilter = [
    "IBLOCK_ID" => 56,
];

if ($sectionId) {
    $arFilter["ID"] = $sectionId;
} elseif ($sectionCode) {
    $arFilter["CODE"] = $sectionCode;
}

$sectionMeta = SectionTable::getList([
    'filter' => $arFilter,
    'select' => ['ID', 'NAME']
])->fetch();

if ($sectionMeta) {
    $iprop = new SectionValues(56, $sectionMeta['ID']);
    $ipropValues = $iprop->getValues();


    // SEO-теги из вкладки "SEO" раздела
    if (!empty($ipropValues["SECTION_META_TITLE"])) {
        $APPLICATION->SetPageProperty("title", $ipropValues["SECTION_META_TITLE"]);
    }
    if (!empty($ipropValues["SECTION_META_DESCRIPTION"])) {
        $APPLICATION->SetPageProperty("description", $ipropValues["SECTION_META_DESCRIPTION"]);
    }

}
if (SITE_ID != "s1") {
    // Английская версия: используем UF_META_TITLE_EN или UF_TITLE_1_EN как запасной вариант
    $pageTitle = !empty($section["UF_META_TITLE_EN"]) ? $section["UF_META_TITLE_EN"] : $section["UF_TITLE_1_EN"];
    $APPLICATION->SetPageProperty("title", $pageTitle);
    $pageDescription = !empty($section["UF_META_DESCRIPTION_EN"]) ? $section["UF_META_DESCRIPTION_EN"] : $section["UF_TITLE_2_EN"];
    $APPLICATION->SetPageProperty("description", $pageDescription);

}
?>

<div class="map_wrap">
	<div class="container-xxl">
		<div class="map_wrap_title row justify-content-between align-items-center gy-3">
			<div class="col-auto">
				<?if(SITE_ID == "s1"):?>
					<h1 class="h1_title"><?= $section["~UF_TITLE_1"]; ?></h1>
				<?else:?>
					<h1 class="h1_title"><?= $section["~UF_TITLE_1_EN"]; ?></h1>
				<?endif;?>
			</div>
		</div>
	</div>
	<div class="container-xxl">
		 <?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"uchastki",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_ELEMENT_CHAIN" => "Y",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"BROWSER_TITLE" => "NAME",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"COLOR_NEW" => "3E74E6",
				"COLOR_OLD" => "C0C0C0",
				"COMPONENT_TEMPLATE" => "templatemy1",
				"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
				"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
				"DETAIL_DISPLAY_TOP_PAGER" => "N",
				"DETAIL_FIELD_CODE" => array(0=>"PREVIEW_TEXT",1=>"PREVIEW_PICTURE",2=>"DETAIL_TEXT",3=>"DETAIL_PICTURE",4=>"DATE_ACTIVE_FROM",5=>"DATE_CREATE",6=>"",),
				"DETAIL_PAGER_SHOW_ALL" => "Y",
				"DETAIL_PAGER_TEMPLATE" => "",
				"DETAIL_PAGER_TITLE" => "Новости",
				"DETAIL_PROPERTY_CODE" => array(0=>"",1=>"FILES",2=>"",),
				"DETAIL_SET_CANONICAL_URL" => "N",
				"DETAIL_URL" => "",
				"DISPLAY_AS_RATING" => "rating",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "N",
				"DISPLAY_PREVIEW_TEXT" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_CODE" => "",
				"ELEMENT_ID" => "",
				"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DETAIL_TEXT",4=>"DETAIL_PICTURE",5=>"DATE_CREATE",6=>"",),
				"FILE_404" => "",
				"FONT_MAX" => "50",
				"FONT_MIN" => "10",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "51",
				"IBLOCK_TYPE" => "data_site",
				"IBLOCK_URL" => "",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
				"LIST_FIELD_CODE" => array(0=>"CODE",1=>"DETAIL_TEXT",2=>"DETAIL_PICTURE",3=>"DATE_CREATE",4=>"",),
				"LIST_PROPERTY_CODE" => array(0=>"NAZVANIESSYLKY",1=>"SSYLKA",2=>"FILES",3=>"",),
				"MEDIA_PROPERTY" => "",
				"MESSAGE_404" => "",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"NEWS_COUNT" => "100",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PERIOD_NEW_TAGS" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(0=>"",1=>"ADRESS",2=>"MAP",3=>"CONTACTS",4=>"PHONE",5=>"TIME",6=>"",),
				"SEF_FOLDER" => "/novosti/",
				"SEF_MODE" => "Y",
				"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"#ELEMENT_CODE#/",),
				"SET_BROWSER_TITLE" => "Y",
				"SET_CANONICAL_URL" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"SET_STATUS_404" => "Y",
				"SET_TITLE" => "N",
				"SHOW_404" => "Y",
				"SLIDER_PROPERTY" => "",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N",
				"TAGS_CLOUD_ELEMENTS" => "150",
				"TAGS_CLOUD_WIDTH" => "100%",
				"TEMPLATE_THEME" => "blue",
				"USE_CATEGORIES" => "N",
				"USE_FILTER" => "N",
				"USE_PERMISSIONS" => "N",
				"USE_RATING" => "N",
				"USE_REVIEW" => "N",
				"USE_RSS" => "N",
				"USE_SEARCH" => "N",
				"USE_SHARE" => "N"
			)
		);?>
	</div>

	<div class="container-xxl list_items 123">
		<?if(SITE_ID == "s1"):?>
		<h2 class="title"><?= $section["~UF_TITLE_2"]; ?></h2>
		<?else:?>
		<h2 class="title"><?= $section["~UF_TITLE_2_EN"]; ?></h2>
		<?endif;?>
		<?php
			$GLOBALS["arFilter"] = Array("SECTION_ID" => $sectionId);
			$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"",
				Array(
					"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"NEWS_COUNT" => $arParams["NEWS_COUNT"],
					"SORT_BY1" => $arParams["SORT_BY1"],
					"SORT_ORDER1" => $arParams["SORT_ORDER1"],
					"SORT_BY2" => $arParams["SORT_BY2"],
					"SORT_ORDER2" => $arParams["SORT_ORDER2"],
					"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
					"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
					"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
					"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
					"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
					"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
					"SET_TITLE" => $arParams["SET_TITLE"],
					"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
					"MESSAGE_404" => $arParams["MESSAGE_404"],
					"SET_STATUS_404" => $arParams["SET_STATUS_404"],
					"SHOW_404" => $arParams["SHOW_404"],
					"FILE_404" => $arParams["FILE_404"],
					"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
					"CACHE_TYPE" => $arParams["CACHE_TYPE"],
					"CACHE_TIME" => $arParams["CACHE_TIME"],
					"CACHE_FILTER" => $arParams["CACHE_FILTER"],
					"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
					"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
					"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
					"PAGER_TITLE" => $arParams["PAGER_TITLE"],
					"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
					"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
					"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
					"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
					"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
					"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
					"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
					"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
					"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
					"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
					"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
					"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
					"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
					"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
					"FILTER_NAME" => "arFilter",
					"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
					"CHECK_DATES" => $arParams["CHECK_DATES"],
				),
				$component
			);
		?>
	</div>

    <?php
    $currentSectionId = $arResult["VARIABLES"]["SECTION_ID"] ?? null;
    $arFilter = array("IBLOCK_ID" => 56, "ACTIVE" => "Y");
    $rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter, false, array("UF_NAME_EN", "SECTION_PAGE_URL", "NAME", "ID"));
    $sections = [];
    while ($arSection = $rsSections->GetNext()) {
        if ($arSection["NAME"] != "Общие")
            $sections[] = $arSection;
    }
    ?>
    <div class="container-xxl tags_list">
        <div class="swiper_arrow">
            <div class="swiper_arrow_btn-prev swiper-tag-prev"></div>
            <div class="swiper_arrow_btn-next swiper-tag-next"></div>
        </div>
        <div class="swiper mySwiper_tag" data-id="mySwiper_tag" data-arrow="tag">
            <div class="swiper-wrapper">
                <?php foreach ($sections as $sectionItem): ?>
                    <div class="swiper-slide">
                        <?php if ($sectionItem["ID"] == $currentSectionId): ?>
                            <span class="tag current">
							<?= SITE_ID == "s1" ? htmlspecialcharsbx($sectionItem["NAME"]) : htmlspecialcharsbx($sectionItem["~UF_NAME_EN"]) ?>
						</span>
                        <?php else: ?>
                            <a href="<?= $sectionItem["SECTION_PAGE_URL"]; ?>" class="tag">
                                <?= SITE_ID == "s1" ? htmlspecialcharsbx($sectionItem["NAME"]) : htmlspecialcharsbx($sectionItem["~UF_NAME_EN"]) ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <?if(SITE_ID == "s1"):?>
		<?php if ($section["DESCRIPTION"] != ""): ?>
		<div class="container-xxl content_text">
			<div class="content_text_inner">
				<?= $section["DESCRIPTION"]; ?>
			</div>
		</div>
		<?php endif; ?>
	<?else:?>
		<?php if ($section["UF_DESCRIPTION_EN"] != ""): ?>
		<div class="container-xxl content_text">
			<div class="content_text_inner">
				<?= $section["~UF_DESCRIPTION_EN"]; ?>
			</div>
		</div>
		<?php endif; ?>
	<?endif;?>
	
	<?php
	if(SITE_ID == "s1") {
		$path = "/include/sales_prom.php";
	} else {
		$path = "/include/sales_prom_en.php";
	}
	$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file", 
			"AREA_FILE_SUFFIX" => "inc", 
			"PATH" => $path 
		)
	);
	?>
	
	<?php
	if(SITE_ID == "s1") {
		$path = "/include/sales_form.php";
	} else {
		$path = "/include/sales_form_en.php";
	}
	$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file", 
			"AREA_FILE_SUFFIX" => "inc", 
			"PATH" => $path
		)
	);
	?>
	
	<?php
	$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file", 
			"AREA_FILE_SUFFIX" => "inc", 
			"PATH" => "/include/sales_faq.php",
			"SECTION_ID" => $GLOBALS["arFilter"]["SECTION_ID"]
		)
	);
	?>
</div>