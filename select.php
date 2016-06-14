<?
include('connect.php');
$sqlstr = "SELECT * FROM customer";
$result = mysql_query($sqlstr);

for($i=0;$i<mysql_num_rows($result);$i++){
		$data_db = mysql_fetch_array($result);
		
		
		$fname = $data_db['cus_fname'];
		$lname = $data_db['cus_lname'];
		echo $fname." ".$lname;
		echo " ?> <br> <?";
}
?>