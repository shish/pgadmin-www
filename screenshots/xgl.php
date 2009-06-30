<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Screenshots - Suse 10 XGL");
$PAGE_CONTENT = '

<h1>' . _("Suse 10 XGL") . '</h1>

<p>' . _("pgAdmin even works in 3D!!.") . '</p>

<center><a href="/images/screenshots/pgadmin3_suse10_xgl.png" target="_Shot"><img src="/images/screenshots/pgadmin3_suse10_xgl.png" alt="' . _("pgAdmin running on Suse 10 XGL") . '" width="195" height="131" /></a></center>

';

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
