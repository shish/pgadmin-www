<div class="sideBox LHS">
  <div><?php echo _("Download")?></div>
  <a href="#pgadmin3">&rsaquo; <?php echo _("pgAdmin3 beta")?></a>
  <a href="#installation">&rsaquo; <?php echo _("Installation")?></a>
  <a href="#pgadmin2">&rsaquo; pgAdmin2</a>
</div>

<div id="bodyText">
  <h1 id="pgadmin3"><?php echo _("pgAdmin3 beta")?></h1>
  <dd>
		<?php echo _("pgAdmin3  is available in source and binary format.")?>
    <?php echo _("Because compiling from source requires technical knowledge, we recommand using binary packages.")?>
		<?php echo _("After downloading, please read our installation instructions.")?>
    <?php echo _("On each mirror, the files can be found in the following directories:")?>
  </dd>

	<dd>
		<table width= '100%' cellspacing=0 cellpadding=10 border=0>
			<tr bgcolor=lightgray>
        <td><?php echo _("Location on mirror")?></td>
        <td></td>
        <td><?php echo _("Description")?></td>
      </tr>
    	<tr bgcolor=lightyellow>
        <td>beta/src</td>
        <td></td>
        <td><?php echo _("pgAdmin source code")?></td>
      </tr>
      <tr bgcolor=beige>
        <td>beta/win32</td>
        <td></td>
        <td><?php echo _("pgAdmin binary packages for Windows 2000 & XP")?></td>
      </tr>
      <tr bgcolor=lightyellow>
        <td>beta/slackware9</td>
        <td></td>
        <td><?php echo _("pgAdmin binary packages for GNU/Linux Slackware 9.0")?></td>
      </tr>
    </table>
  </dd>

  <dd>
		<?php include_once ("cnt/cnt_mirrors.php"); ?>
  </dd>

  <a class="topOfPage" href="#top" title="Top Of Page">top</a>


  <h1 id="installation"><?php echo _("pgAdmin3 installation instructions")?></h1>
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
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <dl>
    <dt><?php echo sprintf(_("GNU/Linux Mandrake %s, RedHat %s, SuSE %s"), "9.1", "9", "8.2");?></dt>
    <?php echo  sprintf(_("Packager: %s"), "Jean-Michel Pouré");?>
    <dd>
      <ol>
        <li>
        	<?php echo _("Download pgAdmin RPM package.");?>
        <li>
        	<?php echo _("Install using the following command:");?>
          <BR>
          # rpm -Uvh pgadmin*.rpm
      </ol>
		</dd>
	</dl>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

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
        <li><?php echo _("Download pgAdmin FreeBSD package.");?>
        <li><?php echo _("Install using the following command:");?><br>
            # pkg_add pgadmin3-yyyymmdd.tgz
        <li><?php echo _("Create a symlink to pgAdmin binary.");?><br>
            # ln -sf /usr/local/pgadmin3/bin/pgadmin3 /usr/local/bin/pgadmin3
        <li><?php echo _("Check that pgAdmin executable is in the path.");?><br>
            # which pgadmin3 # /usr/local/bin/pgadmin3
      </ol>
		</dd>
	</dl>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <dl>
    <dt><?php echo _("MS Windows 2000 & XP");?></dt>
		<?php echo  sprintf(_("Packager: %s"), "Andreas Pflug");?>
    <dd>
    	<ol>
        <li><?php echo _("Download pgAdmin installer.");?>
        <li><?php echo _("Double-clic on the installer and follow the instructions.");?><br>
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
