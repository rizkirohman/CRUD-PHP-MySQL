<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "crud";

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// if ($link) {
// 	echo "Koneksi ke database berhasil";
// } else {
// 	echo "Koneksi ke database gagal : ". mysqli_connect_errno() ." - ". mysqli_connect_error();
// }