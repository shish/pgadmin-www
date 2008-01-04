<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - Source code");
$PAGE_CONTENT = '

<h1>' . _("Source code") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p>' . _("Source tarballs are available for users wishing to compile their own copy of pgAdmin, or those using platforms for which we do not supply prebuilt packages.") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.8.1/src/", "1.8.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.3/src/", "1.6.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.3/src/", "1.4.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.2.2/src/", "1.2.2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.0.2/src/", "1.0.2") . '<br />&nbsp;</li>
</ul>

<p>' . _("Build instructions are included in the tarballs, and are available online:") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "http://svn.pgadmin.org/cgi-bin/viewcvs.cgi/branches/REL-1_8_0_PATCHES/pgadmin3/INSTALL?view=markup", "1.8.x") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "http://svn.pgadmin.org/cgi-bin/viewcvs.cgi/branches/REL-1_6_0_PATCHES/pgadmin3/INSTALL?view=markup", "1.6.x") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "http://svn.pgadmin.org/cgi-bin/viewcvs.cgi/branches/REL-1_4_0_PATCHES/pgadmin3/INSTALL.txt?view=markup", "1.4.x") . '<br />&nbsp;</li>
</ul>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
