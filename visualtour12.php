<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin 1.12 Visual Tour");
$PAGE_CONTENT = '
<h1>' . _("pgAdmin 1.12 Visual Tour") . '</h1>

<p>
  ' . _("The long awaited 1.12 version of pgAdmin III is finally available in beta. We will try to highlight some of the new features which have been added since the last stable release.") . '
</p>

<h2>' . _("Connection handling") . '</h2>

<p>
  ' . _("The connection handling has been changed. Previous releases used functions incompatible with IPv6. This part of the code has been updated to allow IPv6 connections.") . '
</p>

<p>
  ' . _("People using pgAdmin on WLAN and other unreliable connections may have suffered from disconnections being poorly handled in pgAdmin. On the browser, pgAdmin is now able to detect a disconnection and asks the user if he wants to reconnect.") . '
</p>

<img src="images/visualtour12/visualtour01.jpg"/>

<p>
  ' . _("On PostgreSQL 9.0, a new connection parameter is available. pgAdmin uses it to tell which tool uses which connection. An administrator looking at the pg_stat_activity catalog or launching the server status window will understand quickly which connections are used by a pgAdmin application, and by which pgAdmin tool.") . '
</p>

<h2>' . _("Object browser") . '</h2>

<p>
  ' . _("There is big news in the browser. If you have a large number of registered servers, you will be able to group them together. At the beginning, you'll only have one group : Servers. So, it will look similar to previous releases of pgAdmin. The folder name containing a server can be changed on the Properties dialogue for the server.") . '
</p>

<img src="images/visualtour12/visualtour02.jpg"/>

<p>
  ' . _("If you take a look at a server's properties, you will see a new group combobox. Enter the name of the new group.") . '
</p>

<img src="images/visualtour12/visualtour03.jpg"/>

<p>
  ' . _("When you click on the OK button, a new group appears with your server in it.") . '
</p>

<img src="images/visualtour12/visualtour04.jpg"/>

<p>
  ' . _("This folder functionality allows you to group servers by type or use.") . '
</p>

<p>
  ' . _("The browser allowed you to copy from the SQL pane, but not from the properties/statistics/dependencies/dependents tabs. This is possible with pgAdmin 1.12. You can select one or more lines (with the shift or control key in this case).") . '
</p>

<img src="images/visualtour12/visualtour05.jpg"/>

<p>
  ' . _("New scripts have been added : SELECT for functions, and EXEC for procedures (in EnterpriseDB's Postgres Plus Advanced Server).") . '
</p>

<img src="images/visualtour12/visualtour06.jpg"/>

<p>
  ' . _("Choosing either of those two will launch the query tool and show the appropriate query.") . '

</p>

<p>
  ' . _("Another new menu item, \"Reload configuration\" allows the user to request the server to reload it's configuration.") . '

</p>

<img src="images/visualtour12/visualtour07.jpg"/>

<h2>' . _("Object properties") . '</h2>

<p>
  ' . _("Many of these new features were added for compatibility with PostgreSQL 9.0.") . '
</p>

<h3>' . _("Server properties") . '</h3>

<p>
  ' . _("PostgreSQL 9.0 adds Hot Standby and Streaming Replication features, which mean that a user can connect to a slave in read-only mode and that the packets sent will usually be less than a complete WAL file. pgAdmin gives you some information about the status of the server you selected: Is it in recovery? Does it lag on transaction replay? They are all seen in the properties tab of the server.") . '
</p>

<img src="images/visualtour12/visualtour08.jpg"/>

<p>
  ' . _("You'll also see the last time a superuser reloaded the configuration.") . '
<p>

<p>
  ' . _("In the server's properties dialog, the colour widget has been replaced with a custom widget which should be more simple to use.") . '
<p>

<img src="images/visualtour12/visualtour09.jpg"/>

<p>
  ' . _("You immediately see the choosen color. To change it, click on the button and a native colour chooser dialog will appear. As soon as you close it, the colour button will change its colour.") . '
</p>

<h3>' . _("Database properties") . '</h3>

<p>
  ' . _("pgAdmin 1.10 lacks some statistics for database, indexes and functions. They all are available now. For example, this is what pgAdmin 1.12 shows for a selected database.") . '
</p>

<img src="images/visualtour12/visualtour10.jpg"/>

<p>
  ' . _("PostgreSQL 9.0 handles specific settings for user/database pairs. pgAdmin 1.12 supports this with a modified \"Variables\" tab for database and user objects.") . '
</p>

<img src="images/visualtour12/visualtour11.jpg"/>

<p>
  ' . _("A new \"Username\" combobox appears. You can select a user to add a specific setting for this user/database combo.") . '
</p>

<p>
  ' . _("PostgreSQL 9.0 also adds default privileges. They are available at database and schema level. The database properties dialog displays a new tab, \"Default Privileges\" which allows you to define these new privileges for tables, sequences, and functions.") . '
</p>

<img src="images/visualtour12/visualtour12.jpg"/>

<h3>' . _("Table properties") . '</h3>

<p>
  ' . _("Using the table properties dialog should be quicker now because the list of types is now cached.") . '
</p>

<p>
  ' . _("On Greenplum database, the table's properties dialog also shows the partition name.") . '
</p>

<p>
  ' . _("There were also enhancements on tables in 9.0. A new combobox has been added for handling typed tabes.") . '
</p>

<img src="images/visualtour12/visualtour13.jpg"/>

<h3>' . _("Constraint properties") . '</h3>

<p>
  ' . _("Primary keys and unique indexes can now be defined as deferrable and deffered constraints. So, there are two new checkboxes to set these options.") . '
</p>

<img src="images/visualtour12/visualtour14.jpg"/>

<h3>' . _("Index properties") . '</h3>

<p>
  ' . _("pgAdmin 1.10 lacks some statistics for databases, indexes and functions. They all are available now. For example, this is what pgAdmin 1.12 shows for indexes.") . '
</p>

<img src="images/visualtour12/visualtour15.jpg"/>

<p>
  ' . _("No one could change the operator class with pgAmin's UI because it lacked this information. This has changed with 1.12. A new combobox is included in the index properties dialog.") . '
</p>

<img src="images/visualtour12/visualtour16.jpg"/>

<p>
  ' . _("Moreover, you don't have to name the index when you're connected to a 9.0 server. pgAdmin 1.12 offers that convenience, and PostgreSQL will autoname it.") . '
</p>

<h3>' . _("Trigger properties") . '</h3>

<p>
  ' . _("pgAdmin 1.12 supports the new syntax of CREATE TRIGGER. The WHEN clause and the column link are handled. The former uses a new textbox.") . '
</p>

<img src="images/visualtour12/visualtour17.jpg"/>

<p>
  ' . _("The latter has a complete tab to set all columns.") . '
</p>

<img src="images/visualtour12/visualtour18.jpg"/>

<h3>' . _("Function properties") . '</h3>

<p>
  ' . _("pgAdmin 1.10 lacks some statistics for database, indexes and functions. They all are available now. For example, this is what pgAdmin 1.12 shows for function.") . '
</p>

<img src="images/visualtour12/visualtour19.jpg"/>

<h3>' . _("Column properties") . '</h3>

<p>
  ' . _("There was no way to change the storage information of a column in the previous releases of pgAdmin. Beginning with 1.12, you can change that information in the properties dialog.") . '
</p>

<img src="images/visualtour12/visualtour20.jpg"/>

<h3>' . _("Tablespace properties") . '</h3>

<p>
  ' . _("PostgreSQL 9.0 allows a user to set specific settings within a tablespace. The tablespace properties dialog has been reworked so that one can add these settings via a new \"Variables\" tab.") . '
</p>

<img src="images/visualtour12/visualtour21.jpg"/>

<h3>' . _("Schema properties") . '</h3>

<p>
  ' . _("Default ACLs are available in the database and schema properties dialog. You'll have a new tab to set these privileges.") . '
</p>

<img src="images/visualtour12/visualtour22.jpg"/>

<h2>' . _("Maintenance dialogs") . '</h2>

<p>
  ' . _("The maintenance dialogs have been reviewed. They offer now all options available. Moreover, they are resizable.") . '
</p>

<h3>' . _("Dump/Restore") . '</h3>

<p>
  ' . _("pgAdmin 1.12 handles many more options already available in the pg_dump/pg_restore binaries.") . '
</p>

<p>
  ' . _("The first tab allows you to choose the backup file, select the format of the dump, the compression ratio, and the encoding.") . '
</p>

<img src="images/visualtour12/visualtour23.jpg"/>

<p>
  ' . _("The second and third tabs give you all the options available via pg_dump.") . '
</p>

<img src="images/visualtour12/visualtour24.jpg"/>

<img src="images/visualtour12/visualtour25.jpg"/>

<p>
  ' . _("Finally, the fourth tab allows you to select all the objects you want to dump. All checked objects will be included in the dump.") . '
</p>

<img src="images/visualtour12/visualtour26.jpg"/>

<p>
  ' . _("The restore dialog has been completely redesigned.") . '
</p>

<p>
  ' . _("The first tab allows you to select the backup file to restore, and the number of threads/processes that pg_restore will use.") . '
</p>

<img src="images/visualtour12/visualtour27.jpg"/>

<p>
  ' . _("The two next tabs offer all pg_restore options in a GUI way.") . '
</p>

<img src="images/visualtour12/visualtour28.jpg"/>

<img src="images/visualtour12/visualtour29.jpg"/>

<p>
  ' . _("Once you've selected a dump file, the \"View\" button will be enabled. Once clicked, the \"Objects\" tab will display all the objects available in the dump file. You'll have the possibility to select all the objects you want to restore. All the others will be ignored.") . '
</p>

<p>
  ' . _("The Backup window and the Restore window are now resizable.") . '
</p>

<h3>' . _("Maintenance") . '</h3>

<p>
  ' . _("This dialog is also resizable. The main new feature consists on the use of its own connection. Because of this, you still can use the main window while doing a VACUUM on a database.") . '
</p>

<img src="images/visualtour12/visualtour30.jpg"/>

<h2>' . _("Query tool") . '</h2>

<p>
  ' . _("The Query Tool is probably the tool that received most of the work for this release.") . '
</p>

<p>
  ' . _("You can drag a file from the desktop and drop it in the query text box. It will automatically open the file.") . '
</p>

<p>
  ' . _("The server color is available in a square box in the connection combobox.") . '
</p>

<img src="images/visualtour12/visualtour31.jpg"/>

<p>
  ' . _("A history of query is automatically saved in a file. The contents of this file is available in a combobox located just above the query text box. You can delete the selected query or all the queries in the file.") . '
</p>

<p>
  ' . _("If you want to replace the current query with a previously saved one, you can select it in the combobox.") . '
</p>

<img src="images/visualtour12/visualtour32.jpg"/>

<p>
  ' . _("The number of saved queries is customizable in the options dialog.") . '
</p>

<p>
  ' . _("\"EXPLAIN ANALYZE\" has its own menu item and its own shortcut (Shift-F7). You can disable the auto-rollback behaviour (usually if you want to rollback to a previous savepoint).") . '
</p>

<img src="images/visualtour12/visualtour33.jpg"/>

<p>
  ' . _("The new COSTS and BUFFERS options of EXPLAIN are also available when you're connected to PostgreSQL 9.0.") . '
</p>

<img src="images/visualtour12/visualtour34.jpg"/>

<p>
  ' . _("The EXPLAIN ANALYZE image can be exported as an image as can the graphical query canvas.") . '
</p>

<p>
  ' . _("The connection dialog allows you to choose another user.") . '
</p>

<img src="images/visualtour12/visualtour35.jpg"/>

<p>
  ' . _("And last, the query tool can now display line numbers.") . '
</p>

<h2>' . _("Server status") . '</h2>

<p>
  ' . _("There are three main visible changes. First, lines in the activity report are colour coded. You can customize the colour in the options dialog. Second, the application name is displayed in a new column if you're connected to a 9.0 PostgreSQL server. And third, you can change the order by clicking on a column's header. A small icon will show you the current order.") . '
</p>

<img src="images/visualtour12/visualtour36.jpg"/>

<p>
  ' . _("A less visible change allows you to change the database connection for the lock report. If you do so, you can have the table names displayed instead of their OID.") . '
</p>

<p>
  ' . _("And last, you can open the query tool with the query currently executed by a process by selecting this process in the activity report.") . '
</p>

<h2>' . _("Configuration") . '</h2>

<p>
  ' . _("The options dialog was significantly updated too. It's resizable, uses as many native widgets as possible. This should help to provide a better user experience.") . '
</p>

<p>
  ' . _("The first tab didn't change much.") . '
</p>

<img src="images/visualtour12/visualtour37.jpg"/>

<p>
  ' . _("The \"query tool\" has many more options. You can set the path to files containing favourites, macros and queries history. That enables you to share your favourites file, for example. There are also parameters for the queries history.") . '
</p>

<img src="images/visualtour12/visualtour38.jpg"/>

<p>
  ' . _("A new \"Colours\" tab is included. It allows the user to select colours for the query text box, the SQL syntax Highlighting, and the Status window. They all use the new colour widget.") . '
</p>

<img src="images/visualtour12/visualtour39.jpg"/>


'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
