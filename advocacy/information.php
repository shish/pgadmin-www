<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Advocacy - Information");
$PAGE_CONTENT = '

<h1>' . _("Information") . '</h1>

<p>' . _("You are free to publish any technical information about pgAdmin. Here are some guidelines, primarily about links and localization.") . '</p>

<ul>
  <li>' . sprintf(_("<b>Website language:</b> The pgAdmin web site is not able to detect the language of your browser. To display a page in your language, just select it from the drop-down list in the header. For example, the URL of the French homepage is: <a href=\"%s\">%s</a>."), "http://www.pgadmin.org/index.php?lang=fr_FR", "http://www.pgadmin.org/index.php?lang=fr_FR") . '<br />&nbsp;</li>

  <li>' . sprintf(_("<b>Download links:</b> Whenever possible, publish links pointing to the pgAdmin <a href=\"%s\">Download</a> page. Remember to include language information if required - for example <a href=\"%s\">%s</a>.<br /><br />Some sites (especially Windows shareware/freeware sites) may require direct links to files. Be very careful before submitting direct links, because you may have to upgrade them when pgAdmin new versions are released. When direct links are required, choose several PostgreSQL mirrors from the download page. Some sites may ask for up to 5 links."), "../download/index.php", "../download/index.php?lang=ja_JP", "http://www.pgadmin.org/download/index.php?lang=ja_JP") . '<br />&nbsp;</li>

  <li>' . _("<b>Description of pgAdmin:</b> Any technical description is suitable, though for consistency or, if you are not sure what to write, you may wish to use one of the following, translated into your language if required:") . '

  <h4>' . _("Under 45 characters") . '</h4>
  <i>' . _("Management tools for PostgreSQL") . '</i>

  <h4>' . _("Under 80 characters") . '</h4>
  <i>' . _("Open Source management and administration tools for the PostgreSQL database.") . '</i>

  <h4>' . _("Under 250 characters") . '</h4>
  <i>' . _("Open Source administration and management tools for the PostgreSQL database. Includes a graphical administration interface, an SQL query tool, a procedural code editor and much more. Designed to answer the needs of most users.") . '</i>

  <h4>' . _("Under 450 characters") . '</h4>
  <i>' . _("Open Source administration and management tools for the PostgreSQL database. Includes a graphical administration interface, an SQL query tool, a procedural code editor and much more. pgAdmin III is designed to answer the needs of most users, from writing simple SQL queries to developing complex databases. Available in more than a dozen languages and for most common operating systems.") . '</i>

  <h4>' . _("Under 2000 characters") . '</h4>
  <i>' . _("Open Source administration and management tools for the PostgreSQL database and derivative products such as EnterpriseDB, Pervasive Postgres and SRA PowerGres. Includes a graphical administration interface, an SQL query tool with grahical EXPLAIN, a procedural code editor, an SQL/shell/batch scheduling agent, Slony-I management and much more. pgAdmin III is designed to answer the needs of most users, from writing simple SQL queries to developing complex databases. The graphical interface supports all PostgreSQL features and makes administration easy. Available in more than a dozen languages and for several operating systems, including Microsoft Windows &trade;, Linux, FreeBSD, Mac OSX and Solaris.") . '</i><br />&nbsp;</li>

  <li>' . _("<b>Keywords:</b> When visiting a web site, users may not find pgAdmin directly, but query keywords like \"PostgreSQL database\" or \"free administration tools\", etc. During registration, you may be asked to enter keywords. These should reflect any aspect of what pgAdmin does, and what it works with. <b>Under no circumstances should you include competitors company or product names in keywords</b>. Our proposal for a keyword list is:") . '<br />&nbsp;<br />

  <i>postgresql, postgres, pgsql, psql, postgre, pginstaller, pervasive postgres, enterprisedb, powergres, pgadmin, pgadmin iii, pgadmin ii, pgadmin3, pgadmin2, windows, linux, solaris, mac osx, freebsd, administration, managment, tools</i></li>
</ul>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
