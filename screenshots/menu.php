<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("ui.php") . '><a href="ui.php">&rsaquo; ' . _("User interface") . '</a></div>
<div' . www_current_menu_page("data.php") . '><a href="data.php">&rsaquo; ' . _("Data access") . '</a></div>
<div' . www_current_menu_page("documentation.php") . '><a href="documentation.php">&rsaquo; ' . _("Documentation") . '</a></div>
<div' . www_current_menu_page("mb_i18n.php") . '><a href="mb_i18n.php">&rsaquo; ' . _("Multibyte &amp; i18n") . '</a></div>
<div' . www_current_menu_page("serverstatus.php") . '><a href="serverstatus.php">&rsaquo; ' . _("Server status") . '</a></div>
<div' . www_current_menu_page("xgl.php") . '><a href="xgl.php">&rsaquo; ' . _("Suse 10 XGL") . '</a></div>
';

  return $output;
}

?>
