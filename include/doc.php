<?php

require $_SERVER['DOCUMENT_ROOT'] . "/include/page.php";

// If this is a docpage, then generate our own content and title.
if (isset($_GET['docset']))
{
  if (!isset($_GET['docpage']) || $_GET['docpage'] == "")
    $_GET['docpage'] = 'index.html';

  switch ($_GET['docset']) {
    case "1.4":
      $docroot_lang = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.4/docs/".$_SESSION['xPGA']['lang'];
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.4/docs/en_US";
      $docheader = sprintf(_("pgAdmin %s online documentation"), "1.4");
      break;

    case "1.6":
      $docroot_lang = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.6/docs/".$_SESSION['xPGA']['lang'];
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.6/docs/en_US";
      $docheader = sprintf(_("pgAdmin %s online documentation"), "1.6");
      break;

    case "1.8":
      $docroot_lang = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.8/docs/".$_SESSION['xPGA']['lang'];
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.8/docs/en_US";
      $docheader = sprintf(_("pgAdmin %s online documentation"), "1.8");
      break;

    case "1.10":
      $docroot_lang = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.10/docs/".$_SESSION['xPGA']['lang'];
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.10/docs/en_US";
      $docheader = sprintf(_("pgAdmin %s online documentation"), "1.10");
      break;

    case "1.12":
      $docroot_lang = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.12/docs/".$_SESSION['xPGA']['lang'];
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.12/docs/en_US";
      $docheader = sprintf(_("pgAdmin %s online documentation"), "1.12");
      break;

    case "1.14":
      $docroot_lang = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.14/docs/".$_SESSION['xPGA']['lang'];
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.14/docs/en_US";
      $docheader = sprintf(_("pgAdmin %s online documentation"), "1.14");
      break;

    case "dev":
      $docroot_lang = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3/docs/".$_SESSION['xPGA']['lang']."/_build/html";
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3/docs/en_US/_build/html";
      $docheader = sprintf(_("pgAdmin %s online documentation"), _("Development"));
      break;

    default:
      header("HTTP/1.0 404 Not Found");
      www_page(_("Document not found"), sprintf("<p>%s</p>", _("The document requested does not exist!")), false);
      exit;
  }	

  $docpage = $_GET['docpage'];

  if (file_exists($docroot_lang . "/" . $docpage))
  {
    $docfile = $docroot_lang . "/" . $docpage;
  }
  else if (file_exists($docroot . "/" . $docpage))
  {
    $docfile = $docroot . "/" . $docpage;
  }
  else
  {
    header("HTTP/1.0 404 Not Found");
    www_page(_("Document not found"), sprintf("<p>%s</p>", _("The document requested does not exist!")), false);
    exit();
  }

  if ( false == ($docrawcontent = @file_get_contents($docfile)) )
  {
    www_page(_("Document cannot be read"), sprintf("<p>%s</p>", _("The document requested cannot be read!")), false);
    exit();
  }

  // Check the raw content for a charset. If there is one, convert from it to UTF-8
  if (preg_match('/<meta.*charset=([^"]*)/is', $docrawcontent, $matches) > 0)
    $dociconvcontent = iconv($matches[1], "UTF-8//TRANSLIT", $docrawcontent);

  if ($dociconvcontent == "")
    $dociconvcontent = $docrawcontent;

  if (preg_match("/<title[^>]*>(.*)<\/title>/is", $dociconvcontent, $matches) > 0)
    $doctitle = $matches[1]; 
  else
    $doctitle = _("pgAdmin: Documentation - Couldn't find the document title!");

  $doccontent = "<h1>" . $docheader . "</h1>";
  if (preg_match("/<body[^>]*>(.*)<\/body>/is", $dociconvcontent, $matches) > 0)
    $doccontent .= $matches[1];
  else
    $doccontent .= sprintf("<p>%s</p>", _("Couldn't find the document content!"));

  // Override the last modified date
  $lastmod = filemtime($docfile);

  www_page($doctitle, $doccontent, false, $lastmod);
}

