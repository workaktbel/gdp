<?php
define("NO_KEEP_STATISTIC", true);
define("NO_AGENT_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
define("DisableEventsCheck", true);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Context;

$request = Context::getCurrent()->getRequest();
$siteId = (string)$request->getPost("site_id"); // 's1' или 's2'
$isRu = ($siteId === "s1");
$sectionId = (int)$request->getPost("section_id");
$page      = max(1, (int)$request->getPost("page"));
$pageSize  = 5;

if ($sectionId <= 0) {
    http_response_code(400);
    echo "section_id is required";
    die();
}

if (!\CModule::IncludeModule("iblock")) {
    http_response_code(500);
    echo "iblock module is not available";
    die();
}

$filter = [
    "IBLOCK_ID" => 56,
    "ACTIVE" => "Y",
    "SECTION_ID" => $sectionId,
    "SECTION_GLOBAL_ACTIVE" => "Y",
    "INCLUDE_SUBSECTIONS" => "Y",
];

$select = [
    "ID",
    "IBLOCK_ID",
    "NAME",
    "ACTIVE_FROM",
    "DETAIL_PAGE_URL",
    "PROPERTY_SQUARE",
    "PROPERTY_TITLE_EN",
    "PROPERTY_FILES",
];

$sort = [
    "ACTIVE_FROM" => "DESC",
    "SORT" => "ASC",
    "ID" => "DESC",
];

/**
 * Шаг 1: получаем УНИКАЛЬНЫЕ ID с нормальной постраничной навигацией.
 * Важно: GROUP BY ["ID"] используем только чтобы убрать дубли на уровне привязок к разделам.
 */
$idRs = \CIBlockElement::GetList($sort, $filter, ["ID"], false, ["ID"]);
$idRs->NavStart($pageSize, false, $page);

$ids = [];
while ($row = $idRs->Fetch()) {
    $ids[] = (int)$row["ID"];
}
$ids = array_values(array_unique(array_filter($ids)));

/**
 * Шаг 2: вытаскиваем полные данные по этим ID без GROUP BY
 */
$items = [];

if (!empty($ids)) {
    $detailFilter = [
        "IBLOCK_ID" => 56,
        "ACTIVE" => "Y",
        "ID" => $ids,
    ];

    // Получим детали одним запросом (без сортировки), а порядок восстановим по $ids
    $detailRs = \CIBlockElement::GetList([], $detailFilter, false, false, $select);

    $byId = [];
    while ($item = $detailRs->GetNext()) {
        $byId[(int)$item["ID"]] = $item;
    }

    foreach ($ids as $id) {
        if (isset($byId[$id])) {
            $items[] = $byId[$id];
        }
    }
}

if (!empty($items)) {
    foreach ($items as &$it) {
        $firstFileId = 0;

        $propRes = CIBlockElement::GetProperty(
            56,                   // IBLOCK_ID
            (int)$it["ID"],       // ELEMENT_ID
            ["SORT" => "ASC", "ID" => "ASC"],
            ["CODE" => "FILES"]
        );

        if ($prop = $propRes->Fetch()) {
            $firstFileId = (int)$prop["VALUE"];
        }

        $it["_FIRST_FILE_ID"] = $firstFileId;
    }
    unset($it);
}
foreach ($items as &$it) {
    $it["_DETAIL_URL"] = $it["DETAIL_PAGE_URL"] ?? "";

    if (!empty($it["_DETAIL_URL"])) {
        $it["_DETAIL_URL"] = \CIBlock::ReplaceDetailUrl(
            $it["_DETAIL_URL"],
            $it,
            true,
            "E"
        );
    }
}
unset($it);
ob_start();

$cardTextRu = (string)$request->getPost('card_text');
$cardTextEn = (string)$request->getPost('card_text_en');
$i = 1;
$count = count($items);

if ($count): ?>
    <?php foreach ($items as $item): ?>
        <div class="item_block">
            <div class="left slider_block_wr">
                <?php if (!empty($item["_FIRST_FILE_ID"])): ?>
                    <img src="<?= \CFile::GetPath((int)$item["_FIRST_FILE_ID"]); ?>" alt="">
                <?php endif; ?>
            </div>

            <div class="right">
                <div class="item_name">
                    <div class="name">
                        <?php if ($isRu): ?>
                            <?= htmlspecialcharsbx($item["NAME"] ?? ""); ?>
                        <?php else: ?>
                            <?= htmlspecialcharsbx($item["PROPERTY_TITLE_EN_VALUE"] ?? ""); ?>
                        <?php endif; ?>
                    </div>

                    <div class="square">
                        <?= htmlspecialcharsbx($item["PROPERTY_SQUARE_VALUE"] ?? ""); ?>
                        <?php if ($isRu): ?>
                            &nbsp;га
                        <?php else: ?>
                            &nbsp;ha
                        <?php endif; ?>
                    </div>
                </div>

                <div class="text">
                    <?php if ($isRu): ?>
                        <?= htmlspecialcharsbx($cardTextRu) ?>
                        Продажа земельного участка общей площадью <?= htmlspecialcharsbx($item["PROPERTY_SQUARE_VALUE"] ?? ""); ?> га, с удобным подъездом, круглосуточное видеонаблюдение
                    <?php else: ?>
                        <?= htmlspecialcharsbx($cardTextEn) ?>
                        Sale of a land plot with a total area of <?= htmlspecialcharsbx($item["PROPERTY_SQUARE_VALUE"] ?? ""); ?> ha, with convenient access, 24/7 video surveillance
                    <?php endif; ?>
                </div>

                <div class="square">
                    <?= htmlspecialcharsbx($item["PROPERTY_SQUARE_VALUE"] ?? ""); ?>
                    <?php if ($isRu): ?>
                        &nbsp;га
                    <?php else: ?>
                        &nbsp;ha
                    <?php endif; ?>
                </div>

                <a href="<?= htmlspecialcharsbx($item["_DETAIL_URL"] ?? "#"); ?>" class="btn" data-name="<?= htmlspecialcharsbx($item["NAME"] ?? ""); ?>">
                    <?php if ($isRu): ?>
                        Узнать подробнее
                    <?php else: ?>
                        Learn more
                    <?php endif; ?>
                </a>
            </div>
        </div>

        <?php
        $i++;
        if ($i <= $count) echo "<div class='hr'></div>";
        ?>
    <?php endforeach; ?>
<?php endif;

$htmlItems = ob_get_clean();

// Есть ли следующая страница? (считаем по idRs — это "наст��ящая" навигация)
$hasNext = ($idRs->NavPageNomer < $idRs->NavPageCount);

header("Content-Type: application/json; charset=UTF-8");
$debug = [
    "site_constant_defined" => defined("SITE_ID"),
    "site_constant" => defined("SITE_ID") ? SITE_ID : null,
    "context_site" => \Bitrix\Main\Context::getCurrent()->getSite(),
    "http_host" => $_SERVER["HTTP_HOST"] ?? null,
    "request_uri" => $_SERVER["REQUEST_URI"] ?? null,
];
echo json_encode([
    "html" => $htmlItems,
    "next_page" => $hasNext ? ($page + 1) : null,
    "ids" => $ids,
    "debug" => $debug,
], JSON_UNESCAPED_UNICODE);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php");