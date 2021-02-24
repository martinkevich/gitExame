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
?>


<section class="feature-section">
    <div class="container-fluid">
        <div class="row">


            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-md-4">
                    <div class="feature-item set-bg" data-setbg="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                        <h3><?=$arItem['NAME']?></h3>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                        <a href="#" class="primary-btn f-btn">Read More</a>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>