<?php 

include $_SERVER['DOCUMENT_ROOT'] . "/include/page.php"; 

$PAGE_TITLE = _("pgAdmin III: Development - Development team");
$PAGE_CONTENT = '

<h1>' . _("Development team") . '</h1>

<p>' . _("Although anyone is welcome to contribute to pgAdmin, the project is managed and run by the Development Team. The document below (available only in English) outlines the structure of the team and how it operates.") . '</p>

<h3>Version 1.3, 15 July 2003</h3>

<ol>
  <li>Purpose<br />&nbsp;<br />
  The pgAdmin Development Team exists for 2 reasons:<br />&nbsp;<br />

  <ul>
    <li>To manage and maintain the pgAdmin Project
    <li>To ensure that pgAdmin remains freely available to anyone that wants it, but to prevent non-standard distribution or rebadging by hostile or predatory commercial companies.
  </ul><br />&nbsp;</li>
    
  <li>Structure<br />&nbsp;<br />
    The foundation consists of the Project Leader, core developers and members.<br />&nbsp;<br />
    <ul>
      <li>Project Leader: The Project Leader is Dave Page, founder and primary developer of the software. The Project Leader is also considered a Core Developer.
      <li>Core Developers: The Core Developers are Members of the Team that in the opinion of the Project Leader have made significant contributions to the Project.
      <li>Members: Members can be any contributor to the project who accepts an invitation from the Core Developers.
    </ul><br />&nbsp;</li>

  <li>Division of Responsibilities<br />&nbsp;<br />
    Any major decision regarding the Project must be voted on by the Core Developers. This would include, but is not limited to the granting of permission to a Commercial Company to rebadge or redistribute the Project or any part thereof in a non-standard form. Any vote will be made via email through the relevant mailling list. Responses not received within 2 weeks will be discounted from the vote. In the case of a hung vote, the Project Leader shall cast the deciding vote. Members of the Development Team have no voting right. Their membership is granted as recognition of their work.
    <br />&nbsp;</li>
  <li>People<br />&nbsp;<br />
    The pgAdmin Development Team includes the following people:<br />&nbsp;<br />
    <ul>
      <li><a href="mailto:dpage@vale-housing.co.uk">Dave Page</a> (Project Leader): Project founder & primary developer.<br />&nbsp;</li>

      <li><a href="mailto:jm@poure.com">Jean-Michel Pour&#233;</a> (Core Developer): translations & web site management.</li>
      <li><a href="mailto:myeatman@vale-housing.co.uk">Mark Yeatman</a> (Core Developer): Works on controls and consults on UI design.</li>
      <li><a href="mailto:pgadmin@pse-consulting.de">Andreas Pflug</a> (Core Developer): Has written vast amounts of pgAdmin III code and is responsible for much of its design.</li>
      <li><a href="mailto:frank_lupo@email.it">Frank Lupo</a> (Core Developer): Has made countless improvements to the pgAdmin II code from minor bug fixes to major enhancements.<br />&nbsp;</li>

      <li><a href="mailto:saito@inetrt.skcapi.co.jp">Hiroshi Saito</a> (Member): Produced a Japanese port of pgAdmin II, and countless patches for pgAdmin III.</li>
      <li><a href="mailto:fmonkey@fmonkey.net">Adam H. Pendleton</a> (Member): Developed and maintains the build system, and helps with various porting issues.</li>
      <li><a href="mailto:blacknoz@club-internet.fr">Rapha&#235;l Enrici</a> (Member): Maintains the Debian port, and helps with numerous other issues.</li>
    </ul>
  <br />&nbsp;</li>
</ol>

';

// Display the page
www_page($PAGE_TITLE, $PAGE_CONTENT);

?>
