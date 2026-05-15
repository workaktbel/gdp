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

<div class="row">
	<?if(SITE_ID == "s1"):?>
		<div class="col"><h1 class="main_info_title">Список резидентов ОЭЗ</h1></div>
	<?else:?>
		<div class="col"><h1 class="main_info_title">Our residents</h1></div>
	<?endif;?>
</div>
<div class="row residents_list g-4">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		if (!empty($arItem["PROPERTIES"]["SITE_ID"]["VALUE_XML_ID"]) && !in_array(SITE_ID, $arItem["PROPERTIES"]["SITE_ID"]["VALUE_XML_ID"])) continue;
		$text = "";
		$name = $arItem["NAME"];
		if (SITE_ID == "s1") {
			$text = $arItem["PREVIEW_TEXT"];
		}
		if (SITE_ID == "s2" && !empty($arItem["PROPERTIES"]["PREVIEW_TEXT_EN"]["~VALUE"])) {
			$text = $arItem["PROPERTIES"]["PREVIEW_TEXT_EN"]["~VALUE"]["TEXT"];
		}
		if (SITE_ID == "s2" && !empty($arItem["PROPERTIES"]["NAME_EN"]["VALUE"])) {
			$name = $arItem["PROPERTIES"]["NAME_EN"]["VALUE"];
		}
		$img = $arItem["PREVIEW_PICTURE"]["SRC"];
		if (!empty($arItem["PROPERTIES"]["LOGO"]["VALUE"])) $img = CFile::GetPath($arItem["PROPERTIES"]["LOGO"]["VALUE"]);
		?>
		<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-12 position-relative resident_item_wrap">
			<div class="resident_item" data-url="<?=$arItem["DETAIL_PAGE_URL"];?>">
				<div class="resident_item_img"><a href="<?=$arItem["DETAIL_PAGE_URL"];?>"><img src="<?=$img;?>"></a></div>
				<div class="resident_item_title"><?=$name;?></div>
			</div>
			<div class="resident_item_hover" data-url="<?=$arItem["DETAIL_PAGE_URL"];?>">
				<div class="resident_item_hover_desc"><?=$text;?></div>
				<div class="resident_item_hover_contacts">
					<?if($arItem["PROPERTIES"]["CONTACT_PHONE"]["VALUE"]):?>
						<div class="resident_item_hover_contact">
							<div class="resident_item_hover_contact_icon">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17.5081 3.26074C17.2848 4.64153 16.7916 5.96491 16.0566 7.15541C13.9697 11.0316 10.761 14.1889 6.84953 16.2148C6.12602 16.5847 5.36622 16.8791 4.58221 17.0932C3.77986 17.4176 2.88272 17.4179 2.08015 17.094C1.27758 16.7702 0.632358 16.1476 0.280653 15.3575C0.144072 15.1615 0.0535325 14.9372 0.015779 14.7014C-0.15374 13.135 1.07528 12.5847 2.13477 11.8544C2.47925 11.5443 2.92654 11.3727 3.39028 11.3727C3.85401 11.3727 4.3013 11.5443 4.64578 11.8544C6.24562 13.1138 6.56347 13.1773 8.06795 11.8015C9.57752 10.4302 10.9934 8.95934 12.3059 7.39883C13.1853 6.3405 13.0582 5.88541 12.1046 4.87999C11.759 4.57259 11.5349 4.15185 11.4727 3.69378C11.4105 3.23572 11.5144 2.77055 11.7656 2.38232C11.9406 2.05565 12.1426 1.74413 12.3695 1.45098C13.0264 0.614898 13.6939 -0.284689 14.9547 0.0857286C16.2155 0.456146 17.6352 2.02248 17.5081 3.26074Z" fill="black"/>
								</svg>
							</div>
							<?if(SITE_ID == "s1"):?>
								<div class="resident_item_hover_contact_title">Телефон</div>
							<?else:?>
								<div class="resident_item_hover_contact_title">Phone</div>
							<?endif;?>
							<div class="resident_item_hover_contact_value"><a rel="noindex, nofollow" target="_blank" href="tel:<?=$arItem["PROPERTIES"]["CONTACT_PHONE"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["CONTACT_PHONE"]["VALUE"];?></a></div>
						</div>
					<?endif;?>
					<?if($arItem["PROPERTIES"]["CONTACT_SITE"]["VALUE"]):?>
						<div class="resident_item_hover_contact">
							<div class="resident_item_hover_contact_icon">
								<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.05217 0H7.96742C5.84679 0.0112081 3.81715 0.862006 2.32358 2.36583C0.830012 3.86965 -0.00558216 5.90375 2.80689e-05 8.02208C0.0056383 10.1404 0.851996 12.1701 2.35351 13.666C3.85502 15.1619 5.88914 16.0019 8.0098 16.0019C10.1305 16.0019 12.1646 15.1619 13.6661 13.666C15.1676 12.1701 16.014 10.1404 16.0196 8.02208C16.0252 5.90375 15.1896 3.86965 13.696 2.36583C12.2024 0.862006 10.1728 0.0112081 8.05217 0ZM8.6243 11.9804C9.06916 12.0278 9.51122 12.0984 9.94867 12.192C9.62505 12.9043 9.17653 13.553 8.6243 14.1076V11.9804ZM8.6243 10.6469V8.74185H10.7433C10.6983 9.50061 10.5741 10.2526 10.3725 10.9855C9.79513 10.8573 9.21166 10.7584 8.6243 10.6892V10.6469ZM8.6243 7.3766V5.41868C9.25091 5.38232 9.8741 5.30097 10.489 5.17526C10.6831 5.90803 10.7898 6.66115 10.8069 7.41893L8.6243 7.3766ZM5.01142 7.40835C4.99734 6.65667 5.07922 5.90626 5.2551 5.17526C5.92732 5.32492 6.61172 5.41347 7.29993 5.43985V7.40835H5.01142ZM7.29993 4.11693C6.75504 4.09369 6.21293 4.02645 5.6789 3.91584C6.05274 3.11229 6.60754 2.40597 7.29993 1.85209V4.11693ZM8.6243 4.11693V2.00025C9.19925 2.5448 9.66336 3.19527 9.99105 3.91584C9.53929 4.0042 9.08302 4.06779 8.6243 4.10634V4.11693ZM10.2877 1.80975C11.068 2.10039 11.7868 2.53477 12.4067 3.09034C12.0644 3.26915 11.7104 3.42472 11.3472 3.55601C11.0699 2.92795 10.7139 2.33762 10.2877 1.79917V1.80975ZM4.40751 3.54543C4.08908 3.42174 3.77781 3.28041 3.47515 3.12209C4.04727 2.59051 4.71145 2.16734 5.43522 1.87326C5.01598 2.37598 4.66998 2.93537 4.40751 3.53484V3.54543ZM3.98371 4.80485C3.76847 5.65548 3.66869 6.53116 3.68705 7.40835H1.30318C1.41687 6.21229 1.8566 5.07024 2.57458 4.10634C3.02432 4.37438 3.49567 4.60449 3.98371 4.79426V4.80485ZM3.76121 8.75244C3.84345 9.54587 3.9887 10.3315 4.19561 11.1019C3.5616 11.2795 2.9389 11.4951 2.33089 11.7475C1.74095 10.8492 1.37743 9.82158 1.2714 8.75244H3.76121ZM5.09618 8.75244H7.29993V10.5834C6.69619 10.5953 6.09416 10.6519 5.49879 10.7527C5.30426 10.0959 5.16951 9.42287 5.09618 8.74185V8.75244ZM7.29993 11.9274V14.097C6.72496 13.478 6.26565 12.7612 5.94378 11.9804C6.39477 11.9423 6.84765 11.9317 7.29993 11.9486V11.9274ZM11.2624 12.5519C11.7498 12.7 12.1736 12.8482 12.5232 12.9752C11.841 13.5938 11.0411 14.0689 10.1712 14.3722C10.6102 13.8214 10.9769 13.2167 11.2624 12.573V12.5519ZM11.7074 11.303C11.9386 10.4594 12.0807 9.5939 12.1312 8.72069H14.6211C14.5122 9.86149 14.1108 10.955 13.4556 11.8957C13.0636 11.7793 12.4491 11.557 11.7074 11.3242V11.303ZM12.11 7.40835C12.0864 6.52225 11.962 5.64171 11.7392 4.78368C12.2822 4.59502 12.8071 4.35769 13.3073 4.07459C14.0448 5.04342 14.4996 6.19727 14.6211 7.40835H12.11ZM3.14671 12.8059C3.52812 12.6577 4.01549 12.4884 4.58762 12.3296C4.88862 13.0862 5.2914 13.7983 5.78485 14.4463C4.80702 14.1067 3.91936 13.5494 3.18909 12.8165L3.14671 12.8059Z" fill="black"/>
								</svg>
							</div>
							<?if(SITE_ID == "s1"):?>
								<div class="resident_item_hover_contact_title">Сайт компании</div>
							<?else:?>
								<div class="resident_item_hover_contact_title">Company site</div>
							<?endif;?>
							<div class="resident_item_hover_contact_value"><a rel="noopener noindex nofollow" target="_blank" href="<?=$arItem["PROPERTIES"]["CONTACT_SITE"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["CONTACT_SITE"]["VALUE"];?></a></div>
						</div>
					<?endif;?>
					
					<?if(SITE_ID == "s1"):?>
						<a class="resident_item_hover_more" href="<?=$arItem["DETAIL_PAGE_URL"];?>">Подробнее</a>
					<?else:?>
						<a class="resident_item_hover_more" href="<?=$arItem["DETAIL_PAGE_URL"];?>">More</a>
					<?endif;?>
				</div>
			</div>
		</div>
	<?endforeach;?>
</div>