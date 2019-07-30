<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 
$id_pasien=$_POST['id_pasien'];
 $nama_pasien=$_POST['nama_pasien'];
 $jenis_kelamin=$_POST['jenis_kelamin'];
  $alamat=$_POST['alamat'];
 $nomor_telepon=$_POST['nomor_telepon'];
 
   
 $q=mysqli_query($con,"INSERT INTO `tbl_pasien` (`id_pasien`,`nama_pasien`,`jenis_kelamin`,`alamat`,`nomor_telepon`) VALUES ('$id_pasien','$nama_pasien','$jenis_kelamin','$alamat','$nomor_telepon')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
