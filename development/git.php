<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Development - GIT access");
$PAGE_CONTENT = '

<h1>' . _("SVN access") . '</h1>

<p>' . sprintf(_("pgAdmin is available subject to the terms of the <a href=\"%s\">licence</a>. pgAdmin is developed using a number of GIT repositories to hold the source code. Access to the repository is available through a <a href=\"%s\">web interface</a> or using your favourite GIT client. Under Windows, we recommend using <a href=\"%s\">TortoiseGIT</a>, which is free software."), "../licence.php", "http://git.postgresql.org", "http://code.google.com/p/tortoisegit/") . '</p>

<p>' . sprintf(_("To checkout the source from the command line and get started, you might use commands such as shown below on a Linux or Unix system. For further details, please see the <a href=\"%s\">source code</a> build instructions."), "../download/source.php") . '</p>

<div class="pgaCode">
git clone git://git.postgresql.org/git/pgadmin3.git<br />
cd pgadmin3<br />
bash bootstrap<br />
./configure<br />
</div>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
