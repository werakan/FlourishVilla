<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>

<form name="frmSearch" method="GET" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $_GET["txtKeyword"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?php

if($_GET["txtKeyword"] != "")
	{
	include "connect.php";

	// Search By Name or Email
	$txtSearch = $_GET["txtKeyword"];
	 $strSQL = "SELECT * FROM customer WHERE cus_fname like '%$txtSearch%' or cus_lname like '%$txtSearch%' or cus_citizen like '%$txtSearch%'";
	$objQuery = mysql_query($strSQL);	
	?>
	<table width="600" border="1">
	  <tr>
		<th width="91"> <div align="center">CustomerID </div></th>
		<th width="98"> <div align="center">Name </div></th>
		<th width="198"> <div align="center">Email </div></th>
		<th width="97"> <div align="center">CountryCode </div></th>
		<th width="59"> <div align="center">Budget </div></th>
		<th width="71"> <div align="center">Used </div></th>
	  </tr>
      
	<?php
	while($objResult = mysql_fetch_array($objQuery))
	{
	?>
	  <tr>
		<td><div align="center"><?php echo iconv("Windows-874", "utf-8",$objResult["cus_id"]);?></div></td>
		<td><?php echo $objResult["cus_fname"];?></td>
		<td><?php echo $objResult["cus_laname"];?></td>
		<td><div align="center"><?php echo $objResult["cus_address"];?></div></td>
		<td align="right"><?php echo $objResult["cus_username"];?></td>
		<td align="right"><?php echo $objResult["cus_password"];?></td>
	  </tr>
	<?php
	}
	?>
	</table>
	<?php
}
?>
</body>
</html>