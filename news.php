<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Latest news");
$PAGE_CONTENT = '

<h1>' . _("Latest news") . '</h1>

<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2006-07-19", "1.4.3") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of pgAdmin 1.4.3, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.4.3 is primarily a bug fix release, including the following changes:") . '</p>
<ul>
  <li>' . _("Display job steps and schedules properly in the Job dialogue, per Eric Shuman.") . '</li>
  <li>' . _("Display interval precision properly, per Walter Haslbeck") . '</li>
  <li>' . _("Return the script return value when executing shell scripts from pgAgent, per Eric Shuman") . '</li>
  <li>' . _("Use a slider instead of a spin control to avoid a wxGTK bug on the status form, per Peter Eisentraut.") . '</li>
  <li>' . _("Allow non-superusers to edit roles where appropriate [Thomas Sondag]") . '</li>
  <li>' . _("Allow non-superuser roles with the appropriate permissions to create roles and DBs.") . '</li>
  <li>' . _("Fix a bug in the pgpass save code that could damage files.") . '</li>
  <li>' . _("Use the correct encoding in the View Data filter options per Ferenc.") . '</li>
  <li>' . _("Add an accelerator key (Delete) for deleting rows in the edit grid, per Emil Nowak.") . '</li>
  <li>' . _("Ensure the user is warned if files cannot be written.") . '</li>
  <li>' . _("Install PkgInfo into the Contents directory in the OSX appbundle, per John DeSoi.") . '</li>
  <li>' . _("Detect and correctly use GNU vs. BSD xargs when completing an appbundle install, per John DeSoi.") . '</li>
</ul>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p>

<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2006-03-07", "1.4.2") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of pgAdmin 1.4.2, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.4.2 is primarily a bug fix release, including the following changes:") . '</p>
<ul>
  <li>' . _("Fix a typo in the admin pack README [August Zajonc].") . '</li>
  <li>' . _("Fix serial column detection for 8.1 per Kris Jurka.") . '</li>
  <li>' . _("Mask the password when logging the connection string.") . '</li>
  <li>' . _("Properly escape single quotes in connection strings.") . '</li>
  <li>' . _("Re-arrange the Win32 dependencies so that iconv, libxml2 and wxwidgets are located in $PGADIR/../pgadmin3-deps/.") . '</li>
  <li>' . _("Properly enable the redo button in the Query Tool when appropriate, per PromoTrade.") . '</li>
  <li>' . _("Add missing files to the Unix tarball, per Andrus - xtra/wxbuild/*, src/utils/precomp.cpp, src/main/pgAdmin3.rc.") . '</li>
  <li>' . _("Read config files in the local encoding scheme.") . '</li>
  <li>' . _("Display the definition of set returning procedures correctly.") . '</li>
  <li>' . _("Fix drop procedure by including IN/OUT parameter flags in the name.") . '</li>
  <li>' . _("Fix role SQL - correctly define CREATEROLE/NOCREATEROLE per Andrus.") . '</li>
  <li>' . _("Honour the copy quoting setting properly in the SQL results pane.") . '</li>
  <li>' . _("Set the initial Unicode/Local charset options correctly in the Export dialogue.") . '</li>
  <li>' . _("Fix PK detection in EditGrid per Andrus Moor.") . '</li>
  <li>' . _("Fix Bitmap Index explain per Alexander Kirpa.") . '</li>
  <li>' . _("Use ELSIF not ELSEIF in pgagent.sql for compatibility with 7.x servers [Glen Sasek].") . '</li>
  <li>' . _("Exclude system schemas by name rather than OID, so that 'public' can be safely renamed.") . '</li>
  <li>' . _("fix slony node statistics.") . '</li>
  <li>' . _("Fix: Unsubscribe set on receiver.") . '</li>
  <li>' . _("Another wxComboBox(2.6.2) related fix.") . '</li>
</ul>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p>


<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2005-12-14", "1.4.1") . '</h2>

<p>' . _("I'm pleased to announce the release of pgAdmin 1.4.1, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

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

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

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
