<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Translation - Howto");
$PAGE_CONTENT = '

<h1>' . _("Howto") . '</h1>

<h2>' . _("Getting started") . '</h2>

<p>' . _("Anyone can translate pgAdmin into his or her mother tongue - you do not need to be a programmer. We try to make sure that all strings could be translated, even into non-European and non-Asian languages. The required steps for translation are as follows:") . '</p>

<ol>
  <li>' . sprintf(_("Subscribe to the <a href=\"%s\">pgadmin-hackers</a> mailing list and declare yourself as a translator by sending an email to the list. Upon receipt of your email, we will add you to the <a href=\"%s\">translator list</a> and make sure two translators do not work at the same time on the same language."), "/development/list.php", "status.php") . '<br />&nbsp;<br />

      ' . _("Usually, we prefer native speakers translate into their mother tongue. In the case of non-European and non-Asian languages, we have no special requirements.") . '<br />&nbsp;</li>

  <li>' . sprintf(_("Download <a href=\"%s\">poEdit</a> and install it under MS Windows or GNU/Linux."), "http://poedit.sourceforge.net/") . '<br />&nbsp;</li>

      ' . sprintf(_("poEdit is our recommended choice, as it makes it very easy to maintain your translation. A Windows installer is available on the poEdit web site. Alternatively, you may also run <a href=\"%s\">Kbabel</a> which can be found in many popular Linux distributions."), "http://i18n.kde.org/tools/kbabel/") . '<br />&nbsp;</li>

  <li>' . sprintf(_("Send us the English and translated names of your language: 'French' and 'Fran&ccedil;ais', 'German' and 'Deutsch', etc. This will allow us to modify pgAdmin's <i>i18n/pgadmin3.lng</i> file to display the language properly in the application. We will also create a directory according to your locale canonical name under <i>/usr/share/pgadmin3/i18n</i> (Linux and other Unixes) or <i>C:\\Program Files\\pgAdmin III\\X.Y\\i18n</i> (Windows). The list of language codes can be found on the <a href=\"%s\">Debian site</a>. You may also want to check the more detailed <a href=\"%s\">ISO 639.2 Codes for the Representation of Names of Languages</a>."), "http://www.debian.org/international/l10n/po", "http://www.loc.gov/standards/iso639-2/englangn.html") . '<br />&nbsp;</li>

  <li>' . sprintf(_("When this is done, you will receive an email. Browse to the <a href=\"%s\">translation status</a> page and download the *.po file corresponding to your language. The <a href=\"%s\">pgadmin3.pot</a> file serves as empty template for a new language source file."), "status.php", "http://git.postgresql.org/gitweb?p=pgadmin3.git;a=blob;f=pgadmin3.pot;h=284b5cd0b11fcbfa0b255f83624157b62ae2adb2;hb=HEAD") . '<br />&nbsp;</li>

  <li>' . _("Edit the *.po file. The steps described are related to poEdit only.") . '<br />&nbsp;<br />
    <ul>
      <li>' . _("As a first step, please edit the file properties (Catalog/Settings). Select correct language and country, and set the charset to <b>utf-8</b>. The project name is <b>pgadmin3</b>, team is <b>The pgAdmin Development Team</b>, and the email address should be <b>pgadmin-hackers@postgresql.org</b>.") . '<br />&nbsp;</li>

      <li>' . _("Check the <i>Automatically compile .mo file on save</i> option in Properties.") . '<br />&nbsp;</li>

      <li>' . _("Enter your translation strings.") . '<br />&nbsp;</li>

      <li>' . _("Please refer to the translation guidelines below to translate variables (%s and %d) and keyboard shortcuts entries (&amp;).") . '<br />&nbsp;</li>
    </ul></li>

  <li>' . _("Compile pgadmin3.po into a pgadmin3.mo binary file.") . '<br />&nbsp;<br />
    <ul>
      <li>' . _("In poEdit, clicking on the save button will automatically compile pgadmin3.po.") . '<br />&nbsp;</li>
      <li>' . _("Alternatively, you can run the following command manually:") . '<br />&nbsp;<br />
    <div class="pgaCode">
      msgfmt -o pgadmin3.mo pgadmin3.po
    </div><br />&nbsp;</li>
    </ul></li>

  <li>' . _("Review your translation carefully:") . '<br />&nbsp;<br />

      ' . _("You should be able to add the appropriate <i>i18n/language_Country/pgadmin3.mo</i> file under an existing binary installation of pgAdmin. Then, just select the language under the File -> Options menu. The review is an important step because some strings do not have a real context when viewed in the editor. You will only be able to correct entries by using pgAdmin yourself.") . '<br />&nbsp;<br />

      ' . _("You can also use the translation debug mode of pgAdmin (command line option -t) to review your translation in all dialogues. You won't need a database connection in that mode, but all dialogue resource files (*.xrc) are required, copied to the <i>ui</i> directory. If you compiled in debug mode, this will be the case automatically.") . '<br />&nbsp;</li> 

  <li>' . sprintf(_("When the translation is finished and reviewed, send the pgadmin3.po and pgadmin3.mo files to <a href=\"%s\">Guillaume Lelarge</a> after zipping/taring them. We will do our best to publish your files immediately."), "mailto:guillaume@lelarge.info", "/download/snapshots.php") . '<br />&nbsp;</li>

  <li>' . sprintf(_("From time to time, new strings which need translation are added to the application. Download/update the new <a href=\"%s\">pgadmin3.pot</a> and merge the new file with your language file using the poEdit <i>Catalog/Update from POT file</i> function. Alternatively, you can run the following command manually:"), "http://git.postgresql.org/gitweb?p=pgadmin3.git;a=blob;f=pgadmin3.pot;h=284b5cd0b11fcbfa0b255f83624157b62ae2adb2;hb=HEAD") . '<br />&nbsp;<br />
    <div class="pgaCode">
      msgmerge --update pgadmin3.po pgadmin3.pot
    </div><br />&nbsp;</li>
    </ul></li>

  <li>' . _("There are more texts that can be translated. In the <i>docs</i> directory, the file <i>tips.txt</i> contains tips that are displayed on pgAdmin startup. The HTML files used by the Guru to notify users of special issues are located in the <i>docs/hints</i> directory. Both <i>tips.txt</i> and the Guru Hint HTML files are translated without tools, just use your favourite text editor. ") . '<br />&nbsp;</li>

</ol>

<h2>' . _("Guidelines") . '</h2>

<ol>
  <li>' . sprintf(_("The <a href=\"%s\">pgadmin3.pot</a> template file contains many SQL keywords (like 'ACL', 'AFTER', 'ANALYSE', etc.) which should not be translated. Some translators pointed out this issue, which cannot be fixed at present. Here is a short explanation: The pgadmin3.pot template file is generated by the <a href=\"%s\">stringextract script</a>, which extracts text from XRC dialogues using a wxWidgets utility called 'wxrc'. The problem stems from wxrc, which extracts all text entries in dialogues even SQL entries which should not be translated."), "http://git.postgresql.org/gitweb?p=pgadmin3.git;a=blob;f=pgadmin3.pot;h=284b5cd0b11fcbfa0b255f83624157b62ae2adb2;hb=HEAD", "http://git.postgresql.org/gitweb?p=pgadmin3.git;a=blob;f=stringextract;h=37bf3ad8a3b52458ae0295dc10d7d7b7db7f2464;hb=HEAD") . '<br />&nbsp;<br />

      ' . _("To make it easier, all SQL keywords are written in capital letters. Conversely, all capital letters entries are SQL keywords.") . '<br />&nbsp;<br />

      ' . _("Therefore, never translate entries written in upper-case letters. In some cases you might even break pgAdmin if you do! To reach a 100% translation status, just copy these strings using the poEdit Alt+C Copy command. For example: translate <i>ACL</i> into <i>ACL</i>, <i>AFTER</i> into <i>AFTER</i>, etc.") . '<br />&nbsp;</li>

  <li>' . _("Stick as much as possible to words which are close to the original SQL syntax. For example, in French, you may use <i>vue</i> for <i>view</i> because both words start with the letter 'v'. Do not choose distant words like <i>d&eacute;clencheur</i> for <i>trigger</i>, because some users may not be able to make a good use of the SQL syntax. Sometimes it is better to simply leave these keywords untranslated, instead of creating a fancy word nobody will recognise. Otherwise, users may switch to the English version.") . '<br />&nbsp;</li>

  <li>' . _("Some messages include %s or %d variables placeholders. During execution, %s will be replaced by a string and %d by a decimal number. Please take special care to include all %s and %d variable placeholders correctly, otherwise pgAdmin may crash. On some occasions, it might be necessary to reorder placeholders. In the following (ficticious) example, both parameter positions are exchanged: <i>Server %s user %s is logged in</i> could be translated as <i>L'utilisateur s%2\$s est connect&eacute; au serveur %1\$s</i>.") . '<br />&nbsp;<br />

  <li>' . _("Keyboard shortcuts are denoted by a leading '&amp;'. For example '&amp;Add', which is translated into French by '&amp;Ajouter', can be triggered from keyboard using Alt + A. Be careful when changing letters, to avoid keyboard entry conflicts within one menu. If you deviate from the original shortcut keys, pgAdmin users might have problems remembering shortcuts in both English and translated pgAdmin versions. Therefore, be extra careful when creating new shortcuts if you cannot choose the same letter.") . '<br />&nbsp;<br />

  <li>' . _("Menu strings also contain hard coded shortcuts (Ctrl-X) or function keys (F5). These can be identified by a preceding \\t (tab). If appropriate, the modifier key name may be translated (Ctrl-), but the key combination must remain the same in all cases because the behaviour is hardcoded in the pgAdmin source.") . '<br />&nbsp;</li>

  <li>' . _("Most forms are not designed with resizing capabilities, because not only is this quite hard work but most dialogue contents aren't sizeable in a meaningful way anyway. The only resizing property dialogues are the function, view and rule property windows. Therefore, you may need to shrink the translated text to the English size. In general, we tried to leave enough space for translation texts, but if you believe there are certain places we should spend more space please let us know.") . '<br />&nbsp;</li>

</ol>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
