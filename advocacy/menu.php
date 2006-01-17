<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("strategy.php") . '><a href="strategy.php">&rsaquo; ' . _("Strategy") . '</a></div>
<div' . www_current_menu_page("information.php") . '><a href="information.php">&rsaquo; ' . _("Information") . '</a></div>
';

  return $output;
}

?>
