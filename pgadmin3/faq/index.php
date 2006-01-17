<html>
<head>
<title>pgAdmin III Online FAQ</title>
</head>

<body>
<H1>pgAdmin III FAQ</H1>
<p>
<A HREF="#CantEdit">Can't edit table data</A><BR>
<A HREF="#PropertyDisabled">A property is disabled on an object I want to edit</A><BR>
<A HREF="#UserPrivileges">User privileges</A><BR>
<A HREF="#ConstraintTrigger">Foreign key constraints not shown</A><BR>
<A HREF="#ColChange">Problem after changing column type</A><BR>
<A HREF="#CantRestore">Can't restore backup file created with pgAdmin III</A><BR>
<A HREF="#datpath">ERROR: column &quot;datpath&quot; does not exist</A><BR>
<A HREF="#Win9x">Win9x problems</A><BR>
<A HREF="#HangWin9x">Query tool hangs on Win9x</A><BR>
<A HREF="#ColTrunc">Query tool columns truncated</A><BR>
<A HREF="#UnsuppProtocol">Server log: unsupported protocol</A><BR>
<A HREF="#FontProblem1">Font problem: too big</A><BR>
<A HREF="#FontProblem2">Font problem: SQL shows weird characters</A><BR>
<A HREF="#gtk-qt">Crash on Linux: QPixmap: Invalid pixmap parameters</A><BR>
<A HREF="#ConnDrop">Connection to database dropped</A><BR>
<A HREF="#EncodingProblem">Encoding Problem: My data is not shown</A><BR>
</B>
</p>

<H3><A Name="CantEdit">Can't edit table data</A></H3>
<p>
When I open a table to edit, there's no empty line at the end to enter new data. I can't edit the existing data either.
</p><p>
In order to edit data, pgAdmin III requires a primary key on the table, which is a good database design practice anyway.
Alternatively, the table can be created WITH OIDS. Please note that oids are *not* guaranteed to be unique over a very 
long period of time, so using oids as kind-of primary key is only second choice.
[AP]
</p><br>
<H3><A NAME="PropertyDisabled">A property is disabled on an object I want to edit</A></H3>
<p>
I want to edit an object, but the property I'd like to edit always appears disabled.
</p><p>
You're probably editing an object on an older version of PostgreSQL server.
</p><p>
pgAdmin III supports PostgreSQL server versions starting from V7.3. Naturally, constant improvements
add more features. pgAdmin III tries to keep up with this development.
Consequently, some features that are described in the online documentation, which always covers the latest released
PostgreSQL version available, are not accessible on older server versions. In this case, pgAdmin III detects this and
disables the option.
</p><p>
Hint: If you're working on older PostgreSQL servers regularly, you can change the online help site in the options dialogue.
[AP]
</p><br>
<H3><A Name="UserPrivileges">User Privileges</A></H3>
<p>
I want to grant rights on an PostgreSQL object to an individual user,
but on the security page of that object only groups are shown.
</p><p>
It is recommended to organize users into groups, and grant
the rights to these instead of granting rights to individual users.
<br> If you need this nevertheless, you can switch on the option "Show users
for privileges" on the General tab of the Options dialogue.
[AP]
</p><br>
<H3><A Name="ConstraintTrigger">Foreign key constraints not shown</A></H3>
<p>
My database contains foreign key constraints, but these are not visible with pgAdmin III.
</p><p>
If you convert a database prior to 7.3 to a newer one, some dependency information isn't created
because it didn't exist in PostgreSQL 7.2 and older. When restoring such a pg_dump file, the foreign
keys are generated with CREATE CONSTRAINT TRIGGER instead of an ADD 
CONSTRAINT command.
<br>pgAdmin III considers constraint triggers as an internal implementation detail,
not interesting for the common administrator. In fact, CREATE CONSTRAINT TRIGGER is for backward 
compatibility only, and shouldn't be used in newer scripts any more. Some tools (e.g. pgAdmin II) imply this, 
by showing a ADD CONSTRAINT when reverse engineering, while actually the constraint information in 
the database is missing.<br>
Run the adddepend script, which can be found in the backend's sources contrib/adddepend directory.
[AP]
</p><br>
<H3><A Name="ColChange">Problem after changing column type</A></H3>
<p>
After changing a column type in PostgreSQL 7.3 or 7.4, I get errors when executing views or triggers. 
I don't see this problem on 8.0 servers.
<p></p>
PostgreSQL 7.3 and 7.4 don't support changing the column type by themselves, pgAdmin III changes system tables 
directly instead. Under some circumstances, the query plan that was stored when a view or trigger created 
containing that column, have to be replanned using the new type information.
</p><p>
Currently, pgAdmin III does not recreate depending objects automatically for 7.3 and 7.4 servers; you will 
have to do that manually if you encounter execution errors. pgAdmin III V1.3 and later are planned to do 
that automatically. This is not necessary on PostgreSQL 8.+ servers, because these versions support altering
a column type instrinsically.
<H3><A Name="CantRestore">Can't restore backup file created with pgAdmin III</A></H3>
<p>
I created a backup file using pgAdmin III, but when I try to restore it using pgAdmin III
the OK button will stay grayed.
<p></p>
pgAdmin III uses PostgreSQL's pg_restore tool, which supports only the COMRESS and TAR options of pg_dump
which is used for backup creation. The PLAIN format can't be interpreted by pgAdmin III and pg_restore
(it can be edited manually, and executed with psql and pgAdmin III's query tool in many cases), and thus 
isn't accepted as valid file.
</p><p>
We recommend using the COMPRESS format for daily backup tasks. The PLAIN format is for advanced manual
processing before executing as SQL script, and has some restrictions (no blobs) which makes it less usable
for standard backup tasks.
</p><br>
<H3><A Name="datpath">ERROR: column &quot;datpath&quot; does not exist</A></H3>
<p>
I'm using pgAdmin III V1.0.x and try to connect to a PostgreSQL 8.0.x server. I get the message
&quot;ERROR: column &quot;datpath&quot; does not exist.&quot; and can't continue.
</p><p>
pgAdmin III V1.0.x does not work on PostgreSQL 8.0.x, because some system structure changed.
</p><p>
Use pgAdmin III V1.2.x instead, which supports PostgreSQL 7.3.x, 7.4.x and 8.0.x.
[AP]
</p><br>
<H3><A Name="Win9x">Win9x problems</A></H3>
<p>
We're providing a stripped down pgAdmin III  1.0 version without unicode support and limited functionality.
Still, Win9x imposes some other problems too. Consider using a true 32bit operating system 
(Linux, W2K, XP) if these constraints hit you. We won't provide Win9x compatible pgAdmin III 1.2 versions.<BR>
One example: </p>
<H3><A Name="HangWin9x">Query tool hangs on Win9x</A></H3>
<p>
After running a query on Win9x that retrieves around 3000 rows or more, closing the query tool will hang the app.
</p><p>
Apparently this happens when Win9x cleans up the result set ListView. Win9x isn't prepared to handle large data
(it's still kind-of 16 bit in these places).<br>
We don't provide fixes for Win9x components (M$ doesn't either). There's no known workaround.[AP]
</p><br>

<H3><A Name="ColTrunc">Query tool columns truncated</A></H3>
<p>
Some columns are truncated when running a query in the query tool.
</p><p>
You can increase the query option "max. chars per column" for this. Please note that there's another limit for this imposed by the underlying 
windows control, which apparently doesn't allow more than 511 characters.
<BR>
In pgAdmin III V1.1 and up, we provide the function "execute to file", which has no column restrictions.
[AP]
</p><br>
<H3><A Name="UnsuppProtocol">Server log: unsupported protocol</A></H3>
<p>
Every time I  connect to my PostgreSQL 7.3.x server with pgAdmin III,
I get the following message in the serverlog:<br>
   FATAL: unsupported frontend protocol
</p><p>
Binary distributions of pgAdmin III are linked against the newest
PostgreSQL libpq 7.4/8.0 library, which implements a new frontend protocol. It
will try to connect to the backend using this protocol first, and if that fails it
uses the older one.<br>
This behaviour is by design, and there's no problem to be expected
from this.
[AP]
</p><br>
<H3><A Name="FontProblem1">Font problem: too big</A></H3>
<p>On my *ix system, the text is too big, and is truncated in the controls.
</p><p>
pgAdmin III uses the system's setting for the font, which sometimes
isn't a good choice.<br>
Try to put something like this in your ~/.gtkrc-2.0 file:
<br>
<---------cut here-------------------><br>
style "defaultfont"<br>
{<br>
 font_name = "Arial 8"<br>
}<br>
widget_class "*" style "defaultfont"<br>
<---------cut here------------------->
<br>
pgAdmin III V1.1 and up solves this by resizing the dialogues according to the font in use.
In addition, you may select you preferred application font in the options dialogue.
[RE]
</p><br>
<H3><A NAME="FontProblem2">Font problem: SQL shows weird
characters</A></H3>
<p>
On my system, the reengineered SQL windows shows weird characters,
while it should show non-Latin characters.
</p><p>
By default, pgAdmin III uses a fixed pitch font, to show nicely
formatted reengineered SQL commands. This may lead to weird characters
if these are not supported by the fixed font codeset.<br>
On the Query tab of the  Options dialogue, you may select your preferred
font to have a correct display.
[AP]
</p><br>
<H3><A Name="gtk-qt">Crash on Linux: Qpixmap: Invalid pixmap parameters</A></H3>
<p>
When running on a machine with gtk-qt-engine installed, pgAdmin III will crash with a 
segmentation fault. A console will print "QPixmap: Invalid pixmap parameters".
<p></p>
This is caused by a broken gtk-qt-engine; not only pgAdmin III suffers from this.
<p></p>
To fix, remove the broken gtk-qt-engine or install a fixed version if available.
</p><br>
<H3><A Name="ConnDrop">Connection to database dropped</A></H3>
<p>
I'm connecting to the database server via a firewall. After some minutes of inactivity, the 
connection to the database is dropped. Some admins report that bogus backend processes 
remain that are never terminated.
</p><p>
Unfortunately some network administrators or default firewall settings extend functions 
meant for external web server access to cover
internal database traffic too. After some minutes of inactivity, the TCP/IP connection
is interrupted without notice to both sides of the connection. As a result, the backend 
doesn't know that there's no connection to the client (in this case: pgAdmin III, but any
other PostgreSQL client would be affected in the same way) any more, 
but thinks it's just idle, and will continue waiting for the next query that never arrives.
<BR>
The PostgreSQL interface uses the TCP/IP protocol stack, that by definition should 
provide a reliable connection between the two end points of the connection. If interrupted,
the protocol stack would notice this and notify the interface. In contrast, a firewall configured
to interrupt by not forwarding any packet belonging to the connection after some arbitrary
timeout, violates basic TCP/IP principles.
<BR>While this might be perfectly reasonable for browser connections to a web servers that are
aware of possible non-detectable interruptions, this is not acceptable for database connections
carrying sensitive data. Unfortunately, many network administrators don't understand 
the vital difference, others can't change the firewall configuration for some 
hardware/software/policy restricting reasons.
</p></p>
As the officially required solution, ask your network administrator to vastly increase or 
even better disable TCP/IP connection watchdog timeouts on the PostgreSQL port (usually 5432)
to restore RFC compliant protocol behaviour of the firewall.
<BR>
If there's absolutely no way to accomplish this, you could use a SSH tunnel for PostgreSQL traffic. 
SSH can be configured to keep the channel open at all times, so that database traffic can be passed
even after a prolonged period of inactivity. For information how to configure this, ask your 
SSH package's documentation for "tunneling".
[AP]
</p><br>
<H3><A Name="EncodingProblem">Encoding Problem: My data is not shown</A></H3>
<p>Data that includes non-ascii characters (character code > 0x7f) will not be shown.
</p><p>
pgAdmin III 1.0.0 uses the client_encoding set to UNICODE. The server will automatically convert 
all data from the encoding format stored in the database to UNICODE. If the server is not able
to convert the data, it will suppress this. A common problem is using the SQL_ASCII server side
encoding, but storing non-ascii data in it. If you're using a client_encoding set to SQL_ASCII,
you won't notice a problem because the server doesn't convert the data, but when using a different
client encoding the server starts to convert, and fails.<br>
Later versions of pgAdmin III (1.0.1 and up) will use SQL_ASCII client encoding, if it detects a server encoding 
of SQL_ASCII. If a different encoding is present, UNICODE is used.
[AP]
</p>
</body>
</html>

