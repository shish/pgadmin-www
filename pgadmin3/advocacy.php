<?php
  require "tpl/include.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml"  lang='<?php echo $_SESSION['pgadmin']['locale_lang']?>' xml:lang='<?php echo $_SESSION['pgadmin']['locale_lang']?>'>
  <head>
		<?php require_once "tpl/head.php"; ?>
    <title>pgAdmin advocacy</title>
  </head>

 <body >
  <?php
      require_once "tpl/menu.php";
      require_once "cnt/cnt_advocacy.php";
      require_once "tpl/footer.php";
    ?>
  </body>
</html>
