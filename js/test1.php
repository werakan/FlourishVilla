
<?

include "connect.php";


$query = "SELECT * FROM  customer";
if ($result = mysql_query($query)) {
     while ($row = mysql_fetch_array($result)) {

           $row['username'];  

      }
}

?>