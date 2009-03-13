<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: PostgreSQL administration and management tools");
$PAGE_CONTENT = '

<h1>' . _("Latest news") . '</h1>

<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2009-03-13", "1.10.0 BETA 1") . '</h2>

<p>' . _("pgAdmin 1.10.0 BETA 1 has now been released! Highlights of the new release include a graphical query builder, a scripting engine in the query tool, and support for PostgreSQL 8.4 in addition to <a href=\"/development/changelog.php\">numerous other changes</a>. Please visit the <a href=\"http://www.postgresql.org/ftp/pgadmin3/release/v1.10.0-beta1/\">PostgreSQL download site</a> to get a copy and help with the testing. Any questions or other support issues should be sent to <a href=\"mailto:pgadmin-support@postgresql.org\">pgadmin-support@postgresql.org</a>.") . '</a></p>

<h2>' . sprintf(_("%s - pgAdmin III v%s released"), "2008-06-05", "1.8.4") . '</h2>

<p>' . _("pgAdmin 1.8.4 has now been released! Please see the <a href=\"news.php\">news page</a> for further details, and <a href=\"/download/\">the download page</a> to get your copy. Any questions or other support issues should be sent to <a href=\"mailto:pgadmin-support@postgresql.org\">pgadmin-support@postgresql.org</a>.") . '</a></p>

<h1>' . _("Introduction") . '</h1>

<p>' . sprintf(_("pgAdmin III is the most popular and feature rich Open Source administration and development platform for <a href=\"%s\">PostgreSQL</a>, the most advanced Open Source database in the world. The application may be used on Linux, FreeBSD, OpenSUSE, Solaris, Mac OSX and Windows platforms to manage PostgreSQL 7.3 and above running on any platform, as well as commercial and derived versions of PostgreSQL such as <a href=\"%s\">EnterpriseDB</a>, <a href=\"%s\">Mammoth PostgreSQL</a>, <a href=\"%s\">Bizgres</a> and <a href=\"%s\">Greenplum database</a>."), "http://www.postgresql.org/", "http://www.enterprisedb.com", "http://www.commandprompt.com/", "http://www.bizgres.org/", "http://www.greenplum.com/") . '</p>

<p>' . sprintf(_("pgAdmin III is designed to answer the needs of all users, from writing simple SQL queries to developing complex databases. The graphical interface supports all PostgreSQL features and makes administration easy. The application also includes a syntax highlighting SQL editor, a server-side code editor, an SQL/batch/shell job scheduling agent, support for the <a href=\"%s\">Slony-I</a> replication engine and much more. Server connection may be made using TCP/IP or Unix Domain Sockets (on *nix platforms), and may be SSL encrypted for security. No additional drivers are required to communicate with the database server."), "http://slony.info/") . '</p>

<p>' . sprintf(_("pgAdmin III is developed by a community of PostgreSQL experts around the world and is available in more than a dozen languages. It is Free Software released under the <a href=\"%s\">Artistic License</a>."), "licence.php") . '</p>

<div class="pgaBanner">
' . sprintf(_("The current version of pgAdmin is <a href=\"/download/\">%s</a>."), "1.8.4") . '
</div>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
