<?php  

include 'koneksi.php';

$id = $_GET['id'];

$query  = "DELETE FROM crud_table WHERE id = $id";
$result = mysqli_query($link, $query);

include 'function/script.php';
pesan_berhasil_hapus();

?>