<html>

<head>
<title>Download Editor</title>
<link rel="stylesheet" href="/pgadmin2.css" type="text/css">
</head>

<body>

<h3>Download Editor</h3>

<?php
require("../globals.php");

  if ($Action == "Delete") {
    if ($Confirm == "Yes") {
      $db = pg_connect("$dbConn");      
      pg_exec("DELETE FROM downloads WHERE id = $DownloadID");
      echo ("Deleted Download ID: $DownloadID.\n");
      echo ("<br><br><b><a href=\"downloads.php\">Continue</a></b>\n");  
    } else {
      echo ("Click the 'Confirm' button if you are sure you wish to delete Download ID: $DownloadID, or press the back button on your browser to return to the previous screen.\n");
      echo ("<center><form action=\"dledit.php\" method=\"POST\"><input type=\"hidden\" name=\"Confirm\" value=\"Yes\"><input type=\"hidden\" name=\"Action\" value=\"Delete\"><input type=\"hidden\" name=\"DownloadID\" value=\"$DownloadID\"><input type=\"submit\" value=\"Confirm\"></form></center>\n");
    } 
  } 

  if ($Action == "Edit") {
    $db = pg_connect("$dbConn");
    $rs = pg_exec($db, "SELECT * FROM downloads WHERE id = $DownloadID ORDER BY id");
    $dld = pg_fetch_array($rs, 0);
    echo ("<form action=\"dledit.php\" method=\"POST\"><table border=1 width=\"99%\">\n");
    echo ("<tr><th align=\"left\" width=150>Download ID</th><td>$dld[id]</td></tr></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Filename</th><td><input type=\"text\" size=50 value=\"$dld[filename]\" name=\"filename\"></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Product</th><td><input type=\"text\" size=50 value=\"$dld[product]\" name=\"product\"></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Version</th><td><input type=\"text\" size=50 value=\"$dld[version]\" name=\"version\"></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Description</th><td><input type=\"text\" size=100 value=\"$dld[description]\" name=\"description\"></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Details</th><td><textarea wrap=\"virtual\" name=\"details\" cols=80 rows=15>" . htmlspecialchars($dld[details]) . "</textarea></td></tr>\n");
    if ($dld[active] == "t") {
      echo ("<tr><th align=\"left\" width=150>Active?</th><td><select name=\"active\"><option selected value=\"Yes\">Yes<option value=\"No\">No</select></td></tr>\n");
    } else {
      echo ("<tr><th align=\"left\" width=150>Active?</th><td><select name=\"active\"><option selected value=\"No\">No<option value=\"Yes\">Yes</select></td></tr>\n");
    }
    echo ("<tr><td colspan=2 align=\"center\"><center><input type=\"hidden\" name=\"DownloadID\" value=\"$DownloadID\"><input type=\"hidden\" name=\"Action\" value=\"Update\"><input type=\"submit\" value=\"Update\">&nbsp;&nbsp;<input type=\"reset\" value=\"Reset\"></td></tr>\n");
    echo ("</table></form>\n");
  }

  if ($Action == "Update") {
      $db = pg_connect("$dbConn");      
      $rs = pg_exec($db, "UPDATE downloads SET filename = '".$filename."', product = '".$product."', version = '".$version."', description = '".$description."', details = '".$details."', active = '$active' WHERE id = $DownloadID"); 
      echo ("Updated Download ID: $DownloadID.\n");  
      echo ("<br><br><b><a href=\"downloads.php\">Continue</a></b>\n");  
  }
?>

</center>

</body>

</html>
