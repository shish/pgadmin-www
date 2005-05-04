<?php

    require_once "../class/pgadmin_po.php";

    $translated = new po_status();
    $outofdate = new po_status();

    $translated->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
    $translated->setSvnRoot($_SERVER["DOCUMENT_ROOT"]."/svnrepo");

    $outofdate->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
    $outofdate->setSvnRoot($_SERVER["DOCUMENT_ROOT"]."/svnrepo");

    require_once "../cnt/cnt_translation_status.php";

    $_cache_translated = dirname($_SERVER["SCRIPT_FILENAME"])."/cache_translated.txt";
    $_cache_outofdate = dirname($_SERVER["SCRIPT_FILENAME"])."/cache_outofdate.txt";

    $translated->_cache_save($_cache_translated);
    $outofdate->_cache_save($_cache_outofdate);

    echo "Translation statistics updated.<br>";

?>
