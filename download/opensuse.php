<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - OpenSUSE");
$PAGE_CONTENT = '

<h1>' . _("OpenSUSE") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Hiroshi Saito/Toshiyuki Ishikawa") . '</h4>

<p>' . _("OpenSUSE packages built on a server periodically updated to -current are available for download. These builds should run on most recent versions of OpenSUSE.") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.2/opensuse/", "1.6.2") . '<br />&nbsp;</li>
</ul>

<p>' . _("To install these packages, use the OpenSUSE <i>pkgtool</i> or <i>installpkg</i> utilities.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>