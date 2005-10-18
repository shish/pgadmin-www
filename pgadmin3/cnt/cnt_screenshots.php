<div class="sideBox LHS">
<div><?php echo _("Screenshots");?></div>
  <a href="#cross">&rsaquo; <?php echo _("Multiplatform");?></a>
  <a href="#interface">&rsaquo; <?php echo _("User interface");?></a>
  <a href="#data">&rsaquo; <?php echo _("Data access");?></a>
  <a href="#localisation">&rsaquo; <?php echo _("Multibyte & i18n");?></a>
  <a href="#documentation">&rsaquo; <?php echo _("Documentation");?></a>
  <a href="#status">&rsaquo; <?php echo _("Server status");?></a>

</div>

<div id="bodyText">
  <h1 id="cross"><?php echo _("Multiplatform");?></h1>

  <table cellspacing=10 cellpadding=0>
    <tbody>
    	<tr ALIGN='center'>
			  <tr ALIGN='center'>
          <td>
            <a href="shots/pgadmin3_linux.png">
            <img src="shots/pgadmin3_linux_thumb.png" alt="GNU/Linux">
          </td>

          <td>
            <a href="shots/pgadmin3_freebsd.png">
            <img src="shots/pgadmin3_freebsd_thumb.png" alt="FreeBSD 5.1">
          </td>

          <td>
            <a href="shots/pgadmin3_win32.png">
            <img src="shots/pgadmin3_win32_thumb.png" alt="MS Windows 2000 & XP">
          </td>
      	</tr>

        <tr ALIGN='center'>
          <td>GNU/Linux</td>
          <td>FreeBSD 5.1</td>
          <td>MS Windows 2000 & XP</td>
        </tr>

        <td COLSPAN=3>
          <p>
            <?php echo _("pgAdmin III is a comprehensive design and management interface for PostgreSQL database, designed to run on most Operating Systems.");?>
            <?php echo _("The software is written in C++ and uses the excellent wxWindows cross platform toolkit.");?>
            <?php echo _("In every environment, pgAdmin III is a native application.");?>
            <?php echo _("The application is executed in binary code, not in a virtual machine, therefore offering very good performance.");?><br><br>
            <?php echo _("We provide source and binary packages for GNU/Linux, FreeBSD and Ms Windows 2000 & XP. MacOsX and SunOS ports are in preparation.");?>
          </p>
        </td>
      </tr>

    </tbody>
  </table>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="interface"><?php echo _("User interface");?></h1>
  <table border=0 cellspacing=0 cellpadding=20>
    <tbody>
    	<tr>
      	<td COLSPAN=3>
        <p>
        	<?php echo _("pgAdmin project started five years ago.");?>
          <?php echo sprintf(_("pgAdmin is used by more than %d users worldwide."), 500000);?>
          <?php echo _("With the help and suggestions of users, we have been constantly improving the usability of pgAdmin.");?>
          <?php echo _("Recently, our team was joined by developers with an experience of more than 10 years in the design of database tools.");?>
          <br><br>
          <?php echo _("A short guided tour of the interface:");?>
         </p>
        </td>
			</tr>

      <tr>
      	<td>
        	<img src="shots/pgadmin3_connect.png" alt="">
        </td>
        <td COLSPAN=2 valign='top'>
        <p>
        	<?php echo _("pgAdmin III can connect to any PostgreSQL 7.3/7.4 and 8.x database using the embedded libpq native library.");?>
          <?php echo _("The application does not need any ODBC layer.");?>
          <br><br>
          <?php echo _("When configured server-side, it is possible to connect using encrypted password or SSL authentication.");?>
          </p>
          </td>
      </tr>

      <tr>
      	<td rowspan=2>
        	<img src="shots/pgadmin3_browser.png" alt="">
        </td>

        <td colspan=2>
        	<p>
        	 <?php echo _("In the left pane of pgAdmin III, a navigation tree allow to browse database objects.");?>
           <?php echo _("Nearly all PostgreSQL objects can be viewed, created, modified and dropped, including:");?>
           </p>
        </td>
			</tr>

			<tr valign='top'>
      	<td width='33%'>
          	<ul>
            	<li><?php echo _("Aggregates");?>
              <li><?php echo _("Casts");?>
              <li><?php echo _("Columns");?>
              <li><?php echo _("Constraints");?>
              <li><?php echo _("Conversions");?>
              <li><?php echo _("Databases");?>
              <li><?php echo _("Domains");?>
              <li><?php echo _("Functions");?>
              <li><?php echo _("Groups");?>
              <li><?php echo _("Indexes");?>
              <li><?php echo _("Server-side languages (like PLpgsql, PLpython, PLperl, etc...)");?>
            </ul>
        </td>
        <td width='33%'>
          	<ul>
              <li><?php echo _("Operator classes");?>
              <li><?php echo _("Operators");?>
              <li><?php echo _("PostgreSQL servers");?>
              <li><?php echo _("Roles");?>
              <li><?php echo _("Rules");?>
              <li><?php echo _("Schemas");?>
              <li><?php echo _("Sequences");?>
              <li><?php echo _("Tables");?>
              <li><?php echo _("Tablespaces");?>
              <li><?php echo _("Trigger function");?>
              <li><?php echo _("Types");?>
              <li><?php echo _("Users");?>
              <li><?php echo _("Views");?>
            </ul>
        </td>
      </tr>

      <tr>
      	<td>
        	<img src="shots/pgadmin3_properties.png" alt="">
        </td>
        <td COLSPAN=2 valign='top'>
        <p>
            <?php echo _("The properties and statistics of the selected object are displayed in the right pane of pgAdmin III.");?>
            <?php echo _("Notice the display of the SQL definition with colour syntax highlight.");?>
            <br><br>
            <?php echo _("Every time you manipulate objects graphically, pgAdmin III writes the corresponding SQL code.");?>
            <?php echo _("This makes learning SQL more easy...");?>
        </p>
        </td>
      </tr>

      <tr>
        <td>
        	<img src="shots/pgadmin3_function.png" alt="">
        </td>
        <td COLSPAN=2 valign='top'>
         <p>
        	<?php echo _("A double-click in the navigation tree opens the selected object in a separate dialog.");?>
         	 <br><br>
         	 <?php echo _("Notice the tabs giving access to Properties, Parameters, Security and SQL definition.");?>
          </p>
        </td>
      </tr>

      <tr>
        <td>
        	<img src="shots/pgadmin3_table.png" alt="">
        </td>
        <td  COLSPAN=2 valign='top'>
        	<p>
        	<?php echo _("pgAdmin III includes a table editor.");?>
          <?php echo _("Columns can be dropped.");?>
          <?php echo _("Column data types can be modified in certain conditions.");?>
          	</p>
        </td>
      </tr>
      <tr>
        <td>
        	<img src="shots/pgadmin3_grantwiz.png" alt="">
        </td>
        <td  COLSPAN=2 valign='top'>
        	<p>
        	<?php echo _("pgAdmin III includes a wizard that supports granting rights to multiple objects.");?>
          	</p>
        </td>
      </tr>
    </tbody>
  </table>

  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="data"><?php echo _("Data access");?></h1>
    <table border=0 cellspacing=30 cellpadding=0>
    <tbody>

      <tr>
      	<td>
        	<img src="shots/pgadmin3_viewdata.png" alt="">
        </td>
        <td COLSPAN=2 valign='top'>
        <?php echo _("A data grid allows to insert, modify and drop data easily.");?>
        <br><br>
        <?php echo _("The data is retrieved on-demand when it needs to be displayed.");?>
        <?php echo _("This technical choice allows to browse very large tables without problem.");?>
        </td>
      </tr>

			<tr>
      	<td>
        	<img src="shots/pgadmin3_querytool.png" alt="">
        </td>
        <td COLSPAN=2 valign='top'>
        <?php echo _("A query tool with colour syntax highlight allows to run custom queries.");?>
        <br><br>
        <?php echo _("The SQL definition of any object can be transfered to the query tool.");?>
        <br><br>
        <?php echo _("Click on the green arrow button to run a query.");?>
        <?php echo _("A running query can be cancelled on the fly by clicking on the red square button.");?>
        <br><br>
        <?php echo _("The tool displays execution times of queries.");?>
        </td>
      </tr>

      <tr>
      	<td>
        	<img src="shots/pgadmin3_explain.png" alt="">
        </td>
        <td COLSPAN=2 valign='top'>
        <?php echo _("EXPLAIN and/or ANALYSE your queries to take advantage of PostgreSQL unique optimisation features.");?>
        <br><br>
        <?php echo _("You will soon notice that PostgreSQL is the fastest database available.");?>
        </td>
      </tr>

    </tbody>
  </table>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="documentation"><?php echo _("On-line documentation");?></h1>
  <table border=0 cellspacing=30 cellpadding=0>
    <tbody>
    	<tr>
      	<td>
        	<img src="shots/pgadmin3_documentation.png" alt="">
        </td>
        <td COLSPAN=2 valign='top'>
        <?php echo _("pgAdmin III includes PostgreSQL full documentation.");?>
        <?php echo _("The documentation can be viewed off-line or on-line.");?>
        </td>
      </tr>
    </tbody>
  </table>

  <h1 id="localisation"><?php echo _("Multibyte and Internationalisation (i18n) support");?></h1>
    <table border=0 cellspacing=30 cellpadding=0>
    	<tbody>

        <tr>
          <td valign='top'>
            <img src="shots/pgadmin3_encoding.png" alt="">
          </td>
          <td COLSPAN=2 valign='top'>
            <?php echo _("pgAdmin III supports most PostgreSQL server-side encodings including Unicode UTF-8 and other multi-byte encodings."); ?>
          </td>
        </tr>

        <tr>
          <td valign='top'>
            <img src="shots/pgadmin3_languages.png" alt="">
          </td>
          <td COLSPAN=2 valign='top'>
          <?php echo sprintf(_("pgAdmin III interface is translated in more than %d languages."), 30);?>
          <?php echo sprintf(_("We plan to reach %d languages soon."), 40);?>
          <?php echo _("pgAdmin III interface supports all known Unicode scripts, even Right to Left (RTL) scripts like Arabic.");?>
          <br><br>
          <?php echo sprintf(_("A detailed list of supported languages is available on the <a href='%s'>Translation</a> page."), "translation.php");?>
          </td>
        </tr>
      </tbody>
  	</table>
  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

  <h1 id="status"><?php echo _("Server status");?></h1>
  <table border=0 cellspacing=30 cellpadding=0>
    <tbody>
    	<tr>
      	<td>
        	<img src="shots/pgadmin3_status.png" alt="">
        </td>
        <td COLSPAN=2 valign='top'>
          <?php echo _("View the status of PostgreSQL server.");?>
        </td>
      </tr>
    </tbody>
  </table>

  <a class="topOfPage" href="#top" title="Top Of Page">top</a>

</div>
