<!DOCTYPE HTML>
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
   <form action="../controller/entranceLogin-a.php" method="POST">
       <input type="text" placeholder="login" name='login'>
       <input type="password" placeholder="password" name='psw'>
       <input type="submit" value="Submit">
   </form>
   <?php phpinfo()?>
  </body>
</html>