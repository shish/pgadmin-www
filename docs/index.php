<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Documentation");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . _("The pgAdmin documentation for the current development code, and recent major releases of the application is available for online browsing. Please select the documentation version you would like to view from the section menu.") . '</p>

<p>' . sprintf(_("The documentation is automatically imported from the pgAdmin <a href=\"%s\">GIT</a> source code repository, and is only available in English."), "/development/git.php") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
