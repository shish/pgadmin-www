<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Development - Development team");
$PAGE_CONTENT = '

<h1>' . _("Development team") . '</h1>

<p>' . _("Although anyone is welcome to contribute to pgAdmin, the project is managed and run by the Development Team. The document below (available only in English) outlines the structure of the team and how it operates.") . '</p>

<h3>Version 2.0, 25 July 2007</h3>

<ol>
  <li>Purpose<br />&nbsp;<br />
  The pgAdmin Development Team exists for 2 reasons:<br />&nbsp;<br />

  <ul>
    <li>To manage and maintain the pgAdmin Project.
    <li>To ensure that pgAdmin remains freely available to anyone that wants it.
  </ul><br />&nbsp;</li>
    
  <li>Structure<br />&nbsp;<br />
    The foundation consists of the Project Leader and Members.<br />&nbsp;<br />
    <ul>
      <li>Project Leader: The Project Leader is Dave Page, founder and primary 
          developer of the software.
      <li>Members: Members can be any contributor to the project who accepts an
           invitation from the existing development team.
    </ul><br />&nbsp;</li>

  <li>Division of Responsibilities<br />&nbsp;<br />
    Any major decision regarding the Project must be voted on by the Development 
    Team. Any vote will be made via email through the relevant mailling list. 
    Responses not received within 2 weeks will be discounted from the vote. In 
    the case of a hung vote, the Project Leader shall cast the deciding vote.
    <br />&nbsp;</li>
  <li>People<br />&nbsp;<br />
    The pgAdmin Development Team includes the following people:<br />&nbsp;<br />
    <ul>
      <li><a href="mailto:dpage@postgresql.org">Dave Page</a> (Project Leader): Project founder & primary developer.<br />&nbsp;</li>
      <li><a href="mailto:z-saito@guitar.ocn.ne.jp">Hiroshi Saito</a>: Produced a Japanese port of pgAdmin II, and countless patches for pgAdmin III.</li>
      <li><a href="mailto:fmonkey@fmonkey.net">Adam H. Pendleton</a>: Developed and maintains the build system, and helps with various porting issues.</li>
      <li><a href="mailto:blacknoz@club-internet.fr">Rapha&#235;l Enrici</a>: Maintains the Debian port, and helps with numerous other issues.</li>
      <li><a href="mailto:guillaume@lelarge.info">Guillaume Lelarge</a>: Manages the pgAdmin application and website translations, and has added a number of enhancements to pgAdmin.</li>
      <li><a href="mailto:brandstetter@falter.at">Erwin Brandstetter</a>: Spends significant amounts of time testing new releases and helping us track down bugs and behavioural issues</li>.
    </ul>
    <br />&nbsp;</li>
    The following people no longer work on the project, but we remain grateful for their past contributions:<br />&nbsp;<br />
    <ul>
      <li><a href="mailto:myeatman@vale-housing.co.uk">Mark Yeatman</a>: Works on controls and consults on UI design.</li>
      <li><a href="mailto:frank_lupo@email.it">Frank Lupo</a>: Has made countless improvements to the pgAdmin II code from minor bug fixes to major enhancements.</li>
      <li><a href="mailto:jm@poure.com">Jean-Michel Pour&#233;</a>: Managed translations & the web site.</li>
      <li><a href="mailto:pgadmin@pse-consulting.de">Andreas Pflug</a>: Wrote vast amounts of pgAdmin III code and is responsible for much of its design.</li>
    </ul>
  <br />&nbsp;</li>
</ol>

';

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
