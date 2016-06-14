<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>

<?php
include "connect.php";

$strSQL = "SELECT * FROM customer";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">cus_ID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">lasname </div></th>
    <th width="97"> <div align="center">address </div></th>
    <th width="97"> <div align="center">date </div></th>
    <th width="59"> <div align="center">citizen  </div></th>
    <th width="71"> <div align="center">getder </div></th>
    <th width="30"> <div align="center">agree </div></th>
    <th width="30"> <div align="center">username</div></th>
    <th width="30"> <div align="center">password </div></th>
    <th width="30"> <div align="center">E-mail </div></th>
  	<th width="30"> <div align="center">Edit </div></th>
    
  </tr>
<?php

while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["cus_id"];?></div></td>
    <td><?php echo $objResult["cus_fname"];?></td>
    <td><?php echo $objResult["cus_lname"];?></td>
    <td><?php echo $objResult["cus_address"];?></td>
    <td><?php echo $objResult["cus_date"];?></td>
    <td><?php echo $objResult["cus_citizen"];?></td>
    <td><?php echo $objResult["cus_gender"];?></td>
    <td><?php echo $objResult["cus_rental_agreement"];?></td>
    <td><?php echo $objResult["cus_username"];?></td>
    <td><?php echo $objResult["cus_password"];?></td> 
    <td align="right"><?php echo $objResult["cus_email"];?></td>
    <td align="center"><a href="phpMySQLEditRecordForm.php?cus_id=<?php echo $objResult["cus_id"];?>">Edit</a></td>
  </tr>
<?php
}
?>
</table>

</body>
</html>