<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Download - Source code");
$PAGE_CONTENT = '

<h1>' . _("Source code") . '</h1>

<h3>' . _("Requirements") . '</h3>

<ul>
  <li>' . _("A recent development environment:") . '<br />&nbsp;<br />
    <ul>
      <li>' . _("Linux, FreeBSD and other *nixes: Recent versions of GTK2.2, automake, autoconf and gcc are needed. The best solution is to use a recent distribution.") . '<br />&nbsp;</li>

      <li>' . _("Windows 2000, XP, 2003: Microsoft Visual C++ 2005.") . '<br />&nbsp;</li>

      <li>' . _("Mac OSX: XCode 2.0 or above. Recent versions of autoconf and automake may also be required if building from SVN.") . '</li>
    </ul>
  <br />&nbsp;</li>

  <li>' . sprintf(_("<a href=\"%s\">wxWidgets 2.6.x</a>. Currently, this is the only version we support."), "http://www.wxwidgets.org") . '<br />&nbsp;</li>

  <li>' . sprintf(_("<a href=\"%s\">libxml2 2.5.x</a> or above (for pgAdmin 1.5+)."), "http://www.xmlsoft.org") . '<br />&nbsp;</li>
  
  <li>' . sprintf(_("<a href=\"%s\">libxslt 1.1.x</a> or above (for pgAdmin 1.5+)."), "http://www.xmlsoft.org") . '<br />&nbsp;</li>

  <li>' . sprintf(_("<a href=\"%s\">PostgreSQL 7.4</a> or above (8.0 or above on Windows)."), "http://www.postgresql.org/ftp/latest/") . '<br />&nbsp;</li>
  
  <li>' . sprintf(_("<a href=\"%s\">wxAUI 0.9.2</a> or above (for pgAdmin 1.5+)."), "http://www.kirix.com/community/wxaui.html") . '<br />&nbsp;</li>
</ul>

<p>' . sprintf(_("Precompiled XML/XSLT and dependency packages for Windows can be found at <a href=\"%s\">zlatkovic.com</a>. You probably need iconv 1.9.x and zlib 1.2.x as well as libxml2 and libxslt."), "http://www.zlatkovic.com/pub/libxml/") . '</p>

<h3>' . _("Building wxWidgets") . '</h3>

<p>' . _("Unpack the wxWidgets tarball or zip file and follow the appropriate set of instruction below.") . '</p>

<h4>' . _("Linux, FreeBSD or Solaris") . '</h4>

<p>' . _("Note:") . '</p>
<ul>
  <li>' . _("You may need to use the --enable-debug option if attempting to track down a crash.") . '</li>
  <li>' . _("The --enable-mimetype=no option is broken on wxWidgets versions earlier than 2.6.2 and should be omitted.") . '</li>
  <li>' . _("wxWidgets versions 2.6.2 and below are broken on Solaris. A CVS snapshot from the stable branch dated 2005-09-26 or later should be used until 2.6.3 is available.") . '<br />&nbsp;</li>
</ul>

<div class="pgaCode">
cd wxWidgets*<br />
./configure --with-gtk --enable-gtk2 --enable-unicode --enable-mimetype=no<br />
make<br />
sudo make install<br /><br />

# Install wxWidgets contrib modules.<br />
cd contrib/<br />
make<br />
sudo make install
</div>

<h4>' . _("Windows 2000, XP and 2003") . '</h4>

<p>' . _("A Visual Studio 6.0 project workspace file is in the <i>xtra/wx-build</i> directory of the pgAdmin source tarball, along with a suitable <i>setup.h</i> file. Copy these to the appropriate <i>build/</i> and <i>include/wx/</i> directories in your wxWidgets source tree, and open the workspace in Visual Studio. Use the batch build facility to build all the wxWidgets libraries. To save time, you can omit all \"Universal\" and \"DLL\" builds.") . '</p>

<p>' . sprintf(_("Note that as of mid May 2006, the development environment for pgAdmin 1.5+ was upgraded to Visual C++ 2005. You must compile wxWidgets with this version of Visual C++ as well. You can download the Visual Studio Express editions free of charge from <a href=\"%s\">Microsoft</a>&trade;."), "http://msdn.microsoft.com/vstudio/express/default.aspx") . '</p>

<h4>' . _("Mac OSX") . '</h4>

<p>' . _("Note:") . '</p>
<ul>
  <li>' . _("You may need to use the --enable-debug option if attempting to track down a crash.") . '</li>
  <li>' . _("The --enable-mimetype=no option is broken on wxWidgets versions earlier than 2.6.2 and should be omitted.") . '<br />&nbsp;</li>
</ul>

<div class="pgaCode">
cd wxWidgets*<br />
./configure --with-mac --enable-unicode --enable-mimetype=no<br />
make<br />
sudo make install<br /><br />

# Install wxWidgets contrib modules.<br />
cd contrib/<br />
make<br />
sudo make install
</div>

<h3>' . _("Building pgAdmin III") . '</h3>

<h4>' . _("Linux, FreeBSD and Solaris") . '</h4>

<ol>
  <li>' . sprintf(_("Download the pgAdmin III <a href=\"%s\">source code</a> from a mirror. "), "http://www.postgresql.org/ftp/pgadmin3/release/") . '<br />&nbsp;</li>
  <li>' . sprintf(_("Authenticate the source code using Dave Page's <a href=\"%s\">PGP key</a>. "), "../pgp/davepage.pgp") . '<br />&nbsp;</li>
  <li>' . _("Unpack, build and install the source code:") . '<br />&nbsp;<br />
      ' . _("Note:") . '<br />&nbsp;<br />
      <ul>
        <li>' . _("You may need to use the --enable-debug option if attempting to track down a crash.") . '</li>
        <li>' . _("To work around limitations in the wxAUI build system, pgAdmin compiles wxAUI itself. Simply unpack the source code into /usr/local/src/wxaui-0.9.2. This directory can be overridden with the --with-wxaui=DIR configure option in pgAdmin.") . '</li>
      </ul>&nbsp;<br />

<div class="pgaCode">
tar -zvxf pgadmin3*.tar.gz<br />
cd pgadmin3*<br />
./configure<br />
make all<br />
sudo make install<br />
</div></li>

</ol>

<h4>' . _("Microsoft Windows 2000, XP & 2003") . '</h4>

<p>' . _("The pgAdmin dependencies must first be installed in the appropriate locations on your system:") . '</p>
<ol>
  <li>' . _("PostgreSQL 8.1, installed into the default location from the official PostgreSQL installer (pgInstaller).") . '<br />&nbsp;</li>
  <li>' . _("wxWidgets 2.6, installed into \$BUILD_ROOT/pgadmin3-deps/wxwidgets.") . '<br />&nbsp;</li>
  <li>' . _("wxAUI 0.9.2, installed into \$BUILD_ROOT/pgadmin3-deps/wxaui.") . '<br />&nbsp;</li>
  <li>' . _("libxml2 2.5, installed into \$BUILD_ROOT/pgadmin3-deps/libxml2.") . '<br />&nbsp;</li>
  <li>' . _("libxslt 1.1, installed into \$BUILD_ROOT/pgadmin3-deps/libxslt.") . '</li>
</ol>

<p>' . _("In addition, libxml2/libxslt may also require iconv and zlib. If you are building the pgAdmin installer, these must be installed into \$BUILD_ROOT/pgadmin3-deps/iconv and \$BUILD_ROOT/pgadmin3-deps/zlib respectively.") . '</p>

<p>' . _("The source tree should be unpacked into \$BUILD_ROOT. The directory can be called whatever you like, as long as its at the right directory level - for example, you might have \$BUILD_ROOT/pgadmin3-deps, \$BUILD_ROOT/pgadmin3-dev and \$BUILD_ROOT/pgadmin3-1.4. A Visual Studio/C++ 2005 solution file for pgAdmin may be found in the root of the source tree. Load the project into Visual C++ and build the desired targets.") . '</p>

<h4>' . _("Mac OSX") . '</h4>

<ol>
  <li>' . sprintf(_("Download the pgAdmin III <a href=\"%s\">source code</a> from a mirror. "), "http://www.postgresql.org/ftp/pgadmin3/release/") . '<br />&nbsp;</li>
  <li>' . sprintf(_("Authenticate the source code using Dave Page's <a href=\"%s\">PGP key</a>. "), "../pgp/davepage.pgp") . '<br />&nbsp;</li>
  <li>' . _("Unpack, build and install the source code:") . '<br />&nbsp;<br />
      ' . _("Note:") . '<br />&nbsp;<br />
      <ul>
        <li>' . _("You may need to use the --enable-debug option if attempting to track down a crash.") . '</li>
      </ul>&nbsp;<br />

<div class="pgaCode">
tar -zvxf pgadmin3*.tar.gz<br />
cd pgadmin3*<br />
./configure --enable-appbundle<br />
make all<br />
sudo make install<br />
</div></li>

</ol>

'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
