<?php 

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Support - Frequently Asked Questions");
$PAGE_CONTENT = '

<h1>' . _("Frequently Asked Questions") . '</h1>

<p>' . sprintf(_("The Frequently Asked Questions (FAQ) document is a list of commonly asked questions and answers on pgAdmin. Please make sure you have reviewed the FAQ before asking for help on the <a href=\"%s\">pgsql-support</a> mailing list."), "list.php") . '</p>

<p>' . _("The list below is automatically imported from the pgAdmin online help resources and is only available in English.") . '</p>

'; 

$file = "../faq/index.php";
if (file_exists($file))
  $PAGE_CONTENT .= file_get_contents($file);

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
