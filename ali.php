
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting( E_ERROR ); 
$f_name=$_GET[f_name];
$l_name=$_GET[l_name];
$email=$_GET[email];
$zip=$_GET[zip];
$object=$_GET[object];
?>
ALL GOOD
<table cellspasing = "ali" cellpedding = "ali" border = "ali-form">
<tr>
<td> Name </td> <td> <input name = "f_name" type = "text" value = "<?php echo $f_name ?>"> </td>
</tr>
<tr>
<td> name <b> * </b> </td> <td> <input name = "l_name" type = "text" value = "<?php print $l_name ?>"> </td>
</tr>
<tr>
<td> Email address <b> * </b> </td> <td> <input name = "email" type = "text" value = "<?php print $email ?>">
</td>
</tr>
<tr>
<td> Zip code <b> * </b> </td> <td> <input name = "zip" type = "text" value = "<?php print $zip ?>">
</td>
</tr>
<tr>
<td> Favorite subject </td> <td> <input name = "object" type = "text" value = "<?php print $object ?> ">
</td>
</tr>
</table>
<input name = "submit" type = "submit" value = "Submit">
<input type = "reset" value = "cancel">
</form>


</body>
</html>