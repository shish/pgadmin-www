<?php
	$_base = dirname($_SERVER["SCRIPT_FILENAME"]);
	include_once ($_base."/class/pgadmin_session.php");
	include_once ($_base."/class/pgadmin_po.php");
	include_once ($_base."/class/pgadmin_thumb.php");

  $session = new pgadmin_session();
?>
