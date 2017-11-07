<html> <head> <title> Contacts </title>
</head>
<body>

<?
function check_form ($f_name, $l_name, $email, $zip, $object) 
{if (!$l_name ||!$email ||!$zip): 
echo "<h3> error in filling out the form!</h3>";
if (!$l_name) {
echo "<h3> You did not fill the <b> Name </b> </h3>";
}
if (!$email) {
echo "<h3> You have not filled Field <b> Email address </b> </h3>";
}
if (!$zip) {
echo "<h3> You did not fill the <b> Postal Code </b> </h3>";
}
print_form($f_name, $l_name, $email, $zip, $object); 
else:
confirm_form ($f_name, $l_name, $email, $zip, $object);
endif;
}
function confirm_form($f_name, $l_name, $email, $zip, $object) {
?>
<h2> Thanks!Next information was successfully sent
</h2>
<b> Contacts </b>
<?
echo "<br> $f_name $l_name <br> $email <br> ZIP code: $zip <br> favorite item: $object \n";
}

if (!$submit):
?>
<h3> Please enter your information </h3> Fields <b> * </b> required <p>
<?
print_form ( "", "", "", "", ""); else:
check_form ($f_name, $l_name, $email, $zip, $object); endif;
?>
</body>
</html>

</body>
</html>
