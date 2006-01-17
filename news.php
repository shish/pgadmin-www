<?php 

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Latest news");
$PAGE_CONTENT = '

<h1>' . _("Latest news") . '</h1>

<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2005-12-14", "1.4.1") . '</h2>

<p>' . _("I'm pleased to announce the release of pgAdmin 1.4.1, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.postgresql.org/ftp/pgadmin3/release/v1.4.1/">http://www.postgresql.org/ftp/pgadmin3/release/v1.4.1/</a></p>

<p>' . _("v1.4.1 is primarily a bug fix release, including the following changes:") . '</p>
<ul>
  <li>' . _("Default the encoding of new databases to the cluster encoding.") . '</li>
  <li>' . _("Sort encoding names in dlgDatabase.") . '</li>
  <li>' . _("Store UTF8 connect info in pgpass.conf if necessary.") . '</li>
  <li>' . _("Major fix for wx2.6.2 API changes (comboboxes).") . '</li>
  <li>' . _("Drop constraints on columns before the columns themselves.") . '</li>
  <li>' . _("Graphical explain: distinct scan images.") . '</li>
  <li>' . _("Fix the server status SQL query.") . '</li>
  <li>' . _("Include pg_dump/pg_restore in the Mac OSX bundle.") . '</li>
  <li>' . _("Use a proper 'Save As' style dialogue for selecting backup files.") . '</li>
  <li>' . _("Don't show primary key hint when editing views.") . '</li>
  <li>' . _("Add missing NO ACTION FK constraint.") . '</li>
  <li>' . _("Fix procedure/triggerFunc collection list.") . '</li>
  <li>' . _("Allow all 8.x column changes.") . '</li>
  <li>' . _("Fix param name quoting for procedures.") . '</li>
</ul>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p>

<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2005-11-07", "1.4.0") . '</h2>

<p>' . _("I'm pleased to announce the release of pgAdmin 1.4.0, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.postgresql.org/ftp/pgadmin3/release/v1.4.0/">http://www.postgresql.org/ftp/pgadmin3/release/v1.4.0/</a></p>

<p>' . _("v1.4.0 contains a number of new features over previous releases, including:") . '</p>
<ul>
  <li>' . _("Slony-I support.") . '</li>
  <li>' . _("An SQL/shell job scheduling agent.") . '</li>
  <li>' . _("PostgreSQL 8.1 support:") . '
  <ul>
    <li>' . _("Autovacuum administration.") . '</li>
    <li>' . _("Roles.") . '</li>
    <li>' . _("Stored procedures (ie. Functions with OUT parameters).") . '</li>
    <li>' . _("Prepared transactions.") . '</li>
  </ul></li>
  <li>' . _("Allow server registration without connect.") . '</li>
  <li>' . _("Allow connection selection in the query tool.") . '</li>
  <li>' . _("Major source tree and architecture overhaul to allow further extensibility.") . '</li>
  <li>' . _("Unix domain socket support.") . '</li>
  <li>' . _("'Guru Hints' to help new users.") . '</li>
  <li>' . _("Password can be stored in .pgass/pgpass.conf files.") . '</li>
  <li>' . _("New graphics throughout.") . '</li>
  <li>' . _("Alert the user when a query finishes in the query tool if the window is not active.") . '</li>
  <li>' . _("Graphical EXPLAIN.") . '</li>
  <li>' . _("Support for Asynchronous Notifications in the query tool.") . '</li>
</ul>


<p>' . sprintf(_("As well as many other tweaks, improvements and bug fixes, details of which may be found in the <a href=\"%s\">changelog</a>."), "development/changelog.php") . '</p>

<p>' . _("I would like to take this opportunity to thank all those who gave their time to help with the development, testing, translation and packaging of this release.") . '</p>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
