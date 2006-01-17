<?php 

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Support - Known issues");
$PAGE_CONTENT = '

<h1>' . _("Known issues") . '</h1>

<p>' . _("Bugs and other issues in pgAdmin are almost always fixed within a very short time once they have been reported to us. There are some issues that may be out of our control, or may take significant effort to resolve, often more effort than the issue warrants.") . '</p>

<p>' . _("The list below is automatically extracted from the SVN repository and is only available in English. The issues listed affect to the current development code and all previous versions of pgAdmin where applicable.") . '</p>

'; 

$file = "../svnrepo/pgadmin3/BUGS.txt";
if (file_exists($file))
  $PAGE_CONTENT .= file_get_contents($file);

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
