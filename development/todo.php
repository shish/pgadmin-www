<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Development - TODO list");
$PAGE_CONTENT = '

<h1>' . _("TODO list") . '</h1>

<p>' . sprintf(_("The TODO list is a record of potential changes to pgAdmin that have been noted by the developers over the years. If an item appears on the list it does not necessarily mean that it is or even will be worked on, just that someone thought it would be a good idea. If you want to work on an item, please email the <a href=\"%s\">pgadmin-hackers</a> list first."), "list.php") . '</p>

<p>' . sprintf(_("The list below is automatically extracted from the pgAdmin <a href=\"%s\">GIT repository</a> and is only available in English."), "git.php") . '</p>

'; 

$file = "../svnrepo/pgadmin3/TODO";
if (file_exists($file))
  $PAGE_CONTENT .= "<pre>" . iconv("", "UTF-8//TRANSLIT", file_get_contents($file)) . "</pre>";

// Override the last modified date
$lastmod = filemtime($file);

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT, true, $lastmod);

?>
