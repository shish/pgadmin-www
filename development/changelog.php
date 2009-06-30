<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Development - Change log");
$PAGE_CONTENT = '

<h1>' . _("Change log") . '</h1>

<p>' . sprintf(_("The change log is a record of the notable changes made to pgAdmin by the various developers. It is a manually maintained list, and as such may not include details of every minor change that has ever been made. If you need that level of detail, please check the commit messages in the <a href=\"%s\">SVN repository</a>."), "svn.php") . '</p>

<p>' . _("The log below is automatically extracted from the SVN repository and is only available in English.") . '</p>

'; 

$file = "../svnrepo/pgadmin3/CHANGELOG";
if (file_exists($file))
  $PAGE_CONTENT .= "<pre>" .  iconv("", "UTF-8//IGNORE", file_get_contents($file)) . "</pre>";

// Override the last modified date
$lastmod = filemtime($file);

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT, true, $lastmod);

?>
