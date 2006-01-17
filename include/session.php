<?php

session_start();
if (!isset($_SESSION['xCMS'])) 
{
    $_SESSION['xPGA']['active'] = 1;
    $_SESSION['xPGA']['hits'] = 1;
} 
else
    $_SESSION['xPGA']['hits']++;

// Get the user's language preference
// Prefer any GET var (lang/locale) over the existing session. 
if (isset($_GET['lang']))
  $lang = $_GET['lang'];
else if (isset($_GET['locale']))
  $lang = $_GET['locale'];
else if (isset($_SESSION['xPGA']['lang']))
  $lang = $_SESSION['xPGA']['lang'];
else
  $lang = "en_US";

// Reset the session values to ensure they're valid
switch ($lang){

  case "en_US":
    $_SESSION['xPGA']['css'] = "pgadmin-ltr.css";
    $_SESSION['xPGA']['lang'] = $lang;
    $_SESSION['xPGA']['direction'] = "ltr";
    break;

  default:
    $_SESSION['xPGA']['css'] = "pgadmin-ltr.css";
    $_SESSION['xPGA']['lang'] = "en_US";
    $_SESSION['xPGA']['direction'] = "ltr";
  }

// Now setup gettext
$domain = 'pgadmin3_website';

putenv("LANG=" . $_SESSION['xPGA']['lang']);
$_ENV['LANG']=$_SESSION['xPGA']['lang'];
setlocale(LC_ALL, $_SESSION['xPGA']['lang']);
bind_textdomain_codeset($domain, "UTF-8");
bindtextdomain($domain,  $_SERVER['DOCUMENT_ROOT'] . "/locale");
textdomain($domain);

?>
