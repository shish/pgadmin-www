<?php

require $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php";

if (isset($_GET['list']))
{
  if (!isset($_GET['msg']) || $_GET['msg'] == "")
    $_GET['docpage'] = 'index.php';

  switch ($_GET['list']) {
    case "pgadmin-support":
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/archives/pgadmin-support/";
      break;

    case "pgadmin-hackers":
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/archives/pgadmin-hackers/";
      break;

    default:
      header("HTTP/1.0 404 Not Found");
      www_page(_("Document not found"), sprintf("<p>%s</p>", _("The document requested does not exist!")), false);
      exit;
  }	

  $docpage = $_GET['msg'];

  $docfile = $docroot . "/" . $docpage;

  if (file_exists($docfile))
  {
    $docrawcontent = file_get_contents($docfile);  
  }
  else
  {
    header("HTTP/1.0 404 Not Found");
    www_page(_("Document not found"), sprintf("<p>%s</p>", _("The document requested does not exist!")), false);
    exit();
  }

  // Check the raw content for a charset. If there is one, convert from it to UTF-8
  if (preg_match('/<meta.*charset=([^"]*)/is', $docrawcontent, $matches) > 0)
    $dociconvcontent = iconv($matches[1], "UTF-8//TRANSLIT", $docrawcontent);
  else
    $dociconvcontent = $docrawcontent;

  if (preg_match("/<title[^>]*>(.*)<\/title>/is", $dociconvcontent, $matches) > 0)
    $doctitle = $matches[1]; 
  else
    $doctitle = _("pgAdmin: Archives - Couldn't find the archive title!");

  if (preg_match("/\?>(.*)<\?/is", $dociconvcontent, $matches) > 0)
    $doccontent = $matches[1];
  else
    $doccontent = sprintf("<p>%s</p>", _("Couldn't find the archive content!"));
  
  www_page($doctitle, $doccontent, false);
}

