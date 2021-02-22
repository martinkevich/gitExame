<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!\Bitrix\Main\Loader::includeModule('landing')) {
    return;
}
$objDateTime = new DateTime();
$timeHour = $objDateTime->format("H");
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">

<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead(); ?>

    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/reset.css"/>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css"/>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/owl.carousel.css"/>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/owl.carousel.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/scripts.js"></script>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">
</head>

<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
            </div>
            <div class="main-phone-block">
                <? if ($timeHour >= 9 && $timeHour <= 18) { ?>
                    <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                <? } else { ?>
                    <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                <? } ?>

                <div class="shedule">время работы с 9-00 до 18-00</div>
            </div>
            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"demo", 
	array(
		"FORGOT_PASSWORD_URL" => "?forgot_password=yes",
		"PROFILE_URL" => "user/",
		"REGISTER_URL" => "?register=yes",
		"SHOW_ERRORS" => "Y",
		"COMPONENT_TEMPLATE" => "demo"
	),
	false
);?>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "top2",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "4",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "Y",
                    ),
                    false
                ); ?>
                <div class="menu-overlay"></div>
            </div>
        </div>
    </nav>
    <!-- /nav -->
    <!-- breadcrumbs -->
    <? if ($APPLICATION->GetCurPage() !== '/') { ?>
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "navigation", Array(
            "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
            "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
        ),
            false
        );?>
    <? } ?>
    <!-- /breadcrumbs -->
    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- content -->
            <div class="content">
                <div class="cnt">
                    <? if ($APPLICATION->GetCurPage() !== '/') { ?>
                        <header>
                            <h1><?=$APPLICATION->ShowTitle(false);?></h1>
                        </header>
                        <hr>
                    <? } ?>
