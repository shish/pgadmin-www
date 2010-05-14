<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Latest news");
$PAGE_CONTENT = '

<h1>' . _("Latest news") . '</h1>

<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2010-03-10", "1.10.2") . '</h2>

<p>' . sprintf(_("pgAdmin %s has now been released. Please see the <a href=\"/development/changelog.php\">CHANGELOG</a> for details of the bug fixes in this release or visit the <a href=\"download\">download area</a> to get your copy now."), "1.10.2") . '</p>

<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2009-12-04", "1.10.1") . '</h2>

<p>' . _("pgAdmin 1.10.1 has now been released. Please see the <a href=\"/development/changelog.php\">CHANGELOG</a> for details of the bug fixes in this release or visit the <a href=\"download\">download area</a> to get your copy now.") . '</p>

<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2009-06-30", "1.10.0") . '</h2>

<p>' . _("pgAdmin 1.10.0 has now been released! Highlights of the new release include a graphical query builder, a scripting engine in the query tool and support for PostgreSQL 8.4 in addition to <a href=\"/development/changelog.php\">numerous other changes</a>. For a rundown of the key features, take a look at our <a href=\"/visualtour.php\">visual tour</a>.") . '</p><p>' . _("Please visit the <a href=\"download\">download area</a> to get your copy now. Any questions or other support issues should be sent to <a href=\"mailto:pgadmin-support@postgresql.org\">pgadmin-support@postgresql.org</a>.") . '</a></p>

<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2008-06-05", "1.8.4") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of pgAdmin 1.8.4, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.8.4 is primarily a bug fix release, including the following changes. Note that v1.8.3 was never announced as a release due to an issue found at the last minute.") . '</p>

<p>' . _("v1.8.4 fixes:") . '</p>

<ul>
  <li>' . _("Fix potential crash bug in the query tool logging code, per Erwin.") . '</li>
</ul>

<p>' . _("v1.8.3 fixes:") . '</p>
  
<ul>
  <li>' . _("Allow a debugging session to be cancelled correctly on  windows.") . '</li>
  <li>' . _("Fix a corner case in which closing the debugger window  following a failed attempt to create a global breakpoint (for example, because of an existing breakpoint) could cause a crash on Windows.") . '</li>
  <li>' . _("Store pgAgent job step result codes in an int4 column. int2 was proving too small in some cases resulting in an error.") . '</li>
  <li>' . _("Allow EnterpriseDB packages to be created without bodies.") . '</li>
  <li>' . _("Always refresh the data when the user clicks OK on the  edit grid options dialogue to ensure the filter/sort is applied to current data.") . '</li>
  <li>' . _("Prevent unsaved changes in the edit grid being lost if the filter or sorting dialogue is opened.") . '</li>
  <li>' . _("Update node text when refreshing treeview nodes in case part of the identifier has changed.") . '</li>
  <li>' . _("Correct config window help paths.") . '</li>
  <li>' . _("Don't load group roles and old-style groups on the security tab on 8.1 and higher.") . '</li>
  <li>' . _("Correctly quote role names when reverse engineering ACLs.") . '</li>
  <li>' . _("Don't allow the user to attempt to remove columns from an existing index or index constraint.") . '</li>
  <li>' . _("Disable the RULE privilege on 8.2+ for views per Erwin.") . '</li>
  <li>' . _("Fix the logging system to ensure that errors from the query tool get logged, and notices are only output once.") . '</li>
  <li>' . _("Cleanup some other minor misbehaviours at the same time. Per report from Erwin.") . '</li>
  <li>' . _("Ignore the type modifier for domains in function signatures.") . '</li>
  <li>' . _("If stopping the server service fails after stopping dependent services, wait 5 seconds and try again up to 10 times to allow the dependents time to shutdown fully.") . '</li>
  <li>' . _("Don't include the -h option when calling pg_dump or pg_restore if there is no hostname to specify.") . '</li>
  <li>' . _("Convert setting names to lower case so we don't end up with DateStyle and datestyle for example.") . '</li>
  <li>' . _("Construct SQL used to add columns such that the entire operation happens in one statement to ensure default values and NOT NULL can be set together. Per report from Laurent ROCHE.") . '</li>
  <li>' . _("Properly quote the maintenance database name when creating a new connection.") . '</li>
  <li>' . _("Show the schema correctly for EDB public synonyms that point to other synonyms.") . '</li>
  <li>' . _("Remove long-dead Explain Text option from the Query Tool.") . '</li>
  <li>' . _("Properly quote synonym names when refreshing.") . '</li>
  <li>' . _("Parse function parameter names correctly when they contain commas.") . '</li>
  <li>' . _("FOSDEM fix: Include overriding columns in reverse engineered SQL for child tables, rather than commenting them out and marking as inherited.") . '</li>
  <li>' . _("Avoid quoting 'text' when used as a type name per Erwin.") . '</li>
  <li>' . _("Correctly generate table DDL when inherited columns follow the last 'real' column, per Peter Gagarinov.") . '</li>
  <li>' . _("Hide array variants of table-types in datatype selectors where we already hide the table type itself.") . '</li>
  <li>' . _("Fix query that tries to apply the schema restriction.") . '</li>
  <li>' . _("Specify the length correctly when creating columns of 'time with time zone' and friends.") . '</li>
  <li>' . _("Allow non-superusers to debug their own functions.") . '</li>
  <li>' . _("Fix query that tries to apply the DB restriction.") . '</li>
  <li>' . _("Ensure info passed to Guru hints is HTML-safe.") . '</li>
</ul>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p>


<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2008-02-03", "1.8.2") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of pgAdmin 1.8.2, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.8.2 is primarily a bug fix release, including the following changes:") . '</p>
<ul>
  <li>' . _("Size of the column label of SQLGrid was made variable.") . '</li>
  <li>' . _("Prevent a crash when viewing databases with % in the name.") . '</li>
  <li>' . _("Don't try to force new databases into a specific tablespace as this will error as non-superusers default to pg_default.") . '</li>
  <li>' . _("Correct the SQL generation for EDB inline triggers.") . '</li>
  <li>' . _("Generate function signatures correctly if the first parameters are OUT only.") . '</li>
  <li>' . _("Remove the confusing and near-useless sequence combo box from the column dialog per discussion on support list.") . '</li>
  <li>' . _("Fix the WITH ADMIN membership option when creating roles.") . '</li>
  <li>' . _("Refresh Views correctly on EnterpriseDB.") . '</li>
  <li>' . _("Fix the privilege editor on the Language dialogue, per Bborie Park.") . '</li>
  <li>' . _("Correctly identify the schema of trigger functions that are in system catalogs as can be the case with integrated full text search.") . '</li>
  <li>' . _("Warn the user if a file cannot be saved in the default encoding.") . '</li>
  <li>' . _("Undecorated out-param types must be included in EDB-SPL function signatures when altering comments or privileges or dropping functions or procedures.") . '</li>
  <li>' . _("Ensure enums are offered as datatypes for columns.") . '</li>
  <li>' . _("Fix column dialogue to allow proper modification of array columns per Erwin.") . '</li>
  <li>' . _("Newer build of EnterpriseDB consistently strip trailing semi-colons from package headers and bodies. Update reverse engineering allow for this.") . '</li>
  <li>' . _("Ensure the properties dialogues will work sanely with objects named \" \" (!).") . '</li>
  <li>' . _("EDB-SPL functions require NULL to be passed in out-params when debugging.") . '</li>
  <li>' . _("Ensure that EDB-SPL trigger DDL code is appropriately formatted on newer builds of EnterpriseDB.") . '</li>
  <li>' . _("Ensure the password and confirmed password always match when adding or editing roles or users.") . '</li>
</ul>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p>


<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2008-01-04", "1.8.1") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of pgAdmin 1.8.1, the Open Source graphical PostgreSQL administration tool for Windows, Linux, FreeBSD
, Mac OS X and Solaris, now available for download in source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.8.1 is primarily a bug fix release, including the following changes:") . '</p>
<ul>
  <li>' . _("Fix a bug that could cause a crash on GTK when closing the query tool in certain circumstances.") . '</li>
  <li>' . _("Avoid a crash if the connection is lost and the Functions node is refreshed.") . '</li>
  <li>' . _("Avoid crashes when working with objects with % characters in the name.") . '</li>
  <li>' . _("Properly reverse-engineer the SQL for indexes with DESC, NULLS FIRST or NULLS LAST column options.") . '</li>
  <li>' . _("Only offer the Jobs node if the user can access the pgagent schema.") . '</li>
  <li>' . _("Ensure the 'Create Rule' context menu option is always offered when appropriate.") . '</li>
  <li>' . _("Prevent the user from trying to debug catalog objects.") . '</li>
  <li>' . _("Refresh the tree without erroring after creating a new package on EnterpriseDB.") . '</li>
  <li>' . _("Fix a crash that occured if an object called '%' was selected in the treeview, per Alexander Steffens.") . '</li>
  <li>' . _("Fix a line number error in the debugger seen with procedures which start on the same line as the 'CREATE PROCEDURE foo IS ...' Per report from Heikki Linnakangas.") . '</li>
  <li>' . _("Cleanup the covering index control logic in the Foreign Key dialogue.") . '</li>
  <li>' . _("Fix to refresh version string and number, and last OID, per a report from Alexander Kirpa.") . '</li>
  <li>' . _("Disable CREATE FUNCTION etc. under EnterpriseDB packages because they are created as part of the main package body.") . '</li>
  <li>' . _("Fix some broken references to online help pages.") . '</li>
  <li>' . _("Don't offer 'Drop Cascaded' unless the user can 'Drop' the object.") . '</li>
  <li>' . _("Prevent non-superusers from attempting to use the debugger because the plugin API won't let them anyway.") . '</li>
  <li>' . _("Check that functions exist before debugging or setting global breakpoints on them. Remove them from the treeview if not.") . '</li>
  <li>' . _("Correct the URL for the EDB public synonym help page") . '</li>
  <li>' . _("Handle the corner case when a user includes quotes in an object name (backport of 2007-10-26 fix applied to trunk)") . '</li>
  <li>' . _("Fix the debugger's connection class to ensure database names requiring quotes will work and that it can be used with SSL and Kerberos connections.") . '</li>
  <li>' . _("Allow the length of array-typed columns to be changed (eg. 'character varying[](100)'), per report from Ferenc Lutischan") . '</li>
  <li>' . _("Don't allow the user to direct-debug trigger functions, only global breakpoints should be used on them (or the trigger itself).") . '</li>
  <li>' . _("Don't offer edbspl functions when creating triggers as they should have inline bodies.") . '</li>
  <li>' . _("Don't quote database names that happen to be keywords when starting the debugger.") . '</li>
  <li>' . _("Don't offer package names and system schemas as schemas when creating public synonyms.") . '</li>
  <li>' . _("Fix pgAgent's job query when a host agent is specified so that jobs don't execute every time round the loop regardless of schedule, per Brian Kalbfus.") . '</li>
  <li>' . _("Add EnterpriseDB's default database (edb) to the Server dialog's default option.") . '</li>
  <li>' . _("Don't allow the user to debug an EnterpriseDB package function or procedure if the body isn't defined.") . '</li>
  <li>' . _("Don't offer the user the chance to create new columns on system catalogues.") . '</li>
  <li>' . _("Fix the debugger to send actual NULL values rather than 'NULL' through the EnterpriseDB callable statement API. Allow parameter values to be NULL or empty strings on both PostgreSQL and EnterpriseDB using the same syntax as the Edit Grid.") . '</li>
  <li>' . _("Always open the PostgreSQL Help when selecting that menu option, even if connected to EnterpriseDB.") . '</li>
  <li>' . _("Fix EnterpriseDB public synonym loading so that they aren't considered system objects.") . '</li>
  <li>' . _("Fix path discovery on Unix so standard installs can be relocated easily.") . '</li>
  <li>' . _("Fix character number display in the query tool.") . '</li>
  <li>' . _("Use popen() when testing the versions of helper apps on non-windows platforms to avoid an obscure bug on PPC Macs that could leave wxExecute hanging indefinitely whilst waiting on a zombie process.") . '</li>
  <li>' . _("When creating a new index and specifying both tablespace and fill factor, make sure the SQL is formulated correctly, per Stefan Wolf") . '</li>
  <li>' . _("Fix the locks tab on the server status dialogue so it works correctly with PostgreSQL 8.3+.") . '</li>
  <li>' . _("Properly format the object comments shown in the properties list when a collection node is selected. Per report from Mike Blackwell.") . '</li>
  <li>' . _("Fix a bug preventing the 'on error' flag of a pgAgent job step being edited, per Jon Roberts.") . '</li>
  <li>' . _("Properly escape _'s in queries for schemas, per Derek Fonda.") . '</li>
  <li>' . _("Don't try to enable/disable prepared transaction related controls on pre-8.1 servers, per Karl Zellnig") . '</li>
</ul>

<p><i>' . _("Dave Page") . '<br />' . _("pgAdmin Development Team") . '</i></p>


<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2007-10-22", "1.8.0") . '</h2>

<p>' . _("The pgAdmin Development Team are pleased to announce the release of 
pgAdmin 1.8.0, the Open Source graphical PostgreSQL administration tool for 
Windows, Linux, FreeBSD, Mac OS X and Solaris, now available for download in 
source and a variety of binary formats from:") . '</p>

<p><a href="http://www.pgadmin.org/download/">http://www.pgadmin.org/download/</a></p>

<p>' . _("v1.8.0 represents nearly a year of development and testing to bring you 
a host of new features and improvements including:") . '</p>

<b>' . _("Major features") . '</b>
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
<b>' . _("Enhancements") . '</b>
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
<b>' . _("Bug fixes") . '</b>
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
<b>' . _("Code cleanup/maintainability") . '</b>
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

<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2007-03-26", "1.6.3") . '</h2>

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


<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2007-01-08", "1.6.2") . '</h2>

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


<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2006-12-01", "1.6.1") . '</h2>

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


<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2006-11-16", "1.6.0") . '</h2>

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
