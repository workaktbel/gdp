<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Предложения для покупки коммерческой земли и участков для бизнеса. Покупка коммерческих участков и земли в Московской области на территории ОЭЗ Ступино Квадрат.");
$APPLICATION->SetPageProperty("title", "Коммерческие земельные участки – купить землю коммерческого назначения в Москве, МО - ОЭЗ Ступино Квадрат");
//$APPLICATION->SetTitle("Новости ОЭЗ Квадрат");

global $USER;
// if ($USER->isAdmin()):
?><?  $APPLICATION->IncludeComponent(
	"bitrix:news", 
	"sales", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "NAME",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "DETAIL_PICTURE",
			5 => "DATE_CREATE",
			6 => "",
		),
		"IBLOCK_ID" => "56",
		"IBLOCK_TYPE" => "data_site",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => "sales_more",
		"PAGER_TITLE" => "Участки на продажу",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "SQUARE",
			2 => "DESC_RU",
			3 => "TITLE_EN",
			4 => "DESC_EN",
			5 => "FILES",
			6 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "sales",
		"NEWS_COUNT" => "5",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_REVIEW" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/uchastki/",
		"CACHE_FILTER" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "CODE",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "DATE_CREATE",
			4 => "PREVIEW_PICTURE",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "SQUARE",
			1 => "DESC_RU",
			2 => "TITLE_EN",
			3 => "DESC_EN",
			4 => "FILES",
			5 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "DATE_ACTIVE_FROM",
			5 => "DATE_CREATE",
			6 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "TITLE_EN",
			1 => "FILES",
			2 => "DETAIL_INTRO_RU",
			3 => "DETAIL_INTRO_EN",
			4 => "DETAIL_DESC_RU",
			5 => "DETAIL_DESC_EN",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Участки на продажу",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"PERIOD_NEW_TAGS" => "",
		"DISPLAY_AS_RATING" => "rating",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"TAGS_CLOUD_WIDTH" => "100%",
		"FILE_404" => "",
		"FILTER_NAME" => "arFilter",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);

?>

<?
// endif;
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
  "name": "ОЭЗ «Ступино Квадрат»",
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "RU",
    "addressRegion": "Московская область",
    "addressLocality": "Ступино",
    "streetAddress": "Промышленная зона, ОЭЗ «Ступино Квадрат»"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "55.00470",
    "longitude": "38.06344"
  }
}
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>