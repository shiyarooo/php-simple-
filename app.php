<Html>
<Head>
<Title> Hyperlinks to send information </ title>
</ Head>
<Meta http-equiv = "Content-Type" content = "text / html; charset = UTF-8">
<Body>
<?Php
$first_name=$_GET[first_name];
$last_name =$_GET[last_name];
$home_phone = $_GET[home_phone];
$email = $_GET[email];
$vuz_name = $_GET [vuz_name];
$fac_name = $_GET[fac_name];
$kurs = $_GET[kurs];
$hobby = $_GET[hobby];
echo "<p> <a href=\"user.php? first_name = $first_name&last_name=$last_name &home_phone$home_phone&email = $email\">";
echo "Contacts </a> </ p>";
echo "<p> <a href =\"user1.php? vuz_name=$vuz_name&fac_name=$fac_name&kurs=$kurs \"> ";
echo "Information about your school </a> </ p>";
echo "<p> <a href=\"user2.php?hobby=$hobby\">";
echo "Your admiration </a> </ p>";
?>
</ Body>
</ Html>
