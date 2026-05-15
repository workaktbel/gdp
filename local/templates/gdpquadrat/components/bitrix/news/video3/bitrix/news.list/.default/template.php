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
?>

<div class="container-xxl video-list">
	<h1 class="main_info_title"><?=$arParams["PAGER_TITLE"]?></h1>
	<div class="row">
		<div class="col">
			<div class="video_text">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => SITE_DIR."video/text.php"
				)
			);?>
			</div>
		</div>
	</div>
	<div class="row g-5">
		<?foreach($arResult['ITEMS'] as $key => $item):?>
			<div class="col-lg-4 col-12">
				<div class="video_block">
					<a href="<?= $item["DETAIL_PAGE_URL"]?>">
						<img src='<?=$item["PREVIEW_PICTURE"]["SRC"]?>'>
						<div class="video_block_guest"><?=$item['PREVIEW_TEXT']?></div>
						<div class="video_block_theme"><?=$item['DETAIL_TEXT']?></div>
					</a>
				</div>
			</div>
		<?endforeach;?>
	</div>
</div>