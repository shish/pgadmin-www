<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php
require("../globals.php");

  if ($FileID == "") {
    $FileID = 0;
  }

  // Connect to the database
  $db = pg_connect("$dbConn");
  $rs = pg_exec($db, "SELECT * FROM downloads WHERE id = $FileID");

  // Now build the table rows
  $rows = pg_numrows($rs);
  if ($rows != 1){
    $dld = array(
      "filename" => "The File ID specified could not be found!",
      "product" => "The File ID specified could not be found!",
      "version" => "The File ID specified could not be found!",
      "description" => "The File ID specified could not be found!",
      "details" => "The File ID specified could not be found!",
      "downloads" => "The File ID specified could not be found!"
    );
  } else{
    $dld = pg_fetch_array($rs, 0);
  }
?>

<html>
<head>
  <link rel="stylesheet" href="../pgadmin3.css" type="text/css">
  <title>Download Info</title>
</head>

<body bgcolor="#FFFFFF">

<center>
<table border=0 cellspacing=3 width="99%">
  <tr><th>Product</th><td bgcolor="<?php echo("$LightBlue"); ?>"><?php echo("$dld[product]"); ?></td></tr>
  <tr><th>Version</th><td bgcolor="<?php echo("$LightBlue"); ?>"><?php echo("$dld[version]"); ?></td></tr>
  <tr><th>Filename</th><td bgcolor="<?php echo("$LightBlue"); ?>"><?php echo("$dld[filename]"); ?></td></tr>
  <tr><th>Downloads</th><td bgcolor="<?php echo("$LightBlue"); ?>"><?php echo("$dld[downloads]"); ?></td></tr>
  <tr><th>Description</th><td bgcolor="<?php echo("$LightBlue"); ?>"><?php echo("$dld[description]"); ?></td></tr>
  <tr><th valign="top">Details</th><td bgcolor="<?php echo("$LightBlue"); ?>"><?php echo("$dld[details]"); ?></td></tr>
</table>
</center>

</body>

</html>
