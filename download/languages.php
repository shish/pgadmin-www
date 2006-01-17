<?php 

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - Languages");
$PAGE_CONTENT = '

<h1>' . _("Languages") . '</h1>

<p>' . sprintf(_("Languages not included in the distribution package may be added at a later time. Please check the <a href=\"%s\">translation status</a> page to see whether your preferred language is available already, and to download the message catalogue."), "../translation/status.php") . '</p>

<p>' . _("To update a language, download the appropriate <i>.mo</i> file, and update your local copy. This is normally stored under <i>/usr/share/pgadmin3/i18n/lc_CC</i> on Linux and other Unixes or <i>C:\\Program Files\\pgAdmin III\X.Y\\i18n\\lc_CC</i> on Windows, where <i>lc_CC</i> is your language code and country code - e.g. <i>pt_BR</i> for Portuguese as spoken in Brazil") . '</p>

<p>' . sprintf(_("To add a new language, follow the update procedure, but create the lc_CC directory if required and save the new message catalogue in it. You may also need to update the <i>i18n/pgadmin3.lng</i> file which is also available from the <a href=\"%s\">translation status</a>."), "../translation/status.php") . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
