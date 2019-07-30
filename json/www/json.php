<html>
Tabel Dokter<br>
<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select * from `tbl_dokter`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
<br>Tabel Pasien<br>
<?php

$data=array();
$q=mysqli_query($con,"select * from `tbl_pasien`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
<br>Tabel User<br>
<?php

$data=array();
$q=mysqli_query($con,"select * from `tbl_user`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
<br>Tabel Pasien Rawat Jalan<br>
<?php

$data=array();
$q=mysqli_query($con,"select * from `tbl_prj`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
<br>Tabel Pasien Rawat Inap<br>
<?php

$data=array();
$q=mysqli_query($con,"select * from `tbl_pri`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
<br>Tabel Resep<br>

<?php

$data=array();
$q=mysqli_query($con,"select * from `tbl_resep`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
<br>Tabel Tarif Rawat Inap<br>
<?php

$data=array();
$q=mysqli_query($con,"select * from `tbl_tarif_ri`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
<br>Tabel Tarif Rawat Jalan<br>
<?php

$data=array();
$q=mysqli_query($con,"select * from `tbl_tarif_rj`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
</html>