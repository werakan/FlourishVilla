<?
include('connect.php');

$date = date("Y-m-d H:i:s");

$billele = $_POST['billele'];
$billwater = $_POST['billwater'];
$rentid = $_POST['rentid'];

echo "roomid: ".$rentid;



$check_billele = false;
$check_billwater = false;
$check_rentid = false;


if($billele!=null && strlen($billele)>1){
	$check_billele = true;	
}
if($billwater!=null && strlen($billwater)>1){
	$check_billwater = true;
}
if($rentid!=null && strlen($rentid)>=1){
	$check_rentid = true;
}



if($check_billwater == true && $check_billele == true  && $check_rentid == true ){

	$a = "INSERT INTO bill (bill_ele,
	bill_water,bill_date ,bill_rent,
	) VALUES(	
																																	  
'$billele',
																																									'$billwater',
																																									'$date',

																																									
																																									'$rentid' )";
																																									 mysql_query($a);	
																																										



																																									 header("location: http://www.allprojectz.com/max/elewater_admin2.php?message=OK");																																				
}else{
 header("location: http://www.allprojectz.com/max/elewater_admin2.php?message=FILL");	
	
	
}
		





?>