<div class="sideBox LHS">
  <div><?php echo _("Download")?></div>
  <a href="#pgadmin3">&rsaquo; <?php echo _("pgAdmin3 beta")?></a>
  <a href="#installation">&rsaquo; <?php echo _("Installation instructions")?></a>
  <a href="#pgadmin2">&rsaquo; pgAdmin2</a>
</div>

<div id="bodyText">
  <h1 id="pgadmin3"><?php echo _("pgAdmin3 beta")?></h1>
  <dd>
		<?php echo sprintf(_("pgAdmin3 source code can be downloaded <a href='%s'>here</a>."), "http://www.pgadmin.org/snapshots/src")?>
    <?php echo _("Because compiling source code requires technical knowledge, we recommand using precompiled binaries.")?>
    <br><br>

    <?php echo _("Download pgAdmin3 binaries here:")?>
    <ul>
      <li>GNU Linux <a href="http://www.pgadmin.org/snapshots/linux/debian">Debian</a> | <a href="http://www.pgadmin.org/snapshots/linux/redhat9">RedHat 9</a> | <a href="http://www.pgadmin.org/snapshots/linux/suse82">SuSE 8.2</a> | <a href="http://www.pgadmin.org/snapshots/linux/mandrake91">Mandrake 9.1</a> | <a href="http://www.pgadmin.org/snapshots/linux/slackware90">Slackware 9.0</a><br>
      <li><a href="http://www.pgadmin.org/snapshots/freeBSD">FreeBSD 5.1</a><br>
      <li><a href="http://www.pgadmin.org/snapshots/windows">Microsoft Windows 2000 & XP</a><br>
  	</ul>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>


  <h1 id="installation"><?php echo _("Installation instructions")?></h1>
  <dl>
    <dt><?php echo _("GNU/Linux Debian");?></dt>
    <?php echo  sprintf(_("Packager: %s"), "Raphaël Enrici");?>
    <br>

			<ol>
				<li>
          <?php echo _("APT Configuration");?>
          <br>
          <?php echo _("Edit /etc/apt/sources.list file and add the following line:");?>

          <ul>
            <li>
              <?php echo _("For Debian WOODY:");?>
              <br>
              &nbsp;deb
              http://www.pgadmin.org/snapshots/linux/debian woody pgadmin

            <li>
              <?php echo _("For Debian TESTING:");?>
              <br>
              &nbsp;deb
              http://www.pgadmin.org/snapshots/linux/debian testing pgadmin

            <li>
              <?php echo _("For Debian UNSTABLE:");?>
              <br>
              &nbsp;deb
              http://www.pgadmin.org/snapshots/linux/debian unstable pgadmin
					</ul>

				<li>
        	<?php echo _("Run the following commands as root:");?>
          <br>
          # apt-get update
          <br>
          #	apt-get install pgadmin3
          <br>
     </ol>
    </dd>
	</dl>

  <dl>
    <dt><?php echo sprintf(_("RPM packages for GNU/Linux Mandrake %s, RedHat %s, SuSE %s"), "9.1", "9", "8.2");?></dt>
    <?php echo  sprintf(_("Packager: %s"), "Jean-Michel Pouré");?>
    <dd>
      <ol>
        <li>
        	<?php echo _("Download pgAdmin rpm.");?>
        <li>
        	<?php echo _("Install the downloaded RPM using the following command:");?>
          <BR>
          # rpm -Uvh pgadmin*.rpm
      </ol>
		</dd>
	</dl>

  <dl>
    <dt><?php echo sprintf(_("GNU/Linux Slackware %s"), "9.0");?></dt>
		<?php echo  sprintf(_("Packager: %s"), "Dave Page");?>
    <dd>
      <ol>
        <li>
          <?php echo _("Download pgAdmin Slackware package.");?>
        <li>
         <?php echo _("Install the downloaded package using Slackware pkgtool or installpkg.");?>
      </ol>
		</dd>
	</dl>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <dl>
    <dt><?php echo sprintf(_("FreeBSD %s"), "5.1");?></dt>
		<?php echo  sprintf(_("Packager: %s"), "斉藤　浩 (Hiroshi Saito)");?>
    <dd>
    	<ol>
        <li>Download pgadmin3-yyyymmdd.tgz
        <li>Install using pkg_add
            # pkg_add pgadmin3-yyyymmdd.tgz
        <li>Create a symlink to pgadmin3 binary<br>
            # ln -sf /usr/local/pgadmin3/bin/pgadmin3 /usr/local/bin/pgadmin3
        <li>Check that pgadmin3 is in the path<br>
            # which pgadmin3 # /usr/local/bin/pgadmin3
      </ol>
		</dd>
	</dl>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>


  <h1 id="pgadmin2"><?php echo _("pgAdmin2 stable")?></h1>
    <dd>
      <?php echo _("pgAdmin2 is available for Ms Windows only.")?>
      <?php echo _("With the rapid advancement of the project, we recommand upgrading to pgAdmin3.");?>
      <?php echo sprintf(_("If you are interested in pgAdmin2, please visit <a href='%s'>pgAdmin2 downloading</a> page."), "http://www.pgadmin.org/pgadmin2/downloads")?>
      <?php echo _("This page is available in English only.")?>
    </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

</div>
