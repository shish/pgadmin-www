<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php
require("globals.php");

  // Default to the Index
  if($ContentID == ""){
    $ContentID = 1;
  }

  // Connect to the database
  $db = pg_connect("$dbConn");
  $rs = pg_exec($db, "SELECT id, quicklink, showquicklink, title, content, date_part('epoch', updated) AS updated, idoc FROM content WHERE id = $ContentID");
  $rows = pg_numrows($rs);
  if ($rows != 1){
    $doc = array(
      "id" => "0",
      "quicklink" => "",
      "showquicklink" => "0",
      "title" => "Error",
      "content" => "<h3>The Content ID specified could not be found!</h3>",
      "updated" => date("d M Y G:i:s"),
      "idoc" => "0"
    );
  } else{
    $doc = pg_fetch_array($rs, 0);
  }

  // Now build the Quicklinks
  $rs = pg_exec($db, "SELECT id, quicklink FROM content WHERE showquicklink = TRUE ORDER BY quicklink");
  $rows = pg_numrows($rs);
  for ($x = 0;$x < $rows;$x++) {
    $QuickLinks = $QuickLinks . "        &nbsp;&nbsp;<a href=\"pgadmin2.php?ContentID=" . pg_result($rs, $x, "id") . "\">" . pg_result($rs, $x, "quicklink") . "</a><br>\n";
  }
?>

<html>
<head>
  <link rel="stylesheet" href="pgadmin2.css" type="text/css">
  <title><?php echo("$doc[title]"); ?></title>
</head>

<body bgcolor="<?php echo("$DarkBlue"); ?>">

<center>
<table border=0 cellspacing=3 width=720>
  <tr>
    <td align="center" valign="center" colspan=1 rowspan=2 width=120 height=120 bgcolor="<?php echo("$LightBlue"); ?>">
      <a href="pgadmin2.php"><img src="images/logo.jpg" alt="pgAdmin II Logo" border=0></a>
    </td>
    <td align="left" valign="middle" colspan=1 width=450 height=90 bgcolor="<?php echo("$LightBlue"); ?>">
      <h2><b><?php echo("$doc[title]"); ?></b></h2>
    </td>
    <td align="center" valign="center" colspan=1 rowspan=2 width=120 height=120 bgcolor="<?php echo("$LightBlue"); ?>">
      <a href="http://ads.hub.org/redirect.php?lvl=sponsor" TARGET="_banner">
        <img src="http://ads.hub.org/display_image.php?lvl=sponsor" border=0 alt="Banner Advertisment">
      </a>
    </td>
  </tr>
  <tr>
    <td align="left" valign="middle" width=450 height=30 bgcolor="<?php echo("$LightBlue"); ?>">
      <small>pgAdmin II is Copyright &copy; 2001 - 2003, The <a href="pgadmin2.php?ContentID=3">pgAdmin
      Development Team</a><br>This software is released under the 
      <a href="pgadmin2.php?ContentID=22">Artistic Licence</a></small>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" colspan=1 rowspan=1 width=120 height=60 bgcolor="<?php echo("$LightBlue"); ?>">
      <center>
        <small>
          Subscribe to the support mailing list:
          <form action="pgadmin2.php?ContentID=<?php echo("$doc[id]"); ?>" method="post">
            <input type="text" name="SubEmail" value="<?php echo("$SubEmail"); ?>" size=15><br>
            <?php 
              if($SubEmail != "") {
                if(!strchr($SubEmail, ",") && strchr($SubEmail, ".") &&  strchr($SubEmail, ".")) {
                  if (mail("pgadmin-support-request@postgresql.org", "pgadmin-support, subscribe from website", "subscribe pgadmin-support $SubEmail", "From: <$SubEmail>")) {
                    echo("            <br><b>Subscribed!</b>");
                  } else {
                    echo("            <br><b>Error!</b>");
                  }
                } else {
                  echo("            <input type=\"submit\" value=\"Subscribe\"><br><b>Invalid address!");
                }
              } else {
                echo("              <input type=\"submit\" value=\"Subscribe\">");
              }
            ?>          
          </form>
          <b>QuickLinks</b><br><br>
        </small>
      </center>
      <small>
        &nbsp;&nbsp;<a href="downloads/">Downloads</a><br><br>
        &nbsp;&nbsp;<a href="http://cre-ent.skcapi.co.jp/~saito/pgadmin/index.html">Japanese</a><br><br>
        <?php echo("$QuickLinks"); ?>
      </small>
      <br>
    </td>
    <td valign="top" align="left" colspan=2 width=570 bgcolor="#ffffff">
      <br>
      <?php echo("$doc[content]"); ?>
      <br>
    </td>
  </tr>
  <tr>
    <td colspan=3 width=720 bgcolor="<?php echo("$LightBlue"); ?>" valign="top" align="right">
      <p style="font-size:9px">Last updated: <?php echo(date("d M Y G:i:s", $doc[updated])); ?> EST</p>
    </td>
  </tr>
</table>

<?php

  // Include Interactive documentation if required.
  if ($doc[idoc] == "t") {
    echo ("  <br>\n<h4>Interactive Documentation</h4>\n");
    echo ("  Please don't post questions here - they're unlikely to be answered!!\n");
    echo ("  <form action=\"pgadmin2.php?ContentID=$doc[id]\" method=\"post\">\n");
    echo ("  <table border=0 cellspacing=2 width=720>\n");
    echo ("    <tr><td bgcolor=\"$LightBlue\" width=120 valign=\"top\"><b>Name</b></td><td bgcolor=\"$LightBlue\" width=600><input type=\"text\" name=\"iDocName\" size=40>&nbsp;<input type=\"submit\" value=\"Add Comment\"></td></tr>\n");
    echo ("    <tr><td bgcolor=\"$LightBlue\" width=120 valign=\"top\"><b>Comments</b></td><td bgcolor=\"$LightBlue\" width=600><textarea name=\"iDocComment\" cols=70 rows=6></textarea></td></tr>\n");
    echo ("  </table>\n");
    echo ("</form>\n");
    
    if ($iDocComment != "") {
      if ($iDocName == "") {
        $iDocName = "Anonymous";  
      }
      $iDocName = addslashes($iDocName);
      $iDocComment = addslashes($iDocComment); 
      pg_exec($db, "INSERT INTO idocs (contentid, submitter, comment) VALUES ($doc[id], '$iDocName', '$iDocComment');");
    }
    
    $rs = pg_exec($db, "SELECT submitter, date_part('epoch', submitted) AS submitted, comment FROM idocs WHERE contentid = $doc[id] AND display = TRUE ORDER BY id");
    $rows = pg_numrows($rs);
    for ($x = 0;$x < $rows;$x++) {
      echo ("<table border=0 cellspacing=2 width=720>");
      echo ("  <tr><td bgcolor=\"$LightBlue\" width=120><b>Added By</b></td><td bgcolor=\"$LightBlue\" width=600>" . pg_result($rs, $x, "submitter") . "</td></tr>\n");
      echo ("  <tr><td bgcolor=\"$LightBlue\" width=120><b>Date Added</b></td><td bgcolor=\"$LightBlue\" width=600>" . date("d M Y G:i:s", pg_result($rs, $x, "submitted")) . "</td></tr>\n");
      echo ("  <tr><td bgcolor=\"#ffffff\" colspan=2 width=720>" . str_replace("\n", "<br>", pg_result($rs, $x, "comment")) . "</td></tr>\n");
      echo ("</table>\n<br>\n");
    }
  }

?>
</center>
</body>
</html>
