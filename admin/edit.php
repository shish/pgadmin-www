<html>

<head>
<title>Content Editor</title>
<link rel="stylesheet" href="../pgadmin2/pgadmin2.css" type="text/css">
</head>

<body>

<h3>Content Editor</h3>

<?php
require("../pgadmin2/globals.php");

  if ($Action == "Delete") {
    if ($Confirm == "Yes") {
      $db = pg_connect("$dbConn");      
      pg_exec("DELETE FROM content WHERE id = $ContentID");
      echo ("Deleted Content ID: $ContentID.\n");
      echo ("<b><a href=\"content.php\">Continue</a></b>\n");  
    } else {
      echo ("Click the 'Confirm' button if you are sure you wish to delete Content ID: $ContentID, or press the back button on your browser to return to the previous screen.\n");
      echo ("<center><form action=\"edit.php\" method=\"POST\"><input type=\"hidden\" name=\"Confirm\" value=\"Yes\"><input type=\"hidden\" name=\"Action\" value=\"Delete\"><input type=\"hidden\" name=\"ContentID\" value=\"$ContentID\"><input type=\"submit\" value=\"Confirm\"></form></center>\n");
    } 
  } 

  if ($Action == "Edit") {
    $db = pg_connect("$dbConn");
    $rs = pg_exec($db, "SELECT * FROM content WHERE id = $ContentID ORDER BY id");
    $doc = pg_fetch_array($rs, 0);
    echo ("<form action=\"edit.php\" method=\"POST\"><table border=1 width=\"99%\">\n");
    echo ("<tr><th align=\"left\" width=150>Content ID</th><td>$doc[id]</td></tr></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Site</th><td><input type=\"text\" size=15 value=\"$doc[site]\" name=\"site\"></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Quicklink</th><td><input type=\"text\" size=25 value=\"$doc[quicklink]\" name=\"quicklink\"></td></tr>\n");
    if ($doc[showquicklink] == "t") {
      echo ("<tr><th align=\"left\" width=150>Show Quicklink</th><td><select name=\"showquicklink\"><option selected value=\"Yes\">Yes<option value=\"No\">No</select></td></tr>\n");
    } else {
      echo ("<tr><th align=\"left\" width=150>Show Quicklink</th><td><select name=\"showquicklink\"><option selected value=\"No\">No<option value=\"Yes\">Yes</select></td></tr>\n");
    }
    echo ("<tr><th align=\"left\" width=150>Title</th><td><input type=\"text\" size=50 value=\"$doc[title]\" name=\"title\"></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Content</th><td><textarea wrap=\"virtual\" name=\"content\" cols=80 rows=15>" . htmlspecialchars($doc[content]) . "</textarea></td></tr>\n");
    if ($doc[idoc] == "t") {
      echo ("<tr><th align=\"left\" width=150>iDoc</th><td><select name=\"idoc\"><option selected value=\"Yes\">Yes<option value=\"No\">No</select></td></tr>\n");
    } else {
      echo ("<tr><th align=\"left\" width=150>iDoc</th><td><select name=\"idoc\"><option selected value=\"No\">No<option value=\"Yes\">Yes</select></td></tr>\n");
    }
    echo ("<tr><td colspan=2 align=\"center\"><center><input type=\"hidden\" name=\"ContentID\" value=\"$ContentID\"><input type=\"hidden\" name=\"Action\" value=\"Update\"><input type=\"submit\" value=\"Update\">&nbsp;&nbsp;<input type=\"reset\" value=\"Reset\"></td></tr>\n");
    echo ("</table></form>\n");
  }

  if ($Action == "Update") {
      $db = pg_connect("$dbConn");      
      $rs = pg_exec($db, "UPDATE content SET site = '".$site."', quicklink = '".$quicklink."', showquicklink = '$showquicklink', title = '".$title."', content = '".$content."', idoc = '$idoc', updated = now() WHERE id = $ContentID"); 
      echo ("Updated Content ID: $ContentID.\n");  
      echo ("<b><a href=\"content.php\">Continue</a></b>\n");  
  }
?>

</center>

</body>

</html>
