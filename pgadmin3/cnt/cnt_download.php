<div class="sideBox LHS">
  <div><?php echo _("Download")?></div>
  <a href="#mirrors">&rsaquo; <?php echo _("List of mirrors")?></a>
  <a href="#binaries">&rsaquo; <?php echo _("Binary packages")?></a>
  <a href="#source">&rsaquo; <?php echo _("Source code")?></a>
</div>

<div id="bodyText">
  <?php echo _("pgAdmin3 is a free software project released under the Artistic licence.");?>
  <?php echo sprintf(_("The software is available in source and binary format from our <a href='%s'>mirrors</a>."), "#mirrors")?>
  <?php echo sprintf(_("Because compiling from <a href='%s'>source</a> requires technical knowledge, we recommand installing <a href='%s'>binary packages</a>."), "#source", "#binaries")?>

  <h1 id="mirrors"><?php echo _("List of mirrors")?></h1>
  <dd>
  	<?php echo _("pgAdmin3 can be downloaded from a large number of mirrors.")?>
    <?php echo sprintf(_("The mirrors are kindly provided by <a href='%s'>PostgreSQL</a> project."), "http://www.postgresql.org")?>
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
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "Windows 2000 & XP")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>beta/freebsd51</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "FreeBSD 5.1")?></td>
      </tr>

			<tr bgcolor=beige>
        <td>beta/debian</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux Debian")?></td>
      </tr>

      <tr bgcolor=beige>
        <td>beta/mandrake91</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux Mandrake 9.1")?></td>
      </tr>

      <tr bgcolor=beige>
        <td>beta/redhat9</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux RedHat 9")?></td>
      </tr>

      <tr bgcolor=beige>
        <td>beta/slackware9</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux Slackware 9.0")?></td>
      </tr>

			<tr bgcolor=beige>
        <td>beta/suse82</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux SuSE 8.2")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>wxWindows</td>
        <td></td>
        <td><?php echo sprintf(_("Latest wxWindows %s source and binary packages needed for pgAdmin"), "2.5")?></td>
      </tr>
    </table>
  </dd>

  <dd>
		<?php include_once ("cnt/cnt_mirrors.php"); ?>
  </dd>

  <a class="topOfPage" href="#top" title="Top Of Page">top</a>


  <h1 id="binaries"><?php echo _("Installing binary packages")?></h1>
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
            <pre>
            &nbsp;deb [MIRROR URL]/beta/debian woody pgadmin
            </pre>

            <li>
            <?php echo _("For Debian TESTING:");?>
            <pre>
            &nbsp;deb [MIRROR URL]/beta/debian testing pgadmin
            </pre>

            <li>
            <?php echo _("For Debian UNSTABLE:");?>
            <pre>
            &nbsp;deb [MIRROR URL]/beta/debian unstable pgadmin
            </pre>
					</ul>

          <?php echo _("For example, for France, you can try:");?>
          <ul>
            <li>
            <?php echo _("For Debian WOODY:");?>
            <pre>
            &nbsp;deb ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/beta/debian woody pgadmin
            </pre>

            <li>
            <?php echo _("For Debian TESTING:");?>
            <pre>
            &nbsp;deb ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/beta/debian testing pgadmin
            </pre>

            <li>
            <?php echo _("For Debian UNSTABLE:");?>
            <pre>
            &nbsp;deb ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/beta/debian unstable pgadmin
            </pre>
					</ul>

				<li>
        <?php echo _("Run the following commands as root:");?>
        <pre>
        # apt-get update
        # apt-get install pgadmin3
        </pre>
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
        <pre>
        # rpm -Uvh pgadmin*.rpm
        </pre>
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
        <li><?php echo _("Install using the following command:");?>
        <pre>
        # pkg_add pgadmin3-yyyymmdd.tgz
        </pre>
        <li><?php echo _("Create a symlink to pgAdmin binary.");?>
        <pre>
        # ln -sf /usr/local/pgadmin3/bin/pgadmin3 /usr/local/bin/pgadmin3
				</pre>
        <li><?php echo _("Check that pgAdmin executable is in the path.");?>
        <pre>
        # which pgadmin3
        # /usr/local/bin/pgadmin3
        </pre>
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

  <h1 id="source"><?php echo _("Installing from source")?></h1>
  <dt><?php echo _("Requirements");?></dt>
  <dd>
  	<ul>
      <li><?php echo _("A recent development environment.")?>
      	<ul>
        	<li>
          	<?php echo _("GNU/Linux, FreeBSD and other *nixes.")?>
        		<?php echo _("Recents versions of GTK2.2, automake,  autoconf and gcc are needed.")?>
            <?php echo _("The best solution is to use a recent distribution.")?>
					<li>
          	<?php echo _("Windows 2000 & XP.")?>
            <?php echo "A recent version of Mingw compiler can be used."?>
        </ul>

    	<li><?php echo _("wxWindows 2.5 compiled from CVS is required with additional patches.")?>
        <?php echo _("wxWindows 2.4 will not work because of Unicode problems.")?>
        <?php echo _("We provide wxWindows 2.5 source and binary packages.")?>
        <?php echo _("The packages can be downloaded from our mirrors in the 'wxWindows' directory.")?>



			<li><?php echo sprintf(_("PostgreSQL %s with libpq for data access are needed."), "7.3+") ?>
    </ul>
  </dd>

  <dt><?php echo _("Installing wxWindows framework");?></dt>
  <dd>
  	<ol>
    	<li>
      	<?php echo _("Download our supported wxWindows 2.5 CVS version.");?>
        <?php echo _("The packages can be downloaded from our mirrors in the 'wxWindows' directory.")?>
      	<?php echo _("Unpack as follows:");?><br>
      <pre>
      # tar -xzf wxWindows*.tar.gz
      </pre>

      <li><?php echo _("Install wxWindows from source.");?>
      <PRE>
      # cd wxWindows*;
      # ./configure --with-gtk --enable-gtk2 --enable-unicode --disable-shared --enable-debug
      # make
      # make install
      # ldconfig
      </PRE>

      <li><?php echo _("Install wxWindows STC (Styled Text Control).");?>
      <PRE>
      # cd contrib/src/stc
      # make
      # make install
      # ldconfig
      </PRE>

      <li><?php echo _("Install wxWindows XRC (Xml Resource Control).");?>
      <PRE>
      # cd ../xrc
      # make
      # make install
      # ldconfig
      </PRE>
  	</ol>
	</dd>

	<dt><?php echo _("Installing pgAdmin");?></dt>
  <dd>
  	<ol>
    	<li>
      	<?php echo _("Download pgAdmin source code from a mirror.");?>
        <?php echo _("pgAdmin is available in several qualities: stable, beta, daily snapshot.");?><br>
        <ul>
        	<li><?php echo _("Stable release.");?>
          <?php echo _("Download from 'stable/source' directory on a mirror.");?>
          <?php echo _("Not yet available.");?>

        	<li>Beta release.
          <?php echo _("Download from 'beta/source' directory on a mirror.");?>

          <li><?php echo sprintf(_("<a href='%s'>Daily snapshot</a>."), "http://snake.pgadmin.org/snapshots");?>
				</ul>
      <br>

      <li><?php echo sprintf(_("Authenticate source code using <a href='%s'>Dave Page's PGP key.</a>"), "pgp/davepage.pgp");?><br><br>

      <li><?php echo _("Unpack pgAdmin tarball.");?><br>
      <pre>
      # tar -xzf pgadmin3*.tar.gz
      </pre>

      <li><?php echo _("Alternatively, you can use a CVS client.");?>
      <pre>
      # CVSROOT=:pserver:anonymous@cvs.pgadmin.org:/disk1/cvsroot export CVSROOT
      # cvs login
      # cvs -z9 checkout pgadmin3
      # cd pgadmin3
      # sh bootstrap
      </pre>

      <li><?php echo _("Compile pgAdmin.");?>
      <pre>
      # ./configure --enable-static --enable-debug
      # make all
      # make install
      </pre>
		</ol>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>
</div>
