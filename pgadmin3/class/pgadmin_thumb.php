<?php
//
// Copyright pgAdmin Team 2003
// Released under the BSD licence
//

class thumb_nav {
	var $_conf = array();
  var $_total;
  var $_separator;

  function thumb_nav() {
  	$this->_url  = $_url;
    $this->_conf = array();
    $this->_total= 0;
  }

  function addPage ($name, $variable, $value) {
  	$this->_total++;
  	$this->_conf[$this->_total]['name']     = $name;
    $this->_conf[$this->_total]['variable'] = $variable;
    $this->_conf[$this->_total]['value']    = $value;
  }

  function setSeparator ($_separator) {
		$this->_separator = $_separator;
  }

  function display ($_url) {
		$_result ="<TABLE align=center width='80%'><TR><TD align=center>";

    //<a href="screenshots.php?page=1">Page 1</a>

	  for ($_count = 1; $_count <= $this->_total; $_count++) {
			$_name     = $this->_conf[$_count]['name'];
    	$_variable = $this->_conf[$_count]['variable'];
      $_value    = $this->_conf[$_count]['value'];

      //$_result = $_result . $colors[$key] = strtoupper($color);
      //     ."?". $variable . "='" . htmlentities(urlencode($value)) ."'";
			$_result = $_result ."<a href=\"" . $_url ."?". $_variable . "='" . htmlentities(urlencode($_value)) ."'\">". $_name . "</a>" ;

      if ($_count < $this->_total) {
				$_result = $_result . $this->_separator ;
      }
		}
    $_result = $_result . "</TD></TR></TABLE>";
    echo $_result;
  }
}

class thumb_image {
    var $_image;
    var $_image_path;
    var $_image_width;
    var $_image_height;

    var $_thumb;
    var $_thumb_width  = 100;
		var $_thumb_height = 50;
    var $_thumb_format = "png";

    var $_error;

		function getImage($_path){
    	if (file_exists($_path)){
        $this->_image_path = $_path;
        $_pathinfo = pathinfo($this->_image_path);
        echo $_pathinfo;
        switch (strtolower($_pathinfo['extension'])){
          case "gif":
            $this->_image = @imagecreatefromgif($this->_image_path);
            break;

          case "jpg":
            $this->_image = @imagecreatefromjpeg($this->_image_path);

            break;

          case "jpeg":
            $this->_image = @imagecreatefromjpeg($this->_image_path);
            break;

          case "png":
            $this->_image = @imagecreatefrompng($this->_image_path);
            break;

          case "wbmp":
            $this->_image = @imagecreatefromwpmb($this->_image_path);
            break;

          default:

            $this->_error = "Error: image type ".strtoupper($_extension)." is not supported.";
            return false;
        }

        if(!$this->_image) {
          $this->_error = "Error: impossible to open image in ".$this->_image_path;
          return false;
        }

        $this->_image_width = imagesx($this->_image);
        $this->_image_height = imagesy($this->_image);
        return true;

      } else {
      	$this->_error = "Error:  image ".$this->_image_path ." does not exist.";
      	return false;
      }
		}

		function setSize($_width, $_height){
			$this->_thumb_width  = $_width;
			$this->_thumb_height = $_height;
		}

    function setFormat($_format){
			$this->_thumb_format = $_format;
		}

		function Display(){
			if(!$this->error) {

      	$this->_thumb = imagecreate($this->_thumb_width,$this->_thumb_height);

        imagecopyresized($this->_thumb, $this->_image,0,0,0,0,$this->_thumb_width,
        $this->_thumb_height, $this->_image_width, $this->_image_height);

        switch (strtolower($this->_thumb_format)){
          case "jpg":
            imagejpeg($this->_thumb);
            break;

          case "jpeg":
            imagejpeg($this->_thumb);
            break;

          case "png":
            imagepng($this->_thumb);
            break;

          case "wbmp":
            imagewbmp($this->_thumb);
            break;

          default :
            HEADER("Content-Type: image/png");
            imagepng($this->_thumb);
				}

        imagedestroy($this->_image);
        imagedestroy($this->_thumb);
      } else {
				return false;
      }
		}
}

?>
