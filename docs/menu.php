<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("dev/index.html") . '><a href="dev/index.html">&rsaquo; ' . sprintf(_("Development %s"), "1.7") . '</a></div>
<div' . www_current_menu_page("1.4/index.html") . '><a href="1.6/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.6") . '</a></div>
<div' . www_current_menu_page("1.4/index.html") . '><a href="1.4/index.html">&rsaquo; ' . sprintf(_("Release %s"), "1.4") . '</a></div>
';

  return $output;
}

?>
