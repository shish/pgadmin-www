<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: How to contribute");
$PAGE_CONTENT = '

<h1>' . _("How to contribute") . '</h1>

<p>' . _("pgAdmin is a voluntary project created and managed by contributors from around the world. The project can only live and develop with your help. Do not hesitate to get involved.") . '</p>

<h2>' . _("Development") . '</h2>

<p>' . sprintf(_("If you think you can contribute new features and/or bug fixes, please visit the <a href=\"%s\">development</a> page."), "development/") . '</p> 

<h2>' . _("Translation") . '</h2>

<p>' . sprintf(_("We need help to translate pgAdmin III and our website to as many languages as possible for the benefit of our worldwide userbase. If you think you can help us, please visit the <a href=\"%s\">translation</a> page."), "translation/") . '</p> 

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
