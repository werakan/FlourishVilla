<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<?php



include('connect.php');


$date = date("Y-m-d H:i:s");

$cus_id = $_GET['cus_id'];
$fname = $_POST['fname'];
echo $fname;
$lname = $_POST['lname'];
echo $lname;
$cus_address = $_POST['address'];

$cus_citizen = $_POST['citizen'];

$cus_gender = $_POST['gender'];

$cus_agree = $_POST['agree'];

$cus_username = $_POST['username'];

$cus_password = $_POST['password'];

$cus_email = $_POST['email'];


$sqlstr = "UPDATE customer SET cus_fname='$fname',cus_lname='$lname',cus_address='$cus_address',cus_citizen='$cus_citizen',cus_gender='$cus_gender'
,cus_rental_agreement='$cus_agree' ,cus_username='$cus_username',cus_password='$cus_password',cus_email='$cus_email' WHERE cus_id = $cus_id " ;



$objQuery = mysql_query($sqlstr);


if($objQuery)
{
	echo "Save Done.";
}
else
{
	echo "Error:".$objQuery;
}
?>
</body>
</html>