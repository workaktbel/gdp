<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

function getNormalizedPath($path) {
    return rtrim($path, '/') . '/';
}

function getAlternatePath($currentPath, $fromLang, $toLang) {
    $path = rtrim($currentPath, '/') . '/';

    // Специальные преобразования для новостей
    if ($fromLang === 'ru' && $toLang === 'en' && strpos($path, '/novosti/') === 0) {
        return '/en/news/' . substr($path, strlen('/novosti/'));
    }
    if ($fromLang === 'en' && $toLang === 'ru' && strpos($path, '/en/news/') === 0) {
        return '/novosti/' . substr($path, strlen('/en/news/'));
    }

    // Общий случай для других разделов (включая video)
    return $toLang === 'en' ? '/en' . $path : str_replace('/en', '', $path);
}

function checkPageExistence($path) {
    $path = ltrim($path, '/');

    // Для разделов video и novosti считаем страницу существующей, если есть правило роутинга
    if (strpos($path, 'video/') === 0 || strpos($path, 'novosti/') === 0 || strpos($path, 'en/video/') === 0 || strpos($path, 'en/news/') === 0) {
        if (CModule::IncludeModule('main')) {
            $arUrlRewrite = [];
            CUrlRewriter::GetList([], $arUrlRewrite);
            foreach ($arUrlRewrite as $rule) {
                if ($rule['PATH'] !== '/404.php' && preg_match($rule['CONDITION'], "/$path/")) {
                    return true;
                }
            }
        }
        return false;
    }

    // Стандартная проверка для других страниц
    $docRoot = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
    if (is_dir("$docRoot/$path")) {
        return file_exists("$docRoot/$path/index.php") || file_exists("$docRoot/$path/index.html");
    }
    return file_exists("$docRoot/$path.php") || file_exists("$docRoot/$path.html");
}

function generateHreflangTags() {
    $currentDir = getNormalizedPath($GLOBALS['APPLICATION']->GetCurDir());
    $baseUrl = 'https://gdpquadrat.com';
    $excludedPaths = ['/digest/', '/404/'];

    if (in_array($currentDir, $excludedPaths)) {
        return '';
    }

    $langId = LANGUAGE_ID;
    $tags = [];

    if ($langId === 'ru') {
        $enPath = getAlternatePath($currentDir, 'ru', 'en');
        if (checkPageExistence($enPath)) {
            $tags = [
                'ru' => $baseUrl . $currentDir,
                'en' => $baseUrl . $enPath,
                'x-default' => $baseUrl . $currentDir
            ];
        }
    } elseif ($langId === 'en') {
        $ruPath = getAlternatePath($currentDir, 'en', 'ru');
        if (checkPageExistence($ruPath)) {
            $tags = [
                'ru' => $baseUrl . $ruPath,
                'en' => $baseUrl . $currentDir,
                'x-default' => $baseUrl . $ruPath
            ];
        }
    }

    if (!empty($tags)) {
        $result = '';
        foreach ($tags as $lang => $url) {
            $result .= sprintf('<link rel="alternate" hreflang="%s" href="%s" />'."\n", $lang, $url);
        }
        return $result;
    }

    return '';
}
?>