<html>

<head>
<title>Add Content</title>
<link rel="stylesheet" href="/pgadmin2/pgadmin2.css" type="text/css">
</head>

<body>

<h3>Add Content</h3>

<?php
require("../pgadmin2/globals.php");

  if ($Action == "Add") {
    $db = pg_connect("$dbConn");      
    $rs = pg_exec($db, "SELECT nextval('content_id_seq') AS id");
    pg_exec($db, "INSERT INTO content(id, quicklink, showquicklink, title, content, idoc) VALUES ('". pg_result($rs, 0, "id") . "', '".$quicklink."', '$showquicklink', '".$title."', '".$content."', '$idoc')");
    echo ("Added Content ID: ". pg_result($rs, 0, "id") . ".\n");
    echo ("<b><a href=\"content.php\">Continue</a></b>\n");  
  } else { 
    echo ("<form action=\"add.php\" method=\"POST\"><table border=1 width=\"99%\">\n");
    echo ("<tr><th align=\"left\" width=150>Quicklink</th><td><input type=\"text\" name=\"quicklink\" size=25></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Show Quicklink</th><td><select name=\"showquicklink\"><option selected value=\"Yes\">Yes<option value=\"No\">No</select></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Title</th><td><input type=\"text\" size=50 name=\"title\"></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>Content</th><td><textarea wrap=\"virtual\" name=\"content\" cols=80 rows=15></textarea></td></tr>\n");
    echo ("<tr><th align=\"left\" width=150>iDocs?</th><td><select name=\"idoc\"><option selected value=\"Yes\">Yes<option value=\"No\">No</select></td></tr>\n");
    echo ("<tr><td colspan=2 align=\"center\"><center><input type=\"hidden\" name=\"Action\" value=\"Add\"><input type=\"submit\" value=\"Add\">&nbsp;&nbsp;<input type=\"reset\" value=\"Reset\"></td></tr>\n");
    echo ("</table></form>\n");
  }
?>

</center>

</body>

</html>
