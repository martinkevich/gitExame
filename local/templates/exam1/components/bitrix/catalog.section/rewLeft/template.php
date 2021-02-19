<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |    Attention!
 * |    The following comments are for system use
 * |    and are required for the component to work correctly in ajax mode:
 * |    <!-- items-container -->
 * |    <!-- pagination-container -->
 * |    <!-- component-end -->
 */

$this->setFrameMode(true);
?>

<div class="item-wrap">
    <div class="rew-footer-carousel">
        <?php
        foreach ($arResult['ITEMS'] as $item) {
            ?>

            <div class="item">
                <div class="side-block side-opin">
                    <div class="inner-block">
                        <div class="title">
                            <div class="photo-block">
                                <img src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="">
                            </div>
                            <div class="name-block"><a
                                        href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME'] ?></a></div>
                            <div class="pos-block"><?= $item['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] ?></div>
                        </div>
                        <div class="text-block"><?= $item['PREVIEW_TEXT'] ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>
