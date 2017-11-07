<link href="gg.css" rel="stylesheet" type="text/css" media="all" />
<body style="background: url(<?php echo 'bg2.GIF' ?>);">
<?php

include("connect.php");

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$birthday=$_POST['birthday'];
$email=$_POST['email'];
$country=$_POST['country'];

$result="INSERT INTO shiyar.shiyaro(first_name, last_name, birthday, email, country) VALUES ('$first_name','$last_name','$birthday','$email','$country')";
mysql_query($result);

echo "<h1><center><article><acronym><br>welcome to you in shiyar online shopping</big></center><br>
</h1></acronym></article> ";

mysql_close($db);
/*if (!$result){ echo "NO insert into DB";
exit();}
if ($result) { echo "Inserted";
exit(); }*/

?>
