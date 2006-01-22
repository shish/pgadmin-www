<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Screenshots - Multibyte and i18n");
$PAGE_CONTENT = '

<h1>' . _("Multibyte and i18n") . '</h1>

<p>' . _("pgAdmin III supports most PostgreSQL server-side encodings including Unicode UTF-8 and other multi-byte charactersets.") . '</p>

<center><a href="/images/screenshots/pgadmin3_encoding.png" target="_Shot"><img src="/images/screenshots/pgadmin3_encoding.png" alt="' . _("Database encoding selection") . '" width="195" height="255" /></a></center>

<p>' . _("The pgAdmin III interface has been translated into more than a dozen languages, and partially translated into another 25 more. The interface supports all known Unicode scripts, even Right to Left (RTL) scripts like Arabic.") . '</p>

<p>' . sprintf(_("A detailed list of supported languages is available in the <a href=\"%s\">Translation</a> section of the website."), "../translation/") . '</p>

<center><a href="/images/screenshots/pgadmin3_languages.png" target="_Shot"><img src="/images/screenshots/pgadmin3_languages.png" alt="' . _("Database encoding selection") . '" width="217" height="244" /></a></center>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
