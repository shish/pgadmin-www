<?php

    require_once "../class/po_status.php";

    $translated = new po_status();
    $outofdate = new po_status();

    $translated->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
    $translated->setSvnRoot($_SERVER["DOCUMENT_ROOT"]."/svnrepo/pgadmin3");

    $outofdate->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
    $outofdate->setSvnRoot($_SERVER["DOCUMENT_ROOT"]."/svnrepo/pgadmin3");

    require_once "../translation/config.php";

    $_cache_translated = dirname($_SERVER["SCRIPT_FILENAME"])."/cache_translated.txt";
    $_cache_outofdate = dirname($_SERVER["SCRIPT_FILENAME"])."/cache_outofdate.txt";

    $translated->_cache_save($_cache_translated);
    $outofdate->_cache_save($_cache_outofdate);

    echo "Translation statistics updated.<br>";

?>
