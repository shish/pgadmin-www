<?php
  require_once "cnt/cnt_translation_status.php";
?>

<div class="sideBox LHS">
  <div><?php echo _("Translation");?></div>
  <a href="#trans_published">&rsaquo;  <?php echo _("Published");?></a>
  <a href="#trans_progress">&rsaquo;  <?php echo _("In progress");?></a>
  <a href="#trans_howto">&rsaquo; <?php echo _("Howto");?></a>
</div>

<div id="bodyText">

  <p>
    <?php echo _("We need your help to translate pgAdmin3 into several languages.");?>
    <?php echo _("Everyone can participate, please refer to the translation howto for more information.");?>
    <?php echo sprintf(_("If you are interested by the translation of PostgreSQL server messages, please visit <a href='%s'>PostgreSQL National Language Support</a> project page."), "http://webmail.postgresql.org/~petere/nls.php");?>
  </p>

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
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>
</div>
