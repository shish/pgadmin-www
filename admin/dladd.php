<html>

<head>
<title>Add Download</title>
<link rel="stylesheet" href="/pgadmin2.css" type="text/css">
</head>

<body>

<h3>Add Download</h3>

<?php
require("../globals.php");

  if ($Action == "Add") {
    $db = pg_connect("$dbConn");      
    $rs = pg_exec($db, "SELECT nextval('downloads_id_seq') AS id");
    pg_exec($db, "INSERT INTO downloads(id, filename, product, version, description, details, active) VALUES ('". pg_result($rs, 0, "id") . "', '".$filename."', '".$product."', '".$version."', '".$description."', '".$details."', '$active')");
    echo ("Added Download ID: ". pg_result($rs, 0, "id") . ".\n");
    echo ("<br><br><b><a href=\"downloads.php\">Continue</a></b>\n");  
    echo ("<br><br><b>Don't forget to update versions.dat if required!!</b>\n");
  } else { 
    echo ("<form action=\"dladd.php\" method=\"POST\"><table border=1 width=\"99%\">\n");
    echo ("<tr><th align=\"left\" width=150>Filename</th><td><input type=\"text\" name=\"filename\" size=50></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Product</th><td><input type=\"text\" size=50 name=\"product\"></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Version</th><td><input type=\"text\" size=50 name=\"version\"></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Description</th><td><input type=\"text\" size=100 name=\"description\"></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Details</th><td><textarea wrap=\"virtual\" name=\"details\" cols=80 rows=15></textarea></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Active?</th><td><select name=\"active\"><option selected value=\"Yes\">Yes<option value=\"No\">No</select></td></tr>\n");
    echo ("<tr><td colspan=2 align=\"center\"><center><input type=\"hidden\" name=\"Action\" value=\"Add\"><input type=\"submit\" value=\"Add\">&nbsp;&nbsp;<input type=\"reset\" value=\"Reset\"></td></tr>\n");
    echo ("</table></form>\n");
  }
?>

</center>

</body>

</html>
