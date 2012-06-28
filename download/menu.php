<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("macosx.php") . '><a href="macosx.php">&rsaquo; ' . _("Mac OSX") . '</a></div>
<div' . www_current_menu_page("source.php") . '><a href="source.php">&rsaquo; ' . _("Source code") . '</a></div>
<div' . www_current_menu_page("windows.php") . '><a href="windows.php">&rsaquo; ' . _("Windows &trade;") . '</a></div>
<br />
<div' . www_current_menu_page("adminpacks.php") . '><a href="adminpacks.php">&rsaquo; ' . _("Admin packs") . '</a></div>
<div' . www_current_menu_page("languages.php") . '><a href="languages.php">&rsaquo; ' . _("Languages") . '</a></div>
<div' . www_current_menu_page("pgagent.php") . '><a href="pgagent.php">&rsaquo; ' . _("pgAgent") . '</a></div>
';

  return $output;
}

?>
