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
$month = date('n', strtotime($arResult["ACTIVE_FROM"]));
$year = date('Y', strtotime($arResult["ACTIVE_FROM"]));

if (empty($arResult["IPROPERTY_VALUES"]["ELEMENT_META_TITLE"])) {
	$APPLICATION->SetPageProperty("title", $arResult["NAME"]);
}
?>
<div class="news-detail">
	<div class="row">
		<div class="col-xl-12">
			<div class="news-detail_title">
				<h1><?= $arResult["NAME"];?></h1>
			</div>
		</div>
		<div class="col-xl-12">
			<div class="item-detail_info_date">
				<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M3.09265 9.89957H20.9166" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M16.4421 13.8048H16.4514" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M12.0046 13.8048H12.0139" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.55793 13.8048H7.5672" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M16.4421 17.6916H16.4514" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M12.0046 17.6916H12.0139" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.55793 17.6916H7.5672" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M16.0438 2.49512V5.7859" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M7.96552 2.49512V5.7859" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 4.07422H7.77096C4.83427 4.07422 3 5.71015 3 8.71724V17.7669C3 20.8213 4.83427 22.495 7.77096 22.495H16.229C19.175 22.495 21 20.8496 21 17.8425V8.71724C21.0092 5.71015 19.1842 4.07422 16.2383 4.07422Z" stroke="#717171" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				<?= date('d', strtotime($arResult["ACTIVE_FROM"])); ?>
				<?php if (LANGUAGE_ID == "en"): ?>
				<?=$monthArrEN[$month];?>&nbsp;<?=$year;?>
				<?php else: ?>
				<?=$monthArr[$month];?>&nbsp;<?=$year;?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="detail-text-wrap">
		<div class="item-img">
			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
		</div>
		<div class="detail-text">
			<?echo $arResult["DETAIL_TEXT"];?>
		</div>
	</div>
	
</div>
<?php if ($arResult['ID'] == 686): ?>
    <p><b>The terms and conditions that are currently in effect:</b></p>
    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "investoru_benefits",
        Array(
            "IBLOCK_ID" => 39,
            "NEWS_COUNT" => 4,
            "CACHE_TYPE" => "N",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "PROPERTY_CODE" => array(
                "LIST",
                "LIST2"
            ),
            "SORT_BY1" => "ID",
            "SORT_ORDER1" => "ASC",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N"
        )
    );
    ?>
<p>*Информация основана на Федеральном законе № 960752-8, принятом Госдумой РФ в третьем чтении 27 января 2026 год.</p>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formTitle = document.querySelector('.invest_form_title');
            if (formTitle) {
                formTitle.textContent = 'Обсудить проект';
            }
        });
    </script>
    <div id="invest_form" class="row wow slideInRight" data-wow-delay=".2s">
        <?$APPLICATION->IncludeComponent(
            "bitrix:form",
            "form_invest",
            Array(
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "A",
                "CHAIN_ITEM_LINK" => "",
                "CHAIN_ITEM_TEXT" => "",
                "COMPONENT_TEMPLATE" => "form",
                "EDIT_ADDITIONAL" => "N",
                "EDIT_STATUS" => "Y",
                "IGNORE_CUSTOM_TEMPLATE" => "N",
                "NOT_SHOW_FILTER" => array(0=>"",1=>"",),
                "NOT_SHOW_TABLE" => array(0=>"",1=>"",),
                "RESULT_ID" => "",
                "SEF_MODE" => "N",
                "SHOW_ADDITIONAL" => "N",
                "SHOW_ANSWER_VALUE" => "N",
                "SHOW_EDIT_PAGE" => "N",
                "SHOW_LIST_PAGE" => "N",
                "SHOW_STATUS" => "Y",
                "SHOW_VIEW_PAGE" => "N",
                "START_PAGE" => "new",
                "SUCCESS_URL" => "",
                "USE_EXTENDED_ERRORS" => "Y",
                "VARIABLE_ALIASES" => array("action"=>"action",),
                "WEB_FORM_ID" => "1",
                "YM_GOAL" => "lastchance_submit"
            )
        );?>
    </div>
    <div class="mb-5"></div>
    <style>
        .benefits {
            margin: 50px 0 20px;
        }
        .benefits_info_desc,
        .benefits_info_title {
            display: none;
        }
    </style>
<?php elseif ($arResult['ID'] == 687): ?>
    <p><b>The terms and conditions that are currently in effect:</b></p>
    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "investoru_benefits",
        Array(
            "IBLOCK_ID" => 40,
            "NEWS_COUNT" => 4,
            "CACHE_TYPE" => "N",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "PROPERTY_CODE" => array(
                "LIST",
                "LIST2"
            ),
            "SORT_BY1" => "ID",
            "SORT_ORDER1" => "ASC",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N"
        )
    );
    ?>
<p>Information based on Federal Law No. 960752-8, passed by the State Duma of the Russian Federation in the third reading on January 27, 2026.
</p>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formTitle = document.querySelector('.invest_form_title');
            if (formTitle) {
                formTitle.textContent = 'Discuss the project';
            }
        });
    </script>
    <div id="invest_form" class="row wow slideInRight" data-wow-delay=".2s">
        <?$APPLICATION->IncludeComponent(
            "bitrix:form",
            "form_invest",
            Array(
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "A",
                "CHAIN_ITEM_LINK" => "",
                "CHAIN_ITEM_TEXT" => "",
                "COMPONENT_TEMPLATE" => "form",
                "EDIT_ADDITIONAL" => "N",
                "EDIT_STATUS" => "Y",
                "IGNORE_CUSTOM_TEMPLATE" => "N",
                "NOT_SHOW_FILTER" => array(0=>"",1=>"",),
                "NOT_SHOW_TABLE" => array(0=>"",1=>"",),
                "RESULT_ID" => "",
                "SEF_MODE" => "N",
                "SHOW_ADDITIONAL" => "N",
                "SHOW_ANSWER_VALUE" => "N",
                "SHOW_EDIT_PAGE" => "N",
                "SHOW_LIST_PAGE" => "N",
                "SHOW_STATUS" => "Y",
                "SHOW_VIEW_PAGE" => "N",
                "START_PAGE" => "new",
                "SUCCESS_URL" => "",
                "USE_EXTENDED_ERRORS" => "Y",
                "VARIABLE_ALIASES" => array("action"=>"action",),
                "WEB_FORM_ID" => "2",
                "YM_GOAL" => "lastchance_submit"
            )
        );?>
    </div>
    <div class="mb-5"></div>
    <style>
        .benefits {
            margin: 50px 0 20px;
        }
        .benefits_info_desc,
        .benefits_info_title {
            display: none;
        }
    </style>
<?php endif; ?>

<div class="clear"></div>
<script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-curtain data-shape="round" data-limit="10" data-copy="extraItem" data-services="vkontakte,odnoklassniki,telegram,whatsapp"></div>