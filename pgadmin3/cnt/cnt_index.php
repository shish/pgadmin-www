<div class="sideBox LHS">
<div><?php echo _("Home");?></div>
<a href="#news">&rsaquo; <?php echo _("Latest news");?></a>
<a href="#features">&rsaquo; <?php echo _("Features");?></a>
<a href="#contribute">&rsaquo; <?php echo _("How to contribute");?></a>
</div>

<div id="bodyText">

<h1 id="news"><?php echo _("Latest news");?></h1>
<dl>
  <dt><?php echo _("pgAdmin3 beta released");?></dt>
  <dd>
  	<?php echo _("After one year of development, we are happy to announce the availability of pgAdmin3 beta, a complete rewrite of pgAdmin2 for Ms Windows, GNU/Linux and FreeBSD.");?>
    <?php echo _("We would like to thank our developer and translator community who contributed to the project.");?>
    <?php echo sprintf(_("pgAdmin3 is the result of a joint effort of a team of more than %d contributors from %d different countries."), 100, 26);?><br><br>
  <?php echo _("pgAdmin3 is a free software project released under the Artistic licence.");?>
  <?php echo sprintf(_("The software is available in source and binary format from the <a href='%s'>Download</a> page."), "download.php");?>
  <?php echo sprintf(_("If you want to contribute to development, you can also use our <a href='%s'>daily snapshots</a> compiled almost everyday."), "development.php#dev_snap");?>
  </dd>
</dl>
<dl>
  <dt><?php echo _("pgAdmin2 is still supported");?></dt>
  <dd>
  	<?php echo _("Although we concentrate on pgAdmin3, we will continue to support pgAdmin2.");?>
  	<?php echo _("With the rapid advancement of the project, we recommand upgrading to pgAdmin3.");?>
		<?php echo _("pgAdmin2 is available under Windows only.");?>
    <?php echo _("Both pgAdmin2 and pgAdmin3 can coexist on the same system.");?>
    <?php echo sprintf(_("If you are interested, please visit <a href='%s'>pgAdmin2</a> site."), "http://www.pgadmin.org/pgadmin2")?>
    <?php echo _("This site is available in English only.")?>
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
    <?php echo sprintf(_("pgAdmin3 user interface is translated in more than %d languages."), 20);?>
    <?php echo sprintf(_("A detailed list of supported languages is available on the <a href='%s'>Translation</a> page."), "translation.php");?>
  </dd>

  <dt><?php echo _("Data access");?></dt>
  <dd>
    	<li><?php echo _("Native PostgreSQL acccess (no ODBC layer needed)");?>
    	<li><?php echo _("Powerfull query tool with color syntax highlight");?>
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
    <?php echo _("pgAdmin3 supports most PostgreSQL server-side encodings:");?>
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
<p>
  <?php echo _("pgAdmin is a project created and managed by contributors from the whole world.");?>
  <?php echo _("The project can only live and develop with your help. Do not hesitate to get involved.");?>
</p>
<dl>
  <dt><?php echo _("Development");?></dt>
  <dd>
  	<?php echo sprintf(_("If you think you can contribute new features and/or bug fixes, please visit the <a href='%s'>Development</a> page."), "development.php");?>
   <?php echo _("In particular, we need help for the upcoming MacOsX and SunOS ports.");?></dd>
</dl>

<dl>
  <dt><?php echo _("Translation");?></dt>
  <dd>
  	<?php echo sprintf(_("We need help to translate pgAdmin3 and our website in more than %d languages."), 20);?>
  	<?php echo sprintf(_("If you think you can help us, please visit the <a href='%s'>Translation</a> page."), "translation.php");?>
  </dd>
</dl>
<a class="topOfPage" href="#top" title="Top Of Page">top</a>
</div>
