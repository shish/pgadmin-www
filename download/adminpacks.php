<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - Admin packs");
$PAGE_CONTENT = '

<h1>' . _("Admin packs") . '</h1>

<p>' . _("The admin packs to enable server instrumentation on PostgreSQL 8.x servers can be found in the <i>adminpacks</i> directory on the mirror network.") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">Admin pack</a> for pgAdmin v%s"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.3/adminpacks/", "1.6.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">Admin pack</a> for pgAdmin v%s"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.2/adminpacks/", "1.6.2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">Admin pack</a> for pgAdmin v%s"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.1/adminpacks/", "1.6.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">Admin pack</a> for pgAdmin v%s"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.0/adminpacks/", "1.6.0") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">Admin pack</a> for pgAdmin v%s"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.3/adminpacks/", "1.4.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">Admin pack</a> for pgAdmin v%s"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.2/adminpacks/", "1.4.2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">Admin pack</a> for pgAdmin v%s"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.1/adminpacks/", "1.4.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">Admin pack</a> for pgAdmin v%s"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.0/adminpacks/", "1.4.0") . '<br />&nbsp;</li>
</ul>

<p>' . _("Install the appropriate admin pack for the version of pgAdmin that you use, and the server you are running. pgInstaller distributions of PostgreSQL for Windows include the admin packs.") . '</p>

<p>' . _("Note: PostgreSQL 8.2 and above include the adminpack as a Contrib module.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
