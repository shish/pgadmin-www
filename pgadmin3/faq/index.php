<html>
<head>
<title>pgAdmin III Online FAQ</title>
</head>

<body>
<p>This is the FAQ for the pgAdmin III tool V1.0.</p>
<p>
<A HREF="#EncodingProblem">Encoding Problem: My data is not shown</A><BR>
<A HREF="#FontProblem2">Font problem: SQL shows weird characters</A><BR>
<A HREF="#UserPrivileges">User privileges</A><BR>
<A HREF="#UnsuppProtocol">Server log: unsupported protocol</A><BR>
<A HREF="#ConstraintTrigger">Foreign key constraints not shown</A><BR>
<A HREF="#Win9x">Win9x problems</A><BR>
<A HREF="#HangWin9x">Query tool hangs on Win9x</A><BR>
<A HREF="#ColTrunc">Query tool columns truncated</A><BR>
</B>
</p>

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
<br>[AP]
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
The forthcoming V1.1 will solve this by resizing the dialogs according to the font in use.
<br>[RE]
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
On the Query tab of the  Options dialog, you may select your preferred
font to have a correct display.
<br>[AP]
</p><br>
<H3><A Name="UserPrivileges">User Privileges</A></H3>
<p>
I want to grant rights on an PostgreSQL object to an individual user,
but on the security page of that object only groups are shown.
</p><p>
It is recommended to organize users into groups, and grant
the rights to these instead of granting rights to individual users.
<br> If you need this nevertheless, you can switch on the option "Show users
for privileges" on the General tab of the Options dialog.
<br>[AP]
</p><br>
<H3><A Name="UnsuppProtocol">Server log: unsupported protocol</A></H3>
<p>
Every time I  connect to my PostgreSQL 7.3.x server with pgAdmin III,
I get the following message in the serverlog:<br>
   FATAL: unsupported frontend protocol
</p><p>
Binary distributions of pgAdmin III are linked against the newest
PostgreSQL libpq 7.4 library, which implements a new frontend protocol. It
will try to connect to the backend using this protocol first, and if that fails it
uses the older one.<br>
This behaviour is by design, and there's no problem to be expected
from this.
<br> [AP]
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
<br> [AP]
</p><br>
<H3><A Name="Win9x">Win9x problems</A></H3>
<p>
We're providing a stripped down pgAdmin3 version without unicode support and limited functionality.
Still, Win9x imposes some other problems too. Consider using a true 32bit operating system 
(Linux, W2K, XP) if these constraints hit you.<BR>
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
In V1.1, we provide the function "execute to file", which has no column restrictions. [AP]
</p>
</body>
</html>

