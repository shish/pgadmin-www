<?php 

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Translation - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . sprintf(_("pgAdmin III v1.4 was released with over a dozen language options and more than another 25 translations are in various states of completion. If a language you find here isn't included in your distribution package, you can easily upgrade your installation to support that additional translation. Simply locate the appropriate language file (pgadmin3.mo) in the <a href=\"%s\">translation status</a> section, create a subdirectory in your installation's i18n directory with a name corresponding to the locale code, and copy the new translation file into that directory. You might need to update the language description file <a href=\"%s\">i18n/pgadmin3.lng</a> to allow the new translation to appear in the language selection combobox."), "status.php", "http://svn.pgadmin.org/cgi-bin/viewcvs.cgi/*checkout*/trunk/pgadmin3/i18n/pgadmin3.lng") . '</p>

<h2>' . _("Contribute a translation") . '</h2>

<p>' . sprintf(_("We need your help to translate pgAdmin III into additional languages. Everyone can participate, please refer to the translation <a href=\"%s\">howto</a> for more information. This web site can also be translated using the <a href=\"%s\">pgadmin3_website.pot</a> file. If you are interested in the translation of PostgreSQL server messages, please visit the <a href=\"%s\">PostgreSQL National Language Support</a> project page. "), "howto.php", "/locale/pgadmin3_website.pot", "http://developer.postgresql.org/~petere/nlsstatus/") . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
