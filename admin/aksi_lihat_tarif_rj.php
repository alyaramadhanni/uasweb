<?php
$connection = mysqli_connect("localhost", "id9227053_uas", "admin", "id9227053_uas");
 
$selectvalue = mysqli_real_escape_string($connection, $_GET['departemen']);
 
mysqli_select_db($connection, "id9227053_uas");
$result = mysqli_query($connection, "SELECT departemen, tarif FROM tbl_tarif_rj WHERE departemen = '$selectvalue'");
 
while($row = mysqli_fetch_array($result))
  {
    echo $row['tarif'];
  }
 
mysqli_free_result($result);
mysqli_close($connection);
 
?>