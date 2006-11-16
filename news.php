<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Latest news");
$PAGE_CONTENT = '

<h1>' . _("Latest news") . '</h1>

<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2006-11-16", "1.6.0") . '</h2>

<p>' . _("I'm pleased to announce the release of pgAdmin 1.6.0, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.6.0 represents over a year of development and testing to bring you a host of new features and improvements including:") . '</p>
<ul>
  <li>' . _("PostgreSQL 8.2 support:") . '
  <ul>
    <li>' . _("Concurrent index builds.") . '</li>
    <li>' . _("Privilege changes (database CONNECT, and sequence USAGE).") . '</li>
    <li>' . _("Use E'' style escape string syntax when required.") . '</li>
    <li>' . _("Shared database comments.") . '</li>
  </ul></li>
  <li>' . _("Overhaul of server config settings.") . '</li>
  <li>' . _("Allow database and schema display to be restricted.") . '</li>
  <li>' . _("Configurable indents in the SQL editor.") . '</li>  
  <li>' . _("Support for language templates.") . '</li> 
  <li>' . _("Add -a and -q command line options to auto connect to a server and open a query window respectively.") . '</li> 
  <li>' . _("Allow result copy quoting configuration to be set explicitly rather than using the result export settings.") . '</li>
  <li>' . _("Allow set returning functions to be created.") . '</li> 
  <li>' . _("Display the client start time on the status dialogue with PostgreSQL 8.1+") . '</li> 
  <li>' . _("Add a password file editor.") . '</li> 
  <li>' . _("Prevent deletion of the blank item in config editors, and ensure undo will only work on the appropriate line.") . '</li> 
  <li>' . _("Allow the number of rows shown in the Edit Grid to be limited and add a 'View top 100 rows' option to the table/view context menus.") . '</li>
  <li>' . _("Add autocompletion to the Query Tool, based on the logic used by psql. Triggered with Control+Space, and optionally the Tab key as well.") . '</li> 
  <li>' . _("Allow selection and copy of subsets of the columns and rows in the Edit Grid.") . '</li> 
  <li>' . _("Add a 'Favourites' query organiser to the Query Tool.") . '</li> 
  <li>' . _("Display column dependencies.") . '</li> 
  <li>' . _("Minimal linking for pgAgent under *nix.") . '</li> 
  <li>' . _("Reject invalid command line options in pgAgent.") . '</li> 
  <li>' . _("Allow the admin modules to be built with PGXS if required.") . '</li> 
  <li>' . _("Enhance the query tool to allow copy/paste of arbitrary groups of columns, rows or individual cells.") . '</li> 
  <li>' . _("Allow the tab character to be used as the clipboard column separator to allow pasting of query results straight into apps like Excel, or OOo Calc.") . '</li> 
  <li>' . _("Use virtual data table for Query Tool, to eliminate retrieval time.") . '</li> 
  <li>' . _("Add CREATE/INSERT/UPDATE/SELECT script menu options for various object types to create script templates.") . '</li> 
  <li>' . _("Pre-encrypt passwords before sending them down the wire, or displaying them in SQL statements.") . '</li> 
  <li>' . _("Add an internal XML reporting API, HTML XSL stylesheet with XSLT processing capabilities and selection of schema/object/data reports.") . '</li> 
  <li>' . _("Allow pasting of entire rows in the View Data tool.") . '</li> 
  <li>' . _("Allow the user to choose whether or not to restore the environment when reconnecting to a particular server.") . '</li> 
  <li>' . _("Detect and warn the user of concurrent edits of functions, views and job steps.") . '</li> 
  <li>' . _("Add brace highlighting to the SQL Text Box control.") . '</li> 
  <li>' . _("Add a word wrap option to the query tool editor.") . '</li> 
  <li>' . _("Add options to show line ends and whitespaces in the query tool.") . '</li> 
  <li>' . _("Highlight the error word in the query tool if a syntax error is reported by the database.") . '</li> 
  <li>' . _("Display, and allow null values to be set in boolean columns in the Edit Grid.") . '</li> 
  <li>' . _("Retain values in the edit grid following a failed insert or update.") . '</li> 
  <li>' . _("Display non-default op classes in index definitions.") . '</li> 
  <li>' . _("Add a pgAgent option to log to a file on *nix.") . '</li> 
  <li>' . _("Add a new Find & Replace dialogue to the query tool, implementing all the normal Find & Replace options as well as a powerful regular expression search mode.") . '</li> 
  <li>' . _("Add 'scratch pads' to the Edit Grid and Query Tool windows to use when copying and pasting data back and forth.") . '</li> 
  <li>' . _("Make elements of the main windows dockable for maximum configurability.") . '</li> 
  <li>' . _("Add -qc switch to open query tool and autoconnect using a connection string.") . '</li> 
  <li>' . _("Add support for building Mac Universal Binaries.") . '</li> 
  <li>' . _("Use SQL standard type names where appropriate. Show them as 'aliases' in the browser.") . '</li> 
  <li>' . _("Hide binary data (bytea) in the edit grid.") . '</li> 
</ul>


<p>' . sprintf(_("As well as many other tweaks, improvements and bug fixes, details of which may be found in the <a href=\"%s\">changelog</a>."), "development/changelog.php") . '</p>

<p>' . _("I would like to take this opportunity to thank all those who gave their time to help with the development, testing, translation and packaging of this release.") . '</p>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p>




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

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
