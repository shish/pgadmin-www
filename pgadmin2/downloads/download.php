<?php
require("../globals.php");

  // Connect to the database
  $db = pg_connect("$dbConn");
  $rs = pg_exec($db, "SELECT filename, inc_download(id) FROM downloads WHERE id = $FileID");

  $rows = pg_numrows($rs);
  if ($rows == 1) {
    header ("Location: http://" . $HTTP_SERVER_VARS['HTTP_HOST'] . dirname($HTTP_SERVER_VARS['PHP_SELF']) . "/" . pg_result($rs, 0, "filename"));
  }

?>


