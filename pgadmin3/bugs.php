<html xmlns="http://www.w3.org/1999/xhtml"  lang='en' xml:lang='en'>
  <head>
		
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/bluehaze-latin1.css" title="Blue Haze stylesheet" />
<link rel="stylesheet" type="text/css" href="css/color-scheme.css" title="Blue Haze stylesheet" />
    <title>pgAdmin III Bugs</title>
  </head>

 <body >
  <31><?php echo _("Known bugs")?></h3>
  <dd>
  <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef" dir='ltr'>
      <tr><td>
    <?php echo _("The information displayed is extracted automatically from pgAdmin CVS.");?>
    <?php
    	$_file=$_SERVER["DOCUMENT_ROOT"]."/cvsroot/pgadmin3/BUGS.txt";
    	if (file_exists($_file)) {
        echo ("<br><br>");
    		include_once ($_file);
      }
    ?>
    </td></tr></table>
  </dd>
</body>
