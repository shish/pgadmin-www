<div class="sideBox LHS">
  <div><?php echo _("Development");?></div>
  <a href="#dev_cvs">&rsaquo; <?php echo _("CVS access");?></a>
  <a href="#dev_list">&rsaquo; <?php echo _("Mailing list");?></a>
  <a href="#team">&rsaquo; <?php echo _("Development team");?></a>
  <a href="#dev_snap">&rsaquo; <?php echo _("Daily snapshots");?></a>
  <a href="#todo">&rsaquo; <?php echo _("Todo list")?></a>
</div>

<div id="bodyText">

  <h1 id="dev_cvs"><?php echo _("CVS access");?></h1>
  <dd>
  	<?php echo _("pgAdmin is available subject to the terms of the Artistic Licence.");?>
    <?php echo sprintf(_("CVS access to the repository is available through a <a href='%s'>web interface</a> or using your favourite CVS client."), "http://cvs.pgadmin.org");?>
    <?php echo _("Anonymous read access is available using a CVS client.");?>
    <?php echo sprintf(_("Under Windows, we recommend using <a href='%s'>WinCVS</a>, which is a free software."), "http://www.wincvs.org");?>
     <?php echo _("Under GNU/Linux, there are several command line and graphical clients available.");?>
     <?php echo _("The required command lines needed for checkout are as follows:");?>
    <pre>
    # CVSROOT=:pserver:anonymous@cvs.pgadmin.org:/disk1/cvsroot export CVSROOT
    # cvs login
    # cvs -z9 checkout pgadmin3
    # cd pgadmin3
    # sh bootstrap
    </pre>
	</dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="dev_list"><?php echo _("pgadmin-hackers mailing list");?></h1>
  <dd>
  <?php echo _("pgadmin-hackers list is intended for developers who wish to contribute to pgAdmin project.");?>
  <?php echo sprintf(_("You are more than welcome to subscribe, but please remember to use <a href='%s'>pgadmin-support</a> list for end user support issues."), "support.php#support_list");?>
  <?php echo sprintf(_("To subscribe to the mailing list, send an email to %s with the word 'subscribe', without quotes, as the body of message."), "<a href='mailto:pgadmin-hackers-request@postgresql.org'>pgadmin-hackers-request@postgresql.org</a>");?>
  <br><br>
 <?php echo sprintf(_("Messages sent to the list are archived at <a href='%s'>PostgreSQL</a> and <a href='%s'>mail-archive.com</a>."), "http://archives.postgresql.org/pgadmin-hackers", "http://www.mail-archive.com/pgadmin-hackers@postgresql.org")?>
 </dd>



  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="team"><?php echo _("Development team");?></h1>
  <dd>
  <?php echo _("This section is available in English only.");?><br><br>
  Version 1.2, 22 August 2001
  <ol>
    <li>Purpose<br>
    The pgAdmin Development Team exists for 2 reasons:
    <ul>
      <li>To manage and maintain the pgAdmin Project
      <li>To ensure that pgAdmin remains freely available to anyone that wants it, but to prevent non-standard distribution or rebadging by hostile or predatory commercial companies.
		</ul>

    <li>Structure<br>
    The foundation consists of the Project Leader, core developers and members.
    <ul>
      <li>Project Leader: The Project Leader is Dave Page, founder and primary developer of the software. The Project Leader is also considered a Core Developer.
      <li>Core Developers: The Core Developers are Members of the Team that in the opinion of the Project Leader have made significant contributions to the Project.
      <li>Members: Members can be any contributor to the project who accepts an invitation from the Core Developers.
    </ul>

    <li>Division of Responsibilities<br>
    Any major decision regarding the Project must be voted on by the Core Developers. This would include, but is not limited to the granting of permission to a Commercial Company to rebadge or redistribute the Project or any part thereof in a non-standard form. Any vote will be made via email through the relevant mailling list. Responses not received within 2 weeks will be discounted from the vote. In the case of a hung vote, the Project Leader shall cast the deciding vote. Members of the Development Team have no voting right. Their membership is granted as recognition of their work.

    <li>People<br>
    The pgAdmin Development Team includes the following people:
    <ul>
      <li><a href='mailto:dpage@vale-housing.co.uk'>Dave Page</a> (Project Leader): Project founder & primary developer.
      <li><a href='mailto:jm@poure.com'>Jean-Michel Pouré</a> (Core Developer): translations & web site management.
      <li><a href='mailto:myeatman@vale-housing.co.uk'>Mark Yeatman</a> (Core Developer): Works on controls and consults on UI design.
      <li><a href='mailto:pgadmin@pse-consulting.de'>Andreas Pflug</a> (Core Developer): Has written vast amounts of pgAdmin III code and is responsible for much of it's design.
      <li><a href='mailto:frank_lupo@email.it'>Frank Lupo</a> (Core Developer): Has made countless improvements to the pgAdmin II code from minor bug fixes to major enhancements.
    </ul>
  </ol>
</dd>

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
    <li><a href="http://www.pgadmin.org/snapshots/win32">Microsoft Windows 2000 & XP</a><br>
  </ul>
  <?php echo sprintf(_("Please refer to our <a href='%s'>installation instructions</a>."), "download.php#installation");?>
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
