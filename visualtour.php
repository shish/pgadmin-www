<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III 1.10 Visual Tour");
$PAGE_CONTENT = '

<h1>' . _("pgAdmin III 1.10 Visual Tour") . '</h1>

<p>
  ' . _("The long awaited 1.10 version of pgAdmin III is finally available in beta. We
  will try to highlight some of the new features which have been added since
  the last stable release.") . '
</p>

<h2>' . _("Major new features") . '</h2>

<p>
  ' . _("There are two major new features in the <b>Query Tool</b>. They both
  came out of GSoC projects.") . '
</p>

<p>
  ' . _("First, it is now possible to build a query graphically.") . '
</p>

<img src="images/visualtour/visualtour01.jpg"/>

<p>
  ' . _("The <b>graphical query builder</b> (aka GQB) allows one to build a query
  mainly with the mouse: dragging tables and views from the navigator to the
  graphical pane, adding links between them, clicking on checkboxes to add
  columns, adding criteria and setting the order of the results.") . '
</p>

<p>
  ' . _("The other new feature is the <b>pgScript scripting framework</b>. This
  allows one to write scripts to execute queries. Here is an example:") . '
</p>

<img src="images/visualtour/visualtour02.jpg"/>

<p>
  ' . sprintf(_("In this example, the user will insert random values into some tables. To
  execute this script, you need to click on the PGS button. The complete
  reference to pgscript is available <a href=\"%s\">here</a>."),
  "http://www.pgadmin.org/docs/dev/pgscript.html") . '
</p>

<h2>' . _("Derivative database support") . '</h2>

<p>
  ' . _("There is <b>enhanced support for Greenplum database</b>: resource queues,
  external tables and partitioned tables are supported and the graphical explain 
  tool knows much more about Greenplum query node types. There are also links to 
  Greenplum help and Greenplum utility support.") . '
</p>

<img src="images/visualtour/visualtour03.jpg"/>

<h2>' . _("Object browser") . '</h2>

<p>
  ' . _("Unfortunately, pgAdmin III 1.8 doesn't have support for FTS Objects</b>.
  One of the things we had to do for 1.10 is to support these.") . '
</p>

<img src="images/visualtour/visualtour04.jpg"/>

<p>
  ' . _("Each FTS object is handled by its own properties dialog.") . '
</p>

<img src="images/visualtour/visualtour37.jpg"/>

<p>
  ' . _("The table contextual menu has a few more items that allow you to <b>enable/disable
  rules</b> on the selected table or to <b>truncate</b> (cascade if needed).") . '
</p>

<img src="images/visualtour/visualtour36.jpg"/>

<img src="images/visualtour/visualtour06.jpg"/>

<p>
  ' . _("There's also a new <b>DELETE script</b> item:") . '
</p>

<img src="images/visualtour/visualtour07.jpg"/>

<p>
  ' . _("And last, the role contextual menu has one more item to add
  <b>Drop/Reassign Owned</b> support:") . '

</p>

<img src="images/visualtour/visualtour08.jpg"/>

<h2>' . _("Object properties") . '</h2>

<p>
  ' . _("<b>8.2 and 8.3 stats columns</b> have been added to the tables list.") . '
</p>

<img src="images/visualtour/visualtour09.jpg"/>

<p>
  ' . _("Each objects' list now show the <b>owner of the object</b>:") . '
</p>

<img src="images/visualtour/visualtour10.jpg"/>

<p>
  ' . _("Only the function dialog was resizable. With 1.10, <b>each property dialog is
  resizable</b>:") . '
<p>

<img src="images/visualtour/visualtour13.jpg"/>

<p>
  ' . _("We also have allowed the SQL tab to be edited. For example, when adding a
  new column with a default value and a NOT NULL constraint, you couldn't do
  it with pgAdmin in one action because one needs to first add the column, change the
  value for each existing row and then add the NOT NULL constraint. Now, you
  can use the UI to do this. You'll get this query:") . '
</p>

<img src="images/visualtour/visualtour40.jpg"/>

<p>
  ' . _("Then, click on the \"Read-only\" checkbox to allow editing
  mode and update the query to execute.") . '
</p>

<img src="images/visualtour/visualtour41.jpg"/>

<h2>' . _("Server properties") . '</h2>

<p>
  ' . _("We no longer display the SQL tab for the Server properties dialog. It had no
  real meaning on this dialog. But we add a few things, like the color
  selection:") . '
</p>

<img src="images/visualtour/visualtour35.jpg"/>

<p>
  ' . _("This color is the <b>background color for each server</b>:") . '
</p>

<img src="images/visualtour/visualtour05.jpg"/>

<h2>' . _("Database properties") . '</h2>

<p>
  ' . _("New features have been added to this dialog for 8.4: support for changing the
  tablespace of an existing database, support for renaming an opened
  database, support for per-database collation, character type and connection
  limits.") . '
</p>

<img src="images/visualtour/visualtour14.jpg"/>

<h2>' . _("Table properties") . '</h2>

<p>
  ' . _("Adding/removing <b>inherited tables</b> with 8.2+ servers has been added. The
  list control and the two buttons have moved to their own tab:") . '

</p>

<img src="images/visualtour/visualtour15.jpg"/>

<p>
  ' . _("The new way to handle <b>autovacuum settings</b> in 8.4 is also supported. Toast
  tables are handled too.") . '
</p>

<img src="images/visualtour/visualtour16.jpg"/>

<h2>' . _("Column properties") . '</h2>

<p>
  ' . _("<b>Column level priviledges</b> are handled for 8.4 servers:") . '
</p>

<img src="images/visualtour/visualtour17.jpg"/>

<h2>' . _("Index properties") . '</h2>

<p>
  ' . _("pgAdmin III 1.10 adds <b>support for DESC and NULLs FIRST/LAST options</b>
  for index columns.") . '
</p>

<img src="images/visualtour/visualtour18.jpg"/>

<h2>' . _("Function properties") . '</h2>

<p>
  ' . _("<b>Window functions</b> are handled for PostgreSQL 8.4+ servers.") . '
</p>

<img src="images/visualtour/visualtour19.jpg"/>

<p>
  ' . _("pgAdmin III 1.10 supports <b>default values for function parameters</b> in
  PostgreSQL 8.4+ and on EnterpriseDB, and <b>variadic functions</b>.") . '
</p>

<img src="images/visualtour/visualtour20.jpg"/>

<h2>' . _("Type properties") . '</h2>

<p>
  ' . _("Support for <b>typmod in/out functions</b> on custom types is finally
  available.") . '
</p>

<img src="images/visualtour/visualtour21.jpg"/>

<h2>' . _("Language properties") . '</h2>

<p>
  ' . _("One can now change a <b>language's owner</b>.") . '
</p>

<img src="images/visualtour/visualtour22.jpg"/>

<h2>' . _("Role properties") . '</h2>

<p>
  ' . _("<b>Connection limit for roles</b> was unavailable in previous release despite
  PostgreSQL handles this since 8.1.") . '
</p>

<img src="images/visualtour/visualtour23.jpg"/>

<h2>' . _("Dump/restore dialog") . '</h2>

<p>
  ' . _("There's now an option to <b>ignore server version mismatches</b> with
  pg_dump/pg_dumpall/pg_restore.") . '
</p>

<img src="images/visualtour/visualtour24.jpg"/>

<p>
  ' . _("The --clean option is now supported.") . '
</p>

<img src="images/visualtour/visualtour25.jpg"/>

<h2>' . _("Plugins menu") . '</h2>

<p>
  ' . _("pgAdmin III 1.10 adds the ability to register external applications on a
  <b>plugins menu</b>. Menu options can be activated based on the current object
  selection and a variety of variables - including everything needed to
  open a database connection - can be passed to the external utility."). '
</p>

<p>
  ' . _("The only plugin available by default is a psql console, though any application 
  could conceivably be added by the user:") . '
</p>

<img src="images/visualtour/visualtour26.jpg"/>

<p>
  ' . _("When clicked, the psql console is launched and connects
  to the database selected in pgAdmin III.") . '
</p>

<img src="images/visualtour/visualtour27.jpg"/>

<h2>' . _("Query Tool") . '</h2>

<p>
  ' . _("Other than the Graphical Query Builder and the pgScript scripting framework,
  the Query Tool adds options to shift selected text to upper or lower case in
  the SQL editor, adds block indenting and outdenting, prevents the auto
  complete being used while a query is running and adds block
  commenting and uncommenting to the SQL editor.") . '
</p>

<h2>' . _("Edit grid") . '</h2>

<p>
  ' . _("The Edit grid can now work with the type bit(x).") . '
</p>

<p>
  ' . _("It was already possible to sort and filter the grid but one has to go 
  another dialog and choose the columns to sort by and write the filter
  as in a WHERE clause. A new feature allows a user to right click on a value
  he wants to filter (include or exclude). He can also right click on a column
  to sort by this column.") . '
</p>

<img src="images/visualtour/visualtour28.jpg"/>

<h2>' . _("Server Status") . '</h2>

<p>
  ' . _("There was a <b>complete UI rework</b> of the \"Server Status\" window.") . '
</p>

<img src="images/visualtour/visualtour29.jpg"/>

<p>
  ' . _("It allows one to view all reports at the same time, to close some, to resize
  some, etc. The complete window layout is preserved between each run. Also,
  one can <b>copy the contents of each grid</b>. It also features a new toolbar
  to launch each action.") . '
</p>

<img src="images/visualtour/visualtour30.jpg"/>

<p>
  ' . _("Other work happened on this window. A 'Blocked By' column appears to show if
  a transaction is blocked by another process. One can launch pgAdmin III
  to only show the Server Status window, with the -S and -Sc command line
  options.") . '
</p>

<h2>' . _("Miscellanous") . '</h2>

<p>
  ' . _("Other more minor changes in v1.10 include:") . '
</p>

<ul>
  <li>' . _("Remove an obsolete FORCE option on the Maintenance dialogue") . '</li>

  <li>' . _("Fix the index UI to handle columns with commas in the name") . '</li>
  <li>' . _("Add more index stats") . '</li>
  <li>' . _("Ensure a newline is included between notices in the query tool") . '</li>
  <li>' . _("Save and restore the user-selected line ending type in styled text
    controls") . '</li>
  <li>' . _("Avoid running excess queries on pg_shdescription when connecting to a
    server, fixing performance regression with large number of databases") . '</li>
  <li>' . _("Ensure that line endings stay consistent when editing in styled text
    controls") . '</li>

  <li>' . _("Fix listing of group roles in the combo box on privilege panels") . '</li>
  <li>' . _("Reverse engineer multi-word type names correctly when quoting") . '</li>
  <li>' . _("Allow external utilities such as pg_dump &amp; pg_restore to work with
    SSL connections") . '</li>
  <li>' . _("Allow default settings to be set via a global config file. This allows
    redistributors and sysadmins to pre-configure an installation as required
    ") . '</li>
  <li>' . _("Add support for TRUNCATE triggers on PostgreSQL 8.4+") . '</li>

  <li>' . _("Auto-discover Postgres Plus servers on Mac and Unix") . '</li>
  <li>' . _("Add the keyword 'WHILE' for the debugger") . '</li>
  <li>' . _("Allow the user a chance to abort if there is an error when deleting rows
    in the edit grid") . '</li>
  <li>' . _("Warn the user if connecting to a newer version of the server than is
    supported") . '</li>
  <li>' . _("Remove the un-maintained Tip of the Day feature") . '</li>
  <li>' . _("Fix handling of aggregate initial conditions to allow NULL or empty
    strings to be specified") . '</li>

  <li>' . _("Fix support for 'bit varying' columns") . '</li>
  <li>' . _("Restore old behaviour of the Edit Grid where &lt;return&gt; moves to
    the next column, but &lt;enter&gt; moves to the next row rather than both
    changing column") . '</li>
  <li>' . _("Add support for direct debugging of functions with variadic parameters") . '</li>
  <li>' . _("Add support for the many new node types in Postgres 8.4") . '</li>

  <li>' . _("Allow pgAgent to connect to databases on remote servers, such as hot
    standby machines") . '</li>
  <li>' . _("Ensure we never try to refresh the Servers node which would likely crash") . '</li>
</ul>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
