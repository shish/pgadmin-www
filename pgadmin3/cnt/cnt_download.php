<div class="sideBox LHS">
  <div><?php echo _("Download")?></div>
  <a href="#debian">&rsaquo; <?php echo _("Debian")?></a>
  <a href="#rpm">&rsaquo; <?php echo _("RPM")?></a>
  <a href="#slackware">&rsaquo; <?php echo _("Slackware")?></a>
  <a href="#freebsd">&rsaquo; <?php echo _("FreeBSD")?></a>
  <a href="#win32">&rsaquo; <?php echo _("Ms Windows")?>
  <a href="#source">&rsaquo; <?php echo _("Installing pgAdmin III from source code")?></a>
  <a href="#snapshots">&rsaquo; <?php echo _("Installing pgAdmin III from binary snapshots");?></a>
  <a href="#mirrors">&rsaquo; <?php echo _("Download mirrors")?></a>
  <a href="#languages">&rsaquo;<?php echo _("Additional languages")?></a>
</div>

<div id="bodyText">
  <?php echo sprintf(_("pgAdmin III is a free software project released under the <a href='%s'>Artistic licence</a>."), "cnt/licence.txt");?>
  <?php echo sprintf(_("The software is available in source and binary format from our <a href='%s'>mirrors</a>."), "#mirrors")?>
  <?php echo sprintf(_("Because compiling from <a href='%s'>source</a> requires technical knowledge, we recommand installing binary packages."), "#source")?>


  <h1 id="debian"><?php echo _("Debian packages")?></h1>
  <dl>
    <dt>
      <?php echo  sprintf(_("Packager: %s"), "<a href='mailto:blacknoz@club-internet.fr'>Raphaël Enrici</A>");?>
    </dt>

    <dd>
      <?php echo sprintf(_("pgAdmin III packages are available for <a href='%s'>GNU/Linux Debian</a> stable, testing and unstable distributions."), "http://www.debian.org");?>
      <?php echo sprintf(_("These packages are also well-suited for <a href='%s'>Knoppix</a> and other Debian based distributions."), "http://www.knoppix.net");?>
    </dd>

    <dd>
          <ul>
		<li>
		<?php echo _("For Debian Woody (oldstable):");?>
		<br/>
		We don't support this Debian version anymore. However you can refer to <a href="http://www.backports.org/"> for the latest version we've packaged for Debian/woody.
		<br/>

		<li>
		<?php echo _("For Debian Sarge (stable):");?>
		<br/>
		<?php echo ("An APT repository is provided to ease installation.");?>
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
			<td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "GNU/Linux Debian");?></td>
		</tr>
		</table>
    
	    <?php echo _("Edit /etc/apt/sources.list file and add the following line:");?>
            <br/>
            <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
              <tr><td>
                deb [MIRROR URL]/pgadmin3/release/debian sarge pgadmin
              </td></tr>
            </table>
	    <?php echo _("For example, for France, you can try:");?>
            <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
              <tr><td>
		deb ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/release/debian sarge pgadmin
              </td></tr>
            </table>
	    <br/>

            <li>
            <?php echo _("For Debian Etch (testing):");?>
	    <br/>
	    <?php echo ("An APT repository is provided to ease installation.");?>
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
		<td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "GNU/Linux Debian");?></td>
		</tr>
		</table>
		
		<?php echo _("Edit /etc/apt/sources.list file and add the following line:");?>
		<br/>
		<table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
		<tr><td>
		deb [MIRROR URL]/pgadmin3/release/debian testing pgadmin
		</td></tr>
		</table>
		<?php echo _("For example, for France, you can try:");?>
		<table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
		<tr><td>
		deb ftp://ftp2.fr.postgresql.org/postgresql/pgadmin3/release/debian testing pgadmin
		</td></tr>
		</table>
		<br/>
	    
            <li>
            <?php echo _("For Debian Sid (unstable):");?>
	    <br/>
	    <?php echo _("pgAdmin III is published on the official Debian Unstable repository.");?>
	    However, from time to time unstable may become broken, you can try to check for packages from our mirrors as described above for Debian/testing. You only need to change testing to unstable in the sources.list lines.
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
    <?php echo sprintf(_("pgAdmin III RPM packages are available for several GNU/Linux distributions, including Fedora %s, Mandrake %s, RedHat %s and SuSE %s."), "FC1 and FC2", "9.1", "9", "8.2");?>
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
        <td>[MIRROR URL]/pgadmin3/release/[VERSION]/FC3</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "GNU/Linux Fedora FC3")?></td>
      </tr>
      
      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/[VERSION]/FC2</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "GNU/Linux Fedora FC2")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/[VERSION]/FC1</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "GNU/Linux Fedora FC1")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/[VERSION]/mandrake91</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "GNU/Linux Mandrake 9.1")?></td>
      </tr>

      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/[VERSION]/redhat9</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "GNU/Linux RedHat 9")?></td>
      </tr>

	<tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/[VERSION]/suse82</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "GNU/Linux SuSE 8.2")?></td>
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
    <?php echo sprintf(_("pgAdmin III packages are available for %s."), "GNU/Linux Slackware 9.0/9.1");?>
  </dd>

  <dd>
        <?php echo sprintf(_("Download pgAdmin III package from our <a href='%s'>mirrors</a>."), "#mirrors");?>
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
        <td>[MIRROR URL]/pgadmin3/release/[VERSION]/slackware91</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "GNU/Linux Slackware 9.1")?></td>
      </tr>
      
      <tr bgcolor=lightyellow>
        <td>[MIRROR URL]/pgadmin3/release/[VERSION]/slackware9</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "GNU/Linux Slackware 9.0")?></td>
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
    <?php echo sprintf(_("pgAdmin III packages are available for %s."), "FreeBSD 5.1");?>
  </dd>

  <dd>
        <?php echo sprintf(_("Download pgAdmin III package from our <a href='%s'>mirrors</a>."), "#mirrors");?>
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
        <td>[MIRROR URL]/pgadmin3/release/[VERSION]/freebsd51</td>
        <td></td>
        <td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "FreeBSD 5.1")?></td>
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
      <?php echo _("Create a symlink to pgAdmin III binary.");?>
          <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
            <tr><td>
              ln -sf /usr/local/pgadmin3/bin/pgadmin3 /usr/local/bin/pgadmin3
            </td></tr>
          </table>
     </dd>

     <dd>
     <?php echo _("Check that pgAdmin III executable is in the path.");?>
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
    <dt><?php echo  sprintf(_("Packager: %s"), "Dave Page");?></dt>

    <dd>
      <?php echo sprintf(_("pgAdmin III packages are available for %s."), "MS Windows 2000/XP");?>
      <br><br>
      <?php echo sprintf(_("Note that the <a href='%s'>pgInstaller distribution of PostgreSQL for Windows</a> comes with pgAdmin."), "http://www.postgresql.org/ftp/win32");?>
    </dd>
  <dd>
        <?php echo sprintf(_("Download pgAdmin III package from our <a href='%s'>mirrors</a>."), "#mirrors");?>
	<?php echo _("On each mirror, the packages are located in:");?>
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
        <td><?php echo sprintf(_("pgAdmin III binary packages for %s"), "MS Windows 2000/XP")?></td>
      </tr>
      </tr>
    </table>
    </dd>
    <dd>
        <li><?php echo _("Double-click on the installer and follow the instructions.");?>
    </dd>
	</dl>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="source"><?php echo _("Installing pgAdmin III from source code")?></h1>
  <dt><?php echo _("Requirements");?></dt>
  <dd>
  	<ul>
      <li><?php echo _("A recent development environment.")?>
      	<ul>
        	<li>
          	<?php echo _("GNU/Linux, FreeBSD and other *nixes.")?>
        		<?php echo _("Recent versions of GTK2.2, automake, autoconf and gcc are needed.")?>
            <?php echo _("The best solution is to use a recent distribution.")?>
					<li>
          	<?php echo _("Windows 2000 & XP.")?>
            <?php echo _("Microsoft Visual C++ 6.0 or newer.")?>
        </ul>

    	<li><?php echo sprintf(_("wxWidgets %s."), "2.6.0")?>
        <?php echo _("Currently, this is the only version we support.")?>



			<li><?php echo sprintf(_("PostgreSQL %s with libpq for data access."), "7.3+") ?>
    </ul>
  </dd>

  <dt><?php echo _("Installing wxWindows libraries");?></dt>
  <dd>
      <?php echo sprintf(_("Download wxWidgets from the <a href='%s'>wxWidgets</a> download area."), "http://www.wxwidgets.org");?>
      <br/><br/>
      <?php echo _("Unpack as follows:");?>
      <br/>
      <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
        <tr><td>
        tar -xzf wxWidgets*.tar.gz
        </td></tr>
      </table>

			<br/>
      <?php echo _("Now, depending on your operation system, follow these steps:");?>

      <ul>

    	<li>GNU/Linux or FreeBSD
      <br/>
      <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
        <tr><td>
          # <?php echo _("Note - release builds should be configured without the --enable-debug option.");?><br/><br/>
					cd wxWidgets*<br/>
          ./configure --with-gtk --enable-gtk2 \<br/>
          --enable-unicode --disable-shared --enable-debug --enable-mimetype=no<br/>
          make<br/>
      		sudo make install<br/><br/>
          # <?php echo _("Install wxWidgets STC (Styled Text Control).");?><br/>
          cd contrib/src/stc<br/>
      		make<br/>
      		sudo make install<br/><br/>
          # <?php echo _("Install wxWidgets OGL (Object Graphics Library).");?><br/>
          cd ../ogl<br/>
      		make<br/>
      		sudo make install<br/><br/>
        </td></tr>
      </table>

      <br/>
    	<li>MacOsX
      <br/>
      <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
        <tr><td>
          # Warning: MacOsX port is completely experimental.<br/>
          # This information is intended for pgAdmin team only.<br/>
          # Please checkout wxWindows and pgAdmin from CVS/SVN only.<br/>
          # To coordinate efforts, please contact us on the mailing list<br/>
          <br/>
          # <?php echo _("Note - release builds should be configured without the --enable-debug option.");?><br/><br/>
					cd wxWidgets*<br/>
          ../configure --with-mac --disable-shared --enable-debug<br/>
          make<br/>
          sudo make install<br/><br/>
					# <?php echo _("Install wxWidgets STC (Styled Text Control).");?><br/>
          cd contrib/src/stc/<br/>
          make<br/>
          sudo make install<br/><br/>
          # <?php echo _("Install wxWidgets OGL (Object Graphics Library).");?><br/>
          cd ../ogl<br/>
      		make<br/>
      		sudo make install<br/><br/>
        </td></tr>
      </table>
		</ul>

	</dd>

	<dt><?php echo _("Installing pgAdmin III");?></dt>
  <dd>
  	<ol>
    	<li><?php echo _("Download pgAdmin III source code from a mirror.");?>
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

      <li><?php echo _("Compile pgAdmin III.");?><br/>
        <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#efefef">
            <tr><td>
            # <?php echo _("Note - release builds should be configured without the --enable-debug option.");?><br/><br/>
            ./configure --enable-static --enable-debug<br/>
            make all<br/>
            sudo make install
            </td></tr>
        </table>
      <br/>
    </ol>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

      <h1 id="snapshots"><?php echo _("Installing pgAdmin III from binary snapshots");?></h1>
  <dd>
    <?php echo sprintf(_("Binary snapshots are packages compiled from <a href='%s'>SVN</a> nearly everyday."), "development.php#svn");?>
    <?php echo _("There is no guarantee that these packages work in any way: it is alpha developer software intended for testing and development.");?>
    <?php echo _("Because compiling from source requires technical knowledge, we recommand using binary packages.")?>
    <?php echo _("Download pgAdmin III snapshots here:");?>
    <ul>
      <li>GNU Linux <a href="http://www.pgadmin.org/snapshots/linux/debian">Debian</a> |
      <a href="http://www.pgadmin.org/snapshots/linux/FC2">Fedora FC2</a> |
      <a href="http://www.pgadmin.org/snapshots/linux/mandrake91">Mandrake 9.1</a> |
      <a href="http://www.pgadmin.org/snapshots/linux/redhat9">RedHat 9</a> |
      <a href="http://www.pgadmin.org/snapshots/linux/slackware91">Slackware 9.1</a> |
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
    <?php echo sprintf(_('pgAdmin III can be downloaded from a <a href="%s">large number of mirrors</a>.'), 'http://www.postgresql.org/ftp/pgadmin3/')?>
    
    <?php echo sprintf(_('The mirrors are kindly provided by the <a href="%s">PostgreSQL</a> project.'), 'http://www.postgresql.org/')?><br>
  </dd>

  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="languages"><?php echo _("Additional languages");?></h1>
  <dd>
      <?php echo _("Languages not included in the distribution package may be added at a later time.");?>
     <?php echo sprintf("Please check the <a HREF='%s'>Translation</a> page whether your preferred language is available already.", "translation.php#update");?>
  </dd>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>
</div>
