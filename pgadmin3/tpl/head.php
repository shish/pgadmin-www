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

  default:
    $_SESSION['pgadmin']['css'] = "bluehaze.css";
  }
?>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/<?php echo $_SESSION['pgadmin']['css']?>" title="Blue Haze stylesheet" />
<link rel="stylesheet" type="text/css" href="css/color-scheme.css" title="Blue Haze stylesheet" />
