<?php
$host = "localhost";
$user = "allproje_ferv";
$pass = "12345678";
$db = "allproje_ferv";
$connect = mysql_connect($host,$user,$pass);
mysql_select_db($db,$connect);
mysql_query("SET NAMES UTF8");

if(!$connect){
	die('Cannot Connect Database :'.mysql_error());
		
}else{
	
	}
?>