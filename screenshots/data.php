<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Screenshots - Data");
$PAGE_CONTENT = '

<h1>' . _("Data") . '</h1>

<p>' . _("A data grid allows to insert, modify and drop data easily. The data is retrieved on-demand when it needs to be displayed. This allows the user to browse very large tables quickly and efficiently.") . '</p>

<center><a href="/images/screenshots/pgadmin3_viewdata.png" target="_Shot"><img src="/images/screenshots/pgadmin3_viewdata.png" alt="' . _("The data grid") . '" /></a></center>

<p>' . _("A query tool with colour syntax highlighting allows users to run custom queries. The SQL definition of any object can be automatically transfered to the query tool from the object browser, or the user can author simple queries or complex scripts by hand. Long running queries can be cancelled if required by clicking on the red square button. The tool displays execution times of queries to help the user optimise them, and fully supports PostgreSQL's asynchronous notification system.") . '</p>

<center><a href="/images/screenshots/pgadmin3_querytool.png" target="_Shot"><img src="/images/screenshots/pgadmin3_querytool.png" alt="' . _("The query tool") . '" width="600" height="417" /></a></center>

<p>' . _("EXPLAIN and/or ANALYZE your queries to take advantage of PostgreSQL unique optimisation features. You will soon realise that PostgreSQL is amongst the fastest enterprise class databases available.") . '</p>

<center><a href="/images/screenshots/pgadmin3_explain.png" target="_Shot"><img src="/images/screenshots/pgadmin3_explain.png" alt="' . _("The graphical EXPLAIN tool") . '" width="600" height="417" /></a></center>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
