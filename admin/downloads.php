<html>

<head>
<title>Download Management</title>
<link rel="stylesheet" href="../pgadmin2/pgadmin2.css" type="text/css">
</head>

<body>

<h3>Download Management</h3>

Click <a href="dladd.php">here</a> to add a new download.<br><br>

<center>
<table border=1 width="99%">
<tr>
  <th>ID</th>
  <th>File</th>
  <th>Product</th>
  <th>Version</th>
  <th colspan=2>Options</th>
</tr>

<?php
require("../pgadmin2/globals.php");

  // Connect to the database
  $db = pg_connect("$dbConn");
  $rs = pg_exec($db, "SELECT id, filename, product, version FROM downloads ORDER BY id");
  $rows = pg_numrows($rs);


  // Now build the Table
  $rows = pg_numrows($rs);
  for ($x = 0;$x < $rows;$x++) {
    echo ("<tr>\n");
    echo ("  <td>" . pg_result($rs, $x, "id") . "</td>\n");
    echo ("  <td>" . pg_result($rs, $x, "filename") . "</td>\n");
    echo ("  <td>" . pg_result($rs, $x, "product") . "</td>\n");
    echo ("  <td>" . pg_result($rs, $x, "version") . "</td>\n");
    echo ("  <td align=center><form style=\"margin-bottom:0;\" action=\"dledit.php\" method=\"POST\"><input type=\"hidden\" name=\"Action\" value=\"Edit\"><input type=\"hidden\" name=\"DownloadID\" value=\"" . pg_result($rs, $x, "id") . "\"><input type=\"submit\" value=\"Edit\"></form></td><td align=center><form style=\"margin-bottom:0;\" action=\"dledit.php\" method=\"POST\"><input type=\"hidden\" name=\"Action\" value=\"Delete\"><input type=\"hidden\" name=\"DownloadID\" value=\"" . pg_result($rs, $x, "id") . "\"><input type=\"submit\" value=\"Delete\"></form></td>\n");
    echo ("</tr>\n");
  }
?>

</table>
</center>

</body>

</html>
