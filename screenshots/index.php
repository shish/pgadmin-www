<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Screenshots - Introduction");
$PAGE_CONTENT = '

<h1>' . _("Introduction") . '</h1>

<p>' . sprintf(_("pgAdmin is a comprehensive design and management interface for PostgreSQL database, designed to run on most operating systems. The software is written in C++ and uses the excellent <a href=\"%s\">wxWidgets</a> cross platform toolkit. In every environment, pgAdmin is a native application. The application is executed in binary code, not in a virtual machine, therefore offering excellent performance."), "http://www.wxwidgets.org") . '</p>

<p>' . sprintf(_("To view a full size version of any screenshot, simply click on it. In addition to the those found in this section additional images can also be found in the <a href=\"%s\">online documentation</a>."), "/docs/") . '</p>

<p>' . _("We provide source and binary packages for FreeBSD, Linux, Mac OSX and Microsoft Windows &trade;. Solaris binaries may also be compiled from the source code.") . '</p>

<div class="pgaScreenShotBox">
<h2>' . _("FreeBSD") . '</h2>
<a href="/images/screenshots/pgadmin3_freebsd.png" target="_Shot"><img src="/images/screenshots/pgadmin3_freebsd.png" alt="' . _("pgAdmin running on FreeBSD") . '" width="254" height="170" /></a>
</div>

<div class="pgaScreenShotBox">
<h2>' . _("Linux") . '</h2>
<a href="/images/screenshots/pgadmin3_linux.png" target="_Shot"><img src="/images/screenshots/pgadmin3_linux.png" alt="' . _("pgAdmin running on Linux") . '" width="200" height="213" /></a>
</div>

<div class="pgaScreenShotBox">
<h2>' . _("Mac OSX") . '</h2>
<a href="/images/screenshots/pgadmin3_macosx.png" target="_Shot"><img src="/images/screenshots/pgadmin3_macosx.png" alt="' . _("pgAdmin running on Mac OSX") . '" width="256" height="192" /></a>
</div>

<div class="pgaScreenShotBox">
<h2>' . _("Solaris") . '</h2>
<a href="/images/screenshots/pgadmin3_solaris.png" target="_Shot"><img src="/images/screenshots/pgadmin3_solaris.png" alt="' . _("pgAdmin running on Solaris") . '" width="200" height="150" /></a>
</div>

<div class="pgaScreenShotBox">
<h2>' . _("Windows &trade;") . '</h2>
<a href="/images/screenshots/pgadmin3_win32.png" target="_Shot"><img src="/images/screenshots/pgadmin3_win32.png" alt="' . _("pgAdmin running on Windows") . '" width="253" height="208" /></a>
</div>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
