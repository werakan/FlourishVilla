<?
include('connect.php');

$date = date("Y-m-d H:i:s");





$fname = $_POST['firstname'];

$lname = $_POST['lastname'];

$cus_address = $_POST['address'];

$cus_citizen = $_POST['citizen'];

$cus_gender = $_POST['gender'];

$cus_agree = $_POST['agree'];

$cus_username = $_POST['username'];

$cus_password = $_POST['password'];

$cus_email = $_POST['email'];

$check_fname = false;
$check_lname = false;

if($fname!=null && strlen($fname)>10){
	$check_fname = true;	
}
if($lname!=null && strlen($lname)>10){
	$check_lname = true;
}



if($check_fname == true && $check_lname == true){
	$a = "INSERT INTO customer (cus_fname,
	cus_lname,
	cus_date,
	cus_address,
	cus_citizen,
	cus_gender,
	cus_rental_agreement,
	cus_username,
	cus_password,
	cus_email) VALUES(	
																																	  
	 '$fname',
																																									'$lname',
																																									'$date',
																																									'$cus_address',
																																									'$cus_citizen',
																																									'$cus_gender',
																																									'$cus_agree',
																																									'$cus_username',
																																									'$cus_password',
																																									'$cus_email')";
																																									 mysql_query($a);	
																																										 
																																									 header("location: http://www.allprojectz.com/max/add_admin.php?message=OK");																																				
}else{
 header("location: http://www.allprojectz.com/max/from.php?message=FILL");	
	
	
}
						
																								








?>