<?php

// Startup the session and setup the gettext stuff
require $_SERVER['DOCUMENT_ROOT'] . "/include/session.php";
require $_SERVER['DOCUMENT_ROOT'] . "/include/lastmod.php";

function www_current_menu_section($SECTION)
{
  if (dirname($_SERVER['SCRIPT_NAME']) == $SECTION || dirname($_SERVER['SCRIPT_NAME']) . "/" == $SECTION)
    return " id=\"pgaMainMenuSelection\"";
  else
    return " class=\"pgaMainMenuOption\"";
}



function www_current_menu_page($PAGE)
{
  if (substr($_SERVER['SCRIPT_NAME'], strlen($_SERVER['SCRIPT_NAME']) - strlen($PAGE) - 1) == "/" . $PAGE)
    return " id=\"pgaSectionMenuSelection\"";
  else
    return " class=\"pgaSectionMenuOption\"";
}



function www_page($PAGE_TITLE, $PAGE_CONTENT, $HAS_MENU = true, $lastmod = 0)
{
  // Handle the last page modification stuff
  if ($lastmod == 0)
    $lastmod = filemtime($_SERVER['SCRIPT_FILENAME']);

  handleModHeaders($lastmod);

  if ($HAS_MENU == true)
    require dirname($_SERVER["SCRIPT_FILENAME"]) . "/menu.php";

  $css = $_SESSION['xPGA']['css'];
  $lang = $_SESSION['xPGA']['lang'];
  if ($_SESSION['xPGA']['direction'] == "ltr")
    $logo = "logo-ltr.jpg";
  else
    $logo = "logo-rtl.jpg";

  $output = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="' . $lang . '" xml:lang="' . $lang . '">
<head>
<meta name="Description" content="pgAdmin is the leading graphical Open Source management, development and administration tool for PostgreSQL, running on Windows, Linux, Solaris, FreeBSD and Mac OSX" />
<meta name="Keywords" content="postgresql,postgres,pgsql,psql,postgre,pginstaller,pervasive postgres,enterprisedb,mammoth,powergres,pgadmin,pgadmin iii, pgadmin ii,pgadmin3,pgadmin2,windows,linux,solaris,mac osx,freebsd,administration,managment,tools" />
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/css/' . $css . '" title="pgAdmin.org" />
<title>' . $PAGE_TITLE . '</title>
</head>

<body >
<div id="pgaPage">
<div id="top"></div>

<table id="pgaHeader">

<tr>
<td id="pgaLogo" rowspan="2">
<a href="/"><img src="/images/' . $logo . '" alt="' . _("pgAdmin III: PostgreSQL Tools") . '" /></a>
</td>

<td id="pgaSearch">

<!-- SiteSearch Google -->
<form method="get" action="http://www.google.com/custom" target="_top">
<table border="0" bgcolor="#009ace">
<tr><td nowrap="nowrap" valign="top" align="left" height="32">

</td>
<td nowrap="nowrap">
<input type="hidden" name="domains" value="pgadmin.org"></input>
<input type="text" name="q" size="12" maxlength="255" value=""></input>
<input type="submit" name="sa" value="Google Search"></input>
</td></tr>
<tr>
<td>&nbsp;</td>
<td nowrap="nowrap">
<table>
<tr>
<td>
<input type="radio" name="sitesearch" value=""></input>
<font size="-1" color="#ffffff">Web</font>
</td>
<td>
<input type="radio" name="sitesearch" value="pgadmin.org" checked="checked"></input>
<font size="-1" color="#ffffff">pgadmin.org</font>
</td>
</tr>
</table>
<input type="hidden" name="client" value="pub-8982134637751566"></input>
<input type="hidden" name="forid" value="1"></input>
<input type="hidden" name="ie" value="ISO-8859-1"></input>
<input type="hidden" name="oe" value="ISO-8859-1"></input>
<input type="hidden" name="cof" value="GALT:#999999;GL:1;DIV:#009ACE;VLC:555555;AH:center;BGC:FFFFFF;LBGC:CDDDEB;ALC:009ACE;LC:009ACE;T:000000;GFNT:000000;GIMP:000000;LH:100;LW:100;L:http://www.pgadmin.org/images/search.jpg;S:http://www.pgadmin.org/;LP:1;FORID:1;"></input>
<input type="hidden" name="hl" value="en"></input>
</td></tr></table>
</form>
<!-- SiteSearch Google -->

</td>
</tr><tr>
<td id="pgaLanguages">

<form method="GET" name="langform">
<select name="lang" onchange="javascript:document.langform.submit();">
<option selected value="">' . _("Language:") . '</option>
<option value="cs_CZ">' . _("Czech") . '</option>
<option value="en_US">' . _("English") . '</option>
<option value="fr_FR">' . _("French") . '</option>
<option value="zh_CN">' . _("Simplified Chinese") . '</option>
</select>
<input type="submit" value="Go">
</form>

</td>
</tr><tr>
<td colspan="2" id="pgaMainMenu">

<div' . www_current_menu_section("/") . '>
&nbsp;<a href="/index.php">' . _("Home") . '</a>&nbsp;</div>&nbsp;&middot;&nbsp;<div' . www_current_menu_section("/advocacy/") . '>
<a href="/advocacy/" >' . _("Advocacy") . '</a>&nbsp;</div>&nbsp;&middot;&nbsp;<div' . www_current_menu_section("/development/") . '>
<a href="/development/">' . _("Development") . '</a>&nbsp;</div>&nbsp;&middot;&nbsp;<div' . www_current_menu_section("/docs/") . '>
<a href="/docs/">' . _("Documentation") . '</a>&nbsp;</div>&nbsp;&middot;&nbsp;<div' . www_current_menu_section("/download/") . '>
<a href="/download/">' . _("Download") . '</a>&nbsp;</div>&nbsp;&middot;&nbsp;<div' . www_current_menu_section("/screenshots/") . '>
<a href="/screenshots/">' . _("Screenshots") . '</a>&nbsp;</div>&nbsp;&middot;&nbsp;<div' . www_current_menu_section("/support/") . '>
<a href="/support/">' . _("Support") . '</a>&nbsp;</div>&nbsp;&middot;&nbsp;<div' . www_current_menu_section("/translation/") . '>
<a href="/translation/">' . _("Translation") . '</a>&nbsp;</div>

</td>
</tr>
</table>

<table id="pgaSectionContent">
<tr>
';

if ($HAS_MENU == true)
{
  $output .= '  
<td id="pgaSectionMenu">

' . www_menu() . '

</td>
';
}

$output .= '

<td id="pgaContent">
<!-- google_ad_section_start -->

' . $PAGE_CONTENT . '

<!-- google_ad_section_end -->
</td>

<td id="pgaAd">

<script type="text/javascript"><!--
google_ad_client = "pub-8982134637751566";
google_ad_width = 160;
google_ad_height = 600;
google_ad_format = "160x600_as";
google_ad_type = "text";
google_ad_channel ="";
google_color_border = "009ACE";
google_color_bg = "EEEEEE";
google_color_link = "009ACE";
google_color_url = "008000";
google_color_text = "000000";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<!-- Google Analytics -->

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">_uacct = "UA-1345454-3";urchinTracker();</script>

<!-- End Google Analytics -->

</td>
</tr>
</table>

<div id="pgaFooter">

<p><a class="topOfPage" href="#top" title="Top Of Page">top</a></p>

</div>
</div>

</body>
</html>

';

  echo $output;
}
?>
