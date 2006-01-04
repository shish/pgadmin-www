<?php
  $_css=$_SESSION['pgadmin']['locale'];

  switch ($_css){
  case "en_US":
    $_SESSION['pgadmin']['css'] = "bluehaze-latin1.css";
    break;

  case "de_DE":
    $_SESSION['pgadmin']['css'] = "bluehaze-latin1.css";
    break;

  case "fr_FR":
    $_SESSION['pgadmin']['css'] = "bluehaze-latin1.css";
    break;

  case "id_ID":
    $_SESSION['pgadmin']['css'] = "bluehaze-latin1.css";
    break;

  case "fa_IR":
    $_SESSION['pgadmin']['css'] = "bluehaze-rtl.css";
    break;

  default:
    $_SESSION['pgadmin']['css'] = "bluehaze.css";
  }
?>

<meta name="Description" content="pgAdmin is the leading graphical Open Source management, development and administration tool for PostgreSQL, running on Windows, Linux, Solaris and Mac OSX">
<meta name="Abstract" content="pgAdmin is the leading graphical Open Source management, development and administration tool for PostgreSQL, running on Windows, Linux, Solaris and Mac OSX">
<meta name="Keywords" content="PostgreSQL,postgres,pgsql,psql,odbc,jdbc,npgsql,pgoledb,pginstaller,pervasive postgres,enterprisedb,edbstudio,edb,edb studio,pgfoundry,gborg,pgadmin">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/<?php echo $_SESSION['pgadmin']['css']?>" title="Blue Haze stylesheet" />
<link rel="stylesheet" type="text/css" href="css/color-scheme.css" title="Blue Haze stylesheet" />
