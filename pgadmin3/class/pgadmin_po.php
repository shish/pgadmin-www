<?php
//
// Copyright pgAdmin Team 2003
// Released under the BSD licence
//

class po_status {
	var $_svnrepo;
	var $_webroot;
	var $_content = array();
	var $_size = 0;
  var $_error;

  function _cache_save($_filename) {
    reset ($this->_content);
    $_serialize = serialize($this->_content);

    if (file_exists($_filename.'.new')) {
			exec ("rm -f $_filename.new");
    }

    if (!$_handle = fopen($_filename.'.new', 'wb')) {
        print "Cannot open file ($_filename)";
        exit;
    }

    if (!fwrite($_handle, $_serialize)) {
        print "Cannot write to file ($_filename)";
        exit;
    }
    fclose($_handle);

    if (file_exists($_filename.'.new')) {
      exec ("rm -f $_filename");
      if (copy($_filename.'.new', $_filename)) {
      	exec ("rm -f $_filename.new");
      }
    }
  }

  function _cache_load($_filename) {
    if (!$_handle = fopen($_filename, 'rb')) {
        print "Cannot open file ($_filename)";
        exit;
    }

    $_serialize = fread ($_handle, filesize ($_filename));
    fclose ($_handle);

    $this->_content = array();
    $this->_content = unserialize($_serialize);
    reset ($this->_content);
    $this->_size = count ($this->_content['locale']);
  }

  function setWebRoot ($_webroot) {
		$this->_webroot = $_webroot;
  }

  function setSvnRoot ($_svnrepo) {
    if (file_exists($_svnrepo."/.svn/format")) {
	$this->_svnrepo = $_svnrepo;
    } else {
    	$this->_error = "Error: $_svnrepo is not a Subversion repository.";
    }
  }

  function getLanguageTemplate() {
    return "../" .str_replace ($this->_webroot ."/", "", $this->_svnrepo) . "/pgadmin3.pot";
  }
  
  function getLanguageTotal() {
    return $this->_content['po_total'][0];
  }

  function getNbLanguages () {
		return $this->_size;
  }


  function addLanguage ($_locale, $_language, $_translator_name, $_translator_email, $_po_name, $_po_path, $_pot_name, $_pot_path) {
    $this->_content['locale'][$this->_size]    = $_locale;
    $this->_content['language'][$this->_size]  = $_language;
    $this->_content['translator_name'][$this->_size]= $_translator_name;
    $this->_content['translator_email'][$this->_size]= $_translator_email;

    $this->_content['pot_name'][$this->_size]   = "unused";     //$_pot_name;
    $this->_content['pot_path'][$this->_size]  = "unused";      //$_pot_path;

    $_pot_stat = array();
    $_pot_stat = $this->getStatistics ($this->_svnrepo . "/pgadmin3.pot");
    $this->_content['pot_total'][$this->_size] = $_pot_stat['total'];

    $this->_content['po_name'][$this->_size]   = "unused";      //$_po_name;
    $this->_content['po_path'][$this->_size]   = "unused";      // $_po_path;

    $_po_stat = array();
    $_po_stat = $this->getStatistics ($this->_svnrepo . "/i18n/" . $_locale . "/pgadmin3.po");

    $this->_content['po_total'][$this->_size]        = $_po_stat['total'];

    $this->_content['po_translated'][$this->_size]   = $_po_stat['translated'];
    $this->_content['po_untranslated'][$this->_size] = $_po_stat['untranslated'] + $_po_stat['fuzzy'];

    $this->_content['po_status'][$this->_size]       = $_po_stat['status'];

    $this->_size++;
  }

  function sortBy($_sort_by, $_sort_order) {
  	switch ($_sort_by) {
    	case "name":
        $this->sortByName($_sort_order);
        break;

     	case "translated":
        $this->sortByTranslated($_sort_order);
        break;

      case "untranslated":
        $this->sortByUntranslated($_sort_order);
        break;

      case "locale":
				$this->sortByLocale($_sort_order);
        break;

      case "language":
				$this->sortByLanguage($_sort_order);
        break;

      case "status":
				$this->sortByStatus($_sort_order);
        break;

      default:
       $this->sortByLocale($_sort_order);
		}
  }

  function sortByLocale($_sort_order) {
    array_multisort (
        $this->_content['locale'], $_sort_order, SORT_STRING,
        $this->_content['language'],
        $this->_content['translator_name'],
        $this->_content['translator_email'],
        $this->_content['pot_name'],
        $this->_content['pot_path'],
        $this->_content['pot_total'],
        $this->_content['po_name'],
        $this->_content['po_path'],
        $this->_content['po_total'],
        $this->_content['po_translated'],
        $this->_content['po_untranslated'],
        $this->_content['po_status']
    );
  }

  function sortByLanguage($_sort_order) {
    array_multisort (
        $this->_content['language'], $_sort_order, SORT_STRING,
        $this->_content['locale'],
        $this->_content['translator_name'],
        $this->_content['translator_email'],
        $this->_content['pot_name'],
        $this->_content['pot_path'],
        $this->_content['pot_total'],
        $this->_content['po_name'],
        $this->_content['po_path'],
        $this->_content['po_total'],
        $this->_content['po_translated'],
        $this->_content['po_untranslated'],
        $this->_content['po_status']
    );
  }

  function sortByName($_sort_order) {
    array_multisort (
        $this->_content['translator_name'], $_sort_order, SORT_STRING,
    	$this->_content['locale'],
        $this->_content['language'],
        $this->_content['translator_email'],
        $this->_content['pot_name'],
        $this->_content['pot_path'],
        $this->_content['pot_total'],
        $this->_content['po_name'],
        $this->_content['po_path'],
        $this->_content['po_total'],
        $this->_content['po_translated'],
        $this->_content['po_untranslated'],
        $this->_content['po_status']
    );
  }

  function sortByTranslated($_sort_order) {
    array_multisort (
        $this->_content['po_translated'], $_sort_order, SORT_NUMERIC,
        $this->_content['locale'],
        $this->_content['language'],
        $this->_content['translator_name'],
        $this->_content['translator_email'],
        $this->_content['pot_name'],
        $this->_content['pot_path'],
        $this->_content['pot_total'],
        $this->_content['po_name'],
        $this->_content['po_path'],
        $this->_content['po_total'],
        $this->_content['po_untranslated'],
	$this->_content['po_status']
    );
  }

  function sortByUntranslated($_sort_order) {
    array_multisort (
    	$this->_content['po_untranslated'], $_sort_order, SORT_NUMERIC,
    	$this->_content['locale'],
        $this->_content['language'],
        $this->_content['translator_name'],
        $this->_content['translator_email'],
        $this->_content['pot_name'],
        $this->_content['pot_path'],
        $this->_content['pot_total'],
        $this->_content['po_name'],
        $this->_content['po_path'],
        $this->_content['po_total'],
        $this->_content['po_translated'],
        $this->_content['po_status']
    );
  }

  function sortByStatus($_sort_order) {
    array_multisort (
        $this->_content['po_status'], $_sort_order, SORT_NUMERIC,
    	$this->_content['locale'],
        $this->_content['language'],
        $this->_content['translator_name'],
        $this->_content['translator_email'],
        $this->_content['pot_name'],
        $this->_content['pot_path'],
        $this->_content['pot_total'],
        $this->_content['po_name'],
        $this->_content['po_path'],
        $this->_content['po_total'],
        $this->_content['po_translated'],
        $this->_content['po_untranslated']
    );
  }

  function display ($_object) {
    reset ($this->_content);
    $_result = "<table border=1 cellspacing=0 cellpadding=5>";
    $_result = $_result . "<tr bgcolor=lightgray >";
    $_result = $_result . "<th><font color=black> <a href='?".$_object."_poSortBy=locale'>". _("Locale") ."</a> </font></th>";
    $_result = $_result . "<th><font color=black> <a href='?".$_object."_poSortBy=language'>". _("Language") ."</a> </font></th>";
    $_result = $_result . "<th><font color=black> <a href='?".$_object."_poSortBy=name'>". _("Author") ."<br>". _("Maintainer")."</a></td> </font></th>";
    $_result = $_result . "<th><font color=black> ". _("Download Translation") ."</font></th>";
    $_result = $_result . "<th><font color=black> ". _("Download Source") ."</font></th>";
    $_result = $_result . "<th><font color=black> ". _("Total") ."</font></th>";
    $_result = $_result . "<th><font color=black> <a href='?".$_object."_poSortBy=translated'>". _("Translated")."</a> </font></th>";
    $_result = $_result . "<th><font color=black> <a href='?".$_object."_poSortBy=untranslated'>". _("Untranslated")."<br>". _("Fuzzy")."</a> </font></th>";
    $_result = $_result . "<th><font color=black> <a href='?".$_object."_poSortBy=status'>". _("Status")."</a> </font></th></tr>";

    for ($_count = 0; $_count < $this->_size; $_count++) {

    	//
      // Display each line in a different colour
      //
    	if (floor($_count/2) == ($_count/2)) {
				$_colour = "beige";
      } else {
				$_colour = "white";
      }

      $_pot_total = $this->_content['pot_total'][$_count];

      $_po_total      = $this->_content['po_total'][$_count];
      $_po_untranslated = $this->_content['po_untranslated'][$_count];
      $_po_translated = $this->_content['po_translated'][$_count];
      $_po_status     = $this->_content['po_status'][$_count]."%";

      $_locale           = $this->_content['locale'][$_count];
      $_language         = $this->_content['language'][$_count];
      $_translator_email = $this->_content['translator_email'][$_count];
      $_translator_name  = $this->_content['translator_name'][$_count];

      $_mo_name  = $_locale . "/pgadmin3.mo";
      $_po_name  = $_locale . "/pgadmin3.po";
      $_mo_path = "../" .str_replace ($this->_webroot ."/", "", $this->_svnrepo) . "/i18n/" . $_locale . "/pgadmin3.mo";
      $_po_path = "../" .str_replace ($this->_webroot ."/", "", $this->_svnrepo) . "/i18n/" . $_locale . "/pgadmin3.po";

      $_result = $_result . "<tr bgcolor=$_colour>" .
      "<td>$_locale</td>" .
      "<td>$_language</td>" .
      "<td><a href='mailto:$_translator_email'>$_translator_name</a></td>" .
      "<td><a href='$_mo_path'>$_mo_name</a></td>" .
      "<td><a href='$_po_path'>$_po_name</a></td>" .
      "<td>" .$_po_total ."</td>" .
      "<td>". $_po_translated ."</td>" .
      "<td>". $_po_untranslated  ."</td>" .
      "<td>". $_po_status ."</td>" .
      "</tr>";
    }
    $_result = $_result . "</table>" ;
    echo $_result;
  }

  function getStatistics ($_po_file_path) {
  	$_pathinfo = pathinfo($_po_file_path);
    $_dir      = $_pathinfo["dirname"];

    $_command = "cd $_dir; export LANGUAGE=en_US; /usr/bin/msgfmt --statistics $_po_file_path 2>&1";
    $_command_result = shell_exec ($_command);

    // echo $_command_result."<br>";

		$_po_stat = array();
    $_po_stat = explode(",", $_command_result);
		$_size = count ($_po_stat);

    $_result = array();

    if ($_size>0) {
    	for ($_count=0; $_count < $_size; $_count++) {
        reset($_po_stat);
        if (preg_match ("/(\d+) translated/", trim($_po_stat[$_count]), $_match)) {
					$_result['translated'] = (int) $_match[1];
        }

        if (preg_match ("/(\d+) untranslated/", $_po_stat[$_count], $_match)) {
					$_result['untranslated'] = (int) $_match[1];
        }

        if (preg_match ("/(\d+) fuzzy/", trim($_po_stat[$_count]), $_match)) {
					$_result['fuzzy'] = (int) $_match[1];
        }
				//echo $_count.trim($_po_stat[$_count])."FIN<br>";
			}

			if (!$_result['translated']) {
				$_result['translated']=0;
      }

      if (!$_result['untranslated']) {
				$_result['untranslated']=0;
      }

      if (!$_result['fuzzy']) {
				$_result['fuzzy']=0;
      }

      $_result['total'] = $_result['translated']+$_result['untranslated']+$_result['fuzzy'];

      if ($_result['total'] > 0) {
      	$_result['status'] =  round ($_result['translated']/$_result['total'], 2) * 100;
      } else {
				$_result['status'] = 0;
      }

      if (($_result['status'] == 100) && ($_result['total'] != $_result['translated'])) {
				$_result['status'] = 99;
      }


      return $_result;
    } else {
    	$this_error = "Error: no statistics available for $_po_file_path";
      return false;
		}
  }
}



