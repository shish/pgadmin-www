<?php

function www_menu()
{
  $output = '
<div' . www_current_menu_page("index.php") . '><a href="index.php">&rsaquo; ' . _("Introduction") . '</a></div>
<div' . www_current_menu_page("svn.php") . '><a href="svn.php">&rsaquo; ' . _("SVN access") . '</a></div>
<div' . www_current_menu_page("http://svn.pgadmin.org/") . '><a href="http://svn.pgadmin.org/">&rsaquo; ' . _("SVN browser") . '</a></div>
<div' . www_current_menu_page("list.php") . '><a href="list.php">&rsaquo; ' . _("Mailing list") . '</a></div>
<div' . www_current_menu_page("team.php") . '><a href="team.php">&rsaquo; ' . _("Team") . '</a></div>
<div' . www_current_menu_page("todo.php") . '><a href="todo.php">&rsaquo; ' . _("TODO list") . '</a></div>
<div' . www_current_menu_page("changelog.php") . '><a href="changelog.php">&rsaquo; ' . _("Change log") . '</a></div>
';

  return $output;
}

?>
