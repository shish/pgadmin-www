<div class="sideBox LHS">
  <div><?php echo _("Development");?></div>
  <a href="#dev_cvs">&rsaquo; <?php echo _("CVS access");?></a>
  <a href="#dev_list">&rsaquo; <?php echo _("Mailing list");?></a>
  <a href="#dev_team">&rsaquo; <?php echo _("Development team");?></a>
  <a href="#dev_snap">&rsaquo; <?php echo _("Daily snapshots");?></a>
  <a href="#bugs">&rsaquo; <?php echo _("Known bugs")?></a>
  <a href="#todo">&rsaquo; <?php echo _("Todo list")?></a>
</div>

<div id="bodyText">

  <h1 id="dev_cvs"><?php echo _("CVS access");?></h1>
  <dd>
  	<?php echo _("pgAdmin source code is available subject to the terms of the Artistic Licence.");?>
    <?php echo sprintf(_("CVS access to the repository is available through a <a href='%s'>web interface</a> or using your favourite CVS client."), "http://cvs.pgadmin.org");?>
    <?php echo _("Anonymous read access is available at the following CVSRoot without password from:");?>
    <br><br>
:pserver:anonymous@cvs.pgadmin.org:/disk1/cvsroot<br>
	</dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="dev_list"><?php echo _("pgadmin-hackers mailing list");?></h1>
  <dd>
  <?php echo _("pgadmin-hackers list is intended for developers who whish to contribute to pgAdmin project.");?>
  <?php echo sprintf(_("You are more than welcome to subscribe, but please remember to use <a href='%s'>pgadmin-support</a> list for end user support issues."), "support.php#support_list");?>
  <?php echo sprintf(_("To subscribe to the mailing list, send an email to %s with the word 'subscribe', without quotes, as the body of message."), "<a href='mailto:pgadmin-hackers-request@postgresql.org'>pgadmin-hackers-request@postgresql.org</a>");?>
  <br><br>
 <?php echo sprintf(_("Messages sent to the list are archived at <a href='%s'>PostgreSQL</a> and <a href='%s'>mail-archive.com</a>."), "http://archives.postgresql.org/pgadmin-hackers", "http://www.mail-archive.com/pgadmin-hackers@postgresql.org")?>
 </dd>



  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="dev_team"><?php echo _("Development team");?></h1>
  <dd>
  <?php echo sprintf(_("A list of team members is available on the <a href='%s'>team</a> page."), "team.php");?>
  <?php echo _("This page is available in English only.");?>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="dev_snap"><?php echo _("Daily snapshots");?></h1>
  <dd>
	<?php echo _("Daily snapshots are packages compiled from CVS nearly everyday.");?>
  <?php echo _("There is no guarantee that these packages work in any way: it is alpha developer software intended for testing and development.");?>
  <?php echo _("Because compiling from source requires technical knowledge, we recommand using binary packages.")?>
  <?php echo _("Download pgAdmin3 snapshots here:");?>
  <ul>
    <li>GNU Linux <a href="http://www.pgadmin.org/snapshots/linux/debian">Debian</a> | <a href="http://www.pgadmin.org/snapshots/linux/redhat9">RedHat 9</a> | <a href="http://www.pgadmin.org/snapshots/linux/suse82">SuSE 8.2</a> | <a href="http://www.pgadmin.org/snapshots/linux/mandrake91">Mandrake 9.1</a> | <a href="http://www.pgadmin.org/snapshots/linux/slackware90">Slackware 9.0</a><br>
    <li><a href="http://www.pgadmin.org/snapshots/freeBSD">FreeBSD 5.1</a><br>
    <li><a href="http://www.pgadmin.org/snapshots/windows">Microsoft Windows 2000 & XP</a><br>
  </ul>
  <?php echo sprintf(_("Please refer to our <a href='%s'>installation instructions</a>."), "download.php#installation");?>
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

  <h1 id="todo"><?php echo _("Todo list")?></h1>
  <dd>
    <?php echo _("This section is available in English only.");?>
    <?php echo _("The information displayed is extracted automatically from pgAdmin CVS.");?>
    <?php
    	$_file=$_SERVER["DOCUMENT_ROOT"]."/cvsroot/pgadmin3/TODO.txt";
    	if (file_exists($_file)) {
      	echo ("<br><br>");
    		include_once ($_file);
      }
    ?>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

</div>
