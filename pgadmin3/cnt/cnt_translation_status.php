<?php
//
// Copyright pgAdmin Team 2003
// Released under the BSD licence
//

  require_once "class/pgadmin_po.php";
  $translated = new po_status();
  $pending = new po_status();

  //$translated->setWebRoot("/var/www/html");
  //$translated->setCvsRoot("/var/www/html/cvsroot/pgadmin3");
  //$pending->setWebRoot("/var/www/html");
  //$pending->setCvsRoot("/var/www/html/cvsroot/pgadmin3");

  $translated->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
  $translated->setCvsRoot($_SERVER["DOCUMENT_ROOT"]."/cvsroot/pgadmin3");
  $pending->setWebRoot($_SERVER["DOCUMENT_ROOT"]);
  $pending->setCvsRoot($_SERVER["DOCUMENT_ROOT"]."/cvsroot/pgadmin3");

  $translated->addLanguage ("ar_SA", "Arabic", "Motaz	Abuthiab", "moty66@yahoo.com", "pgadmin3.po","src/ui/ar_SA/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("da_DK", "Danish", "Troels Arvin", "troels@arvin.dk", "pgadmin3.po","src/ui/da_DK/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("de_DE", "German", "Andreas Plug", "pgadmin@pse-consulting.de", "pgadmin3.po", "src/ui/de_DE/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("fa_IR", "Farsi", "Abbas Izad", "abbasizad@hotmail.com", "pgadmin3.po", "src/ui/fa_IR/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("fr_FR", "French", "Jean-Michel Pouré", "jm.poure@freesurf.fr",  "pgadmin3.po","src/ui/fr_FR/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("hr_HR", "Croatian", "Finteh d.o.o.", "finteh@finteh.hr", "pgadmin3.po", "src/ui/hr_HR/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("hu_HU", "Hungarian", "Zoltán Kovács", "kovzol@math.u-szeged.hu", "pgadmin3.po","src/ui/hu_HU/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("id_ID", "Indonesian", "Erwien Samantha Y", "apache@cosinus.sederhana.or.id", "pgadmin3.po", "src/ui/id_ID/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("it_IT", "Italian", "Frank Lupo", "frank_lupo@email.it", "pgadmin3.po", "src/ui/it_IT/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("ja_JP", "Japanese", "斉藤　浩 (Hiroshi	Saito)", "saito@inetrt.skcapi.co.jp", "pgadmin3.po", "src/ui/ja_JP/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("nb_NO", "Norwegian Bokmål", "Brage Førland", "brage@sisyfos.zoo.uib.no", "pgadmin3.po","src/ui/nb_NO/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("pl_PL", "Polish", "Slawomir Sudnik", "slawek@icpnet.pl", "pgadmin3.po", "src/ui/pl_PL/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("pt_BR", "Portuguese-Brazilian", "Ângelo Marcos Rigo", "angelo_rigo@yahoo.com.br", "pgadmin3.po","src/ui/pt_BR/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("ro_RO", "Romanian", "Nagy Karoly", "nagykaroly@expert-software.ro", "pgadmin3.po", "src/ui/ro_RO/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("ru_RU", "Russian", "Serguei Mokhov", "mokhov@cs.concordia.ca", "pgadmin3.po","src/ui/ru_RU/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("tr_TR", "Turkish", "Devrim Gunduz",  "devrim@gunduz.org", "pgadmin3.po", "src/ui/tr_TR/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("zh_CN", "Chinese simplified", "何伟平 (Weiping He)", "laser@zhengmai.com.cn", "pgadmin3.po", "src/ui/zh_CN/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $translated->addLanguage ("zh_TW", "Chinese traditional", "李枝新 (Chih-Hsin Lee)", "chlee@femh.org.tw", "pgadmin3.po", "src/ui/zh_TW/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");

  $pending->addLanguage ("af_ZA", "Afrikaans", "Petri Jooste", "rkwjpj@puknet.puk.ac.za", "pgadmin3.po","src/ui/af_ZA/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $pending->addLanguage ("cs_CZ", "Czech", "Jan Pruner", "jan@pruner.cz", "pgadmin3.po","src/ui/cs_CZ/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $pending->addLanguage ("es_ES", "Spanish", "Karim Mribti", "karim@inlosa.com", "pgadmin3.po","src/ui/es_ES/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $pending->addLanguage ("is_IS", "Icelandic", "Þórhallur Hálfdánarson", "tolli@tol.li", "pgadmin3.po","src/ui/is_IS/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $pending->addLanguage ("sd_IN", "Sindhi", "Tariq	Farooqi", "mahin@linux.net.pk", "pgadmin3.po","src/ui/sd_IN/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $pending->addLanguage ("sv_SE", "Swedish", "Dennis	Björklund", "db@zigo.dhs.org", "pgadmin3.po","src/ui/sv_SE/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $pending->addLanguage ("tl_PH", "Filipino/Tagalog", "Howard Bagcat", "howard@mu.edu.ph", "pgadmin3.po","src/ui/tl_PH/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
  $pending->addLanguage ("ur_PK", "Urdu", "Tariq	Farooqi", "mahin@linux.net.pk", "pgadmin3.po","src/ui/sd_IN/pgadmin3.po", "pgadmin3.pot", "pgadmin3.pot");
?>
