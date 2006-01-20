<?php

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/po_status.php";

$translated = new po_status();
$outofdate = new po_status();

$translated->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
$translated->setSvnRoot($_SERVER["DOCUMENT_ROOT"]."/svnrepo/pgadmin3");

$outofdate->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
$outofdate->setSvnRoot($_SERVER["DOCUMENT_ROOT"]."/svnrepo/pgadmin3");

$_cache_translated = "/tmp/pgadmin_translated_cache.txt";
$_cache_outofdate = "/tmp/pgadmin_outofdate_cache.txt";

include "config.php";

$translated->_cache_save($_cache_translated);
$outofdate->_cache_save($_cache_outofdate);

?>
<html>
<head>
<title>Cache update</title>
</head>
<body>
<h1>Cache update</h1>
<p>The translation statistics cache has been updated.</p>
<p>Click <a href="status.php">here</a> to view the status page.</p>
</body>
</html>
