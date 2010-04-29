<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Download - Debian");
$PAGE_CONTENT = '

<h1>' . _("Debian") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Gerfried Fuchs") . '</h4>

<p>' . sprintf(_("pgAdmin packages are available for <a href=\"%s\">Debian</a> stable, testing and unstable distributions. These packages are also well-suited for <a href=\"%s\">Ubuntu</a> and other Debian based distributions"), "http://www.debian.org/", "http://www.ubuntu.com/") . '</p>

<h4>' . _("Debian Etch (oldstable)") . '</h4>

<p>' . sprintf(_("pgAdmin %s is <a href=\"%s\">available</a> directly from Debian. You can install pgAdmin just as you would do with any other Debian package (apt-get install pgadmin3)."), "http://packages.debian.org/etch/pgadmin3", "1.4.3") . '</p>

<h4>' . _("Debian Lenny (stable)") . '</h4>

<p>' . sprintf(_("pgAdmin %s is <a href=\"%s\">available</a> directly from Debian. You can install pgAdmin just as you would do with any other Debian package (apt-get install pgadmin3)."), "http://packages.debian.org/lenny/pgadmin3", "1.8.4") . '</p>

<h4>' . _("Debian Squeeze (testing)") . '</h4>

<p>' . sprintf(_("pgAdmin %s is <a href=\"%s\">available</a> directly from Debian. You can install pgAdmin just as you would do with any other Debian package (apt-get install pgadmin3)."), "http://packages.debian.org/squeeze/pgadmin3", "1.10.2") . '</p>

<h4>' . _("Debian Sid (unstable)") . '</h4>

<p>' . sprintf(_("pgAdmin %s is <a href=\"%s\">available</a> directly from Debian. You can install pgAdmin just as you would do with any other Debian package (apt-get install pgadmin3)."), "http://packages.debian.org/sid/pgadmin3", "1.10.2") . '</p>

<h4>' . _("Installation") . '</h4>

<p>' . _("Run the following commands as <i>root</i> to install pgAdmin III") . '</p>

<div class="pgaCode">
apt-get update<br />
apt-get install pgadmin3
</div>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
