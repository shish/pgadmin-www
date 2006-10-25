<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Development - Roadmap");
$PAGE_CONTENT = '

<h1>' . _("Roadmap") . '</h1>

<p>' . sprintf(_("This roadmap outlines the work that is hoped will be done in the %s development cycle for release in version %s of pgAdmin."), "1.7", "1.8") . '</p>

<p>' . _("It is expected that this development cycle will be around 6 months in length, in order to coincide with the release of PostgreSQL 8.3. This cycle will focus on cleanup type work to make the codebase more maintainable and more reliable than ever before.") . '</p>

<ul>
  <li>' . _("PostgreSQL 8.3 compatibility (these items are subject to change)") . '
    <ul>
      <li>' . _("Enum support.") . '</li>
    </ul>
  </li>
  
  <li>' . _("Larger projects") . '
    <ul>
      <li>' . _("Integrate EnterpriseDB's wxWidgets based pl/pgSQL debugger, as a standalone app under /xtra. Include appropriate hooks into it from pgAdmin.") . '</li>
    </ul>
  </li>
  
  <li>' . _("Code housekeeping") . '
    <ul>
      <li>' . _("Remove macros and code to support non-Unicode builds.") . '</li>
      <li>' . _("Remove macros and code to support wxWidgets 2.6 and older.") . '</li>
      <li>' . _("Refactor to remove base classes that offer no real benefit - e.g. pgSet/pgQueryThread which only have a couple of members between them.") . '</li>
      <li>' . _("Consider breaking out some larger classes into their own files - e.g. sqlTable from frmEditGrid, and pgQueryThread from pgSetBase.") . '</li>
    </ul>
  </li>
  
  <li>' . _("Build system") . '
    <ul>
      <li>' . _("Don't install .xrc files with non-debug builds from the *nix build system.") . '</li>
      <li>' . _("Cleanup the Visual Studio project structure to match the actual directory layout.") . '</li>
      <li>' . _("XCode project files for building on Mac.") . '</li>      
      <li>' . _("Restructure header files into a more organised directory layout.") . '</li>
      <li>' . _("Consider auto-generation of the *nix/XCode project files from the VC++ project files.") . '</li>
    </ul>
  </li>
  
  <li>' . _("Miscellaneous tweaks") . '
    <ul>
      <li>' . _("Allow use of Command-W to close dialogues and windows on Mac.") . '</li>
      <li>' . _("Allow backup of roles, or the entire database cluster.") . '</li>
    </ul>
  </li>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>