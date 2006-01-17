<?php 

include $GLOBALS["_SERVER"]["DOCUMENT_ROOT"] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Support - Mailing list");
$PAGE_CONTENT = '

<h1>' . _("Mailing list") . '</h1>

<p>' . sprintf(_("The pgadmin-support mailing list is intended for end user support and bug reports. To subscribe to the mailing list, send an email to <a href=\"%s\">%s</a> with the word 'subscribe', without quotes, as the body of message."), "mailto:pgadmin-hackers-request@postgresql.org", "pgadmin-hackers-request@postgresql.org") . '</p>

<p>' . _("If you are posting a bug report, please include the following information where possible:") . '</p>
<ul>
  <li>' . _("The version of pgAdmin you are running. If it is a development snapshot, please include the build date from the Help -&gt; About screen, and SVN repository version if known.") . '<br />&nbsp;</li>
  <li>' . _("The configure options used (if compiled from source)") . '<br />&nbsp;</li>
  <li>' . _("The operating system and version details - e.g. Windows XP Pro, SP2, or Slackware Linux 10, kernel 2.4.21") . '<br />&nbsp;</li>
  <li>' . _("The wxWidgets version and configure options used (if compiled from source)") . '<br />&nbsp;</li>
  <li>' . _("The PostgreSQL version and configure options used (if compiled from source)") . '<br />&nbsp;</li>
  <li>' . _("Steps required to reproduce the problem. Please include a simple scheme with optional data if required. This may be sent privately <b>upon request from a developer</b> if you are concerned about posting sample code or data to a public mailing list.") . '<br />&nbsp;</li>
</ul>

<p>' . sprintf(_("Messages sent to the list are archived at <a href=\"%s\">PostgreSQL</a> and  <a href=\"%s\">mail-archive.com</a>."), "http://archives.postgresql.org/pgadmin-hackers/", "http://www.mail-archive.com/pgadmin-hackers@postgresql.org") . '</p>

<p>' . _("Please <b>do not</b> send an email directly to one of the programmers; they might miss it, or even be the wrong person at all. Using the mailing list guarantees that your request isn't lost and will be answered in a timely fashion.") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
