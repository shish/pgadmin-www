<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 1.14 Visual Tour");
$PAGE_CONTENT = '
<h1>' . _("pgAdmin 1.14 Visual Tour") . '</h1>

<p>
  ' . _("The long awaited 1.14 version of pgAdmin III is finally available in beta. We will try to highlight some of the new features which have been added since the last stable release.") . '
</p>

<h2>' . _("Dialogs for netbooks") . '</h2>

<p>
  ' . _("All dialogs have been resized to be usable in a 800x600 screen. Dialogs contain three or more tabs to contain all the information needed on each object. The first tab always has the same information: name, OID, owner, comment, and replication set. The other tabs have the information specific to the object you're looking at. There are still the security tab (for privileges), the default security tab (for default privileges) on the objects for which you can set such information. And there's still the SQL tab.") . '
</p>

<p>
  ' . _("As an example, here is the sequence dialog:") . '
</p>

<img src="images/visualtour14/new_sequence.png"/>

<p>
  ' . _("We hope it will allow more users to use pgAdmin on netbooks.") . '
</p>

<h2>' . _("Better i18n") . '</h2>

<p>
  ' . _("Internationalization needed a bit of work to improve in areas such as pluralization. Because of this, translators will have more work to do this release, and we hope we'll keep at least the same number of languages for 1.14.") . '
</p>

<h2>' . _("Object browser") . '</h2>

<h3>' . _("Tearable tabsets") . '</h3>

<p>
  ' . _("Tabs are handled differently. You can tear them whereever you want. You can have the statistics tab first, and then the other ones. But you can also see two tabs at the same time:") . '
</p>

<img src="images/visualtour14/tearabletabs.png"/>

<h3>' . _("Different icons to highlight different states") . '</h3>

<p>
  ' . _("Previous releases already displayed servers and databases in two different ways, connected and disconnected.") . '
</p>

<table>
<tr>
 <td>Object and State</td>
 <td>Connected</td>
 <td>Disconnected</td>
</tr>
<tr>
 <td>Server</td>
 <td><img src="images/visualtour14/server.png"/></td>
 <td><img src="images/visualtour14/serverbad.png"/></td>
</tr>
<tr>
 <td>Database</td>
 <td><img src="images/visualtour14/database.png"/></td>
 <td><img src="images/visualtour14/closeddatabase.png"/></td>
</tr>
</table>

<p>
  ' . _("pgAdmin 1.14 uses the same idea for valid and invalid foreign keys and enabled and disabled triggers and rules.") . '
</p>

<table>
<tr>
 <td>Object and State</td>
 <td>On</td>
 <td>Off</td>
</tr>
<tr>
 <td>Foreign key</td>
 <td><img src="images/visualtour14/foreignkey.png"/></td>
 <td><img src="images/visualtour14/foreignkeybad.png"/></td>
</tr>
<tr>
 <td>Trigger</td>
 <td><img src="images/visualtour14/trigger.png"/></td>
 <td><img src="images/visualtour14/triggerbad.png"/></td>
</tr>
<tr>
 <td>Rule</td>
 <td><img src="images/visualtour14/rule.png"/></td>
 <td><img src="images/visualtour14/rulebad.png"/></td>
</tr>
</table>

<p>
  ' . _("This will help the user to quickly understand which objects are valid or enabled and which aren't.") . '
</p>

<h3>' . _("Improved configuration for plugins") . '</h3>

<p>
  ' . _("pgAdmin 1.12 used a single file to store the configuration for all available plugins. 1.14 looks for files in a folder where each file contains information about one or more plugins. This new system allows other applications to register themselves as plugins in pgAdmin without having to edit, and perhaps break, the old plugins.ini file.") . '
</p>
<h3>' . _("Object properties") . '</h3>

<p>
  ' . _("The properties dialog is available as usual (right click on the object's name, and select \"Properties\" menu item). There is a new shortcut to get the same result: Ctrl-Alt-Enter.") . '
</p>

<h4>' . _("Server") . '</h4>

<p>
  ' . _("New properties are available, all connection parameters. The first tab shows the service textbox. Here you can specify the name of a service configured in your pg_service.conf file (see http://www.postgresql.org/docs/9.0/interactive/libpq-pgservice.html for details):") . '
</p>

<img src="images/visualtour14/new_server_tab1.png"/>

<p>
  ' . _("The color widget changed a bit to show the actual selected color, and not its hexadecimal code. It should help people to really see how they configured the server's color.") . '
</p>

<p>
  ' . _("The second tab is a new one. It's dedicated to the SSL connection parameters. New to the family are the certificate file parameters:") . '
</p>

<img src="images/visualtour14/new_server_tab2.png"/>

<p>
  ' . _("The last tab has a new connection parameter which allows the user to set a host address, which may be useful for Kerberos users when used in conjunction with the hostname:") . '
</p>

<img src="images/visualtour14/new_server_tab3.png"/>

<p>
  ' . _("The behaviour of this properties dialog has also changed. Changes are now stored immediately rather than at program exit, which should help people to avoid losing their changes if the system crashes afterwards. If you are already connected to a server and are looking at its properties, all widgets are disabled in the server properties' dialog, so you won't be able to change a property.") . '
</p>

<p>
  ' . _("Two new piece of information (specific to PostgreSQL 9.1) are shown in the browser's properties tab: timestamp of last xact replay, and replication status.") . '
</p>

<img src="images/visualtour14/server_props.png"/>

<p>
  ' . _("The browser's statistics tab still displays a part of the contents of the pg_stat_activity view. If you're connected to a PostgreSQL 9.1 server, it also displays the new pg_stat_replication view:") . '
</p>

<img src="images/visualtour14/server_stats.png"/>

<p>
  ' . _("Finally, there are two new actions available on the server context menu. \"Pause replay of WAL\" is only available on a streaming replication slave. It allows you to pause the replay of the replication, and then resume it. \"Add named restore point\" asks you to enter the name of the restart point you want to create. pgAdmin then adds this restore point, but keep in mind this action is not available on a streaming replication slave.") . '
</p>

<h4>' . _("Database") . '</h4>

<p>
  ' . _("We have two new pieces of information in the browser's statistics tab for a database:") . '
<ul>
  <li>' . _("timestamp of the last reset on the statistics;") . '</li>
  <li>' . _("all fields of the new pg_stat_database_conflicts view.") . '</li>
</ul>
</p>

<p>
  ' . _("They both are 9.1 only:") . '
</p>

<img src="images/visualtour14/database_stats.png"/>

<h4>' . _("Table") . '</h4>

<p>
  ' . _("Two new properties are available on the second tab of the table properties dialog:") . '
<p>

<img src="images/visualtour14/new_table_tab2.png"/>

<p>
  ' . _("They are both only available during the creation of a table. The first one, \"Of type\", allows you to specify a user composite type, instead of the columns. The last one, \"Unlogged\", allows you to create an unlogged table.") . '
</p>

<p>
  ' . _("The statistics tab of the browser shows new information for tables, vacuum and analyze counters:") . '
</p>

<img src="images/visualtour14/table_stats.png"/>

<p>
  ' . _("And finally, there are two new actions in the context menu for a table. The first one resets the statistics of the selected table. The second one is part of the \"View Data\" submenu. pgAdmin is already able to show the edit grid with the first 100 rows. The new action allows you to view the last 100 rows. Here is the menu:") . '
</p>

<img src="images/visualtour14/table_actions.png"/>

<h4>' . _("Index") . '</h4>

<p>
  ' . _("The index properties dialog shows all available collations and allows you to set a collation for char, varchar and text columns:") . '
</p>

<img src="images/visualtour14/new_index_tab3.png"/>

<h4>' . _("Column") . '</h4>

<p>
  ' . _("The column properties dialog also shows all available collations and allows you to set a collation for char, varchar and text columns:") . '
</p>

<img src="images/visualtour14/new_column_tab2.png"/>

<h4>' . _("Constraint") . '</h4>

<p>
  ' . _("Exclusion Constraints are finally supported in pgAdmin:") . '
</p>

<img src="images/visualtour14/constraint_actions.png"/>

<p>
  ' . _("Primary keys and unique constraints can be added by selecting an existing unique index:") . '
</p>

<img src="images/visualtour14/new_constraint_tab2.png"/>

<h4>' . _("Trigger") . '</h4>

<p>
  ' . _("Constraint triggers have existed for a long time but they are only supported in pgAdmin 1.14. Fortunately, INSTEAD OF triggers are supported right now, but they are only available on views.") . '
</p>

<img src="images/visualtour14/new_trigger_tab2.png"/>

<h4>' . _("Function") . '</h4>

<p>
  ' . _("There is a new action to reset the statistics of the selected function:") . '
</p>

<img src="images/visualtour14/function_actions.png"/>

<h4>' . _("Type") . '</h4>

<p>
  ' . _("The type properties dialog supports the new syntax to change an existing composite type and an existing enumeration type. It also supports the new collation feature. See the screenshots to find the new information:") . '
</p>

<ul>
  <li>
  ' . _("for the composite type") . '<br/>
    <img src="images/visualtour14/new_composite_type_tab3.png"/>
  </li>
  <li>
  ' . _("for the enumeration type") . '<br/>
    <img src="images/visualtour14/new_enumeration_type_tab3.png"/>
  </li>
  <li>
  ' . _("for the external type") . '<br/>
    <img src="images/visualtour14/new_external_type_tab3.png"/>
  </li>
</ul>

<h3>' . _("Domain") . '</h3>

<p>
  ' . _("Domains are also subject to change because of the new collation feature:") . '
</p>

<img src="images/visualtour14/new_domain_tab2.png"/>

<h4>' . _("Collation") . '</h4>

<p>
  ' . _("Collation is a new schema object available in PostgreSQL 9.1. You can create and change collation with its properties dialog:") . '
</p>

<ul>
  <li>
  ' . _("first tab") . '<br/>
    <img src="images/visualtour14/new_collation_tab1.png"/>
  </li>
  <li>
  ' . _("second tab") . '<br/>
    <img src="images/visualtour14/new_collation_tab2.png"/>
  </li>
</ul>

<h4>' . _("SQL/Med objects") . '</h4>

<p>
  ' . _("pgAdmin didn't support any SQL/Med objects prior to this release. pgAdmin 1.14 adds support for Foreign Data Wrappers, Foreign Servers, User Mappings, and Foreign Tables.") . '
</p>

<h4>' . _("Extension") . '</h4>

<p>
  ' . _("Extension is a new database object available in PostgreSQL 9.1. You can add an extension with the properties dialog:") . '
</p>

<ul>
  <li>
  ' . _("first tab") . '<br/>
    <img src="images/visualtour14/new_extension_tab1.png"/>
  </li>
  <li>
  ' . _("second tab") . '<br/>
    <img src="images/visualtour14/new_extension_tab2.png"/>
  </li>
</ul>

<p>
  ' . _("There is one unique aspect to these objects. You don't type their names, you select them from a list of preinstalled extensions.") . '
</p>

<h4>' . _("Role") . '</h4>

<p>
  ' . _("In PostgreSQL 9.1, there is a new role attribute. You can set it with the role properties dialog:") . '
</p>

<img src="images/visualtour14/new_role_tab3.png"/>

<h2>' . _("Query tool") . '</h2>

<p>
  ' . _("The work done on this tool was mostly to make it more usable. We added a new panel for selection information:") . '
</p>

<img src="images/visualtour14/querytool.png"/>

<p>
  ' . _("We fixed the enabling and disabling of toolbar buttons according to the selected text and the panel. We allowed the use of the mousewheel to showthe text larger or smaller in the results grid. We changed the tabs to use tearable tabsets. We added block folding in all SQL text boxes, query tool included.") . '
</p>

<p>
  ' . _("One often requested feature is the ability to disable the Unicode BOM when writing SQL files. It's now available in the options window:") . '
</p>

<img src="images/visualtour14/querytool_options.png"/>

<p>
  ' . _("We also enhanced the connect dialog so that it tries to keep the old values when connecting to another server.") . '
</p>

<h2>' . _("Backup and restore tools") . '</h2>

<p>
  ' . _("The Backup tool supports the new directory format. We also changed the OK button with a Backup one:") . '
</p>

<img src="images/visualtour14/backup_tab1.png"/>

<p>
  ' . _("The OK button of the restore tool has also been changed with a Restore button.") . '
</p>

<p>
  ' . _("pgAdmin 1.14 uses the -w switch of pg_dump/pg_restore when this switch is available.") . '
</p>

<p>
  ' . _("We also added support for the new --quote-all-identifiers command-line option of pg_dump:") . '
</p>

<img src="images/visualtour14/backup_tab3.png"/>

<h2>' . _("Server Status tool") . '</h2>

<p>
  ' . _("The last release brought us the ability to sort values in columns, this release brings us the ability to show and hide the columns. You do this by right clicking on the columns' header, and by unchecking the columns you don't want to see (or checking columns to see them).") . '
</p>

<img src="images/visualtour14/serverstatus_showhide_cols.png"/>

<p>
  ' . _("The configuration is retained when you launch pgAdmin next time. This is also true for the column width.") . '
</p>

<p>
  ' . _("One of the neat things with the extension feature is that it's really easy to get a list of the available extension, and to install one. That helped us to get rid of an annoying requirement to get full power on your PostgreSQL servers. With pgAdmin, you may need to install the adminpack contrib module (which is now called an extension). pgAdmin 1.14 detects the fact that the extension is not installed but that it is available. So, with the hint displayed, you now get a new \"Fix it\" button, which, once clicked, asks pgAdmin to automatically install the extension:") . '
</p>

<img src="images/visualtour14/add_adminpack_extension_hint.png"/>

<p>
  ' . _("We also list the log files in the reverse order, so that the last one is displayed first.") . '
</p>

<h2>' . _("Debugger tool") . '</h2>

<p>
  ' . _("The debugger tool has tearable tabsets, making it easier to use. Moreover, when you try to debug a function with default values for parameters, these defaults are displayed in the message box asking to enter them.") . '
</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
