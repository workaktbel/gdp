<?php

use App\FormsYandex;
use Bitrix\Main\EventManager;

$eventManager = EventManager::getInstance();

$eventManager->addEventHandler(
    "form", "onBeforeResultAdd",
    [FormsYandex::class, "validateName"]
);
/*$eventManager->addEventHandler(
    "form", "onBeforeResultAdd",
    [FormsYandex::class, "validation"]
);
$eventManager->addEventHandler(
    "main", "OnBeforeEventAdd",
    [FormsYandex::class, "OnBeforeEventAddHandler"]
);
$eventManager->addEventHandler(
    "main", "OnEndBufferContent",
    [FormsYandex::class, "addScriptsFooter"]
);
$eventManager->addEventHandler(
    "main", "OnEndBufferContent",
    [FormsYandex::class, "addScriptsHeader"]
);*/
