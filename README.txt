www.pgadmin.org
===============

This is the code for the pgAdmin website, www.pgadmin.org. In order to setup
an instance of the site, you will need a dedicated virtual host with the
site installed in the docroot. The following virtual host configuration is
taken from ferengi.postgresql.org which is (at the time of writing) serving
the primary site:

<VirtualHost *>
    ServerName www.pgadmin.org
    DocumentRoot /usr/local/apache/www.pgadmin.org
    ServerAlias pgadmin.postgresql.org
    ServerAlias www2.pgadmin.org
    ServerAlias pgadmin.org
    AddType application/x-httpd-php .php
    DirectoryIndex index.html index.php
    ErrorLog logs/www.pgadmin.org.error_log
    CustomLog /dev/null common
    RewriteLog logs/www.pgadmin.org.rewrite_log
    RewriteLogLevel 9

    <Directory "/usr/local/apache/www.pgadmin.org">
        Options Indexes FollowSymLinks
        AllowOverride All
        <IfModule mod_php4.c>
            php_admin_value safe_mode Off
        </IfModule>
    </Directory>
</VirtualHost>

Note that PHP's safe mode is currently turned off to allow the framework to 
tweak $LANG. This needs some work!

Static content
--------------

Each static page in the site is a very simple PHP script including the page 
generator scripti (include/page.php), setting up a couple of variables with 
the content and page title and then calling the www_page() function which 
renders the page. Strings in each page are wrapped in _( ) markers to allow 
them be translated.

Section menus
-------------

A section menu is built from the 'menu.php' script present in the same 
directory as the source content. Section menus are not present in the list
archives or docs sections of the site. The menu script contains a single 
function (www_menu()) which outputs a set of div's forming the section menu.
Each line includes a call to www_current_menu_page($1) which will include
the appropriate CSS class/id, depending on whether or not $1 is the current
page.

Additional content
------------------

There are also three additional directories that are not included with the 
site source code that must be setup under the document root. These hold 
copies of the pgAdmin source tree(s) for integration of the documentation,
translation status, changelog and bug lists etc, the snapshot builds and
the mailing list archives.

/svnrepo
--------

/svnrepo
  /pgadmin3
  /pgadmin3-1.4
...
...

The svnrepo directory holds the source trees for trunk and any stable branches
whose docs are integrated into the site (currently only 1.4). These tree are
svn update'ed hourly. Files under here are integrated into the website in a
variety of ways - basic text/html files may be included as raw content in
other PHP pages and the translation statuses are read using the code in
include/po_status.php. The documentation is accessed by it's 'real' filename,
relocated to /docs/xxx/, where xxx is 'dev' or the branch version number. A 
rewrite rule in /.htaccess intercepts these URLs, extracts the document set 
and page requested, and passes them to include/doc.php which constructs the 
page content and passes it to the standard page rendered.


/snapshots
----------

The snapshots directory is rsync'ed from developer.pgadmin.org. It simply
contains the directory tree of snapshot source and binary builds of pgAdmin.
The snapshot rsync source is not publically accessible.

/archives
---------

/archives
  /pgadmin-hackers
  /pgadmin-support

The /archives directory holds the mailing list archives for the pgAdmin lists
rsync'ed from svr5.postgresql.org. This rsync source is not publically 
accessible. The mailing list pages are built and rendered using 
include/archives.php and include/page.php in much the same way as the doc
pages are.

Synchronisation
---------------

In order to keep the live website up to date, a number of cron jobs are 
scheduled.

# Update the SVN repositories:

02 * * * * cd /usr/local/apache/www.pgadmin.org/svnrepo/pgadmin3; /usr/bin/svn update 
12 * * * * cd /usr/local/apache/www.pgadmin.org/svnrepo/pgadmin3-1.4; /usr/bin/svn update 

# Update the website content/source code:

22 * * * * cd /usr/local/apache/www.pgadmin.org; /usr/bin/svn update

# Run the translation cache update script:

32 * * * * /usr/bin/wget -q -O /tmp/update.txt http://www.pgadmin.org/translation/update.php

# Update the snapshots tree:

42 * * * * /usr/bin/rsync -avz --delete developer.pgadmin.org::pgadmin-snapshots /usr/local/apache/www.pgadmin.org/snapshots/

# Update the archives:

52 * * * * /usr/bin/rsync -avz --delete svr5.postgresql.org::pgsql-archives/pgadmin* /usr/local/apache/www.pgadmin.org/archives/


