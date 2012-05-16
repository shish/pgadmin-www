<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Download - Windows &trade;");
$PAGE_CONTENT = '

<h1>' . _("Windows &trade;") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p>' . _("pgAdmin is available for Windows &trade; 2000 and above.") . '</p>

<p>' . sprintf(_("Note that the <a href=\"%s\">EnterpriseDB</a> distribution of PostgreSQL for Windows includes a bundled copy of pgAdmin."), "http://www.enterprisedb.com/products-services-training/pgdownload") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.16.0-beta1/win32/", "1.16.0-beta1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.14.2/win32/", "1.14.2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.14.0/win32/", "1.14.0") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.12.3/win32/", "1.12.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.10.5/win32/", "1.10.5") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.8.4/win32/", "1.8.4") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.3/win32/", "1.6.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.3/win32/", "1.4.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.2.2/win32/", "1.2.2") . '<br />&nbsp;</li>
</ul>

<p>' . _("To install these packages, unzip the downloaded file, double-click the </i>pgadmin3.msi</i> installer file and follow the on-screen instructions. Minor upgrades (e.g. from 1.4.0 to 1.4.1) can be performed using the <i>upgrade.bat</i> script. Differing major releases, e.g. 1.2.2 and 1.4.1, can be installed on the same machine at the same time.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
