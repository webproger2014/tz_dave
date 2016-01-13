s<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>TZ</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
	<script  src="script/jquery-2.1.4" type="text/javascript"></script>
	<script  src="script/getXmlHttpRequest.js" type="text/javascript"></script>
	<script  src="script/ajaxClaim.js" type="text/javascript"></script>
  </head>
  <body>
  <?php
      require_once $_SERVER['DOCUMENT_ROOT'].'tz/controller/checkUser-a.php'; //подключаем
  ?>
   <div id='error'></div>
   <textarea></textarea><br>
   <button onclick="setComments()">Запостить</button>
  <?php
         require_once $_SERVER['DOCUMENT_ROOT'].'tz/controller/lvlUser.php';
	     
   ?>
   psw and login === admin
  </body>
</html>