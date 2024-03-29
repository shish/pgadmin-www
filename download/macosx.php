<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Download - Mac OSX");
$PAGE_CONTENT = '

<h1>' . _("Mac OSX") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page") . '</h4>

<p>' . _("Mac OSX packages built on Panther are available up to pgAdmin v1.4.1. Newer versions are being built on Tiger. v1.6 and above are built as Mac Universal binaries for Intel and PPC architectures.") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.16.1/osx/", "1.16.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.14.3/osx/", "1.14.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.12.3/osx/", "1.12.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.10.5/osx/", "1.10.5") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.8.4/osx/", "1.8.4") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.3/osx/", "1.6.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.3/osx/", "1.4.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.2.2/osx/", "1.2.2") . '<br />&nbsp;</li>
</ul>

<p>' . _("These packages are Mac OSX appbundles. To install the 1.8 or later series, mount the disk image using the finder, and drag the pgAdmin appbundle to the desired location. To install the 1.6 series, unpack the archive, and run the installer package. For earlier versions, unpack the archive, and move the appbundle into the desired location.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
