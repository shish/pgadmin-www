<?php
  require "tpl/include.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml" dir='<?php echo $_SESSION['LANG_DIRECTION'] ?>'>
  <head>
		<?php require_once "tpl/head.php"; ?>
    <title>pgAdmin translation</title>
  </head>

 <body>
		<?php
      require_once "tpl/menu.php";
      require_once "cnt/cnt_hall_of_fame.php";
      require_once "tpl/footer.php";
    ?>
  </body>
</html>
