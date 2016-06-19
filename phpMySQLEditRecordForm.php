<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<form action="saveedit.php?cus_id=<?php echo $_GET["cus_id"];?>" name="frmEdit" method="post">
<?php
include "connect.php";


$strSQL = "SELECT * FROM customer WHERE cus_id = '".$_GET["cus_id"]."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if(!$objResult)
{
	echo "Not found CustomerID=".$_GET["cus_id"];
}
else
{
?>

<table width="600" border="1">
  <  <tr>
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
  <tr>
    <td><div align="center"><input type="text" name="txtCustomerID" size="5" value="
	<?php echo $objResult["cus_id"];?>">
    
    </div></td>
    
    <td><input type="text" name="fname" size="20" value="<?php echo $objResult["cus_fname"];?>"></td>
    <td><input type="text" name="lname" size="20" value="<?php echo $objResult["cus_lname"];?>"></td>
    <td><input type="text" name="address" size="20" value="<?php echo $objResult["cus_address"];?>"></td>
    
    <td><div align="center"><input type="text" name="date" size="2" value="<?php echo $objResult["cus_date"];?>"></div></td>
    <td align="right"><input type="text" name="citizen" size="5" value="<?php echo $objResult["cus_citizen"];?>"></td>
    
    <td align="right"><input type="text" name="gender" size="5" value="<?php echo $objResult["cus_gender"];?>"></td>
    
    <td align="right"><input type="text" name="agree" size="5" value="<?php echo $objResult["cus_rental_agreemen"];?>"></td>
    
    
    <td align="right"><input type="text" name="username" size="5" value="<?php echo $objResult["cus_username"];?>"></td>
    <td align="right"><input type="text" name="password" size="5" value="<?php echo $objResult["cus_password"];?>"></td>
    <td align="right"><input type="text" name="email" size="5" value="<?php echo $objResult["cus_email"];?>"></td>
    
    
    
  </tr>
  </table>
  <input type="submit" class="btn" name="submit" value="submit">
  <?php
  }
  
  ?>
  </form>
</body>
</html>