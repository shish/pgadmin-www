<?php

  $numcells = 5;
  $conn = @pg_pconnect("dbname=186_www host=pgsql74.hub.org user=186_pgsql");
	$_error = false;

  //
  // Create a connexion
	//
  if(!$conn) {
    echo _("Could not connect to the mirror database.")."<br><br>";
    echo sprintf(_("Feel free to download pgAdmin from <a href='%s'>PostgreSQL primary FTP site</a>."), "http://www.postgresql.org/ftpsite")."<br>";
    $_error = true;
  }

  //
  // Execute query
	//

  if (!$_error) {
    $prompt = _('Please select a download mirror:');

// Temporary fix to allow for the fact that the mirrors aren't updating whilst hub.org is down.
//  $query = "SELECT 'ftp' || CASE WHEN mirror_index = 0 THEN ''::text ELSE mirror_index::text END || '.' || country_code || '.postgresql.org' AS hostname, host_port AS port, host_path AS path, country_name AS country FROM mirrors WHERE mirror_type = 'ftp' AND mirror_active = TRUE AND mirror_private = FALSE AND mirror_dns = TRUE AND mirror_last_rsync > (now() - '48 hrs'::interval) ORDER BY country_name, mirror_index;";
    $query = "SELECT 'ftp' || CASE WHEN mirror_index = 0 THEN ''::text ELSE mirror_index::text END || '.' || country_code || '.postgresql.org' AS hostname, host_port AS port, host_path AS path, country_name AS country FROM mirrors WHERE mirror_type = 'ftp' AND mirror_active = TRUE AND mirror_private = FALSE AND mirror_dns = TRUE ORDER BY country_name, mirror_index;";
    $res = pg_query($conn,$query);


    if(!$res) {
      echo _("Could not connect to the mirror table.")."<br><br>";
      echo sprintf(_("Feel free to download pgAdmin from <a href='%s'>PostgreSQL primary FTP site</a>."), "http://www.postgresql.org/ftpsite")."<br>";
      $_error = true;
    }
  }

//
// Display resultset
//
if (!$_error) {
	//
  // Warning: should use pg_fetch_all
  // to avoid to many queries over the Internet
  //
  $ii = pg_num_rows($res);
  if($ii == 0) {
    echo _("No mirrors could be found.")."<br><br>";
    echo sprintf(_("Feel free to download pgAdmin from <a href='%s'>PostgreSQL primary FTP site</a>."), "http://www.postgresql.org/ftpsite/pgadmin3/")."<br>";
  } else {
    $content = "<table width='100%'><tr><td colspan=$numcells align=left><font size=4>$prompt<br><br></font></td>\n";

    for($x=0;$x<$ii;$x++) {
      if(($x%$numcells) == 0) {
        $content .= "</tr>\n<tr>";
      }
      $row = pg_fetch_row($res,$x);
      $img = str_replace(" ","",$row[3]);
      $img .= ".gif";
      if(substr($row[2], strlen($row[2]) - 1, 1) == '/') {
        $path = $row[2] . "pgadmin3/";
      } else {
        $path = $row[2] . "/pgadmin3/";
      }

      if ($row[1] == "") {
        $content .= "<td align='center' valign='top' width='" . 100 / $numcells . "%'><a href='ftp://$row[0]$path'><img src='http://www.postgresql.org/images/flags/$img' border=1 alt='" . ucwords($row[3]) . "' width='32' height='21'><br>" . ucwords($row[3]) . "</a><br>&nbsp;</td>\n";
      } else {
        $content .= "<td align='center' valign='top' width='" . 100 / $numcells . "%'><a href='ftp://$row[0]:$row[1]$path'><img src='http://www.postgresql.org/images/flags/$img' border=1 alt='$row[3]' width='32' height='21'><br>" . ucwords($row[3]) . "</a><br>&nbsp;</td>\n";
      }
    }
    $ii = $numcells - ($x%$numcells);
    if($ii != $numcells) {
      $content .= "<td colspan='$ii'>&nbsp;</td>";
    }
    $content .= "</table>\n";
    echo $content;
  }
}

?>
