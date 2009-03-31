<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - Debian");
$PAGE_CONTENT = '

<h1>' . _("Debian") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Rapha&euml;l Enrici") . '</h4>

<p>' . sprintf(_("pgAdmin III packages are available for <a href=\"%s\">Debian</a> stable, testing and unstable distributions. These packages are also well-suited for <a href=\"%s\">Knoppix</a> and other Debian based distributions"), "http://www.debian.org/", "http://www.knoppix.net/") . '</p>

<h4>' . _("Debian Woody") . '</h4>

<p>' . _("We don't support this Debian version anymore.") . '</p>

<h4>' . _("Debian Sarge (oldstable)") . '</h4>

<p>' . _("We don't support this Debian version anymore.") . '</p>

<h4>' . _("Debian Etch (stable)") . '</h4>

<p>' . _("pgAdmin III 1.4.3 is available directly from Debian. You can install pgAdmin III just as you would do with any other Debian package (apt-get install pgadmin3).") . '</p>

<p>' . sprintf(_("If you need a more up to date version of pgAdmin III, an APT repository is provided to ease installation. Before you start installation, please choose a mirror from the list of <a href=\"%s\">PostgreSQL mirrors</a>. Click one of the flags, and copy the URL you are redirected to. On each mirror, the packages are located in: <i>/pgadmin3/release/debian</i>"), "http://wwwmaster.postgresql.org/download/mirrors-ftp") . '</p>

<p>' . _("Edit /etc/apt/sources.list file and add the following line:") . '</p>

<div class="pgaCode">
deb [MIRROR URL]/pgadmin3/release/debian etch pgadmin
</div>

<p>' . _("For example, for France, you can try:") . '</p>

<div class="pgaCode">
deb ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/release/debian etch pgadmin
</div>

<h4>' . _("Debian Lenny (testing)") . '</h4>

<p>' . sprintf(_("An APT repository is provided to ease installation. Before you start installation, please choose a mirror from the list of <a href=\"%s\">PostgreSQL mirrors</a>. Click one of the
flags, and copy the URL you are redirected to. On each mirror, the packages are located in: <i>[MIRROR URL]/pgadmin3/release/debian</i>"), "http://wwwmaster.postgresql.org/download/mirrors-ftp") . '</p>

<p>' . _("Edit /etc/apt/sources.list file and add the following line:") . '</p>

<div class="pgaCode">
deb [MIRROR URL]/pgadmin3/release/debian lenny pgadmin
</div>

<p>' . _("For example, for France, you can try:") . '</p>

<div class="pgaCode">
deb ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/release/debian lenny pgadmin
</div>

<h4>' . _("Debian Sid (unstable)") . '</h4>

<p>' . _("pgAdmin III is published on the official Debian Unstable repository. However, from time to time unstable may become broken, you can try to check for packages from our mirrors as described above for Debian/testing. You only need to change testing to unstable in the sources.list lines.") . '</p>

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
