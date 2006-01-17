<?php 

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Development - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . sprintf(_("pgAdmin is a community project, relying on contributions from developers around the world for bug fixes and new features. Anyone is welcome to join the project and contribute as much or as little as they like. pgAdmin is written in C++ using the <a href=\"%s\">wxWidgets</a> cross platform framework, so at the least you will want to be familiar with C/C++ to hack the code. The more experienced pgAdmin developers will also be able to lend a guiding hand to new developers, so don't be afraid to get stuck in!"), "http://www.wxwidgets.org") . '</p>

<p>' . sprintf(_("The pages in this section of the website should provide you with all the information you need to get started as a new developer, including <a href=\"%s\">SVN access</a>, the developers <a href=\"%s\">mailing list</a>, the  <a href=\"%s\">Development Team</a> structure, the  <a href=\"%s\">TODO list</a> and the  <a href=\"%s\">Change log</a>."), "svn.php", "list.php", "team.php", "todo.php", "changelog.php") . '</p>

<p>' . sprintf(_("If you are not a programmer, you can still get involved in the project if you wish - as a <a href=\"%s\">translator</a>, or <a href=\"%s\">promoting</a> pgAdmin."), "../translation/", "../advocacy/") . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
