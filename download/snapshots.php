<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Download - Snapshots");
$PAGE_CONTENT = '

<h1>' . _("Snapshots") . '</h1>

<p>' . sprintf(_("Source tarballs and binary snapshots for a variety of platforms are built from <a href=\"%s\">GIT trunk</a> daily. Other snapshots are built on a less regular basis, following programming milestones."), "http://git.postgresql.org/gitweb?p=pgadmin3.git;a=summary") . '</p>

<p>' . _("<b>WARNING:</b> Development snapshots have had little or no testing, and in some cases may not even run. It is only recommended that you use a snapshot if you are sure you know what you are doing, or are testing a specific bug fix or new feature on the direction of one of the developers. Please report any bugs or issue you may have with the development snapshots, but do remember that they are 'works in progress'.") . '</p>

<p>' . sprintf(_("pgAdmin development snapshots may be downloaded <a href=\"%s\">here</a>."), "../snapshots") . '</p>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
