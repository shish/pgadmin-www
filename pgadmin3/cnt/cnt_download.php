<div class="sideBox LHS">
  <div><?php echo _("Download")?></div>
  <a href="#debian">&rsaquo; <?php echo _("Debian")?></a>
  <a href="#rpm">&rsaquo; <?php echo _("RPM")?></a>
  <a href="#slackware">&rsaquo; <?php echo _("Slackware")?></a>
  <a href="#freebsd">&rsaquo; <?php echo _("FreeBSD")?></a>
  <a href="#win32">&rsaquo; <?php echo _("Ms Windows")?>
  <a href="#source">&rsaquo; <?php echo _("Source")?></a>
  <a href="#snapshots">&rsaquo; <?php echo _("Daily snapshots");?></a>
  <a href="#mirrors">&rsaquo; <?php echo _("Mirrors")?></a>
</div>

<div id="bodyText">
  <?php echo sprintf(_("pgAdmin3 is a free software project released under the <a href='%s'>Artistic licence</a>."), "cnt/licence.txt");?>
  <?php echo sprintf(_("The software is available in source and binary format from our <a href='%s'>mirrors</a>."), "#mirrors")?>
  <?php echo sprintf(_("Because compiling from <a href='%s'>source</a> requires technical knowledge, we recommand installing binary packages."), "#source")?>


  <h1 id="debian"><?php echo _("Debian packages")?></h1>
  <dl>
    <dt>
      <?php echo  sprintf(_("Packager: %s"), "Raphaël Enrici");?>
    </dt>

    <dd>
      <?php echo sprintf(_("pgAdmin packages are available for <a href='%s'>GNU/Linux Debian</a> stable, testing and unstable distributions."), "http://www.debian.org");?>
      <?php echo sprintf(_("These packages are also well-suited for <a href='%s'>Knoppix</a> and other Debian based distributions."), "http://www.knoppix.net");?>
      <?php echo ("An APT repository is provided to ease installation.");?>
    </dd>

    <dd>
	  <?php echo sprintf(_("Before you start installation, please choose a mirror in the list of our <a href='%s'>mirrors</a>."), "#mirrors");?>
	  <?php echo "You only need to right-click on a mirror and copy its URL.";?>
	  <?php echo "On each mirror, the packages are located in:";?>

	   <table width= '100%' cellspacing=0 cellpadding=10 border=0>
      <tr bgcolor=beige>
        <td><?php echo _("Location")?></td>
        <td></td>
        <td><?php echo _("Description")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/debian</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux Debian");?></td>
      </tr>
      </tr>
    </table>
    </dd>

    <dd>

          <?php echo _("Edit /etc/apt/sources.list file and add the following line:");?>

          <ul>
            <li>
            <?php echo _("For Debian WOODY:");?>
            <br/>
            <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
              <tr><td>
                deb [MIRROR URL]/pgadmin3/release/debian woody pgadmin
              </td></tr>
            </table>
            <br/>

            <li>
            <?php echo _("For Debian TESTING:");?>
            <br/>
            <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
              <tr><td>
                deb [MIRROR URL]/pgadmin3/release/debian testing pgadmin
              </td></tr>
            </table>
            <br/>

            <li>
            <?php echo _("For Debian UNSTABLE:");?>
            <br/>
            <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
              <tr><td>
                deb [MIRROR URL]/pgadmin3/release/debian unstable pgadmin
              </td></tr>
            </table>
            <br/>
					</ul>

          <?php echo _("For example, for France, you can try:");?>
          <ul>
            <li>
            <?php echo _("For Debian WOODY:");?>
            <br/>
            <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
              <tr><td>
								ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/release/debian woody pgadmin
              </td></tr>
            </table>
            <br/>

            <li>
            <?php echo _("For Debian TESTING:");?>
            <br/>
            <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
              <tr><td>
								deb ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/release/debian testing pgadmin
              </td></tr>
            </table>
            <br/>

            <li>
            <?php echo _("For Debian UNSTABLE:");?>
            <br/>
            <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
              <tr><td>
								deb ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/release/debian unstable pgadmin
              </td></tr>
            </table>
            <br/>
           </ul>

    </dd>

    <dd>
        <?php echo _("Run the following commands as root:");?>
        <br/>
          <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
            <tr><td>
              apt-get update<br/>
              apt-get install pgadmin3
            </td></tr>
          </table>


   </dd>
</dl>

  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="rpm"><?php echo "RPM packages";?></h1>
  <dl>
    <dt><?php echo  sprintf(_("Packager: %s"), "<a href='mailto:jm@poure.com'>Jean-Michel Pouré</a> / <a href='mailto:devrim@gunduz.org'>Devrim Gündüz</a> ");?></dt>

    <dd>
    <?php echo sprintf(_("pgAdmin RPM packages are available for several GNU/Linux distributions, including Fedora %s, Mandrake %s, RedHat %s, SuSE %s"), "RC1", "9.1", "9", "8.2");?>
 </dd>

  <dd>
        <?php echo sprintf(_("Download pgAdmin package from our <a href='%s'>mirrors</a>."), "#mirrors");?>
	<?php echo "On each mirror, the packages are located in:";?>


	   <table width= '100%' cellspacing=0 cellpadding=10 border=0>
      <tr bgcolor=beige>
        <td><?php echo _("Location")?></td>
        <td></td>
        <td><?php echo _("Description")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/FC1</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux Fedora")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/mandrake91</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux Mandrake 9.1")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/redhat9</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux RedHat 9")?></td>
      </tr>

	<tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/suse82</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux SuSE 8.2")?></td>
      </tr>
    </table>
    </dd>

    <dd>

        <?php echo _("Install using the following command:");?>
          <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
            <tr><td>
              rpm -Uvh pgadmin*.rpm
            </td></tr>
	  </table>

   </dd>
  </dl>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>


  <h1 id="slackware"><?php echo "Slackware packages";?></h1>
  <dl>
    <dt><?php echo  sprintf(_("Packager: %s"), "Dave Page");?></dt>

  <dd>
    <?php echo sprintf(_("pgAdmin packages are available for %s."), "GNU/Linux Slackware 9.0");?>
  </dd>

  <dd>
        <?php echo sprintf(_("Download pgAdmin package from our <a href='%s'>mirrors</a>."), "#mirrors");?>
	<?php echo "On each mirror, the packages are located in:";?>
  </dd>
    <dd>

	   <table width= '100%' cellspacing=0 cellpadding=10 border=0>
      <tr bgcolor=beige>
        <td><?php echo _("Location")?></td>
        <td></td>
        <td><?php echo _("Description")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/slackware9</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "GNU/Linux Slackware 9.0")?></td>
      </tr>
      </tr>
    </table>
    </dd>

<dd>
    <?php echo _("Install the downloaded package using Slackware pkgtool or installpkg.");?>
    </dd>
	</dl>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="freebsd"><?php echo "FreeBSD packages";?></h1>

  <dl>
    <dt><?php echo  sprintf(_("Packager: %s"), "斉藤　浩 (Hiroshi Saito)");?></dt>
  <dd>
    <?php echo sprintf(_("pgAdmin packages are available for %s."), "FreeBSD 5.1");?>
  </dd>

  <dd>
        <?php echo sprintf(_("Download pgAdmin package from our <a href='%s'>mirrors</a>."), "#mirrors");?>
	<?php echo "On each mirror, the packages are located in:";?>
  </dd>
    <dd>

	   <table width= '100%' cellspacing=0 cellpadding=10 border=0>
      <tr bgcolor=beige>
        <td><?php echo _("Location")?></td>
        <td></td>
        <td><?php echo _("Description")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/freebsd51</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "FreeBSD 5.1")?></td>
      </tr>
      </tr>
    </table>
    </dd>

     <dd><?php echo _("Install using the following command:");?>
          <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
            <tr><td>
              pkg_add pgadmin3-yyyymmdd.tgz
            </td></tr>
          </table>
     </dd>
     <dd>
      <?php echo _("Create a symlink to pgAdmin binary.");?>
          <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
            <tr><td>
              ln -sf /usr/local/pgadmin3/bin/pgadmin3 /usr/local/bin/pgadmin3
            </td></tr>
          </table>
     </dd>

     <dd>
     <?php echo _("Check that pgAdmin executable is in the path.");?>
        <br/>
          <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
            <tr><td>
              which pgadmin3
        # /usr/local/bin/pgadmin3
            </td></tr>
          </table>
       </dd>
	</dl>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="win32"><?php echo _("MS Windows 2000 & XP");?></h1>

  <dl>
    <dt><?php echo  sprintf(_("Packager: %s"), "Andreas Pflug");?></dt>

    <dd>
      <?php echo sprintf(_("pgAdmin packages are available for %s."), "MS Windows 2000/XP");?>
    </dd>
  <dd>
        <?php echo sprintf(_("Download pgAdmin package from our <a href='%s'>mirrors</a>."), "#mirrors");?>
	<?php echo "On each mirror, the packages are located in:";?>
  </dd>
    <dd>

	   <table width= '100%' cellspacing=0 cellpadding=10 border=0>
      <tr bgcolor=beige>
        <td><?php echo _("Location")?></td>
        <td></td>
        <td><?php echo _("Description")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/win32</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin binary packages for %s"), "MS Windows 2000/XP")?></td>
      </tr>
      </tr>
    </table>
    </dd>
    <dd>
        <li><?php echo _("Double-clic on the installer and follow the instructions.");?>
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
        		<?php echo _("Recents versions of GTK2.2, automake, autoconf and gcc are needed.")?>
            <?php echo _("The best solution is to use a recent distribution.")?>
					<li>
          	<?php echo _("Windows 2000 & XP.")?>
            <?php echo "A recent version of MinGW compiler can be used."?>
        </ul>

    	<li><?php echo _("wxWindows 2.5 compiled from CVS with additional patches.")?>
        <?php echo _("wxWindows 2.4 will not work because of Unicode problems.")?>
        <?php echo _("We provide wxWindows 2.5 source and binary packages.")?>
        <?php echo _("The libraries can be downloaded from our mirrors in the 'wxWindows' directory.")?>



			<li><?php echo sprintf(_("PostgreSQL %s with libpq for data access."), "7.3+") ?>
    </ul>
  </dd>

  <dt><?php echo _("Installing wxWindows libraries");?></dt>
  <dd>
      <?php echo _("Download our supported wxWindows 2.5 CVS version.");?>
      <?php echo _("The libraries can be downloaded from our mirrors in the 'wxWindows' directory.")?>
      <br/><br/>
      <?php echo _("Unpack as follows:");?>
      <br/>
      <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
        <tr><td>
        tar -xzf wxWindows*.tar.gz
        </td></tr>
      </table>

			<br/>
      <?php echo _("Now, depending on your operation system, follow these steps:");?>

      <ul>

    	<li>GNU/Linux or FreeBSD
      <br/>
      <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
        <tr><td>
					cd wxWindows*<br/>
          ./configure --with-gtk --enable-gtk2 \<br/>
          --enable-unicode --disable-shared --enable-debug<br/>
          make<br/>
      		sudo make install<br/><br/>
          # <?php echo _("Install wxWindows STC (Styled Text Control).");?><br/>
          cd contrib/src/stc<br/>
      		make<br/>
      		sudo make install<br/><br/>
          # <?php echo _("Install wxWindows XRC (Xml Resource Control).");?><br/>
          cd ../xrc/<br/>
      		make<br/>
      		sudo make install
        </td></tr>
      </table>

      <br/>
    	<li>MacOsX
      <br/>
      <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
        <tr><td>
          # Warning: MacOsX port is completely experimental.<br/>
          # This information is intended for pgAdmin team only.<br/>
          # Please checkout wxWindows and pgAdmin from CVS only.<br/>
          # To coordinate efforts, please contact us on the mailing list<br/>
          <br/>
					cd wxWindows*<br/>
          ../configure --with-mac --disable-shared --enable-debug<br/>
          make<br/>
          sudo make install<br/><br/>
					# <?php echo _("Install wxWindows STC (Styled Text Control).");?><br/>
          cd contrib/src/stc/<br/>
          make<br/>
          sudo make install<br/><br/>
          # <?php echo _("Install wxWindows XRC (Xml Resource Control).");?><br/>
          cd ../xrc/<br/>
          make<br/>
          sudo make install<br/>
        </td></tr>
      </table>
		</ul>

	</dd>

	<dt><?php echo _("Installing pgAdmin");?></dt>
  <dd>
  	<ol>
    	<li><?php echo _("Download pgAdmin source code from a mirror.");?>
      <br/><br/>

      <li><?php echo sprintf(_("Authenticate source code using <a href='%s'>Dave Page's PGP key.</a>"), "pgp/davepage.pgp");?>
      <br/><br/>

      <li><?php echo _("Unpack as follows:");?><br/>
      	<table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
        	<tr><td>
    			tar -xzf pgadmin3*.tar.gz
    			</td></tr>
      </table>
      <br/>

      <li><?php echo _("Compile pgAdmin.");?><br/>
        <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
            <tr><td>
            ./configure --enable-static --enable-debug<br/>
            make all<br/>
            sudo make install
            </td></tr>
        </table>
      <br/>
    </ol>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

      <h1 id="snapshots"><?php echo _("Daily snapshots");?></h1>
  <dd>
    <?php echo sprintf(_("Daily snapshots are packages compiled from <a href='%s'>CVS</a> nearly everyday."), "development.php#cvs");?>
    <?php echo _("There is no guarantee that these packages work in any way: it is alpha developer software intended for testing and development.");?>
    <?php echo _("Because compiling from source requires technical knowledge, we recommand using binary packages.")?>
    <?php echo _("Download pgAdmin3 snapshots here:");?>
    <ul>
      <li>GNU Linux <a href="http://www.pgadmin.org/snapshots/linux/debian">Debian</a> |
      <a href="http://www.pgadmin.org/snapshots/linux/FC1">Fedora FC1</a> |
      <a href="http://www.pgadmin.org/snapshots/linux/mandrake91">Mandrake 9.1</a> |
      <a href="http://www.pgadmin.org/snapshots/linux/redhat9">RedHat 9</a> |
      <a href="http://www.pgadmin.org/snapshots/linux/slackware9">Slackware 9.0</a> |
      <a href="http://www.pgadmin.org/snapshots/linux/suse82">SuSE 8.2</a>
      <br/>
      <li><a href="http://www.pgadmin.org/snapshots/freeBSD">FreeBSD 5.1</a><br/>
      <li><a href="http://www.pgadmin.org/snapshots/win32">Microsoft Windows 2000 & XP</a><br/>
    </ul>
    <?php echo sprintf(_("Please refer to our <a href='%s'>installation instructions</a>."), "#binaries");?>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>


    <h1 id="mirrors"><?php echo _("Download mirrors")?></h1>
  <dd>
    <?php echo _("pgAdmin3 can be downloaded from a large number of mirrors.")?>
    <?php echo sprintf(_("The mirrors are kindly provided by <a href='%s'>PostgreSQL</a> project."), "http://www.postgresql.org")?>
  </dd>

  <dd>
    <?php include_once ("cnt/cnt_mirrors.php"); ?>
  </dd>

  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

</div>
