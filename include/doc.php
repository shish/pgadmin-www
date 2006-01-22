<?php

require $_SERVER['DOCUMENT_ROOT'] . "/include/page.php";

// If this is a docpage, then generate our own content and title.
if (isset($_GET['docset']))
{
  if (!isset($_GET['docpage']) || $_GET['docpage'] == "")
    $_GET['docpage'] = 'index.html';

  switch ($_GET['docset']) {
    case "1.4":
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3-1.4/docs/en_US";
      $docheader = sprintf(_("pgAdmin %s online documentation"), "1.4");
      break;

    case "dev":
      $docroot = $_SERVER['DOCUMENT_ROOT'] . "/svnrepo/pgadmin3/docs/en_US";
      $docheader = sprintf(_("pgAdmin %s online documentation"), _("Development"));
      break;

    default:
      header("HTTP/1.0 404 Not Found");
      www_page(_("Document not found"), sprintf("<p>%s</p>", _("The document requested does not exist!")), false);
      exit;
  }	

  $docpage = $_GET['docpage'];

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
  
  www_page($doctitle, $doccontent, false);
}

