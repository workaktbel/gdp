<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$title = \Bitrix\Main\Localization\Loc::getMessage('FORM_DATA_TITLE33');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.maskedinput2.js');
if($arParams['TITLE'])
    $title = $arParams['TITLE'];
// print_r("<pre>");
// print_r($arResult);
// print_r("<pre>");
$ymGoal = $arParams['YM_GOAL'] ?: '';
?>

<div class="invest_form uch-detail--feedback__form" data-ym-goal="<?=$ymGoal?>">
	<div class="row">
	<div class="col-lg-6 col-xl-6 col-12">
		<?if(SITE_ID == "s1"):?>
			<h2 class="nms-title uch-detail--feedback__title">Оставьте заявку <br>и мы подберем для вас оптимальный участок</h2>
		<?else:?>
			<h2 class="nms-title uch-detail--feedback__title">Submit a request, <br> and we'll find the perfect lot for you</h2>
		<?endif;?>
	</div>
	<div class="col-lg-6 col-xl-6 col-12">
		<?if ($arResult["FORM_NOTE"]):?>
			<div class="hideForm">

		<?endif;?>
		<?=$arResult["FORM_HEADER"]?>

		<div class="row g-3">

			<?foreach($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):?>
                <?if($FIELD_SID === 'client_id'):?>
                    <input type="hidden"
                           name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>"
                           id="ym_client_id"
                           value="">
                    <?continue;?>
                <?endif;?>
				<?


                $erorr = "";
					if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])){
						$error = " error";
					}
				?>
				<?php
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
                <?php

                if ($FIELD_SID === 'name' || $class === 'type_textarea') {
                    $colClass = 'col-12';
                } elseif ($FIELD_SID === 'phone' || $FIELD_SID === 'email') {
                    $colClass = 'col-lg-6';
                } else {
                    $colClass = 'col-12';
                }
                ?>
                <?if($class != 'type_checkbox'):?>
                    <?if($class === 'type_textarea'):?>
                        <div class="<?=$colClass?> col-12 field <?=$class?><?=$error?>">
                                <textarea
                                        placeholder="<?=$arQuestion["CAPTION"]?>"
                                    <?=$arQuestion['STRUCTURE'][0]['FIELD_PARAM']?>
                                    id="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>"
                                        name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>"
                                        rows="4"
                                ></textarea>
                            <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
                                <small><?=TxtToHTML($arResult["FORM_ERRORS"][$FIELD_SID])?></small>
                            <?endif;?>
                        </div>
                    <?else:?>

                        <div class="<?=$colClass?> col-12 field <?=$class?><?=$error?>">
                            <input
                                    placeholder="<?=$arQuestion["CAPTION"]?>"
                                    type="<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>"
                                <?=$arQuestion['STRUCTURE'][0]['FIELD_PARAM']?>
                                    id="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>"
                                    name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>"
                                    value="">
                            <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
                                <small><?=TxtToHTML($arResult["FORM_ERRORS"][$FIELD_SID])?></small>
                            <?endif;?>
                            <?if($arResult["FORM_ERRORS"][0] && $arQuestion["CAPTION"] == 'Имя'):?>
                                <small><?=$arResult["FORM_ERRORS"][0];?></small>
                            <?endif;?>
                        </div>
                    <?endif;?>
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
		</div>
		<div class="row g-3">
			<div class="col">
				<?if(SITE_ID == "s1"):?>
                    <label for="conf-inv" class="conf">
                        <input type="checkbox" class="conf__input js-enabled-submit" id="conf-inv" checked>
                        <div class="invest_form_law">Отправляя данную форму,вы соглашаетесь на обработку <a href="/upload/Согласие_на_обработку_персональных_данных.pdf" target="_blank">персональных данных</a></div>
                    </label>
				<?else:?>
                <label for="conf-inv" class="conf">
                    <input type="checkbox" class="conf__input js-enabled-submit" id="conf-inv" checked>
				<div class="invest_form_law">By submitting this form, you agree to the <a href="/upload/Согласие_на_обработку_персональных_данных.pdf" target="_blank">processing of personal data</a></div>
                </label>
				<?endif;?>
			</div>
			<div class="col-12">
				<input class="btn btn-primary w-auto text-capitalize js-form-submit" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=$arResult['arForm']['BUTTON']?>" />
			</div>
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

	</div>
</div>
<script>
    (function () {
        var ymGoal = '<?=$ymGoal?>';
        var formTitle = '<?= CUtil::JSEscape($title) ?>';
        var pageUrl = window.location.href;
        var goalSent = false;
        var savedFormData = {};

        // Ищем контейнер КАЖДЫЙ РАЗ заново в DOM
        function getContainer() {
            return document.querySelector('.invest_form[data-ym-goal="' + ymGoal + '"]');
        }

        function getForm() {
            var container = getContainer();
            return container ? container.querySelector('form') : null;
        }

        // Собираем данные из полей формы
        function collectFormData(form) {
            var data = {};
            if (!form) return data;

            var inputs = form.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], input[type="hidden"], textarea, select');
            for (var i = 0; i < inputs.length; i++) {
                var input = inputs[i];
                var name = input.getAttribute('name') || '';
                var val = (input.value || '').trim();
                var placeholder = (input.getAttribute('placeholder') || '').trim();

                if (!name || !val) continue;
                if (/captcha|sessid|web_form_submit|WEB_FORM_ID|bitrix/i.test(name)) continue;

                data[placeholder || name] = val;
            }
            return data;
        }

        // Привязываем обработчик submit (с делегированием)
        function bindSubmit() {
            var form = getForm();
            if (!form || form.dataset.comagicBound) return;
            form.dataset.comagicBound = '1';

            form.addEventListener('submit', function () {
                savedFormData = collectFormData(form);
                goalSent = false;
                console.log('CoMagic: данные формы сохранены', savedFormData);
            });
        }

        // Наблюдатель за изменениями DOM — ловим момент когда появляется .hideForm
        var observer = new MutationObserver(function () {
            var container = getContainer();
            if (!container) return;

            var hideForm = container.querySelector('.hideForm');
            if (hideForm && !goalSent && Object.keys(savedFormData).length > 0) {
                goalSent = true;
                console.log('CoMagic: форма успешно отправлена, отправляем данные');

                // Яндекс.Метрика
                if (typeof ym !== 'undefined' && ymGoal) {
                    ym(38142565, 'reachGoal', ymGoal);
                    console.log('CoMagic: цель Метрики отправлена —', ymGoal);
                }

                // Rutarget
                var _rutarget = window._rutarget || [];
                _rutarget.push({'event': 'thankYou', 'conv_id': 'investor'});

                // UIS / CoMagic
                sendToComagic(savedFormData, formTitle, pageUrl);
            }

            // После AJAX Битрикс может перерисовать форму — нужно заново привязать submit
            bindSubmit();
        });

        // Начинаем наблюдение за всем body (Битрикс может заменить любой кусок DOM)
        observer.observe(document.body, {
            childList: true,
            subtree: true
        });

        function sendToComagic(formData, title, url) {
            var name = '';
            var phone = '';
            var email = '';
            var otherFields = [];

            for (var key in formData) {
                if (!formData.hasOwnProperty(key)) continue;
                var val = formData[key];
                var k = key.toLowerCase();

                if (!name && /имя|name|фио|фамил/i.test(k)) {
                    name = val;
                } else if (!phone && /телефон|phone|тел\b/i.test(k)) {
                    phone = val;
                } else if (!email && /email|почта|e-mail|mail/i.test(k)) {
                    email = val;
                } else {
                    otherFields.push(key + ': ' + val);
                }
            }

            var messageParts = ['Форма: ' + title, 'Страница: ' + url];
            if (otherFields.length > 0) {
                messageParts.push('---');
                messageParts = messageParts.concat(otherFields);
            }

            var requestData = {};
            if (name)  requestData.name  = name;
            if (phone) requestData.phone = phone;
            if (email) requestData.email = email;
            requestData.message = messageParts.join('\n');

            console.log('CoMagic: отправляем в UIS', requestData);

            var attempts = 0;
            (function trySend() {
                attempts++;
                if (typeof Comagic !== 'undefined' && typeof Comagic.addOfflineRequest === 'function') {
                    Comagic.addOfflineRequest(requestData, function (resp) {
                        console.log('UIS/CoMagic: ответ', resp);
                    });
                } else if (attempts < 50) {
                    setTimeout(trySend, 100);
                } else {
                    console.warn('UIS/CoMagic: скрипт не загрузился за 5 секунд');
                }
            })();
        }

        // Первоначальная привязка
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', bindSubmit);
        } else {
            bindSubmit();
        }
    })();
    // Яндекс.Метрика — заполняем ClientID
    (function fillClientID() {
        var attempts = 0;
        (function tryFill() {
            attempts++;
            var input = document.getElementById('ym_client_id');
            if (!input && attempts < 50) {
                setTimeout(tryFill, 200);
                return;
            }
            if (typeof ym !== 'undefined' && input) {
                ym(38142565, 'getClientID', function(clientID) {
                    input.value = clientID;
                    console.log('YM ClientID заполнен:', clientID);
                });
            } else if (attempts < 50) {
                setTimeout(tryFill, 200);
            }
        })();
    })();
</script>