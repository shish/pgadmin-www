<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . sprintf(_("pgAdmin III is a free software project released under the <a href=\"%s\">Artistic licence</a>. The software is available in source and binary format from the <a href=\"%s\">PostgreSQL mirror network</a>. Because compiling from source requires technical knowledge, we recommend installing binary packages whenever possible."), "../licence.php", "http://www.postgresql.org/ftp/pgadmin3/release/") . '</p>

<p>' . _("The pages in this section give additional details about each binary package available as well as more direct download links. In addition, you can download source tarballs, additional language translations, pgAgent and admin packs for your servers to enable additional functionality.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
