<?php 

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - Mac OSX");
$PAGE_CONTENT = '

<h1>' . _("Mac OSX") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Dave Page & Adam H. Pendleton") . '</h4>

<p>' . _("Mac OSX packages built on Panther are available up to pgAdmin v1.4.1. Newer versions are being built on Tiger.") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.1/osx/", "1.4.1") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.0/osx/", "1.4.0") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.2.2/osx/", "1.2.2") . '<br />&nbsp;</li>
</ul>

<p>' . _("These packages are Mac OSX appbundles. To install them, simply unpack the archive, and move the appbundle into the desired location.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
