<div class="sideBox LHS">
  <div><?php echo _("Support")?></div>
  <a href="#FAQ">&rsaquo; <?php echo _("Frequently asked questions")?></a>
  <a href="#support_list">&rsaquo; <?php echo _("Mailing list")?></a>
  <a href="#bugs">&rsaquo; <?php echo _("Known bugs")?></a>
</div>

<div id="bodyText">
  <h1 id="FAQ"><?php echo _("Frequently asked questions")?></h1>
	<dd>
  	<?php echo sprintf(_("Our <a href=%s>FAQ</a> document contains some known caveats."), "/pgadmin3/faq")?>
    <?php echo _("In case you encounter an unexpected behaviour, you should have a look at that page.")?>
    <br><br>
    <?php echo _("The FAQ page is also accessible via the pgAdmin III help menu.")?>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="support_list"><?php echo _("pgadmin-support mailing list")?></h1>
	<dd>
  	<?php echo _("pgadmin-support is a support list intended for end user support and bug reports.")?>
    <?php echo sprintf(_("To subscribe to the mailing list, send an email to %s with the word 'subscribe', without quotes, as the body of message."), "<a href='mailto:pgadmin-support-request@postgresql.org'>pgadmin-support-request@postgresql.org</a>")?>
  <br><br>
  <?php echo sprintf(_("Messages sent to the list are archived at <a href='%s'>PostgreSQL</a> and <a href='%s'>mail-archive.com</a>."), "http://archives.postgresql.org/pgadmin-support", "http://www.mail-archive.com/pgadmin-support@postgresql.org")?>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="bugs"><?php echo _("Known bugs")?></h1>
  <dd>
    <?php echo _("This section is available in English only.");?>
    <?php echo _("The information displayed is extracted automatically from pgAdmin CVS.");?>
    <?php
    	$_file=$_SERVER["DOCUMENT_ROOT"]."/cvsroot/pgadmin3/BUGS.txt";
    	if (file_exists($_file)) {
        echo ("<br><br>");
    		include_once ($_file);
      }
    ?>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>
</div>



