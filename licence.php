<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin: Licence");
$PAGE_CONTENT = '

<h1>' . _("Licence") . '</h1>

<p><i>' . sprintf(_("Last update: %s"), "2009-03-26") . '</i></p>

<p>pgAdmin v1.10 and later versions are released under the <a href="#postgresql">PostgreSQL 
licence</a>. Earlier versions are released under the <a href="#artistic">Artistic 
licence</a>.</p>

<h2><a name="postgresql">The PostgreSQL Licence</a></h2>

<p>pgAdmin</p>

<p>Copyright (c) 2002 - 2009, The pgAdmin Development Team</p>

<p>Permission to use, copy, modify, and distribute this software and its
documentation for any purpose, without fee, and without a written agreement is
hereby granted, provided that the above copyright notice and this paragraph and
the following two paragraphs appear in all copies.</p>

<p>IN NO EVENT SHALL THE PGADMIN DEVELOPMENT TEAM BE LIABLE TO ANY PARTY FOR
DIRECT, INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES, INCLUDING LOST
PROFITS, ARISING OUT OF THE USE OF THIS SOFTWARE AND ITS DOCUMENTATION, EVEN IF
THE PGADMIN DEVELOPMENT TEAM HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</p>

<p>THE PGADMIN DEVELOPMENT TEAM SPECIFICALLY DISCLAIMS ANY WARRANTIES, INCLUDING,
BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A
PARTICULAR PURPOSE. THE SOFTWARE PROVIDED HEREUNDER IS ON AN "AS IS" BASIS, AND
THE PGADMIN DEVELOPMENT TEAM HAS NO OBLIGATIONS TO PROVIDE MAINTENANCE, SUPPORT,
UPDATES, ENHANCEMENTS, OR MODIFICATIONS.</p>

<h2><a name="artistic">The Artistic Licence</a></h2>

<p>BY INSTALLING OR DISTRIBUTING PGADMIN AND RELATED SOFTWARE, YOU AGREE WITH
THE FOLLOWING DISCLAIMER:</p>

<p>PGADMIN AND RELATED SOFTWARE IS PROVIDED WITHOUT GUARANTEE OR WARRANTY OF
ANY KIND. TO THE FULLEST EXTENT ALLOWED BY LAW YOU AGREE THAT THE PGADMIN
DEVELOPMENT TEAM MEMBERS, CONTRIBUTERS OR DISTRIBUTORS OF THE SOFTWARE CANNOT
AND WILL NOT BE HELD LIABLE FOR ANY DIRECT OR INDIRECT DAMAGE OR LOSSES CAUSED
WHOLLY OR IN PART BY THE SOFTWARE.</p>

<p>IN COUNTRIES WHERE THE ABSENCE OF LIABILITY MAY NOT EXIST OR BE RESTRICTED
BY LAW, PGADMIN DEVELOPMENT TEAM MEMBERS, CONTRIBUTORS AND DISTRIBUTORS
LIABILITY SHALL BE LIMITED TO ONE EURO.</p>

<h3>The Artistic License</h3>

<h4>Preamble</h4>

<p>The intent of this document is to state the conditions under which a Package 
may be copied, such that the Copyright Holder maintains some semblance of 
artistic control over the development of the package, while giving the users 
of the package the right to use and distribute the Package in a more-or-less 
customary fashion, plus the right to make reasonable modifications.</p>

<h4>Definitions:</h4>

<p>"Package" refers to the collection of files distributed by the Copyright 
Holder, and derivatives of that collection of files created through textual 
modification. </p>

<p>"Standard Version" refers to such a Package if it has not been modified, or 
has been modified in accordance with the wishes of the Copyright Holder. </p>

<p>"Copyright Holder" is whoever is named in the copyright or copyrights for the 
package. </p>

<p>"You" is you, if you\'re thinking about copying or distributing this Package.</p>

<p>"Reasonable copying fee" is whatever you can justify on the basis of media 
cost, duplication charges, time of people involved, and so on. (You will not 
be required to justify it to the Copyright Holder, but only to the computing 
community at large as a market that must bear the fee.) </p>

<p>"Freely Available" means that no fee is charged for the item itself, though 
there may be fees involved in handling the item. It also means that recipients
of the item may redistribute it under the same conditions they received it.</p>

<ol> 
<li>You may make and give away verbatim copies of the source form of the 
   Standard Version of this Package without restriction, provided that you 
   duplicate all of the original copyright notices and associated disclaimers.
<br />&nbsp;</li>
<li>You may apply bug fixes, portability fixes and other modifications derived 
   from the Public Domain or from the Copyright Holder. A Package modified in 
   such a way shall still be considered the Standard Version.
<br />&nbsp;</li>
<li>You may otherwise modify your copy of this Package in any way, provided that
   you insert a prominent notice in each changed file stating how and when you
   changed that file, and provided that you do at least ONE of the following:
<br />&nbsp;<br />
   <b>a)</b> place your modifications in the Public Domain or otherwise make them 
      Freely Available, such as by posting said modifications to Usenet or an 
      equivalent medium, or placing the modifications on a major archive site 
      such as ftp.uu.net, or by allowing the Copyright Holder to include your 
      modifications in the Standard Version of the Package.
   <br />&nbsp;<br />
   <b>b)</b> use the modified Package only within your corporation or organization.
   <br />&nbsp;<br />
   <b>c)</b> rename any non-standard executables so the names do not conflict with 
      standard executables, which must also be provided, and provide a separate
      manual page for each non-standard executable that clearly documents how 
      it differs from the Standard Version.
   <br />&nbsp;<br />
   <b>d)</b> make other distribution arrangements with the Copyright Holder.
<br />&nbsp;</li>
<li>You may distribute the programs of this Package in object code or executable
   form, provided that you do at least ONE of the following:
<br />&nbsp;<br />
   <b>a)</b> distribute a Standard Version of the executables and library files, 
      together with instructions (in the manual page or equivalent) on where 
      to get the Standard Version.
   <br />&nbsp;<br />
   <b>b)</b> accompany the distribution with the machine-readable source of the 
      Package with your modifications.
   <br />&nbsp;<br />
   <b>c)</b> accompany any non-standard executables with their corresponding Standard
      Version executables, giving the non-standard executables non-standard 
      names, and clearly documenting the differences in manual pages (or 
      equivalent), together with instructions on where to get the Standard 
      Version.
   <br />&nbsp;<br />
   <b>d)</b> make other distribution arrangements with the Copyright Holder.
<br />&nbsp;</li>
<li>You may charge a reasonable copying fee for any distribution of this 
   Package. You may charge any fee you choose for support of this Package. You
   may not charge a fee for this Package itself. However, you may distribute 
   this Package in aggregate with other (possibly commercial) programs as part 
   of a larger (possibly commercial) software distribution provided that you do
   not advertise this Package as a product of your own.
<br />&nbsp;</li>
<li>The scripts and library files supplied as input to or produced as output 
   from the programs of this Package do not automatically fall under the 
   copyright of this Package, but belong to whomever generated them, and may be
   sold commercially, and may be aggregated with this Package.
<br />&nbsp;</li>
</li>C or perl subroutines supplied by you and linked into this Package shall not
   be considered part of this Package.
<br />&nbsp;</li>
<li>The name of the Copyright Holder may not be used to endorse or promote 
   products derived from this software without specific prior written 
   permission.
<br />&nbsp;</li>
<li>THIS PACKAGE IS PROVIDED "AS IS" AND WITHOUT ANY EXPRESS OR IMPLIED 
   WARRANTIES, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF 
   MERCHANTIBILITY AND FITNESS FOR A PARTICULAR PURPOSE.
<br />&nbsp;</li>
</ol>
<p>The End</p>
'; 

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
