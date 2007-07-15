<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - Ubuntu");
$PAGE_CONTENT = '

<h1>' . _("Ubuntu") . '</h1>

<h4>' . sprintf(_("Maintainer: %s"), "Rapha&euml;l Enrici") . '</h4>

<p>' . sprintf(_("pgAdmin III packages are available for the <a href=\"%s\">Ubuntu</a> feisty distribution."), "http://www.ubuntu.com/") . '</p>

<h4>' . _("Before you try to install") . '</h4>

<p>The archive files are signed with a dedicated GPG Key. Before trying to install the pgAdmin III packages, you should add the corresponding public key to your apt keyring this way (as root):</p>

<div class="pgaCode">
wget -q -O - http://www.pgadmin.org/pgp/archive_key_debian_ubuntu.gpg | apt-key add -
</div>

<p>Then follow the instructions below.</p>

<h4>' . _("Ubuntu Feisty") . '</h4>

<p>' . sprintf(_("An APT repository is provided to ease installation. Before you start installation, please choose a mirror from the list of <a href=\"%s\">PostgreSQL mirrors</a>. Click one of the flags, and copy the URL you are redirected to. On each mirror, the packages are located in: <i>/pgadmin3/release/ubuntu</i>"), "http://www.postgresql.org/download/mirrors-ftp") . '</p>

<p>' . _("Please, note that you need to ENABLE THE UNIVERSE COMPONENT as wxWidgets2.8 is available from universe only at the moment. To do so, check the Ubuntu documentation or at least try to launch the update-manager configuration from the System/Administration Gnome menu.") . '</p>

<p>' . _("Then, edit /etc/apt/sources.list file and add the following line:") . '</p>

<div class="pgaCode">
deb [MIRROR URL]/pgadmin3/release/ubuntu feisty pgadmin
</div>

<p>' . _("For example, for France, you can try:") . '</p>

<div class="pgaCode">
deb ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/release/ubuntu feisty pgadmin
</div>

<p>' . _("Simply use Synaptic to install pgAdmin III as you would do with any other package or run the following command from the command prompt:") . '</p>

<div class="pgaCode">
sudo apt-get update<br />
sudo apt-get install pgadmin3
</div>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
