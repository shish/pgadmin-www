<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("news.php") . '><a href="news.php">&rsaquo; ' . _("News") . '</a></div>
<div' . www_current_menu_page("features.php") . '><a href="features.php">&rsaquo; ' . _("Features") . '</a></div>
<div' . www_current_menu_page("contribute.php") . '><a href="contribute.php">&rsaquo; ' . _("Contribute") . '</a></div>
<div' . www_current_menu_page("licence.php") . '><a href="licence.php">&rsaquo; ' . _("Licence") . '</a></div>
';

  return $output;
}

?>
