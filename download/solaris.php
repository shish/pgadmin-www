<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - Solaris");
$PAGE_CONTENT = '

<h1>' . _("Solaris") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dhanaraj M") . '</h4>

<p>' . _("Packages built for Solaris on Sparc and Intel are available, courtesy of Sun Microsystems.") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.8.0/solaris/", "1.8.0") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.3/solaris/", "1.6.3") . '<br />&nbsp;</li>
</ul>
';

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
