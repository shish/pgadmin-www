<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("dev/index.php") . '><a href="dev/">&rsaquo; ' . sprintf(_("Development %s"), "1.5") . '</a></div>
<div' . www_current_menu_page("1.4/index.php") . '><a href="1.4/">&rsaquo; ' . sprintf(_("Release %s"), "1.4") . '</a></div>
';

  return $output;
}

?>
