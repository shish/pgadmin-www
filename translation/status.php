<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

// Translation status caches
require_once "../include/po_status.php";
$translated = new po_status();
$outofdate = new po_status();

$translated->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
$translated->setSvnRoot($_SERVER["DOCUMENT_ROOT"]."/svnrepo/pgadmin3");

$outofdate->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
$outofdate->setSvnRoot($_SERVER["DOCUMENT_ROOT"]."/svnrepo/pgadmin3");

$cache_translated = "/tmp/pgadmin_translated_cache.txt";
$cache_outofdate  = "/tmp/pgadmin_outofdate_cache.txt";

$translated->_cache_load($cache_translated);
$outofdate->_cache_load($cache_outofdate);

$PAGE_TITLE = _("pgAdmin: Translation - Status");
$PAGE_CONTENT = '

<h1>' . _("Status") . '</h1>

<p>' . _("If you are the maintainer of a translation and wish to update your work, download the template file (*.pot extension), execute poEdit and use the 'update from template' command. Translate the text and send us the *.po file.") . '</p>

<p>' . _("If you are not the author/maintainer of a translation and wish to submit a translation fix: download the language file (*.po extension), make the necessary corrections and send it back to us CC'd to the translator.") . '</p>

<h2>' . sprintf(_("Published translations (%d)"), $translated->getNbLanguages()) . '</h2>
<center>';

if (isset($_GET['pub_poSortBy']))
  $sortBy = $_GET['pub_poSortBy'];
else
  $sortBy = "";
$translated->sortBy($sortBy, SORT_ASC);
$PAGE_CONTENT .= $translated->getDisplay("pub");

$PAGE_CONTENT .= '</center>

<h2>' . sprintf(_("Out of date translations (%d)"), $outofdate->getNbLanguages()) . '</h2>

<p>' . _("The translations below are not considered complete enough for inclusion in current releases. Around 750 translated strings indicate v1.0 support, 1000 strings v1.2, 1500 strings for v1.4 and 1850 for v1.6. When using an incomplete translation on a newer pgAdmin version, you will get a mixture of translated and untranslated dialogs (usually on less frequently used ones), but general usability shouldn't be affected. If you would like to continue the work, please don't hesitate to contact the current maintainer (please CC pgadmin-hackers@postgresql.org)!") . '</p>

<center>';

if (isset($_GET['ood_poSortBy']))
  $sortBy = $_GET['ood_poSortBy'];
else
  $sortBy = "";
$outofdate->sortBy($sortBy, SORT_ASC);
$PAGE_CONTENT .= $outofdate->getDisplay("ood");

$PAGE_CONTENT .= '</center>
';

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
