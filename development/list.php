<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Development - Mailing list");
$PAGE_CONTENT = '

<h1>' . _("Mailing list") . '</h1>

<p>' . sprintf(_("The pgadmin-hackers mailing list is intended for developers who wish to contribute to pgAdmin project. You are more than welcome to subscribe, but please remember to use <a href=\"%s\">pgadmin-support</a> list for end user support issues. To subscribe to the mailing list, send an email to <a href=\"%s\">%s</a> with the word 'subscribe', without quotes, as the body of message."), "../support/list.php", "mailto:pgadmin-hackers-request@postgresql.org", "pgadmin-hackers-request@postgresql.org") . '</p>

<p>' . sprintf(_("Messages sent to the list may be browsed <a href=\"%s\">here</a> and are archived at <a href=\"%s\">PostgreSQL</a> and  <a href=\"%s\">mail-archive.com</a>."), "/archives/pgadmin-hackers/index.php", "http://archives.postgresql.org/pgadmin-hackers/", "http://www.mail-archive.com/pgadmin-hackers@postgresql.org") . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
