<div class="sideBox LHS">
<div><?php echo _("Beta versions");?></div>
<a href="#rc1">Release Candidate</a>
<a href="#beta3">Beta-3</a>
<a href="#beta2">Beta-2</a>
<a href="#beta1">Beta-1</a>
</div>
<div id="bodyText">
<h1 id="rc1"><?php echo _("Release Candidate of pgAdmin III V1.2 released");?></h1>
2004-11-03
<p>
The pgAdmin Development Team are proud to announce the release candidate 
of pgAdmin III v1.2.0, the well-known GUI administration tool
for the PostgreSQL database system. 
</p>
<p>
About one year after the last maintenance release V1.0.2 of pgAdmin III, the new version V1.2 with many enhancements
and full PostgreSQL 8.0 support is approching a mature status. Over the past year and especially the passed beta period
we received a lot of feedback and wishes from users, which now have been addressed in V1.2. We are quite confident that 
the status pgAdmin III has reached now is mature, and we're looking forward to release have a final V1.2.0 release 
quite soon.
</p>
<p>
All fixes that have been included in this release can be checked in our <a href="development.php#changelog">changelog</a>.
</p>
<p>
If you still find bugs or problems, report them immediately to the <a href="mailto:pgadmin-support@postgresql.org">pgAdmin-support mailing list</a>, so we can fix them for the final V1.2.0.
</p>
<p>
<h1 id="beta3"><?php echo _("Beta-3 of pgAdmin III V1.2 released");?></h1>
2004-10-18
<p>
The pgAdmin Development Team are pleased to announce the third Beta
version of pgAdmin III v1.2.0, the well-known GUI administration tool
for the PostgreSQL database system.
</p>
<p>
Again, we were able to fix a lot of issues that have been discovered by our diligent beta testers. Thanks to all of you!
Here's an excerpt from the changelog covering all changes since Beta-2:
<ul>
<li>use wxWidgets 2.5.3
<li>change unsigned conversion for oids
<li>Prevent StatusBar from being overwritten by Toolbar
<li>Connect to databases with special names
<li>review object owner code regarding pgsql versions
<li>remove maximize button on MSW
<li>Fix new server ssl option duplication on connect failure
<li>Fix cast property crash
<li>Use PostgreSQL's list of keywords for syntax highlighting
<li>Fix adding columns with constraints using table properties on 7.3 and 7.4
<li>Drop rows correctly when selected in reverse in the edit grid. Also, confirm drop first.
<li>Dynamically link libpq/OpenSSL for sensible installation with Win32 PostgreSQL
</ul>
We've been planning to release RC1 right now, but the pgAdmin Development Team decided to have this third beta to make sure that the switch to the official wxWidgets 2.5.3 doesn't invent additional problems. This move from our own wxWidgets snapshot to the official version is a big advantage in terms of linux distribution integration of pgAdmin III, so we took this step now instead of delaying it for the next major version.
</p>
<p>
Please, give it a try and report any/all problems to the <a href="mailto:pgadmin-support@postgresql.org">pgAdmin-support mailing list</a>.
</p>
<p>
<h1 id="beta2"><?php echo _("Beta-2 of pgAdmin III V1.2 released");?></h1>
2004-09-24
<p>
The pgAdmin Development Team are pleased to announce the second Beta
version of pgAdmin III v1.2.0, the well-known GUI administration tool
for the PostgreSQL database system.
</p>
<p>
Congratulations to all of you! It seems you are fantastic bug hunters! Since the first beta announcement on 10 September 2004, some well hidden bugs were discovered and fixed thanks to some really high quality reports from users and hackers.
Here is an abstract of the changelog which summarize the issues fixed in this particular release:
<ul>
<li>Prevent dropped servers reappearing after View System Objects change.
<li>GRANT for functions in reengineered SQL window
<li>Fix Database creation for 7.3/7.4 [Jona]
<li>Resources: use wxID_xxx IDs to enable GTK wxStockButtons
<li>Resources: use 12d height for comboboxes (GTK positioning issue)
<li>Rewrite of properties actions
<li>Mask passwords on dlgServer [Ivan Nejgebauer]
<li>Fix function return type quoting
<li>Fix GrantWizard for sequence and view
<li>Fix type quoting
<li>Fix OnAdd server property positioning
</ul>
</p><p>
You can find detailed download instructions at
<a href="download.php">http://www.pgadmin.org/pgadmin3/download.php</a>.
</p>
<p>
As this is still a beta release and although you killed many bugs during these past 15 days, there may be more well hidden bugs to be found... Should this be the last beta or not before stable release? Let's take a look at it together! The more you can find bugs, the better the final release will be - so let the hunt go on!
</p><p>
Please, give it a try and report any/all problems to the <a href="mailto:pgadmin-support@postgresql.org">pgAdmin-support mailing list</a>.
</p>
<p>

<h1 id="beta1"><?php echo _("Beta-1 of pgAdmin III V1.2 released");?></h1>
2004-09-10
<p>
The pgAdmin Development Team are pleased to announce the first Beta
version of pgAdmin III v1.2.0, the well-known GUI administration tool
for the PostgreSQL database system.

This first beta release of v1.2.0 addresses many bugfixes some of them
which were really annoying ones:
<ul>
<li>crashes when connecting to a MULE_INTERNAL encoded database
<li>crashes in certain conditions while using the SQL query window
<li>cursor disappearing when changing windows focus
</ul>
You can find a complete list of fixed issues 
<A HREF="support.php#bugs">here</A>.<br>
</p>
<p>
Many enhancements have also been integrated into pgAdmin III, including:
<ul>
<li>extended server status display, showing lock status and log files
<li>Grant wizard for easy application of privileges to multiple objects
<li>control of local server processes
<li>database backup and restore
<li>export query output to local files
<li>greatly enhanced font handling
<li>full support of PostgreSQL 8.0 objects and SQL syntax
</ul>
You can find detailed download instructions at the
<a href="download.php">Download</A> page.<br>
</p>
<p>
(At the time of this writing, source tarball, Win32 and Slackware binaries should be available on one of your favourite PostgreSQL mirror, Debian GNU/Linux binaries are about to be uploaded and binaries for other platforms are being built).<br>
</p>
<p>
It's been about 9 months since latest stable release and The Development
Team would like to thank all the hackers, port maintainers, translators
and testers that have given up their time to help with the development
of pgAdmin III.<br>
</p>
<p>
As this is a beta release, there are almost certainly bugs to be found. The first of these (a bug in the keyword quoting code) has already been found and fixed thanks to user feedback. The more you can find, the better the final release will be - so let the hunt begin!<br>
</p>
<p>
Please, give it a try and report any/all problems to <A href="mailto:pgadmin-support@postgresql.org">pgadmin-support@postgresql.org</A>.<br>
</p>
<p>

Happy Bug Hunting!

</p>
