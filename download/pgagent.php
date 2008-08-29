<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - pgAgent");
$PAGE_CONTENT = '

<h1>' . _("pgAgent") . '</h1>

<p>' . _("pgAgent is a job scheduler for PostgreSQL which may be managed using pgAdmin. Prior to pgAdmin v1.9, pgAgent shipped as part of pgAdmin. From pgAdmin v1.9 onwards, pgAgent is shipped as a separate application.") . '</p>
<ul>
  <li>' . sprintf(_("<a href=\"%s\">pgAgent v2.0.0</a>"), "http://www.postgresql.org/ftp/pgadmin3/release/pgagent/") . '<br />&nbsp;</li>
</ul>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
