<?php
  require "tpl/include.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml"  lang='<?php echo $_SESSION['pgadmin']['locale']?>' xml:lang='<?php echo $_SESSION['pgadmin']['locale']?>'>
  <head>
		<?php require_once "tpl/head.php"; ?>
    <title>pgAdmin screenshots</title>
  </head>

 <body>
		<?php
      require_once "tpl/menu.php";
      require_once "cnt/cnt_support.php";
      require_once "tpl/footer.php";
    ?>
  </body>
</html>
