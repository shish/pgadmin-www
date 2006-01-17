<?php 

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Feature");
$PAGE_CONTENT = '

<h1>' . _("Features") . '</h1>

<p>' . sprintf(_("pgAdmin has a huge array of features and by far the best way to see them all is to <a href=\"%s\">download</a> a copy and give it a try. Here's a brief list to give you an idea of it's capabilities:"), "download/") . '</p>

<h2>' . _("Multiplatform") . '</h2>
<ul>
  <li>' . _("Microsoft Windows &trade; 2000 and above") . '</li>
  <li>' . _("Linux") . '</li>
  <li>' . _("FreeBSD") . '</li>
  <li>' . _("Mac OSX") . '</li>
  <li>' . _("Solaris") . '</li>
</ul>

<h2>' . _("Designed for multiple PostgreSQL versions and derivatives") . '</h2>
<ul>
  <li>' . _("PostgreSQL 7.3 and above") . '</li>
  <li>' . _("Pervasive Postgres") . '</li>
  <li>' . _("EnterpriseDB") . '</li>
  <li>' . _("SRA PowerGres") . '</li>
</ul>

<h2>' . _("Extensive documentation") . '</h2>
<ul>
  <li>' . _("pgAdmin Documentation") . '</li>
  <li>' . _("Guru Hints to help less experienced users") . '</li>
  <li>' . _("PostgreSQL documentation (on-line and off-line)") . '</li>
  <li>' . _("Slony-I documentation") . '</li>
</ul>

<h2>' . _("Multilingual interface") . '</h2>
<ul>
  <li>' . sprintf(_("Over a dozen supported translations and over 25 partial translations. A detailed list of supported languages is available on the <a href=\"%s\">translation status</a> page."), "translation/status.php") . '</li>
</ul>

<h2>' . _("Data access") . '</h2>
<ul>
  <li>' . _("Native PostgreSQL acccess (no ODBC layer needed)") . '</li>
  <li>' . _("Powerful query tool with colour syntax highlighting") . '</li>
  <li>' . _("Very fast datagrid for display/entry of data") . '</li>
</ul>

<h2>' . _("Routine maintenance") . '</h2>
<ul>
  <li>' . _("Configuration file editing") . '</li>
  <li>' . _("Auto-vacuum management (PostgreSQL 8.1 and above)") . '</li>
  <li>' . _("Logfile browser") . '</li>
  <li>' . _("Lock viewer") . '</li>
  <li>' . _("Server status/process viewer") . '</li>
  <li>' . _("SQL/shell/batch job scheduling agent") . '</li>
</ul>

<h2>' . _("Access to all PostgreSQL objects") . '</h2>
<p>' . _("Objects are displayed with their SQL definition, and a user friendly list of properties. Dependent, and dependency objects may also be browsed, and object statistics viewed where appropriate.") . '</p>
<ul>
  <li>' . _("Aggregates") . '</li>
  <li>' . _("Casts") . '</li>
  <li>' . _("Columns") . '</li>
  <li>' . _("Constraints") . '</li>
  <li>' . _("Conversions") . '</li>
  <li>' . _("Databases") . '</li>
  <li>' . _("Domains") . '</li>
  <li>' . _("Functions") . '</li>
  <li>' . _("Groups") . '</li>
  <li>' . _("Indexes") . '</li>
  <li>' . _("Operator classes") . '</li>
  <li>' . _("Operators") . '</li>
  <li>' . _("PostgreSQL servers") . '</li>
  <li>' . _("Roles") . '</li>
  <li>' . _("Rules") . '</li>
  <li>' . _("Schemas") . '</li>
  <li>' . _("Sequences") . '</li>
  <li>' . _("Server-side languages (such as pl/pgsql, pl/perl, pl/python, etc.)") . '</li>
  <li>' . _("Slony-I objects (such as nodes, clusters etc.)") . '</li>
  <li>' . _("Tables") . '</li>
  <li>' . _("Tablespaces") . '</li>
  <li>' . _("Trigger functions") . '</li>
  <li>' . _("Types") . '</li>
  <li>' . _("Users") . '</li>
  <li>' . _("Views") . '</li>
</ul>

<h2>' . _("Multibyte support") . '</h2>
<p>' . _("pgAdmin III supports most PostgreSQL server-side encodings:") . '</p>
<ul>
  <li>' . _("SQL_ASCII") . '</li>
  <li>' . _("EUC_JP, EUC_CN, EUC_KR, EUC_TW") . '</li>
  <li>' . _("JOHAB") . '</li>
  <li>' . _("LATIN1, LATIN2, LATIN3, LATIN4, LATIN5, LATIN6, LATIN7, LATIN8, LATIN9, LATIN10") . '</li>
  <li>' . _("ISO_8859_5, ISO_8859_6, ISO_8859_7, ISO_8859_8") . '</li>
  <li>' . _("UNICODE/UTF-8") . '</li>
  <li>' . _("MULE_INTERNAL") . '</li>
  <li>' . _("KOI8") . '</li>
  <li>' . _("WIN") . '</li>
  <li>' . _("ALT") . '</li>
  <li>' . _("WIN1256") . '</li>
  <li>' . _("TCVN") . '</li>
  <li>' . _("WIN874") . '</li>
</ul>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
