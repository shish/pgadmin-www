<?php
  require("./globals.php");

  $file = htmlentities(addslashes($_GET['file']), ENT_NOQUOTES);
  $version = floatval($_GET['version']);

  $db = @pg_pconnect($PortalDB);
  if (!$db) {
    header("Location: unavailable.html\n\n");
    die;
  }

  // Get the current version if required
  if (strtolower($_GET['version']) == 'current') {
    $sql = "SELECT max(version) FROM docs";
    $rs = pg_exec($db, $sql);
    $version = pg_result($rs, 0, 0);
  }

  $sql = "SELECT title, content FROM docs WHERE version = " . $version . "::numeric AND file = '" . $file . "'";
  $rs = pg_exec($db, $sql);

  if (pg_numrows($rs) < 1) {
    $title = "File not found";
    $content = "<p><center><h4>The requested document could not be found.</h4></center></p>";
  } else {
    $title = pg_result($rs, 0, "title");
    $content = pg_result($rs, 0, "content");

    // Fix the URLs
    // Temporarily change mailto, ftp and http ones to something safe first
    $content = str_replace("HREF=\"ftp:", "FFFF=\"ftp:", $content);
    $content = str_replace("HREF=\"http:", "HHHH=\"http:", $content);
    $content = str_replace("HREF=\"mailto:", "MMMM=\"mailto:", $content);

    $content = str_replace("HREF=\"", "href=\"" . $_SERVER['SCRIPT_NAME'] . "?version=" . $version . "&file=", $content);

    // Now change the others back
    $content = str_replace("FFFF=\"ftp:", "HREF=\"ftp:", $content);
    $content = str_replace("HHHH=\"http:", "HREF=\"http:", $content);
    $content = str_replace("MMMM=\"http:", "HREF=\"mailto:", $content);

    // Fix the images
    $content = str_replace("IMG SRC=\"", "IMG SRC=\"images/" . $version . "/", $content);

  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<!-- header -->
<html>
<head>
  <title>PostgreSQL <?php echo("$version Documentation ($title)"); ?></title>
  <meta http-equiv="Expires" content="Mon, 06 Jan 1990 00:00:01 GMT">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="Author" content="Dave Page">
  <meta name="keyword" content="PostgreSQL, database, dbms, postgres, postgres95, pgsql, relational, SQL, ODBC, JDBC"> 
  <link rel="stylesheet" href="pgadmin3.css" type="text/css">
</head>

<body>

<?php 

  echo($content); 
  
?>

</body>
</html>
