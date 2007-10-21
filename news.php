<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Latest news");
$PAGE_CONTENT = '

<h1>' . _("Latest news") . '</h1>

<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2007-10-22", "1.8.0") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of 
pgAdmin 1.8.0, the Open Source graphical PostgreSQL administration tool for 
Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in 
source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.8.0 represents nearly a year of development and testing to bring you 
a host of new features and improvements including:") . '</p>

<b>Major features</b>
<ul>
<li>' . _("Add a macro facility to the Query Tool.") . '</li>
<li>' . _("Add support for multi-parameter aggregates.") . '</li>
<li>' . _("Treat view columns as first class citizens. Show them on the treeview, and allow their properties page to be viewed. Allow editting of the default value and comment, and reflect this in the reverse engineered SQL for the view.") . '</li>
<li>' . _("Integrate the EnterpriseDB pl/pgsql and EDB-SPL debugger with pgAdmin.") . '</li>
<li>' . _("Add support for enums in PostgreSQL 8.3+.") . '</li>
<li>' . _("Display catalogs separately from schemas, and don't treat them as system objects any longer (they can be hidden using the display options). Show only tables & views (as 'catalog objects') in pseudo-system catalogs such as information_schema and EDB's sys and dbo catalogs. Lock down functionality to prevent create/edit/drop options being offered.") . '</li>
<li>' . _("Treat all functions & procedures as 'Functions' in PostgreSQL, and class only EnterpriseDB edbspl functions returning void as 'Procedures'.") . '</li>
<li>' . _("Add a set of options to allow the user to hide selected object types from the treeview. Note that the new default settings will hide less commonly used objects such as casts, languages, aggregates, operators etc.") . '</li>
<li>' . _("Browser support for Operator Families in PostgreSQL 8.3.") . '</li>
<li>' . _("Allow GUC variables to be preset on functions in PostgreSQL 8.3.") . '</li> 
</ul>
<b>Enhancements</b>
<ul>
<li>' . _("Speed up loading of functions and procedures by rewriting some horribly inefficient code.") . '</li>
<li>' . _("Numerous changes to the database browser code to ensure changes to objects are properly reflected in the main window. In addition, the expanded/collapsed states of child nodes are retained wherever possible during refresh operations.") . '</li>
<li>' . _("Add an option to the Report Tool to open the output file in the default browser.") . '</li>
<li>' . _("Add keyboard shortcuts to show and hide UI elements.") . '</li>
<li>' . _("Display the output pane in the query tool at query completion if it's currently hidden.") . '</li>
<li>' . _("Retain column widths when refreshing the edit grid.") . '</li>
<li>' . _("Remove bundled copies of PostgreSQL/Slony docs to make it easier to localise the rest. Instead allow the use of local or online copies of the PostgreSQL, EnterpriseDB or Slony docs, each independently of the other.") . '</li>
<li>' . _("Add a new command line option (-f ) to open an SQL script automatically when using -q or -qc.") . '</li>
<li>' . _("Add fillfactor support on tables and indexes.") . '</li>
<li>' . _("Add a new command line options (-cp ) to allow direct editing of pgpass files.") . '</li>
<li>' . _("Add auto-indent to the query tool.") . '</li>
<li>' . _("Add an option to show indent guides in the query tool.") . '</li>
<li>' . _("Allow spaces to be used instead of tabs in SQL editors, and ensure the width can be set sensibly.") . '</li>
<li>' . _("Allow detection and conversion of line ending format in the query tool.") . '</li>
<li>' . _("Add support for function cost and row estimations in PostgreSQL 8.3+.") . '</li>
<li>' . _("Display the is_called sequence flag.") . '</li>
<li>' . _("Position the cursor at the error position when an error occurs in the Query Tool. Ensure the line is visible.") . '</li>
<li>' . _("Use Oracle style syntax for edbspl triggers.") . '</li>
<li>' . _("Create and reverse engineer edbspl procedures using Oracle compatible syntax.") . '</li>
<li>' . _("Preserve column widths between queries in the query tool.") . '</li>
<li>' . _("Use EnterpriseDB's utilities for dump and restore EDB databases to ensure non-PG extensions can be handled.") . '</li>
<li>' . _("Add support for packages on EnterpriseDB.") . '</li>
<li>' . _("Add support for public synonyms on EnterpriseDB.") . '</li>
<li>' . _("Use pg_statindex (if available) to optionally display additional index statistics on a per-table basis. Also works for index-constraints.") . '</li>
<li>' . _("Allow install time re-branding. This allows rebranded versions of pgAdmin to be distributed without code modifications, but with references to the original pgAdmin being displayed instead. Also add support for shaped splash screens.") . '</li>
<li>' . _("Replace the Mac installer with code to create a distribution disk image.") . '</li>
<li>' . _("Allow entire servers to be backed up.") . '</li>
<li>' . _("Allow global objects to be backed up.") . '</li>
<li>' . _("Add a guru hint to warn the user of the consequences of storing passwords.") . '</li>
<li>' . _("Add options to enable/disable triggers, both individually and per-table.") . '</li>
<li>' . _("Use pg_stattuple (if available) to optionally display additional table statistics on a per-table basis.") . '</li>
<li>' . _("Add a 'Run Now' options for pgAgent jobs.") . '</li>
<li>' . _("Retain the clipboard contents on app exit.") . '</li>
<li>' . _("Add an option to show NULLs as  in the Query Tool.") . '</li>
<li>' . _("Remember last used save definition filename.") . '</li>
<li>' . _("Remember last used backup/restore filenames.") . '</li>
<li>' . _("Allow GUCs to be set on users, roles and databases at create time.") . '</li>
</ul>
<b>Bug fixes</b>
<ul>
<li>' . _("Fixed UTF8 option was not effective by file reading and writing of a query and fixed crash at the time of file save.") . '</li>
<li>' . _("Ensure files can be converted to the required encoding before saving.") . '</li>
<li>' . _("Warn the user and allow her to abort before re-running a backup or restore to or from the same file, in the same session (can occur if the first attempt returns an error or warning).") . '</li>
<li>' . _("Ensure logfiles and pgpass files can be correctly saved on Windows when the username contains non-ASCII chars.") . '</li>
<li>' . _("Ensure we always allow the maximum string length possible to be entered in the Edit Grid.") . '</li>
<li>' . _("Sort server list alphabetically.") . '</li>
<li>' . _("Fix a crash in the Edit Grid which occured if Delete was pressed whilst editing a boolean.") . '</li>
<li>' . _("Load second and subsequent postgresql.conf files into the config editor correctly.") . '</li>
<li>' . _("Prompt the user to save changes before opening a file from the recent files menu on the Query Tool.") . '</li>
<li>' . _("Don't try to detect if integrated autovacuum is running on &lt; 8.1.") . '</li>
<li>' . _("Display the constraint OID for index constraints, not the index OID. Add the index OID as a new property.") . '</li>
<li>' . _("Ensure the password change dialog works with stored passwords.") . '</li>
<li>' . _("Copy and paste data correctly when in a cell editor in the edit grid.") . '</li>
<li>' . _("Avoid creating graphical explain nodes for triggers as they aren't part of the plan and mess up the layout.") . '</li>
<li>' . _("Fix reverse engineering of data types with a size of 0, such as \"timestamp(0) without timezone\".") . '</li>
<li>' . _("Handle resetting of sequence values more consistently.") . '</li>
<li>' . _("Function/procedure signatures do not include OUT params. Fix this oversight, and cleanup much of the related code.") . '</li>
<li>' . _("Ensure pgAgent jobs can be managed on Greenplum database.") . '</li>
<li>' . _("Fix the table, index and index constraint tablespace property combo boxes to allow changes to tablespace.") . '</li>
<li>' . _("Refactor the Query Tool's execQuery function to prevent pgAdmin freezing while two long running queries are executing simultaneously.") . '</li>
</ul>
<b>Code cleanup/maintainability</b>
<ul>
<li>' . _("Remove a lot debugging code of little or no use.") . '</li>
<li>' . _("Refactor code to remove support for building the Query Tool with a listview rather than a grid.") . '</li>
<li>' . _("Refactor code to remove database base classes.") . '</li>
<li>' . _("Remove code specific to versions of wxWidgets that we no longer support.") . '</li>
<li>' . _("Remove obsolete support for non-Unicode builds.") . '</li>
</ul>
<p>' . _("As well as many other tweaks, improvements and bug fixes.") . '</p>

<p>' . _("I would like to take this opportunity to thank all those who gave their 
time to help with the development, testing, translation and packaging of this release.") . '</p>

<p><i>' . _("Dave Page<br />
pgAdmin Development Team") . '</i></p>

<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2007-03-26", "1.6.3") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of pgAdmin 1.6.3, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD
, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.6.3 is primarily a bug fix release, including the following changes:") . '</p>
<ul>
  <li>' . _("Fix an overflow bug in pgAgent, per report from Sabin Coanda") . '</li>
  <li>' . _("Fix a bug that prevented adding new nodes to a Slony cluster, per Duncan Beeby.") . '</li>
  <li>' . _("Remember the server's SSL mode property correctly.") . '</li>
  <li>' . _("Prevent the RULE privilege becoming re-enabled for tables on PostgreSQL 8.2+, per Erwin.") . '</li>
  <li>' . _("Minor fix for edb/spl functions.") . '</li>
  <li>' . _("Fix procedure support on EnterpriseDB AS81.") . '</li>
  <li>' . _("Fix a rare bug in the Edit Grid which could cause a crash when editting data in tables with deleted columns and a primary key that isn;t at the beginning of the table. Thanks to Patrick De Visschere for the test case.") . '</li>
  <li>' . _("Use the correct version of the Slony scripts when creating a new cluster, per Duncan Beeby.") . '</li>
  <li>' . _("Prevent the Edit Grid Filter causing a crash if an invalid filter containing a % is used, per Erwin.") . '</li>
  <li>' . _("Fix a minor bug in app bundle creation for Mac [Florian G. Pflug]") . '</li>
  <li>' . _("Fix the graphical explain to properly display backwards index scan nodes, per Brendan O'Shea.") . '</li>
  <li>' . _("Fix default perspective names, per Ezequias.") . '</li>
  <li>' . _("Monitor the streams again whilst backing up on Mac - this no longer crashes in wx2.8. Per Dave Livesay.") . '</li>
  <li>' . _("Fix a crash on Mac that occurred when using some combo boxes, per David Lowry.") . '</li>
  <li>' . _("Fix menu icon for Gnome [Nathan Egge]") . '</li>
  <li>' . _("Allow users with SUPERUSER but no other privilege flags to create roles and databases etc. per Andy Shellam.") . '</li>
  <li>' . _("Handle non-default schema paths properly in the Foreign Key dialogue, per Philipp Specht") . '</li>
  <li>' . _("Fix localisation of 'Tab' as a copy delimiter.") . '</li>
  <li>' . _("Update to support the changed syntax of pg_dump 8.2+.") . '</li>
  <li>' . _("Add support for Sun's compiler [Dhanaraj M]") . '</li>
  <li>' . _("Fix an issue in the Query Tool export option that could result in blank lines in the export file, per Mathias Durst and Mike.") . '</li>
  <li>' . _("Truncate comments containing \\r\\n correctly, per Erwin.") . '</li>
  <li>' . _("Fix query tool title which was unfortunately broken by an earlier fix for another bug.") . '</li>
</ul>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p>


<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2007-01-08", "1.6.2") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of pgAdmin 1.6.2, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.6.2 is primarily a bug fix release, including the following changes:") . '</p>
<ul>
  <li>' . _("Prevent the filter/sort options dialogue being opened when data is being refreshed, per Erwin Brandstetter.") . '</li>
  <li>' . _("Fix per-table autovacuum settings for PostgreSQL >= 8.2 per Devrim Gunduz.") . '</li>
  <li>' . _("Fix some oddities in the way current per-table vacuum settings are displayed.") . '</li>  
  <li>' . _("Build against PostgreSQL 8.2 on Windows.") . '</li>	  
  <li>' . _("Restore dialog sizes correctly.") . '</li>  
  <li>' . _("Ensure column headers and the insert row are shown in the edit grid when no rows exist in the table being editted, per Bob Pawley.") . '</li>    
  <li>' . _("Properly size the backup dialog, per Patrick Headley.") . '</li>    
  <li>' . _("Add '...' to truncated column comments in table SQL, per Erwin Brandstetter.") . '</li>    
  <li>' . _("Reverse engineer columns with multi-word names (like 'timestamp with timezone') correctly so that precision and array modifiers are included properly. Per Erwin Brandstetter.") . '</li>  
  <li>' . _("Avoid a crash when closing the query tool on Solaris [Dhanaraj M].") . '</li>   
  <li>' . _("Properly drop foreign keys in schemas whose names require quoting, per M S.") . '</li>  
  <li>' . _("Avoid displaying multi line data in single line list controls, per Clodoaldo Pinto Neto.") . '</li> 
  <li>' . _("Refresh database objects correctly, per Guy Rouillier.") . '</li>  
  <li>' . _("Enable the OK button on the database properties dialog when variables are changed.") . '</li>  
</ul>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p>


<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2006-12-01", "1.6.1") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of pgAdmin 1.6.1, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.6.1 is primarily a bug fix release, including the following changes:") . '</p>
<ul>
  <li>' . _("Prevent a crash if the 'View Filtered Data' filter dialog is cancelled. Per Erwin Brandstetter.") . '</li>
  <li>' . _("Enable the OK button on the Database properties dialog when the owner is changed, per Jim Cullison") . '</li>
  <li>' . _("Rework the Find/Replace code to fix a couple of minor bugs and improve readability.") . '</li>
  <li>' . _("Fix deletion of stored procedures, Per Erwin.") . '</li>
  <li>' . _("Include IN/OUT/INOUT keywords in procedure identifiers in the treeview.") . '</li>
  <li>' . _("When checking the position & size of windows, use the dimensions of the current display, not the primary.") . '</li>
  <li>' . _("Only enable the 'Include SQL' checkbox on the report dialog if there is SQL to include, Per Ezequias Rodrigues da Rocha") . '</li>
  <li>' . _("Fix a minor bug in the index reverse engineering when using non-default operator classes per Andrus.") . '</li>
  <li>' . _("Don't display index constraints under the Indexes node as well as the Contraints node, per Erwin.") . '</li>
  <li>' . _("Properly quote function parameter names, per Ken Priest.") . '</li>
  <li>' . _("Fix some portability issues in the configure code [Max Khon]") . '</li>
  <li>' . _("Guard against permission denied errors in the edit grid per Howard Wang") . '</li>
  <li>' . _("Don't paste into empty edit grids, per Howard Wang") . '</li>
  <li>' . _("Prevent a crash from the query tool when using File -> Exit on GTK") . '</li>
  <li>' . _("Ensure backup and restore options are enabled when appropriate (this is a wxWidgets bug, fixed in wxWidgets 2.8.0rc1)") . '</li>
</ul>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p>


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

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
