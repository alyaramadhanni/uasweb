<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'konfig.php';
$id = $_GET['no_ri'];
$query = "delete from tbl_pri where no_ri='$id' ";
mysql_query($query);
?>
<script type="text/javascript">
location.href = 'admin.php?view=tampil_pri';
</script>
