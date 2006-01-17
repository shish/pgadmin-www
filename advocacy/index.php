<?php 

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Advocacy - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<h2>' . _("Why promote pgAdmin?") . '</h2>

<p>' . _("Promotion is essential for the life and development of the pgAdmin project. As the project gains more and more users it attracts additional developers who contribute new features and bug fixes and helping improve pgAdmin to the benefit of all it's users. As the project has grown even more popular, it has attracted the attention of PostgreSQL companies in addition to the users. Some of these companies have invested in the development of pgAdmin - for example, a Japanese company called SKC sponsored the development of the Slony-I management features, whilst EnterpriseDB provided an Apple Powerbook to allow the Mac OSX port to be properly developed and maintained.") . '</p>

<p>' . sprintf(_("It's easy to see how promoting pgAdmin benefits us all in the long term. Read the <a href=\"%s\">strategy</a> page to see how you might be able to help."), "strategy.php") . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
