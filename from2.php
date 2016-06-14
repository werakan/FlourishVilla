<?

include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];


echo $sqlstr = "SELECT * FROM customer WHERE cus_username='$username' AND cus_password='$password'";
$query = mysql_query($sqlstr);

$record_no = mysql_num_rows($query);

if($record_no > 0){
	header("Location: ../max/index_admin.php");
} else {
	echo "FAILD";
?>
	<br/>
	<a href="../max/login2.php"> BACK </a>

<?php
}


?>

