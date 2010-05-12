<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("news.php") . '><a href="news.php">&rsaquo; ' . _("News") . '</a></div>
<div' . www_current_menu_page("features.php") . '><a href="features.php">&rsaquo; ' . _("Features") . '</a></div>
<div' . www_current_menu_page("visualtour12.php") . '><a href="visualtour12.php">&rsaquo; ' . _("Tour (1.12)") . '</a></div>
<div' . www_current_menu_page("visualtour.php") . '><a href="visualtour.php">&rsaquo; ' . _("Tour (1.10)") . '</a></div>
<div' . www_current_menu_page("contribute.php") . '><a href="contribute.php">&rsaquo; ' . _("Contribute") . '</a></div>
<div' . www_current_menu_page("licence.php") . '><a href="licence.php">&rsaquo; ' . _("Licence") . '</a></div>
<div' . www_current_menu_page("privacypolicy.php") . '><a href="privacypolicy.php">&rsaquo; ' . _("Privacy policy") . '</a></div>
';

  return $output;
}

?>
