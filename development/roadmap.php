<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Development - Roadmap");
$PAGE_CONTENT = '

<h1>' . _("Roadmap") . '</h1>

<p>' . sprintf(_("This roadmap outlines the work that is hoped will be done in the %s development cycle for release in version %s of pgAdmin."), "1.15", "1.16") . '</p>

<ul>
  <li>' . _("PostgreSQL compatibility") . '<br />&nbsp;
    <ul>
      <li>' . _("Complete 9.2 support") . '<br />&nbsp;</li>
      <li><del>' . _("Finish 9.1 support with security labels [GL]") .  '</del><br />&nbsp;</li>
      <li>' . _("Finish 8.3 support with operator family objets' creation [GL]") . '<br />&nbsp;</li>
      <li>' . _("Finish 7.4 (?) support with operator class objects' creation [GL]") . '<br />&nbsp;</li>
    </ul>
  </li>

  <li>' . _("Code housekeeping") . '<br />&nbsp;
    <ul>
      <li>' . _("Check for and remove any custom controls that are now implemented in wxWidgets.") . '<br />&nbsp;</li>
      <li>' . _("Check for the use of wxWidgets 2.9/3.0.") . '<br />&nbsp;</li>
    </ul>
  </li>

  <li>' . _("Functionality") . '<br />&nbsp;
    <ul>
      <li><del>' . _("Complete redesign of the documentation [GL]") . '</del><br />&nbsp;</li>
      <li><del>' . _("New options dialog [GL]") . '</del><br />&nbsp;</li>
      <li>' . _("Custom reports in frmStatus [GL]") . '<br />&nbsp;</li>
      <li>' . _("Graphs in frmStatus [GL]") . '<br />&nbsp;</li>
      <li>' . _("Redesign Table dialogue to remove sub-dialogues where possible and replace with grid style UI [GL]") . '<br />&nbsp;</li>
      <li>' . _("Data tune-up options for slow queries (requires XML EXPLAIN in PG 8.4) [DP]") . '<br />&nbsp;</li>
      <li>' . _("pgsql-performance report tool for problematic queries (requires XML EXPLAIN in PG 8.4) [DP]") . '<br />&nbsp;</li>
      <li>' . _("Add a dialog to allow the user to set a global breakpoint in a specific backend process [DP]") . '<br />&nbsp;</li>
      <li>' . _("Add printing support to the query tool (and other styled text controls?) [DP/AV]") . '<br />&nbsp;</li>
    </ul>
  </li>

  <li>' . _("GSoC") . '<br />&nbsp;
    <ul>
      <li>' . _("Database designer for pgAdmin, by Luis Ochoa") . '<br />&nbsp;</li>
      <li>' . _("Database schema difference visualizer, by Adeel Khan") . '<br />&nbsp;</li>
    </ul>
  </li>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
