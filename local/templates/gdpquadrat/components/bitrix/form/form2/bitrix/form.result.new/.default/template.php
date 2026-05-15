<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$title = \Bitrix\Main\Localization\Loc::getMessage('FORM_DATA_TITLE33');
if($arParams['TITLE'])
    $title = $arParams['TITLE'];
?>

<div class="my-form" id="my-form">
	<div class="my-form-title">
		<? if (preg_match_all("#\/digest\/[0-9a-zA-Z-_]+\/#",
			$APPLICATION->GetCurPage(false), $matches) == 1) { ?>
			<span>Остались вопросы?</span>
		<? } else { ?>
			<span><?=\Bitrix\Main\Localization\Loc::getMessage('FORM_DATA_TITLE33');?></span><br><br>
		<? } ?>
		<span class='title-textnew'><?=\Bitrix\Main\Localization\Loc::getMessage('FORM_DATA_TITLE332');?></span>
	</div>
<?if ($arResult["FORM_NOTE"]):?>
	<div class="hideForm">
	<script type="text/javascript" >
		var _rutarget = window._rutarget || [];
		_rutarget.push({'event': 'thankYou', 'conv_id': 'investor'});
	</script>
<?endif;?>
	<?=$arResult["FORM_HEADER"]?>

	<? if($arResult["isFormTitle"]): ?>
		<div class="title"><?=$arResult["FORM_TITLE"]?></div>
	<?endif;?>
	<?foreach($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):?>
		<?
			$erorr = "";
			if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])){
				$error = " error";
			}
		?>
		<? 
			$type = $arQuestion['STRUCTURE'][0]['FIELD_TYPE'];
			$class = 'type_text';
			switch ($type) {
				case 'dropdown':
					$class = "type_select";
					break;
				case 'textarea':
					$class = "type_textarea";
					break;
				case 'checkbox':
					$class = 'type_checkbox';
					break;
			}
		?> 
		<?if($class != 'type_checkbox'):?>
			<div class="field <?=$class?><?=$error?>">
				<?=$arQuestion["HTML_CODE"]?>
				<?=$arResult["FORM_ERRORS"]?>
				<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
					<small><?=TxtToHTML($arResult["FORM_ERRORS"][$FIELD_SID])?></small>
				<?endif;?>
			</div>
		<?else:?>
			<div class="field <?=$class?> <?=$error?>">
				<label for="<?=$arQuestion['STRUCTURE'][0]['ID']?>">
					<input type="checkbox"  id="<?=$arQuestion['STRUCTURE'][0]['ID']?>" name="form_checkbox_<?=$FIELD_SID?>[]" value="<?=$arQuestion['STRUCTURE'][0]['ID']?>">
					<span></span>
					<?=$arQuestion["CAPTION"]?>
					<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
						<small><?=$arResult["FORM_ERRORS"][$FIELD_SID]?></small>
					<?endif;?>
				</label>
			</div>
		<?endif;?>
	<?endforeach;?>
	<div class="tpl-field btn_form">
		<input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=$arResult['arForm']['BUTTON']?>" />
	</div>
        <?$captcha = str_replace('<input','<input  data-captcha ',
            $arResult["QUESTIONS"]['captcha_token']['HTML_CODE'])?>
        <?=$captcha?>
<?=$arResult["FORM_FOOTER"]?>
<?if ($arResult["FORM_NOTE"]):?>
</div>
	<script>
		jQuery(function () {
			setTimeout(function(){
				$('.web-form-succes').hide();
			}, 3000);
		});
	</script>
<?endif;?>
<div class="web-form-succes">
	<div>
	<?=\Bitrix\Main\Localization\Loc::getMessage('FORM_DATA_SAVED3');?>
	</div>
</div>
</div>
<script>
    $(document).ready(function () {
        //(new YandexInvisibleCaptcha(document.querySelector('[name="<?//=$arResult['arForm']['SID']?>//"]'))).executeCaptcha()
    })
</script>