<?php

//autoload classes
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/vendor/autoload.php');

/**** constants ****/
require_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/constants/constants.php');

//events
include_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/events/events.php');


if(SITE_ID == 's1'){
    define("CONTACTS",14);
}
elseif(SITE_ID == 's2'){
    define("CONTACTS",15);
}

function prr($value) {
    print_r('<pre>');
    print_r($value);
    print_r('</pre>');
}

function mb_ucfirst($str) {
	$fc = mb_strtoupper(mb_substr($str, 0, 1));
	return $fc . mb_substr($str, 1);
}

//выводим пользовательское HTML поле в свойствах разделов
AddEventHandler('main', 'OnUserTypeBuildList', array('CUserTypeSectionsHtmlField', 'GetUserTypeDescription'), 5000);
class CUserTypeSectionsHtmlField {

    public static function GetUserTypeDescription() {
        return array(
            // уникальный идентификатор
            'USER_TYPE_ID' => 'sections_html_field',
            // имя класса, методы которого формируют поведение типа
            'CLASS_NAME' => 'CUserTypeSectionsHtmlField',
            // название для показа в списке типов пользовательских свойств
            'DESCRIPTION' => 'HTML/text',
            // базовый тип на котором будут основаны операции фильтра
            'BASE_TYPE' => 'string',
        );
    }

    public static function GetDBColumnType($arUserField) {
        switch (strtolower($GLOBALS['DB']->type)) {
            case 'mysql':
                return 'text';
                break;
        }
    }

    public static function GetSettingsHTML($arUserField = false, $arHtmlControl, $bVarsFromForm) {
        $result = '';

        return $result;
    }

    public static function CheckFields($arUserField, $value) {
        $aMsg = array();
        return $aMsg;
    }

    public static function GetEditFormHTML($arUserField, $arHtmlControl) {
        if ($arUserField["ENTITY_VALUE_ID"] < 1 && strlen($arUserField["SETTINGS"]["DEFAULT_VALUE"]) > 0)
            $arHtmlControl["VALUE"] = htmlspecialchars($arUserField["SETTINGS"]["DEFAULT_VALUE"]);
        ob_start();
        CFileMan::AddHTMLEditorFrame($arHtmlControl["NAME"], $arHtmlControl["VALUE"], "html", "html", 200, "N", 0, "", "", "s1");
        $b = ob_get_clean();
        return $b;
    }

    public static function GetEditFormHTMLMulty($arUserField, $arHtmlControl) {
        $html = 'Поле не может быть множественным!';
        return $html;
    }

    public static function GetFilterHTML($arUserField, $arHtmlControl) {
        $sVal = intval($arHtmlControl['VALUE']);
        $sVal = $sVal > 0 ? $sVal : '';

        return CUserTypeSectionsHtmlField::GetEditFormHTML($arUserField, $arHtmlControl);
    }

    public static function GetAdminListViewHTML($arUserField, $arHtmlControl) {
        return '';
    }

    public static function GetAdminListViewHTMLMulty($arUserField, $arHtmlControl) {
        return '';
    }

    public static function GetAdminListEditHTML($arUserField, $arHtmlControl) {
        return '';
    }

    public static function GetAdminListEditHTMLMulty($arUserField, $arHtmlControl) {
        return '';
    }

    public static function onsearchIndex($arUserField) {
        return '';
    }

    public static function OnBeforeSave($arUserField, $value) {
        return $value;
    }
}