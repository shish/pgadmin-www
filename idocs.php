<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php
require("globals.php");

  $db = pg_connect("$dbConn");

    $rs = pg_exec($db, "SELECT id, submitter, date_part('epoch', submitted) AS submitted, comment FROM idocs WHERE display = TRUE ORDER BY id");
    $rows = pg_numrows($rs);
    for ($x = 0;$x < $rows;$x++) {
      echo ("<table border=0 cellspacing=2 width=720>");
      echo ("  <tr><td bgcolor=\"$LightBlue\" width=120><b>ID Number</b></td><td bgcolor=\"$LightBlue\" width=600>" . pg_result($rs, $x, "id") . "</td></tr>\n");
      echo ("  <tr><td bgcolor=\"$LightBlue\" width=120><b>Added By</b></td><td bgcolor=\"$LightBlue\" width=600>" . pg_result($rs, $x, "submitter") . "</td></tr>\n");
      echo ("  <tr><td bgcolor=\"$LightBlue\" width=120><b>Date Added</b></td><td bgcolor=\"$LightBlue\" width=600>" . date("d M Y G:i:s", pg_result($rs, $x, "submitted")) . "</td></tr>\n");
      echo ("  <tr><td bgcolor=\"#ffffff\" colspan=2 width=720>" . str_replace("\n", "<br>", pg_result($rs, $x, "comment")) . "</td></tr>\n");
      echo ("</table>\n<br>\n");
    }

?>
</center>
</body>
</html>
