<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - RPM");
$PAGE_CONTENT = '

<h1>' . _("RPM") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Devrim G&uuml;nd&uuml;z and others") . '</h4>

<p>' . sprintf(_("pgAdmin III RPM packages are available for several Linux distributions from the PostgreSQL <a href=\"%s\">RPM repository</a>."), "http://yum.pgsqlrpms.org/index2.php") . '</p>

<p>' . _("RPMs for older versions of pgAdmin are available from the pgAdmin download sites:") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.8.0/", "1.8.0") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.3/", "1.6.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.3/", "1.4.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.2.2/", "1.2.2") . '<br />&nbsp;</li>
</ul>

<p>' . _("To install these packages, use a command such as:") . '</p>

<div class="pgaCode">
rpm -Uvh pgadmin*.rpm
</div>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
