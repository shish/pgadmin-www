<?php
//
// Copyright pgAdmin Team 2003
// Released under the BSD licence
//

	class pgadmin_session {

  function pgadmin_session() {
		$this->start();
  }

  function start() {
		ini_set("session.use_cookies", "1");
    ini_set("session.use_only_cookies", "0");
    ini_set("session.use_trans_sid", "1");
    ini_set("arg_seperator.output", "&amp;");
    session_start();

    $a = explode('&', $_SERVER['QUERY_STRING']);
    $i = 0;
    while ($i < count($a)) {
      $b = split('=', $a[$i]);
      $_var_name = htmlspecialchars(urldecode($b[0]));
			$_var_value = htmlspecialchars(urldecode($b[1]));
      if ($_var_name <> 'PHPSESSID') {
      	$_SESSION ['pgadmin'][$_var_name] = $_var_value;
      }
      $i++;
    }

    if (isset($_POST)) {
    	reset ($_POST);
			foreach ($_POST as $_key => $_value) {
				$_SESSION['pgadmin'][$_key]=$_value;
      }
    }

    if (!isset($_SESSION['pgadmin']['locale'])) {
      $_SESSION['pgadmin']['locale'] = 'en_US';
    }

    $_locale = $_SESSION['pgadmin']['locale'];
    //$_locale = $_SESSION['pgadmin']['locale'].".UTF-8";
    $_domain = 'pgadmin3_website';

    putenv("LANG=$_locale");
    $_ENV['LANG']=$_locale;
		setlocale(LC_ALL, $_locale);
    bind_textdomain_codeset ($_domain,"UTF-8");
    bindtextdomain($_domain, "locale");
		textdomain($_domain);

  }
}

?>
