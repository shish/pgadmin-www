<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: PostgreSQL administration and management tools");
$PAGE_CONTENT = '

<h1>' . _("Latest news") . '</h1>

<h2>' . sprintf(_("%s - pgAdmin demo video"), "2010-04-09") . '</h2>

<p>' . _("Gary at <a href=\"http://www.enterprisedb.com/\">EnterpriseDB</a> has produced a <a href=\"http://www.enterprisedb.com/learning/videos/Create_Postgres_Database_pgAdmin.do\">video walkthrough</a> showing off some of the features in pgAdmin.") . '</p>

<h2>' . sprintf(_("%s - pgAdmin v%s released"), "2010-03-10", "1.10.2") . '</h2>

<p>' . _("pgAdmin 1.10.2 has now been released. Please see the <a href=\"/development/changelog.php\">CHANGELOG</a> for details of the bug fixes in this release or visit the <a href=\"download\">download area</a> to get your copy now.") . '</p>

<h1>' . _("Introduction") . '</h1>

<p>' . sprintf(_("pgAdmin is the most popular and feature rich Open Source administration and development platform for <a href=\"%s\">PostgreSQL</a>, the most advanced Open Source database in the world. The application may be used on Linux, FreeBSD, Solaris, Mac OSX and Windows platforms to manage PostgreSQL 7.3 and above running on any platform, as well as commercial and derived versions of PostgreSQL such as <a href=\"%s\">Postgres Plus Advanced Server</a> and <a href=\"%s\">Greenplum database</a>."), "http://www.postgresql.org/", "http://www.enterprisedb.com", "http://www.greenplum.com/") . '</p>

<p>' . sprintf(_("pgAdmin is designed to answer the needs of all users, from writing simple SQL queries to developing complex databases. The graphical interface supports all PostgreSQL features and makes administration easy. The application also includes a syntax highlighting SQL editor, a server-side code editor, an SQL/batch/shell job scheduling agent, support for the <a href=\"%s\">Slony-I</a> replication engine and much more. Server connection may be made using TCP/IP or Unix Domain Sockets (on *nix platforms), and may be SSL encrypted for security. No additional drivers are required to communicate with the database server."), "http://slony.info/") . '</p>

<p>' . sprintf(_("pgAdmin is developed by a community of PostgreSQL experts around the world and is available in more than a dozen languages. It is Free Software released under the <a href=\"%s\">PostgreSQL License</a>."), "licence.php") . '</p>

<div class="pgaBanner">
' . sprintf(_("The current version of pgAdmin is <a href=\"/download/\">%s</a>."), "1.10.2") . '
</div>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
