<div class="sideBox LHS">
<div><?php echo _("Home");?></div>
<a href="#presentation">&rsaquo; <?php echo _("Presentation");?></a>
<a href="#news">&rsaquo; <?php echo _("Latest news");?></a>
<a href="#features">&rsaquo; <?php echo _("Features");?></a>
<a href="#contribute">&rsaquo; <?php echo _("How to contribute");?></a>
</div>

<div id="bodyText">
<h1 id="presentation"><?php echo _("Presentation of pgAdmin III");?></h1>
<dd>
  <?php echo _("pgAdmin III is a powerful administration and development platform for the PostgreSQL database, free for any use.")?>
  <?php echo _("The application is running under GNU/Linux, FreeBSD and Windows 2000/XP.")?>
  <br>
  </dd>
  <dd>
  <?php echo _("pgAdmin III is designed to answer the needs of all users, from writing simple SQL queries to developing complex databases.")?>
  <?php echo _("The graphical interface supports all PostgreSQL features and makes administration easy.")?>
  <?php echo _("The application also includes a query builder, an SQL editor, a server-side code editor and much more.")?>
  <?php echo _("pgAdmin III is released with an installer and does not require any additional driver to communicate with the database server.")?>
  <br>
    </dd>
  <dd>
  <?php echo _("pgAdmin III is developed by a community of database specialists around the world and is available in more than 30 languages. It is Free Software released under the Artistic License.")?>
</dd>

<h1 id="news"><?php echo _("Latest news");?></h1>
<dl>
  [2004-09-10] <dt> <?php echo sprintf(_("pgAdmin III %s released"), "v1.2 Beta-1");?></dt>
  <dd>
    <?php echo _("The pgAdmin Development Team are pleased to announce the first Beta version of pgAdmin III v1.2.0, the well-known GUI administration tool for the PostgreSQL database system.");?>
    <?php echo sprintf(_("Please visit the pgAdmin <a href='%s'>Beta release</a> page to learn more about this exciting new version."), "beta.php");?>
  </dd>
</dl>
<dl>
  [2003-11-28]<dt><?php echo sprintf(_("pgAdmin III %s released"), "v1.0.2");?></dt>
  <dd>
    <?php echo _("A new release of pgAdmin is available, including bug fixes for some problems that have been reported by users.");?>
    <?php echo sprintf(_("Please visit pgAdmin <a href='%s'>Change log</a> page to learn more about the latest fixes."), "development.php#changelog");?>
  </dd>
</dl>
<dl>
  [2003-09-26]<dt><?php echo sprintf(_("pgAdmin III %s released"), "v1.0.0");?></dt>
  <dd>
    <?php echo _("After one year of development, we are happy to announce the availability of pgAdmin III, a complete rewrite of pgAdmin II for Ms Windows, GNU/Linux and FreeBSD.");?>
    <?php echo _("We would like to thank our developer and translator community who contributed to the project.");?>
    <?php echo sprintf(_("pgAdmin III is the result of a joint effort of a team of more than %d contributors from %d different countries."), 100, 38);?>
    <br><br>
    <?php echo _("As usual your feedback is highly appreciated and required.");?>
    <?php echo _("We can only rely on users to make pgAdmin the best possible software.");?>
    <br><br>
    <?php echo sprintf(_("pgAdmin III is a free software project released under the <a href='%s'>Artistic licence</a>."), "cnt/licence.txt");?>
    <?php echo sprintf(_("The software is available in source and binary format from the <a href='%s'>Download</a> page."), "download.php");?>
    <?php echo sprintf(_("If you want to contribute to development, you can also use our <a href='%s'>daily snapshots</a> compiled almost everyday."), "download.php#snapshots");?>
  </dd>
</dl>

<a class="topOfPage" href="#top" title="Top Of Page">top</a>


<h1 id="features"><?php echo _("Features");?></h1>
<dl>
  <dt><?php echo _("Multiplatform");?></dt>
  <dd>
    	<li><?php echo _("MS Windows 2000 & XP");?><br>
    	<li><?php echo _("GNU/Linux");?><br>
    	<li><?php echo _("FreeBSD");?><br>
        <?php echo _("MacOsX and SunOS ports are under development.");?>
  </dd>

  <dt><?php echo _("Designed for PostgreSQL latest versions");?></dt>
  <dd>
    	<li><?php echo _("PostgreSQL 7.3");?><br>
    	<li><?php echo _("PostgreSQL 7.4");?><br>
  </dd>

  <dt><?php echo _("On-line help");?></dt>
  <dd>
    	<li><?php echo _("PostgreSQL documentation (on-line and off-line)");?>
      <li><?php echo _("SQL command guide");?>
  </dd>

  <dt><?php echo _("Multilingual interface");?></dt>
  <dd>
    <?php echo sprintf(_("pgAdmin III user interface is translated in more than %d languages."), 20);?>
    <?php echo sprintf(_("A detailed list of supported languages is available on the <a href='%s'>Translation</a> page."), "translation.php");?>
  </dd>

  <dt><?php echo _("Data access");?></dt>
  <dd>
    <li><?php echo _("Native PostgreSQL acccess (no ODBC layer needed)");?>
    <li><?php echo _("Powerful query tool with color syntax highlight");?>
    <li><?php echo _("Very fast datagrid for display/entry of data");?>
  </dd>

  <dt><?php echo _("Access to all PostgreSQL objects");?></dt>
  <dd>

  	<?php echo _("Objects are displayed with their SQL definition.");?>
    <table border=0 cellspacing=0 cellpadding=20>
    <tbody>
    	<tr valign='top'>
      	<td width='50%'>
          	<ul>
            	<li><?php echo _("Aggregates");?>
              <li><?php echo _("Casts");?>
              <li><?php echo _("Columns");?>
              <li><?php echo _("Constraints");?>
              <li><?php echo _("Conversions");?>
              <li><?php echo _("Databases");?>
              <li><?php echo _("Domains");?>
              <li><?php echo _("Functions");?>
              <li><?php echo _("Groups");?>
              <li><?php echo _("Indexes");?>
              <li><?php echo _("Server-side languages (like PLpgsql, PLpython, PLperl, etc...)");?>
            </ul>
        </td>
        <td width='50%'>
          	<ul>
              <li><?php echo _("Operator classes");?>
              <li><?php echo _("Operators");?>
              <li><?php echo _("PostgreSQL servers");?>
              <li><?php echo _("Rules");?>
              <li><?php echo _("Schemas");?>
              <li><?php echo _("Sequences");?>
              <li><?php echo _("Tables");?>
              <li><?php echo _("Trigger function");?>
              <li><?php echo _("Types");?>
              <li><?php echo _("Users");?>
              <li><?php echo _("Views");?>
            </ul>
        </td>
        </tr>
      <tr>
    </tbody>
    </table>
  </dd>


  <dt><?php echo _("Multibyte support");?></dt>
		<dd>
    <?php echo _("pgAdmin III supports most PostgreSQL server-side encodings:");?>
      <li>SQL_ASCII<br>
      <li>EUC_JP, EUC_CN, EUC_KR, EUC_TW<br>
      <li>JOHAB<br>
      <li>LATIN1, LATIN2, LATIN3, LATIN4, LATIN5, LATIN6, LATIN7, LATIN8, LATIN9, LATIN10<br>
      <li>ISO_8859_5, ISO_8859_6, ISO_8859_7, ISO_8859_8<br>
      <li>UNICODE UTF-8<br>
      <li>MULE_INTERNAL<br>
      <li>KOI8<br>
      <li>WIN<br>
      <li>ALT<br>
      <li>WIN1256<br>
      <li>TCVN<br>
      <li>WIN874<br>
    </TBODY>
  </TABLE>

	</dl>

<a class="topOfPage" href="#top" title="Top Of Page">top</a>


<h1 id="contribute"><?php echo _("How to contribute");?></h1>
  <?php echo _("pgAdmin is a project created and managed by contributors from the whole world.");?>
	<?php echo _("The project can only live and develop with your help.");?>
  <?php echo _("Do not hesitate to get involved.");?>
<dl>
  <dt><?php echo _("Development");?></dt>
  <dd>
  	<?php echo sprintf(_("If you think you can contribute new features and/or bug fixes, please visit the <a href='%s'>Development</a> page."), "development.php");?>
   <?php echo _("In particular, we need help for the upcoming MacOsX and SunOS ports.");?></dd>
</dl>

<dl>
  <dt><?php echo _("Translation");?></dt>
  <dd>
  	<?php echo sprintf(_("We need help to translate pgAdmin III and our website in more than %d languages."), 30);?>
  	<?php echo sprintf(_("If you think you can help us, please visit the <a href='%s'>Translation</a> page."), "translation.php");?>
  </dd>

</dl>

<a class="topOfPage" href="#top" title="Top Of Page">top</a>

</div>
