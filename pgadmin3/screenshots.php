<?php
  require "tpl/include.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
		<?php require_once "tpl/head.php"; ?>
    <title>pgAdmin screenshots</title>
  </head>

 <body <?php echo $_SESSION['LANG_DIRECTION'] ?>>
		<?php
      require_once "tpl/menu.php";
      require_once "cnt/cnt_screenshots.php";
      require_once "tpl/footer.php";
    ?>
  </body>
</html>
