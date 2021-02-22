<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
global $USER;
$USER->Authorize(2);
LocalRedirect('/bitrix/admin/');
