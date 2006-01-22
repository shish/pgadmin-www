<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Screenshots - User interface");
$PAGE_CONTENT = '

<h1>' . _("User interface") . '</h1>

<p>' . _("The pgAdmin project started in 1997 and the application is used by tens of thousands of users worldwide. With the help and suggestions of those users, we have been constantly improving the usability of pgAdmin.") . '</p>

<p>' . _("pgAdmin III can connect to any PostgreSQL 7.3/7.4 and 8.x database using the embedded libpq native library. The application does not need any ODBC, .NET or JDBC layer. When configured server-side, it is possible to connect using encrypted password or SSL authentication.") . '</p>

<center><a href="/images/screenshots/pgadmin3_connect.png" target="_Shot"><img src="/images/screenshots/pgadmin3_connect.png" alt="' . _("The database connection dialogue") . '" width="194" height="178" /></a></center>

<p>' . _("The properties and statistics of the selected object are displayed in the right pane of pgAdmin III. Notice the display of the SQL definition with colour syntax highlighting.") . '</p>

<p>' . _("As objects are created and modified, pgAdmin will show the user the code used to make the modifications, as well as the reverse-engineered SQL definition of the selected object. This helps the user learn and understand the SQL easily allowing them to work productively in the GUI and the command line or in scripts.") . '</p>

<center><a href="/images/screenshots/pgadmin3_properties.png" target="_Shot"><img src="/images/screenshots/pgadmin3_properties.png" alt="' . _("The properties of the selected object.") . '" width="190" height="279" /></a></center>

<p>' . _("A double-click in the navigation tree opens the selected object in a separate dialogue, or the user may opt to create a new object.  Notice the tabs giving access to Properties, Parameters, Security and the SQL used to create the object.") . '</p>

<center><a href="/images/screenshots/pgadmin3_function.png" target="_Shot"><img src="/images/screenshots/pgadmin3_function.png" alt="' . _("The function properties dialogue") . '" width="200" height="270" /></a></center>

<p>' . _("pgAdmin III includes a table editor. Columns can be dropped. Column data types can be modified in certain conditions as allowed by the server version.") . '</p>

<center><a href="/images/screenshots/pgadmin3_table.png" target="_Shot"><img src="/images/screenshots/pgadmin3_table.png" alt="' . _("The table properties dialogue") . '" width="252" height="294" /></a></center>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
