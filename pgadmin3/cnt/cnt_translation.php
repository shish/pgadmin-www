<?php
  require_once "class/pgadmin_po.php";
  $translated = new po_status();
  $outofdate = new po_status();

  $translated->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
  $translated->setSvnRoot($_SERVER["DOCUMENT_ROOT"]."/svnrepo");

  $outofdate->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
  $outofdate->setSvnRoot($_SERVER["DOCUMENT_ROOT"]."/svnrepo");

  $_cache_translated = "cache/cache_translated.txt";
  $_cache_outofdate     = "cache/cache_outofdate.txt";

  $translated->_cache_load($_cache_translated);
  $outofdate->_cache_load($_cache_outofdate);
?>

<div class="sideBox LHS">
  <div><?php echo _("Translation");?></div>
  <a href="#update">&rsaquo;  <?php echo _("Translation updates");?></a>
  <a href="#contribute">&rsaquo; <?php echo _("Contribute a translation");?></a>
  <a href="#published">&rsaquo;  <?php echo _("Published");?></a>
  <a href="#vacant">&rsaquo;  <?php echo _("Unmaintained");?></a>
  <a href="#howto">&rsaquo; <?php echo _("Howto");?></a>
</div>

<div id="bodyText">
<h1 id="update"><?php echo _("Translation updates");?></h1>
<dd>
     <?php  echo sprintf(_("pgAdmin III is already translated in %d languages, and translators all around the world are adding more and more language options."), $translated->getNbLanguages() + $outofdate->getNbLanguages());?>
     <?php  echo _("In case a language you find here isn't included in your distribution package, you can easily upgrade your installation to support that additional language.");?>
     <?php  echo sprintf(_("Simply locate the appropriate language file (pgadmin3.mo) in the <A HREF='%s'>Translation</A> section, create a subdirectory in your installation's ui directory with a name corresponding to the locale code,  and copy the new translation file into that directory."), "#published");?>
     <?php  echo sprintf(_("You might need to update the language description file from <A HREF='%s'>ui/pgadmin3.lng</A> to let the new language appear in the language selection combobox."), "http://svn.pgadmin.org/cgi-bin/viewcvs.cgi/*checkout*/trunk/pgadmin3/src/ui/pgadmin3.lng");?>
     <br>
</dd>
<h1 id="contribute"><?php echo _("Contribute a translation");?></h1>
  <dd>
    <?php echo _("We need your help to translate pgAdmin III into additional languages.");?>
    <?php echo _("Everyone can participate, please refer to the translation howto for more information.");?>
    <?php echo sprintf(_("This web site can also be translated using <a href='%s'>pgadmin3_website.pot</a> file."), "locale/pgadmin3_website.pot");?>
    <?php echo sprintf(_("If you are interested in the translation of PostgreSQL server messages, please visit <a href='%s'>PostgreSQL National Language Support</a> project page."), "http://webmail.postgresql.org/~petere/nls.php");?>
    <br>
  </dd>


  <h1 id="published"><?php echo sprintf(_("Published Translations (%d languages)"), $translated->getNbLanguages());?></h1>
  <dd>
  	<?php echo _("If you are the author/maintainer of a translation and wish to update you work: download the template file (*.pot extension), execute poEdit and use the 'update from template' command.");?>
    <?php echo _("Translate the text and send us the *.po file.");?>
  <br>
  <dd>
  	<?php echo _("If you are not the author/maintainer of a translation and wish to submit a translation fix: download the language file (*.po extension), make the necessary corrections and send it back to us with CC to the translator.");?>
        <br>
  </dd>

  <dd>
    <?php echo _("The project can only live and develop with your help.");?>
    <?php echo _("Do not hesitate to review or update a translation.");?>
    <BR>
  </dd>

  <dd><?php echo _("The updated translations are published in daily snapshots automatically.");?>
  <br>
  </dd>

    <?php
    $_sortBy = $_SESSION['pgadmin']['c9875_poSortBy'];
    $translated->sortBy($_sortBy, SORT_ASC);
    $translated->display("c9875");
    ?>

  <a class="topOfPage" href="#top" title="Top Of Page">top</a>
  <br>
  <h1 id="vacant"><?php echo sprintf(_("Out of date Translations (%d languages)"), $outofdate->getNbLanguages());?></h1>
  <dd>
	<?php echo sprintf(_("The translations below are not considered complete enough for inclusion in current releases."));?>
	<?php echo sprintf(_("If you like to continue the work, please don't hesitate to contact the current maintainer (please CC %s)!"), "pgsql-hackers@postgresql.org");?>
  <br>
  </dd>
    <?php
    	$_sortBy = $_SESSION['pgadmin']['d3456_poSortBy'];
      $outofdate->sortBy($_sortBy, SORT_ASC);
      $outofdate->display("d3456");
    ?>

  <a class="topOfPage" href="#top" title="Top Of Page">top</a>
  <br>

  <h1 id="howto"><?php echo _("Translation howto");?></h1>
  <dl>
  <?php echo _("This section is available in English only.");?><br><br>
  <dt id="started">Getting started</dt>
  <dd>
    Anyone can translate pgAdmin into his or her mother tongue.
    You do not need to be a programmer.
    We made sure that all strings could be translated, even into non-European and non-Asian languages.
    The required steps for translation are the followings:

  <ol>
    <li>
    Subscribe to <a href="development.php#dev_list">pgAdmin hackers mailing list</a> and declare yourself as a translator by sending an email to the list. Upon reception of your email, we will add you to the <a href='#progress'>Translation in progress</a> list and make sure two translators do not work at the same time for the same language.
    <br><br>
    Usually, we prefer native speakers translating into their mother tongue. In the case of non European and non Asian languages, we have no special requirements.
    <br><br>

    <li>
    Download <a href="http://poedit.sourceforge.net">poEdit</a> and install it under MS Windows or GNU/Linux. <br><br>
    <a href="http://poedit.sourceforge.net">poEdit</a> is our recommended choice, as it makes it really easy to maintain your translation. An MS Windows installer is available on the <a href="http://poedit.sourceforge.net">poEdit</a> web site. 
    Alternatively, you may also run <a href="http://i18n.kde.org/tools/kbabel/">Kbabel</a> which can be found in recent GNU/Linux distributions.
    <br><br>

    <li>
      Send us the English and translated names of your language: 'French' and 'Français', 'German"' and 'Deutsch', etc.. This will allow us to modify pgAdmin src/ui/pgadmin3.lng file to display the language name in pgAdmin. We will also create a directory according to your locale canonical name under /usr/share/pgadmin3/ui (GNU/Linux and other Unixes) or c:\program files\pgadmi3\ui (Win32). The list of language codes can be found on <a href='http://www.debian.org/international/l10n/po'>Debian site</a>. You also check the more detailed <a href='http://www.loc.gov/standards/iso639-2/englangn.html'>ISO 639.2 Codes for the Representation of Names of Languages</a>.
     <br><br>

  <li>
      When this is done, you will receive an email. Connect to <a href="translation.php#progress">Translation in progress</a> page and download the *.po file corresponding to your language.
      The <?php echo sprintf("<a href='%s'>pgAdmin language template</a>", $outofdate->getLanguageTemplate());?>
      serves as empty template for a new language source file.
      <br><br>

    <li>Edit pgAdmin *.po file. The steps described are related to <a href="http://poedit.sourceforge.net">poEdit</a> only.<br><br>
      <ul>
        <li>As a first action, please edit the file properties (Catalog/Settings).  Select correct language and country, Charset to utf-8. Project name is pgAdmin3, Team is pgAdmin Developers, email address should be pgadmin-hackers@postgresql.org.
        <br><br>
        <li>
        Check the "Automatically compile .mo file on save" in Properties.
        <br><br>
        <li>
        Enter your translation strings.
        <br><br>
        <li>
        Please refer to <a href="translation.php#guidelines">translation guidelines</a> to translate variables (%s and %d) and keyboard shortcuts entries (&).
      </ul>
    <br><br>

    <li>Compile pgadmin3.po file into pgadmin3.mo binary file.<br><br>
        <ul>
          <li>In <a href="http://poedit.sourceforge.net">poEdit</a>, clicking on the save button will automatically compile pgadmin3.po into an pgadmin3.mo file. <br><br>
          <li>Alternatively, you can run the following script manually:
          <br>
            <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
              <tr><td>
                msgfmt -o pgadmin3.mo pgadmin3.po
              </td></tr>
            </table>
        </ul>
      <br><br>

    <li>Review your translation carefully. <br><br>
      You should be able to add the appropriate ui/language_Country/pgadmin3.mo file under an existing binary installation of pgAdmin. Then, just select the language under the File -> Options menu. Review is an important step, because somes strings do not have a real context. You will only be able to correct entries by using pgAdmin yourself...
    <br><br>

    <li>When the translation is finished and reviewed, send pgadmin3.po and pgadmin3.mo files to
      <a href='mailto:dpage@vale-housing.co.uk'>Dave Page</a> or <a href='mailto:pgadmin@pse-consulting.de'>Andreas Pflug</a>
 after zipping/taring them. We will do our best to publish your files immediately. The translations are published in pgAdmin <a href="download.php#snapshots">Daily snapshots</a> almost every day.
    <br><br>


    <li>From time to time, new strings which need translation are added to the application. Download/update the new pgadmin3.pot and merge the new file with your language file using <a href='http://poedit.sourceforge.net'>poEdit</a> "Catalog/Update from POT file.." function. Alternatively, you can run the following script manually:
    <br>
      <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
        <tr><td>
          msgmerge --update pgadmin3.po pgadmin3.pot
        </td></tr>
      </table>
      <br>
  </ol>
	</dd>

  <dt id="guidelines">Guidelines</dt>
	<dd>
    <ol>
      <li>
      <a href='/svnrepo/pgadmin3.pot'>pgadmin3.pot</a> template file contains many SQL keywords (like 'ACL', 'AFTER', 'ANALYSE', etc...) which should not be translated. Some translators pointed out this issue, which cannot be fixed at present. Here is a short explaination:  <a href='/svnrepo/pgadmin3.pot'>pgadmin3.pot</a> template file is generated by the <a href='/svnrepo/stringextract'>stringextract</a> script, which extracts text from XRC dialogs using a wxWindows utility called 'wxrc'. The problem stems from wxrc, which extracts all text entries in dialogs, even SQL entries which should not be translated.<br><br>

      To make it easier, all SQL keywords are written in capital letters. Conversely, all capital letters entries are SQL keywords.<br><br>

      Therefore, never translate entries written in upper-case letters. In some cases you might even break pgAdmin if you do! To reach a 100% translation status, just copy these strings using poEdit Alt+C Copy command. Example: translate 'ACL' into 'ACL', 'AFTER' into 'AFTER', etc...<br><br>

      <li>
      Stick as much as possible to words which are close to the original SQL syntax. For example, in French, you may use 'vue' for 'view', because both words start with the letter 'v'. Do not choose distant words, like 'déclencheur' for 'trigger', because some users may not be able to make a good use of the SQL syntax. Sometimes it is better to simply leave these keywords untranslated, instead of creating a fancy word nobody will recognize. Otherwise, users may switch to the English version.
      <br><br>

      <li>
      Some messages include %s or %d variables placeholders. During execution, %s will be replaced by a string and %d by a decimal number. Please take special care about including all %s and %d variable placeholders correctly. If you make a typo error, the application might crash. On some occasions, it might be necessary to reorder placeholders. In the following (fictive) example, both parameter positions are exchanged:  'Server %s user %s is logged in' could be translated by 'L\'utilisateur s%2$s est connecté au serveur %1$s.'.
      <br><br>

    	<li>
      Keyboard shortcuts are denoted by a leading '&'. For example '&Add', which is translated into French by '&Ajouter', can be triggered from keyboard using Alt + A. Be careful when changing letters, to avoid keyboard entry conflicts within one menu. If you deviate from the original shortcut keys, pgAdmin users might have problems remembering shortcuts in both English and translated pgAdmin versions. Therefore, be careful creating new shortcuts if you cannot choose the same letter.
      <br><br>

    	<li>
      Menu strings also contain hard coded shortcuts (Ctrl-X) or function keys (F5). These can be identified by a preceding \t (tab). If appropriate, the modifier key name may be translated (Ctrl-), but the key combination must remain the same in any case, because the behaviour is coded in pgAdmin source.
      <br><br>

    	<li>Most forms are not designed with resizing capabilities, because this is quite hard work. The only resizing forms are the function, view and rule property windows. Therefore, you may need to shrink the translated text to the English size. In general, we tried to leave enough space for translation texts, but if you believe there are certain places we should spend more space please let us know.
      <br><br>
    </ol>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>
</div>
