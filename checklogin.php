<?
session_start();

include "connect.php";



$username = $_POST['username'];
$password = $_POST['password'];


echo $sqlstr = "SELECT * FROM customer WHERE cus_username='$username' AND cus_password='$password'";

$query = mysql_query($sqlstr);



$record_no = mysql_num_rows($query);

if($record_no > 0){
	$query2 = mysql_fetch_array($query);
	echo $query2["cus_id"];
	
	$cus_id = $query2["cus_id"];
	$cus_fname = $query2["cus_fname"];
	$_SESSION['id'] = $cus_id;
	$_SESSION['name'] = $cus_fname;
	
	header("Location: ../max/index_admin.php");
} else {
	echo "FAILD";
?>
	<br/>
	<a href="../max/login.php"> BACK </a>

<?php
}


?>

