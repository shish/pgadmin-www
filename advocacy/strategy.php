<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Advocacy - Strategy");
$PAGE_CONTENT = '

<h1>' . _("Strategy") . '</h1>

<p>' . _("The proposed strategy is quite simple:") . '</p>

<ul>
  <li>' . sprintf(_("Before you start, it is recommended that you translate pgAdmin and the web site in your language if it hasn't already been done. Just visit the <a href=\"%s\">translation</a> page for details on how to get started."), "../translation/") . '<br />&nbsp;</li>

  <li>' . sprintf(_("Then, register pgAdmin on free software web sites in your country. We are highly interested in community web sites. Some countries have one or two major web sites for free software. For example, pgAdmin was registered on <a href=\"%s\">Freshmeat</a>."), "http://freshmeat.net/projects/pgadmin3/?topic_id=68") . '<br />&nbsp;</li>

  <li>' . _("You are free to register everywhere as long as the registration conditions do not limit the rights of pgAdmin Team members.") . '<br />&nbsp;</li>

  <li>' . _("Please note that the official spelling is <b>pgAdmin</b>. For filename or other canonical purposes, the spelling <b>pgadmin</b> or <b>pgadmin3</b> is used (though the former is now preferred).") . '<br />&nbsp;</li>

  <li>' . sprintf(_("Try to publish 'standard' information about pgAdmin to help ensure accuracy and consistency of information. Some examples are shown on the <a href=\"%s\">information</a> page."), "information.php") . '<br />&nbsp;</li>

  <li>' . _("Cross your fingers and wait until PostgreSQL becomes the world's number one database.") . '<br />&nbsp;</li>

</ul>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
