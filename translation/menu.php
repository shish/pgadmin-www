<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("status.php") . '><a href="status.php">&rsaquo; ' . _("Status") . '</a></div>
<div' . www_current_menu_page("howto.php") . '><a href="howto.php">&rsaquo; ' . _("Howto") . '</a></div>
';

  return $output;
}

?>
