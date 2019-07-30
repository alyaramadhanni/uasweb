<?php

/*
|--------------------------------------------------------------------------
| Aksi login
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Kariadi
| 
|
*/

session_start(); //memulai session
session_destroy(); //mengakhiri session
header("location:index.php");
