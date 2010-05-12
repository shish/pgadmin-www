<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Screenshots - Server status");
$PAGE_CONTENT = '

<h1>' . _("Server status") . '</h1>

<p>' . _("The status of each server process may be viewed, along with summaries of current locks and transactions. Logfiles may also be selected and viewed.") . '</p>

<center><a href="/images/screenshots/pgadmin3_status.png" target="_Shot"><img src="/images/screenshots/pgadmin3_status.png" alt="' . _("The server status dialogue") . '" width="646" height="393" /></a></center>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
