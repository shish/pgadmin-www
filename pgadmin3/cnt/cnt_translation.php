<?php
  require_once "class/pgadmin_po.php";
  $translated = new po_status();
  $pending = new po_status();

  $translated->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
  $translated->setCvsRoot($_SERVER["DOCUMENT_ROOT"]."/cvsroot/pgadmin3");

  $pending->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
  $pending->setCvsRoot($_SERVER["DOCUMENT_ROOT"]."/cvsroot/pgadmin3");

  $_cache_translated = "cache/cache_translated.txt";
  $_cache_pending    = "cache/cache_pending.txt";

  $translated->_cache_load($_cache_translated);
  $pending->_cache_load($_cache_pending);
?>

<div class="sideBox LHS">
  <div><?php echo _("Translation");?></div>
  <a href="#trans_published">&rsaquo;  <?php echo _("Published");?></a>
  <a href="#trans_progress">&rsaquo;  <?php echo _("In progress");?></a>
  <a href="#trans_howto">&rsaquo; <?php echo _("Howto");?></a>
</div>

<div id="bodyText">

  <dd>
    <?php echo _("We need your help to translate pgAdmin3 into several languages.");?>
    <?php echo _("Everyone can participate, please refer to the translation howto for more information.");?>
    <?php echo sprintf(_("This web site can also be translated using <a href='%s'>pgadmin3_website.pot</a> file."), "locale/pgadmin3_website.pot");?>
    <?php echo sprintf(_("If you are interested by the translation of PostgreSQL server messages, please visit <a href='%s'>PostgreSQL National Language Support</a> project page."), "http://webmail.postgresql.org/~petere/nls.php");?>
  </dd>


  <h1 id="trans_published"><?php echo sprintf(_("Published Translations (%d languages)"), $translated->getNbLanguages());?></h1>
  <dd>
  	<?php echo _("If you are the author/maintainer of a translation and whish to update you work: download the template file (*.pot extension), execute poEdit and use the 'update from template' command.");?>
    <?php echo _("Translate the text and send us the *.po file.");?>

  <dd><?php echo _("If you are not the author/maintainer of a translation and whish to submit a translation fix: download the language file (*.po extension), make the necessary corrections and send it back to us with CC to the translator.");?>
  </dd>

  <dd><?php echo _("The updated translations are published in daily snapshots automatically.");?>
  </dd>

    <?php
    $_sortBy = $_SESSION['pgadmin']['c9875_poSortBy'];
    $translated->sortBy($_sortBy, SORT_ASC);
    $translated->display("c9875");
    ?>

  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="trans_progress"><?php echo sprintf(_("Translations in progress (%d languages)"), $pending->getNbLanguages());?></h1>
    <?php
    	$_sortBy = $_SESSION['pgadmin']['d2943_poSortBy'];
      $pending->sortBy($_sortBy, SORT_ASC);
      $pending->display("d2943");
    ?>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>
  <br>

  <h1 id="trans_howto"><?php echo _("Translation howto");?></h1>
  <dd>
		<?php echo _("This section is available in English only.");?><br><br>
    Anyone can translate pgAdmin3 into his/her mother tongue. You don't need to be a programmer. As described in the <a href='http://cvs.pgadmin.org/cgi-bin/viewcvs.cgi/*checkout*/pgadmin3/docs/en_US/translation_guidelines.html'>translation guidelines</a>, we made sure that all strings could be translated, even into non-European and non-Asian languages. The required steps for translation are the followings:

<ol>
  <li>
  Subscribe to <a href="development.php#dev_list">pgAdmin hackers mailing list</a> and declare yourself as a translator by sending an email to the list. Upon reception of your email, we will add you to the <a href='#trans_progress'>Translation in progress</a> list and make sure two translators do not work at the same time for the same language.
  <br><br>
  Usually, we prefer native speakers translating into their mother tongue. In the case of non European and non Asian languages, we have no special requirements.
  <br><br>

  <li>
  Download <a href="http://poedit.sourceforge.net">poEdit</a> and install it under MS Windows or GNU/Linux. <br><br>
  <a href="http://poedit.sourceforge.net">poEdit</a> is our recommended choice, as it makes it really easy to maintain your translation. An MS Windows installer is available on <a href="http://poedit.sourceforge.net">poEdit</a> web site. For GNU/Linux users, we provide packages built against GTK2 with Unicode support. Only our packages enable the translation of Right-To-Left (RTL) languages like Arabic or Persian. Download them from:<br>
    <a href="http://www.pgadmin.org/snapshots/linux/mandrake91/poEdit">http://www.pgadmin.org/snapshots/linux/mandrake91/poEdit</a><br>
    <a href="http://www.pgadmin.org/snapshots/linux/redhat9/poEdit">http://www.pgadmin.org/snapshots/linux/redhat9/poEdit</a>.<br>
    <a href="http://www.pgadmin.org/snapshots/linux/suse82/poEdit">http://www.pgadmin.org/snapshots/linux/suse82/poEdit</a>.<br>
  <br><br>
  Alternatively, you may also run <a href="http://i18n.kde.org/tools/kbabel/">Kbabel</a> which can be found in recent GNU/Linux distributions.
  <br><br>

  <li>
    Send us the English and translated names of your language: "French" and "Français", "German" and "Deutsch", etc.. This will allow us to modify pgAdmin src/ui/pgadmin3.lng file to display the language name in pgAdmin. We will also create a directory according to your locale canonical name under /usr/share/pgadmin3/ui (GNU/Linux and other Unixes) or c:\program files\pgadmi3\ui (Win32). The list of language codes can be found on <a href="http://www.debian.org/international/l10n/po">Debian site</a>.
  	<br><br>

 <li>
    Connect to <a href="translation.php#trans_progress">Translation in progress</a> page and download the *.po file.
    <br><br>

  <li>Edit pgadmin.po file. The steps described are related to <a href="http://poedit.sourceforge.net">poEdit</a> only.<br><br>
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
			Please refer to <a href='http://cvs.pgadmin.org/cgi-bin/viewcvs.cgi/*checkout*/pgadmin3/docs/en_US/translation_guidelines.html'>translation guidelines</a> to translate variables (%s and %d) and keyboard shortcuts entries (&).
		</ul>
  <br><br>

  <li>Compile pgadmin3.po file into pgadmin3.mo binary file.<br><br>
      <ul>
        <li>In <a href="http://poedit.sourceforge.net">poEdit</a>, clicking on the save button will automatically compile pgadmin3.po into an pgadmin3.mo file. <br><br>
        <li>In Kbabel, you will need to run the following script manually:
        <pre>
        # msgfmt -o pgadmin3.mo pgadmin3.po.
        </pre>
    	</ul>
    <br><br>

  <li>Review your translation carefully. <br><br>
    You should be able to add the appropriate ui/language_Country/pgadmin3.mo file under an existing binary installation of pgAdmin3. Then, just select the language under the File -> Options menu. Review is an important step, because somes strings do not have a real context. You will only be able to correct entries by using pgAdmin3 yourself...
	<br><br>

  <li>When the translation is finished and reviewed, send pgadmin3.po and pgadmin3.mo files to <a href="mailto:jm@poure.com">Jean-Michel Pouré</a> after zipping/taring them. We will do our best to publish your files immediately. The translations are published in pgAdmin <a href="development.php#dev_snap">Daily snapshots</a> almost everyday.
	<br><br>



	<li>From time to time, new strings which need translation are added to the application. Download/update the new pgadmin3.pot and merge the new file with your language file using <a href="http://poedit.sourceforge.net">poEdit</a>'s "Catalog/Update from POT file.." function.
  </li>
</ol>
</dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>
</div>
