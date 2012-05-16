<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Download - Source code");
$PAGE_CONTENT = '

<h1>' . _("Source code") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p>' . _("Source tarballs are available for users wishing to compile their own copy of pgAdmin, or those using platforms for which we do not supply prebuilt packages.") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.16.0-beta1/src/", "1.16.0-beta1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.14.2/src/", "1.14.2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.14.0/src/", "1.14.0") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.12.3/src/", "1.12.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.10.5/src/", "1.10.5") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.8.4/src/", "1.8.4") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.3/src/", "1.6.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.3/src/", "1.4.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.2.2/src/", "1.2.2") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.0.2/src/", "1.0.2") . '<br />&nbsp;</li>
</ul>

<p>' . _("Build instructions are included in the tarballs, and are available online:") . '</p>

<ul>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "http://git.postgresql.org/gitweb?p=pgadmin3.git;a=blob;f=INSTALL;h=ac08b645c4bad6afa47e47afe9dfe45afed7156f;hb=REL-1_12_0_PATCHES", "1.12.x") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "http://git.postgresql.org/gitweb?p=pgadmin3.git;a=blob;f=INSTALL;h=b1b2047379b50c07cedb22f616d3ae36a4cdd54a;hb=REL-1_10_0_PATCHES", "1.10.x") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "http://git.postgresql.org/gitweb?p=pgadmin3.git;a=blob;f=INSTALL;h=3a60bcab4b2908c43ed5c68a632aeb53bf3612d6;hb=REL-1_8_0_PATCHES", "1.8.x") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "http://git.postgresql.org/gitweb?p=pgadmin3.git;a=blob;f=INSTALL;h=de289e8592996e3ffb0a061e6225aedb03a0d688;hb=REL-1_6_0_PATCHES", "1.6.x") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">v%s instructions</a>"), "http://git.postgresql.org/gitweb?p=pgadmin3.git;a=blob;f=INSTALL.txt;h=499fdc80e0d870a35bb89d668be91816606822ad;hb=REL-1_4_0_PATCHES", "1.4.x") . '<br />&nbsp;</li>
</ul>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
