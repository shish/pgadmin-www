<html>

<head>
<title>Content Management</title>
<link rel="stylesheet" href="../pgadmin2/pgadmin2.css" type="text/css">
</head>

<body>

<h3>Content Management</h3>

Click <a href="add.php">here</a> to add new content.<br><br>

<center>
<table border=1 width="99%">
<tr>
  <th>ID</th>
  <th>QuickLink</th>
  <th>Title</th>
  <th colspan=2>Options</th>
</tr>

<?php
require("../pgadmin2/globals.php");

  // Connect to the database
  $db = pg_connect("$dbConn");
  $rs = pg_exec($db, "SELECT id, quicklink, title FROM content ORDER BY id");
  $rows = pg_numrows($rs);


  // Now build the Table
  $rows = pg_numrows($rs);
  for ($x = 0;$x < $rows;$x++) {
    echo ("<tr>\n");
    echo ("  <td>" . pg_result($rs, $x, "id") . "</td>\n");
    echo ("  <td>" . pg_result($rs, $x, "quicklink") . "</td>\n");
    echo ("  <td>" . pg_result($rs, $x, "title") . "</td>\n");
    echo ("  <td align=center><form style=\"margin-bottom:0;\" action=\"edit.php\" method=\"POST\"><input type=\"hidden\" name=\"Action\" value=\"Edit\"><input type=\"hidden\" name=\"ContentID\" value=\"" . pg_result($rs, $x, "id") . "\"><input type=\"submit\" value=\"Edit\"></form></td><td align=center><form style=\"margin-bottom:0;\" action=\"edit.php\" method=\"POST\"><input type=\"hidden\" name=\"Action\" value=\"Delete\"><input type=\"hidden\" name=\"ContentID\" value=\"" . pg_result($rs, $x, "id") . "\"><input type=\"submit\" value=\"Delete\"></form></td>\n");
    echo ("</tr>\n");
  }
?>

</table>
</center>

</body>

</html>
