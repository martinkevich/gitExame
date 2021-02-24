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
<div class="hero-items owl-carousel">
    <? foreach ($arResult["ITEMS"] as $arItem):
        ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="single-hero-item set-bg" data-setbg="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"
             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-text">
                            <h2><?=$arItem['NAME']?></h2>
                            <h1><?=$arItem['PREVIEW_TEXT']?></h1>
                            <a href="#" class="primary-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <? endforeach; ?>

</div>
