<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Support - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . _("pgAdmin is a community project comprising of a number of volunteers from around the world. We do not provide 'paid for' support for pgAdmin, although we do aim to fix bugs and help out wherever possible. Obviously we cannot guarantee to fix every problem or help every user though we always try to.") . '</p>

<p>' . sprintf(_("If you have a problem that you need help with, please make sure you check the <a href=\"%s\">Frequently Asked Questions</a> list as well as the pgAdmin documentation for a solution first. If you cannot find the answer you need there, then please try searching Google (a Google search facility is provided at the top of the page) next. Make sure you include any relevant error messages in your query. If you still cannot find the answer you need, then please post a message to the <a href=\"%s\">pgadmin-support</a> mailing list."), "faq.php", "list.php") . '</p>

<p>' . sprintf(_("Please <b>do not</b> send an email directly to one of the programmers; they might miss it, or even be the wrong person at all. Using the mailing list guarantees that your request isn't lost and will be answered in a timely fashion. Dave Page's <a href=\"%s\">blog</a> includes a frank posting describing why this is a bad idea, whilst Eric Raymond's paper <a href=\"%s\">'How to ask questions the smart way'</a> describes the best way to get the help you need."), "http://people.planetpostgresql.org/dpage/index.php?/archives/2005/04.html", "http://www.catb.org/~esr/faqs/smart-questions.html") . '</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
