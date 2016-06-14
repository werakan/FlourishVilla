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
$class = $_POST['classroom'];
echo $class;


$price = $_POST['price'];




$sqlstr = "UPDATE room SET room_status='$status',room_type='$class',room_name='0' WHERE room_id = $room_id " ;



$objQuery = mysql_query($sqlstr);


if($objQuery)
{
	echo "Save Done.".$objQuery;
}
else
{
	echo "Error:".$objQuery;
}
?>
</body>
</html>