<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 1.16 Visual Tour");
$PAGE_CONTENT = '
<h1>' . _("pgAdmin 1.16 Visual Tour") . '</h1>

<p>
  ' . _("The long awaited 1.16 version of pgAdmin III is finally available. We will try to highlight some of the new features which have been added since the last stable release.") . '
</p>

<h2>' . _("Major new features") . '</h2>

<h3>' . _("PostgreSQL 9.2 support") . '</h3>

<p>
  ' . _("As usual, the new release of pgAdmin aims to have full compatibility with the new release of PostgreSQL. This release is no different: pgAdmin 1.16 supports all PostgreSQL 9.2 new features, while remaining compatible with all PostgreSQL releases starting from 8.2.") . '
</p>

<h3>' . _("New import tool") . '</h3>

<p>
  ' . _("A new import tool has been added to the browser. A right-click on a table shows a new menu item, named \"Import...\".") . '
</p>

<img src="images/visualtour14/importtool_1.png"/>

<p>
  ' . _("Once clicked, it opens a new dialog. This dialog allows the user to select a file, specify its format (text, csv, or binary), and its encoding.") . '
</p>

<img src="images/visualtour14/importtool_2.png"/>

<p>
  ' . _("The second tab contains the list of the columns for this table. The user can choose the columns available in the file.") . '
</p>

<img src="images/visualtour14/importtool_3.png"/>

<p>
  ' . _("The remaining tabs allow a deeper customization of the import.") . '
</p>

<img src="images/visualtour14/importtool_4.png"/>
<img src="images/visualtour14/importtool_5.png"/>
<img src="images/visualtour14/importtool_6.png"/>

<p>
  ' . _("Once the user clicks the \"Import\" button, the import process will take place. A widget will show the progress of the import:") . '
</p>

<img src="images/visualtour14/importtool_7.png"/>

<p>
  ' . _("And once the import is done, the \"Import\" button is changed in a \"Done\" button. A click on it will dismiss the window.") . '
</p>

<h3>' . _("Search Objects") . '</h3>

<p>
  ' . _("It is sometimes useful to be able to find an object by its name. So there is now a way to search for objects by name within pgAdmin. The database context menu has a new item: \"Search objects...\".") . '
</p>

<img src="images/visualtour14/searchobject_1.png"/>

<p>
  ' . _("If a user selects this item, pgAdmin will open a new window where the user can type a pattern, and select the type of the object he's looking for. Then a simple click on the \"Find\" button will start the search.") . '
</p>

<img src="images/visualtour14/searchobject_2.png"/>

<p>
  ' . _("All the results will appear in the table below. A double-click on an object will select the object in the browser, so that the user can continue his work on this object.") . '
</p>

<img src="images/visualtour14/searchobject_3.png"/>

<h3>' . _("Modifying the schema of an object") . '</h3>

<p>
  ' . _("In older releases, a user couldn't change the schema of an object with the properties dialog. pgAdmin 1.16 allows that. All objects belonging to a schema have a new widget allowing the user to modify the schema :") . '
</p>

<img src="images/visualtour14/schemachange.png"/>

<h3>' . _("Refresh objects automatically when clicked") . '</h3>

<p>
  ' . _("One big issue with pgAdmin is that it doesn't know when objects are changed in the background. The user has to refresh the browser each time he thinks there might have been some schema updates on the database - and some changes may get lost because of this.") . '
</p>

<p>
  ' . _("pgAdmin 1.16 refreshes the node when the user clicks on it. This means it will try to find new objects if the user clicks on a parent node, and new properties if the user clicks on an object node.") . '
</p>

<p>
  ' . _("This should resolve this long-lasting issue.") . '
</p>

<h3>' . _("Redesigned Options window") . '</h3>

<p>
  ' . _("The Options window has been completely redesigned so that it will allow us to put more options into it. There is now a treeview on the left part of the window. This treeview lets the user choose what kind of options he wants to set:") . '
</p>

<img src="images/visualtour14/optionswindow.png"/>

<h3>' . _("Security labels support") . '</h3>

<p>
  ' . _("Security labels are available since PostgreSQL 9.1. Unfortunately, pgAdmin didn't support them, but the 1.16 release will fix that. Security labels are handled via a new tab in each local object:") . '
</p>

<img src="images/visualtour14/seclabels_1.png"/>

<p>
  ' . _("It works also on shared objects, such as databases and roles since PostgreSQL 9.2:") . '
</p>

<img src="images/visualtour14/seclabels_2.png"/>

<h2>' . _("Object properties") . '</h2>

<h3>' . _("Servers") . '</h3>

<p>
  ' . _("PostgreSQL 9.2 offers a new connection option for SSL connections. It is called the \"sslcompression\" option. It's enabled by default, but users can disable it if they want. This option is available in the \"SSL\" tab:") . '
</p>

<img src="images/visualtour14/serverprops_1.png"/>

<h3>' . _("Databases") . '</h3>

<p>
  ' . _("PostgreSQL 9.2 offers two new statistics (blocks read, and write time) in the catalog \"pg_stat_database\", and so does pgAdmin 1.16 on its \"Statistics\" tab for databases:") . '
</p>

<img src="images/visualtour14/databasestats_1.png"/>

<h3>' . _("Tables") . '</h3>

<p>
  ' . _("A new tab is available to copy the structure of another table:") . '
</p>

<img src="images/visualtour14/table_1.png"/>

<p>
  ' . _("It's just an interface around the \"CREATE TABLE ... LIKE ...\" statement.") . '
</p>

<p>
  ' . _("pgAdmin 1.16 allows the user to add OIDs to an existing table with the \"Has OIDs\" checkbox. It only works if the user is connected to a Postgres 8.4 or later server. It also allows the change of the fillfactor property on an existing table.") . '
</p>

<p>
  ' . _("A truncate menu item has been added to the table contextual menu:") . '
</p>

<img src="images/visualtour14/table_2.png"/>

<h3>' . _("Indexes") . '</h3>

<p>
  ' . _("pgAdmin 1.16 allows the modification of the fillfactor property on an existing index.") . '
</p>

<h3>' . _("Constraints") . '</h3>

<p>
  ' . _("PostgreSQL 9.2 allows the creation of \"non valid\" check constraints. pgAdmin offers that option in the \"Definition\" tab:") . '
</p>

<img src="images/visualtour14/constraintprops_1.png"/>

<p>
  ' . _("The user can validate the constraint, either with the properties dialog, or with a contextual menu item called \"Validate check constraint\".") . '
</p>

<p>
  ' . _("It's also possible to add invalid check constraints to a domain.") . '
</p>

<p>
  ' . _("On the foreign key properties dialog, the \"References\" table textbox has been moved to the third tab:") . '
</p>

<img src="images/visualtour14/constraintprops_2.png"/>

<p>
  ' . _("We think it's easier that way.") . '
</p>

<h3>' . _("Views") . '</h3>

<p>
  ' . _("The new \"security_barrier\" option on views is available in the \"Definition\" tab:") . '
</p>

<img src="images/visualtour14/viewprops.png"/>

<h3>' . _("Functions") . '</h3>

<p>
  ' . _("The new \"leakproof\" option on functions is available in the \"Options\" tab:") . '
</p>

<img src="images/visualtour14/functionprops.png"/>

<h3>' . _("Types") . '</h3>

<p>
  ' . _("The \"Definition\" tab has changed for external type. It now contains another set of tabs so that it allows to add three previously missing functions comboboxes (ANALYZE, CATEGORY, and PREFERED functions):") . '
</p>

<ul>
  <li>' . _("The "Required" tab:") . '<br/><img src="images/visualtour14/typeprops_1.png"/></li>
  <li>' . _("The "Optional 1" tab:") . '<br/><img src="images/visualtour14/typeprops_2.png"/></li>
  <li>' . _("The "Optional 2" tab:") . '<br/><img src="images/visualtour14/typeprops_3.png"/></li>
</ul>

<p>
  ' . _("PostgreSQL 9.2 adds privileges to types objects, and pgAdmin 1.16 allows to set these privileges.") . '
</p>

<img src="images/visualtour14/typeprops_4.png"/>

<p>
  ' . _("One of the main feature of PostgreSQL 9.2, the range type, is also supported by pgAdmin 1.16. To add a new range type, select it on the \"Type\" tab:") . '
</p>

<img src="images/visualtour14/typeprops_5.png"/>

<p>
  ' . _("And then set its properties in the \"Definition\" tab:") . '
</p>

<img src="images/visualtour14/typeprops_6.png"/>

<h3>' . _("Domains") . '</h3>

<p>
  ' . _("Previous releases of pgAdmin didn't allow users to rename a domain, even if it was possible with an \"ALTER TYPE\" statement. pgAdmin 1.16 allows the renaming through the \"ALTER DOMAIN\" statement in PostgreSQL 9.2, and through the \"ALTER TYPE\" statement in previous releases of PostgreSQL.") . '
</p>

<h3>' . _("Aggregates") . '</h3>

<p>
  ' . _("Aggregates finally have privilege support.") . '
</p>

<h3>' . _("SQL/MED objects") . '</h3>

<p>
  ' . _("pgAdmin 1.16 allows the renaming of Foreign Data Wrappers and Foreign Servers if the user is connected to a 9.2 PostgreSQL server.") . '
</p>

<h3>' . _("Languages") . '</h3>

<p>
  ' . _("pgAdmin didn't have a way to input the inline function for a language. It's now available in the \"Definition\" tab:") . '
</p>

<img src="images/visualtour14/languageprops.png"/>

<h3>' . _("Roles") . '</h3>

<p>
  ' . _("pgAdmin already allowed users to configure parameters for a role/database pair in the database properties dialog. Now, it's also possible to do it in the role properties dialog:") . '
</p>

<img src="images/visualtour14/roleprops.png"/>

<h2>' . _("Backup/Restore tools") . '</h2>

<p>
  ' . _("PostgreSQL 9.2 offers a new option for its pg_dump/pg_restore tools, called section. pgAdmin allows its use through:") . '
</p>

<ul>
  <li>' . _("the backup window:") . '<br/><img src="images/visualtour14/backup.png"/></li>
  <li>' . _("and the restore window:") . '<br/><img src="images/visualtour14/restore.png"/></li>
</ul>

<h2>' . _("Query tool") . '</h2>

<p>
  ' . _("The new \"TIMING\" option of \"EXPLAIN\" is available in the query tool.") . '
</p>

<h2>' . _("Server status tool") . '</h2>

<p>
  ' . _("The \"pg_stat_activity\" view has two new columns: state, and state_change columns. pgAdmin 1.16 displays them in the Activity report of the server status tool if the user is connected on a PostgreSQL 9.2 server:") . '
</p>

<img src="images/visualtour14/serverstatus.png"/>

<p>
  ' . _("And note that the timestamp columns skip the microsecond part.") . '
</p>

<h2>' . _("Maintenance tool") . '</h2>

<p>
  ' . _("The \"Maintenance\"  tool has a new action: cluster.") . '
</p>

<img src="images/visualtour14/cluster.png"/>

<h2>' . _("Miscellanous") . '</h2>

<ul>
  <li>' . _("Prevent dropping connection, dropping and refreshing object when a properties dialog is open,") . '</li>
  <li>' . _("Add compatibility with wxWidgets 2.9,") . '</li>
  <li>' . _("New documentation system.") . '</li>
</ul>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
