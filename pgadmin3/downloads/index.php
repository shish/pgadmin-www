<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php
require("../globals.php");

  // Connect to the database
  $db = pg_connect("$dbConn");
  $rs = pg_exec($db, "SELECT id, product, version, description, downloads FROM downloads WHERE site = '$Site' AND active = true ORDER BY id DESC");

  // Now build the table rows
  $rows = pg_numrows($rs);
  for ($x = 0;$x < $rows;$x++) {
    $TableRows = $TableRows . "        <tr><td bgcolor=\"$LightBlue\"><a href=\"download.php?FileID=" . pg_result($rs, $x, "id") . "\">" . pg_result($rs, $x, "product") . " v" . pg_result($rs, $x, "version") . "</a></td><td bgcolor=\"$LightBlue\">" . pg_result($rs, $x, "description") . "</td><td bgcolor=\"$LightBlue\">" . pg_result($rs, $x, "downloads") . "</td><td bgcolor=\"$LightBlue\"><a href=\"info.php?FileID=" . pg_result($rs, $x, "id") . "\"  target=\"popup\" onclick=\"window.open('info.php?FileID=" . pg_result($rs, $x, "id") . "', 'popup', 'width=500,height=600,resizable,scrollbars'); return false\">Click Here</a></td></tr>\n";
  }
?>

<html>
<head>
  <link rel="stylesheet" href="../pgadmin3.css" type="text/css">
  <title>Downloads</title>
</head>

<body bgcolor="<?php echo("$DarkBlue"); ?>">

<center>
<table border=1 cellpadding=0 cellspacing=0><tr><td>
<table border=0 cellspacing=3 width=720>
  <tr>
    <td align="center" valign="center" colspan=1 rowspan=2 width=120 height=120 bgcolor="<?php echo("$DarkBlue"); ?>">
      <a href="../pgadmin3.php"><img src="../images/left-banner.jpg" alt="pgAdmin III Logo" border=0></a>
    </td>
    <td align="left" valign="middle" colspan=1 width=450 height=90 bgcolor="#cdddeb">
      <h2><b>Downloads</b></h2>
    </td>
    <td align="center" valign="center" colspan=1 rowspan=2 width=120 height=120 bgcolor="<?php echo("$DarkBlue"); ?>">
      <a href="http://www.postgresql.org/"><img src="../images/right-banner.jpg" alt="Slonik" border=0></a>
    </td>
  </tr>
  <tr>
    <td align="left" valign="middle" width=450 height=30 bgcolor="<?php echo("$LightBlue"); ?>">
      <small>pgAdmin III is Copyright &copy; 2002 - 2003, The <a href="../pgadmin3.php?ContentID=3">pgAdmin
      Development Team</a><br>This software is released under the 
      <a href="../pgadmin3.php?ContentID=22">Artistic Licence</a></small>
    </td>
  </tr>
  <tr>
    <td valign="top" align="left" colspan=3 bgcolor="#ffffff">
      <br>
      Currently there are <?php echo("$rows"); ?> downloads available:<br><br>
      <center><table border=0 cellspacing=3>
        <tr><th width=150>Download</th><th width=400>Description</th><th width=80>Downloads</th><th width=100>More Info</th></tr>
        <?php echo("$TableRows"); ?>
      </table></center>
      <br>
    </td>
  </tr>
</table>
</td></tr></table>

</center>
</body>
</html>
