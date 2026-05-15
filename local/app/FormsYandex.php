<?php

namespace App;

use Bitrix\Main\Application;
use CFormAnswer;
use CFormField;
use CModule;

CModule::IncludeModule("form");

/****
 * Определить константы
 * ключи Recaptcha
 * const RECAPTCHA_KEYS_YANDEX = [
 * 'RECAPTCHA_HTML_KEY'     => '6Lds1FMpAAAAAGmnbNLNMIQin_IfnxtWNXY5Fvi_',
 * 'RECAPTCHA_SECRET_KEY'   => '6Lds1FMpAAAAAESGHSnjbw9L4ppjOmCJygaBTYPE',
 * ];
 *
 * типы событий для форм
 * const FORMS_TEMPLATES = [
 * 'FORM_FILLING_SIMPLE_FORM_5',
 * 'FORM_FILLING_SIMPLE_FORM_4',
 * ];
 *
 * Добавить в инпуты для токена атрибут "data-captcha"
 * переопределить функцию после валидации колбек
 *
 * backendFunc = function (form) {
        console.log(form)
    window.captchaObj.execute(form);
    }
 *
 * Навесить события
 * $eventManager->addEventHandler("form", "onBeforeResultAdd", Array(FormsYandex::class, "validation"));
 * $eventManager->addEventHandler("main", "OnBeforeEventAdd", Array(FormsYandex::class, "OnBeforeEventAddHandler"));
 * $eventManager->addEventHandler("main", "OnEpilog", Array(FormsYandex::class, "addScriptsFooter"));
 * $eventManager->addEventHandler("main", "OnProlog", Array(FormsYandex::class, "addScriptsHeader"));
 *
 *
 **/
class FormsYandex
{

    public static string $recaptchaKey = RECAPTCHA_KEYS_YANDEX['RECAPTCHA_SECRET_KEY'];

    public static string $captcha_token = '';

    const BOT_SCORE = 0.5;

    const DEBUG = true;
    /**
     * Типы ошибок
     */
    const TYPE_ERRORS = [
        'invalid-input-response'                => 'Неверный токен или просрочен, повторите попытку',
        'Error: Empty captcha token from form!' => 'Ошибка: пустой токен капчи из формы!',
    ];

    /**
     * Символьные коды полей рекапчи в формах
     */
    const CAPTCHA_TOKEN_CODE = 'captcha_token';
    const CAPTCHA_SCORE_CODE = 'captcha_score';

    /**
     * Ключи инпутов рекапчи  в форме
     */
    public static $recaptchaInputKeys = [
        'captcha_token' => 'form_hidden_',
        'captcha_score' => 'form_hidden_'
    ];

    /**
     * Ошибки
     */
    public static $errors;

    /**
     * Custom validate
     */
    public static function validateName($WEB_FORM_ID, &$arFields, &$arrVALUES)
    {
       switch ($WEB_FORM_ID) {
           case 1:
               $name = $arrVALUES['form_text_1'];
               $pattern = '/^[А-Яа-яЁё\s]{1,50}$/u';

               if (!preg_match($pattern, $name)&& !empty($name)) {
                    $GLOBALS['APPLICATION']->ThrowException('Только русские символы.');
               } else {
                  echo true;
               }
               break;

       }
    }

    /**
     * Основной метод валидации, точка входа для события
     */
    public static function validation($WEB_FORM_ID, &$arFields, &$arrVALUES)
    {
        self::setInputKey($WEB_FORM_ID);
        \App\Logger::Log('webformcc', $arrVALUES[self::$recaptchaInputKeys[self::CAPTCHA_TOKEN_CODE]]);
        $recaptchaResult = self::recaptchaVerify(
            $arrVALUES[self::$recaptchaInputKeys[self::CAPTCHA_TOKEN_CODE]] ?? $arrVALUES['smart-token']
        );

        self::checkErrors();

        $arrVALUES[self::$recaptchaInputKeys[self::CAPTCHA_SCORE_CODE]] = $recaptchaResult['status'];

        self::logRecaptcha($recaptchaResult, $arFields, $arrVALUES);
    }

    /**
     * Установка ключей для инпутов
     */
    public static function setInputKey($WEB_FORM_ID)
    {
        foreach (self::$recaptchaInputKeys as $code => &$value) {
            $value .= self::getFieldDataAnswer(self::getFieldData($code, $WEB_FORM_ID)['ID'])['ID'];
        }
        return self::$recaptchaInputKeys;
    }

    /**
     * Логирование
     */
    public static function logRecaptcha($recaptchaResult, $arFields, $arrVALUES)
    {
        if (!self::DEBUG) return;
        \App\Logger::Log('webform', date('d.m.Y G:i:s'));
        \App\Logger::Log('webform', [
            'Ответ сервера Recaptcha' => $recaptchaResult,
            'Значения'                => $arrVALUES,
            'IP'                      => $_SERVER['REMOTE_ADDR'],
            'Браузер '                => $_SERVER['HTTP_USER_AGENT'],
            'Ошибки'                  => self::$errors,
        ]);
    }

    /**
     * Проверка на ошибки
     */
    public static function checkErrors()
    {
        global $APPLICATION;

        if (self::$errors) {
//            self::$errors = self::TYPE_ERRORS[$recaptchaResult['error-codes'][0]] ?? $recaptchaResult['error-codes'][0];
            $APPLICATION->ThrowException(self::$errors);
        }

    }

    /**
     * Получение вопроса
     */
    public static function getFieldData($FIELD_SID, $WEB_FORM_ID)
    {
        $rsField = CFormField::GetBySID($FIELD_SID, $WEB_FORM_ID); // Получение ID вопроса
        $arField = $rsField->Fetch();
        return $arField;
    }

    /**
     * Получение  ID ответа
     */
    public static function getFieldDataAnswer($FIELD_SID)
    {
        $arFilter = array(
            "ACTIVE" => "Y"
        );
        $rsField = CFormAnswer::GetList($FIELD_SID, $by = "s_sort", $order = "desc", $arFilter, $is_filtered = false); //получаем ID ответа
        $arField = $rsField->Fetch();
        return $arField;
    }

    /**
     * Запрос на сервер Recaptcha
     */
    public static function recaptchaVerify($token)
    {
        return self::captchaResponse($token);
    }

    /**
     * Блокировка почтового события
     */
    public static function OnBeforeEventAddHandler(&$event, &$lid, &$arFields)
    {
        /*if (in_array($event, FORMS_TEMPLATES)) {
            if (empty($arFields[self::CAPTCHA_SCORE_CODE]) || ($arFields[self::CAPTCHA_SCORE_CODE] != 'ok')) {
                return false;
            }
            unset($arFields[self::CAPTCHA_SCORE_CODE], $arFields[self::CAPTCHA_TOKEN_CODE]);
        }*/
    }

    /**
     * Добавление скриптов в футер
     */
    public static function addScriptsFooter(&$content)
    {
        if (\CSite::InDir('/bitrix/admin/')) return;

        $RECAPTCHA_HTML_KEY = RECAPTCHA_KEYS_YANDEX['RECAPTCHA_HTML_KEY'];
        $scripts = "<script>
            console.log('render captcha');
                class YandexInvisibleCaptcha {
                widgetId = false ;
                captchaInput = null;
                constructor(form) {
                    this.form = form;
                    this.captchaInput =$(form).find('[data-captcha]')[0] ; 
                    this.siteKey = '" . $RECAPTCHA_HTML_KEY . "';
                    this.captchaToken = null;
                    this.containerId = this?.form?.name;
                }
            
                addHiddenContainer(){
                    if(document.getElementById(this.form.name)===undefined){
                        return
                    }
                    document.getElementById(this.form.name);
                    let container = document.createElement('div');
                    container.id = this.form.name;
                    this.form.appendChild(container);
                }
            
                executeCaptcha() {
                    this.addHiddenContainer();
            
                    if(this.widgetId){
                        window.smartCaptcha.reset(this.widgetId);
                    }
            
                    this.widgetId = window.smartCaptcha.render(this.containerId, {
                        sitekey:this.siteKey,
                        invisible: true, // Сделать капчу невидимой
                        callback: this.onSuccess.bind(this),
                         // test:true,
                        'error-callback': this.onError.bind(this),
                    });
                    console.log(this.widgetId);
                    window.smartCaptcha.execute(this.widgetId);
                    return this.widgetId;
                }
            
            
                onSuccess(token) {
                    if(this.captchaInput !==undefined){
                    this.captchaInput.value = token;
                    //console.log('Captcha passed, token: ', token);
                    window.smartCaptcha.reset(this.widgetId);
//                    this.form.submit();
                 }

                }
            
                onError() {
                    console.error('Ошибка при проверке капчи');
                    // Обработать ошибку
                }
                
            }
                        </script>";
        $content = str_replace('</body>', "{$scripts}</body>", $content);
    }

    /**
     * Добавление скриптов в шапку
     */
    public static function addScriptsHeader(&$content)
    {
        $request = Application::getInstance()->getContext()->getRequest();
        if (\CSite::InDir('/bitrix/admin/')||$request->isAjaxRequest()||$request->get('AJAX_CALL')) return;
        $RECAPTCHA_HTML_KEY = RECAPTCHA_KEYS_YANDEX['RECAPTCHA_HTML_KEY'];
        $scripts = "<script
            src='https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=window.captchaObj'
            defer
            >
            
</script>";
        $renderCaptcha = "
            <script>
            $(document).ready(function (){
                window.captchaObj = new YandexInvisibleCaptcha();
            })
            </script>";
            $scripts .= $renderCaptcha;

        $content = str_replace('</head>', "{$scripts}</head>", $content);

    }


    public static function captchaResponse($token)
    {
        return self::verifyCurl($token);
    }

    public static function verifyCurl($captcha_token)
    {
        $url = 'https://smartcaptcha.yandexcloud.net/validate';
        $data = [
            'secret' => self::$recaptchaKey,
            'token'  => $captcha_token,
            'ip'     => $_SERVER['REMOTE_ADDR'],
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/x-www-form-urlencoded'
        ]);

        $result = curl_exec($ch);

        if ($result === false) {
            self::$errors = 'Ошибка при запросе: ' . curl_error($ch);
            curl_close($ch);
            return false;
        }

        curl_close($ch);

        $response = json_decode($result, true);
        if ($response['status'] != 'ok') {
            self::$errors = $response['message'];
        }
        return $response;
    }

    public static function verify($captcha_token)
    {
        $url = 'https://smartcaptcha.yandexcloud.net/validate';
        $data = [
            'secret' => self::$recaptchaKey,
            'token'  => $captcha_token,
            'ip'     => $_SERVER['REMOTE_ADDR'],
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) {
            self::$errors = 'Ошибка при запросе';
            return false; // Ошибка при запросе
        }

        $response = json_decode($result, true);
        if ($response['status'] != 'ok') {
            self::$errors = $response['message'];
        }
        return $response;
//        return isset($response['success']) && $response['success'] === true;
    }


}
