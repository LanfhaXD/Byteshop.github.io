<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$conn = mysqli_connect("127.0.0.1","root","","project")or die("".mysqli_error());
	mysqli_set_charset($conn,"utf8");
	$date = date("d-m-Y h:i:s");
?>
</body>
</html>