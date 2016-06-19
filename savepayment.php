<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<?php



include('connect.php');


$room_id = $_GET['room_id'];
echo $room_id;
$status = $_POST['status'];
echo $status;


$price = $_POST['price'];




$sqlstr = "UPDATE room SET room_bill='$status' WHERE room_id = $room_id " ;



$objQuery = mysql_query($sqlstr);


 if($objQuery)
{ 
	header("location: http://www.allprojectz.com/max/payment_admin.php");
	 echo "Save Done.".$objQuery;
}
else
{
	echo "Error:".$objQuery;
}
?>
</body>
</html>