<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - FreeBSD");
$PAGE_CONTENT = '

<h1>' . _("FreeBSD") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Hiroshi Saito") . '</h4>

<p>' . _("pgAdmin III packages are available for download. These packages have been built on FreeBSD 6.") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.8.0/freebsd62", "1.8.0") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.6.3/freebsd62", "1.6.3") . '<br />&nbsp;</li>
  <li>' . sprintf(_("<a href=\"%s\">pgAdmin v%s</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/v1.4.2/freebsd", "1.4.2") . '<br />&nbsp;</li>
</ul>

<p>' . _("To install these packages, use a command such as:") . '</p>

<div class="pgaCode">
# pkg_add pgadmin3-x.x.x.tgz
</div><br />&nbsp;

<p>' . _("Create a symlink to the pgAdmin III binary:") . '</p>

<div class="pgaCode">
# ln -sf /usr/local/pgadmin3/bin/pgadmin3 /usr/local/bin/pgadmin3
</div><br />&nbsp;

<p>' . _("Check that the pgAdmin III executable is in the path:") . '</p>

<div class="pgaCode">
# which pgadmin3
/usr/local/bin/pgadmin3
</div><br />&nbsp;
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
