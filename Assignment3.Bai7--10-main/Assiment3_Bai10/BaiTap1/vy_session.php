<?php
session_start();
unset($_SESSION['name']);// vy session co ten la 'name'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
echo "Chao ban ".$_SESSION['name']." co tuoi la:".$_SESSION['age'];
?>
</body>
</html>
