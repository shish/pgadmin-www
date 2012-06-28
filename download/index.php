<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Download - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . sprintf(_("pgAdmin is a free software project released under the <a href=\"%s\">PostgreSQL/Artistic licence</a>. The software is available in source and binary format from the <a href=\"%s\">PostgreSQL mirror network</a>. Because compiling from source requires technical knowledge, we recommend installing binary packages whenever possible."), "../licence.php", "http://www.postgresql.org/ftp/pgadmin3/release/") . '</p>

<p>' . _("The pages in this section give additional details about each binary package available as well as more direct download links. In addition, you can download source tarballs, additional language translations, pgAgent and admin packs for your servers to enable additional functionality.") . '</p>

<p>' . sprintf(_("Finally, pgAdmin is included by default in most Linux distributions, such as RedHat, Fedora, Debian and Ubuntu. If you want a different version than the one included in the distribution, you can use channels such as the PostgreSQL <a href=\"%s\">yum repository</a>, Debian <a href=\"%s\">backports</a> or the Ubuntu <a href=\"%s\">PPA</a>."), "http://yum.postgresql.org/", "http://backports.debian.org/","https://launchpad.net/~pitti/+archive/postgresql") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
