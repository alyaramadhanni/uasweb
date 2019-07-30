<?php
/*
|--------------------------------------------------------------------------
| Aksi login
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Kariadi
|
*/
error_reporting(0);
	$server = "localhost";
	$user = "id9227053_uas";
	$pass = "admin";
	$dbname = "id9227053_uas";
        
  
	
	if (mysql_connect($server,$user,$pass)){
		//echo ":)";
		mysql_select_db($dbname) or die("database not found");
	}else{
		echo ":(";
	}
	 
?>