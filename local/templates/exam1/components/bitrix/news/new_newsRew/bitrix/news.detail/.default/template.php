<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

$arResult['ACTIVE_FROM'] = $DB->FormatDate($arResult['ACTIVE_FROM'], "DD.MM.YYYY", "DD MMMM YYYY");
$str = $arResult['NAME'] . ', ' . $arResult['ACTIVE_FROM'] . '., ' . $arResult['PROPERTIES']['POSITION']['VALUE'] . ', ' . $arResult['PROPERTIES']['COMPANY']['VALUE'];
?>


<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont"><?= $arResult['DETAIL_TEXT'] ?></div>
        <div class="review-autor">
            <?= $str ?>
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap"><img src="<?= $arResult['PREVIEW_PICTURE'] ['SRC'] ?>" alt="img">
    </div>
</div>


<div class="exam-review-doc">
    <p>Документы:</p>
    <? foreach ($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $doc) {
        $a = CFile::GetByID($doc
        );
        $obElement = $a->Fetch();
        ?>
        <div class="exam-review-item-doc"><img class="rew-doc-ico"
                                               src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png"><a
                    href="/upload/<?= $obElement['SUBDIR'] . '/' . $obElement['FILE_NAME'] ?>"><?= $obElement['ORIGINAL_NAME'] ?></a>
        </div>
    <? } ?>
</div>
