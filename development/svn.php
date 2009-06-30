<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Development - SVN access");
$PAGE_CONTENT = '

<h1>' . _("SVN access") . '</h1>

<p>' . sprintf(_("pgAdmin is available subject to the terms of the <a href=\"%s\">licence</a>. pgAdmin is developed using a Subversion or SVN repository to hold the source code. Access to the repository is available through a <a href=\"%s\">web interface</a> or using your favourite SVN client. Anonymous read access is available using an SVN client. Under Windows, we recommend using <a href=\"%s\">TortoiseSVN</a>, which is free software. Under Linux, there are several command line and graphical clients available."), "../licence.php", "http://svn.pgadmin.org", "http://tortoisesvn.tigris.org/") . '</p>

<p>' . sprintf(_("To checkout the source from the command line and get started, you might use commands such as shown below on a Linux or Unix system. For further details, please see the <a href=\"%s\">source code</a> build instructions."), "../download/source.php") . '</p>

<div class="pgaCode">
svn co svn://svn.pgadmin.org/trunk/pgadmin3 pgadmin3<br />
cd pgadmin3<br />
bash bootstrap<br />
./configure<br />
</div>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
