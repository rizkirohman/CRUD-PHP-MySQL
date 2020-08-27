<!-- // include file koneksi
// ambil id dari url dan masukkan ke variable
// tampilkan query data
// siapkan variable untuk pesan 
// cek submit
// .. masukkan semua data ke setiap variable
// .. lakukan query update
// cek keberhasilan
// cek variable pesan
// fetch data -->

<?php  

include 'koneksi.php';

$data_id = $_GET['id'];

$pesan_berhasil = "";

$query_read  = "SELECT * FROM crud_table WHERE id = $data_id";
$result_read = mysqli_query($link, $query_read);

if ( isset($_POST['submit']) ) {

	$id    = $_POST['id'];
	$nama  = ucwords(strip_tags($_POST['nama']));
	$email = strip_tags($_POST['email']);

	$query_update  = "UPDATE crud_table SET nama = '$nama', email = '$email' WHERE id = $id";
	$result_update = mysqli_query($link, $query_update);

	if ( mysqli_affected_rows($link) > 0 ) {
		
		// panggil function yang ada di file script.php
		include 'function/script.php';
		pesan_berhasil_update();
	}
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
	<link rel="stylesheet" type="text/css" href="style/edit.css">
</head>
<body>

<h1> Update Data </h1>

<form action="" method="post">
	
	<?php while ($data = mysqli_fetch_assoc($result_read)) { ?>

	<div id="form-id">
		<input type="hidden" name="id" value="<?= $data['id']; ?>">
	</div>

	<div id="form-nama">
		<label for="nama"> Nama </label>
		<input type="text" name="nama" id="nama" autofocus autocomplete="off" value="<?= $data['nama']; ?>">
	</div>

	<div id="form-email">
		<label for="email"> Email </label>
		<input type="email" name="email" id="email" autocomplete="off" value="<?= $data['email']; ?>">
		
	</div>

	<?php } ?>

	<button type="submit" name="submit"> Save </button>
	<button onclick="window.location='tampil.php'; return false;"> Cancel </button>

</form>

</body>
</html>