<?php
	require_once "../class/pgadmin_po.php";

  $translated = new po_status();
  $pending = new po_status();

  $translated->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
  $translated->setCvsRoot($_SERVER["DOCUMENT_ROOT"]."/cvsroot/pgadmin3");

  $pending->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
  $pending->setCvsRoot($_SERVER["DOCUMENT_ROOT"]."/cvsroot/pgadmin3");

  require_once "../cnt/cnt_translation_status.php";

  $_cache_translated = dirname($_SERVER["SCRIPT_FILENAME"])."/cache_translated.txt";
  $_cache_pending    = dirname($_SERVER["SCRIPT_FILENAME"])."/cache_pending.txt";

  $translated->_cache_save($_cache_translated);
  $pending->_cache_save($_cache_pending);

  echo "Translation statistics updated.<br>";
?>