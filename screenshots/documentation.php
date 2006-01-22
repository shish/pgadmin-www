<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Screenshots - Documentation");
$PAGE_CONTENT = '

<h1>' . _("Documentation") . '</h1>

<p>' . _("pgAdmin III includes full PostgreSQL and Slony-I documentation, in addition to it's own.") . '</p>

<center><a href="/images/screenshots/pgadmin3_documentation.png" target="_Shot"><img src="/images/screenshots/pgadmin3_documentation.png" alt="' . _("The pgAdmin help system") . '" width="354" height="257" /></a></center>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
