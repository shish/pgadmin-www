<?php

  $numcells = 5;
  $conn = @pg_pconnect("dbname=186_portal host=jupiter.hub.org user=186_pgsql");

  // Some seriously nasty nested code...

  if(!conn) {
    $content = _("<p>Couldn't connect to the database!</p><p>In the meantime, please feel free to download pgAdmin from the primary PostgreSQL FTP site <a href=\"http://www.postgresql.org/ftpsite/\">here</a></p>");
  } else {
    $prompt = 'Please select a download mirror: ';
  }

  $query = "SELECT 'ftp' || CASE WHEN mirror_index = 0 THEN ''::text ELSE mirror_index::text END || '.' || country_code || '.postgresql.org' AS hostname, host_port AS port, host_path AS path, country_name AS country FROM mirrors WHERE mirror_type = 'ftp' AND mirror_active = TRUE AND mirror_private = FALSE AND mirror_dns = TRUE AND mirror_last_rsync > (now() - '48 hrs'::interval) ORDER BY country_name, mirror_index;";
   $res = pg_exec($conn,$query);
   if(!$res) {
     $content = _("<p>Couldn't query the mirrors table!</p><p>In the meantime, please feel free to download pgAdmin from the primary PostgreSQL FTP site <a href=\"http://www.postgresql.org/ftpsite/\">here</a></p>");
   } else {
     $ii = pg_numrows($res);
     if($ii == 0) {
       $content = _("<p>No mirrors could be found!</p><p>In the meantime, please feel free to download pgAdmin from the primary PostgreSQL FTP site <a href=\"http://www.postgresql.org/ftpsite/\">here</a></p>");
     } else {
       $content = "<table width=\"100%\"><tr><td colspan=$numcells align=left><font size=4>$prompt<br><br></font></td>\n";

       for($x=0;$x<$ii;$x++) {
         if(($x%$numcells) == 0) {
           $content .= "</tr>\n<tr>";
         }
         $row = pg_fetch_row($res,$x);
         $img = str_replace(" ","",$row[3]);
         $img .= ".gif";
         if ($row[1] == "") {
           $content .= "<td align=\"center\" valign=\"top\" width=\"" . 100 / $numcells . "%\"><a href=\"ftp://$row[0]$row[2]\"><img src=\"http://www.postgresql.org/images/flags/$img\" border=1 alt=\"" . ucwords($row[3]) . "\" width=\"32\" height=\"21\"><br>" . ucwords($row[3]) . "</a><br>&nbsp;</td>\n";
         } else {
           $content .= "<td align=\"center\" valign=\"top\" width=\"" . 100 / $numcells . "%\"><a href=\"ftp://$row[0]:$row[1]$row[2]\"><img src=\"http://www.postgresql.org/images/flags/$img\" border=1 alt=\"$row[3]\" width=\"32\" height=\"21\"><br>" . ucwords($row[3]) . "</a><br>&nbsp;</td>\n";
         }
       }
       $ii = $numcells - ($x%$numcells);
       if($ii != $numcells) {
         $content .= "<td colspan='$ii'>&nbsp;</td>";
       }
       $content .= "</table>\n";
     }
   }

   echo $content;

?>
