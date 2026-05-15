<?php

namespace App;

/**
 * Class Logger
 * @package App
 */
class Logger
{
    const LOG_PATH = '/local/logs/';

    /**
     * @param $fileName
     * @param $errorMsg
     */
    public static function Log($fileName, $errorMsg)
    {
        if (!is_dir($_SERVER['DOCUMENT_ROOT'] . self::LOG_PATH)) {
            mkdir($_SERVER['DOCUMENT_ROOT'] . self::LOG_PATH);
        }

        file_put_contents($_SERVER['DOCUMENT_ROOT'] . self::LOG_PATH . $fileName . '.log', print_r($errorMsg, 1) . PHP_EOL, FILE_APPEND);
    }

    /**
     * @param string $fileName
     * @param string $titleMail
     * @param string $textMail
     */
    public static function SendLogMail($fileName, $titleMail, $textMail)
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . self::LOG_PATH . $fileName . '.log';
        if (file_exists($file)) {
            $arEventFields = [
                'TITLE' => $titleMail,
                'TEXT' => $textMail,
            ];
            $res = \CEvent::Send("SEND_LOG", 's1', $arEventFields, '', '', [$file]);

            if ($res) {
                unlink($file);
            }
        }
    }
}