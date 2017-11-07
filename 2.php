<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEST</title>
</head>

<body  bgcolor="#999999">

<?php

$string= "<front> bgcolor= #FF0000> <b>
Mathematical example</b> </font>";
$a=$_GET[a];
$b=$_GET[b];
$sum=$a+$b;
$riz=$a-$b;
$dob=$a*$b;
$dil=$a/$b;
echo "$string <br> <br>";
echo "a=$a, b=$b <br> <br>";
echo "<b>Total</b>$sum<br>";
echo "<b>difference </b> $riz<br>";
echo "<b>The product</b>$dob<br>";
echo "<b>Share</b>$dil<br>";

?>
</body>
</html>