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
</body>
</html>

