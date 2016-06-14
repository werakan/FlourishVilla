
<?

include "connect.php";


$query = "SELECT * FROM  customer";
if ($result = mysql_query($query)) {
     while ($row = mysql_fetch_array($result)) {

         echo  $row['cus_username'] ;  
		   
      }
}

?>
<table border="2">
<tr><td colspan="2">partir</td>
</tr>
<tr><td>big</td><td>ddfgg</td>
</table>