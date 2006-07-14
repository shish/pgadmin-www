<html xmlns="http://www.w3.org/1999/xhtml"  lang='en' xml:lang='en'>
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <title>pgAdmin III Known Bugs</title>
  </head>

 <body >
  <h1>Known bugs</h1>
  <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef" dir='ltr'>
    <tr>
      <td>The information displayed is extracted automatically from the pgAdmin SVN repository.</td>
    </tr>
  </table>

<?php
  $_file=$_SERVER["DOCUMENT_ROOT"]."/svnrepo/pgadmin3/BUGS";
  if (file_exists($_file)) {
    echo "<br /><pre>";
    include_once ($_file);
    echo "</pre>";
  }
  else
  {
    echo "<p>Error: Couldn't open the bugs list!</p>";
  }
?>

</body>
</html>
