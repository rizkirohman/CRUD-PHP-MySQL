<?php  

// next tambahkan validasi email berupa regex


include 'koneksi.php';

if ( isset($_GET['submit']) ) {

	$nama  = ucwords(strip_tags($_GET['nama']));
	$email = strtolower(strip_tags($_GET['email']));

	$pesan_error = false;

	if ( isset($_GET['nama']) ) {
		$nilai_nama = $_GET['nama'];
	}

	if ( isset($_GET['email']) ) {
		$nilai_nama = $_GET['email'];
	}

	if ( empty($nama) ) {
		include 'function/script.php';
		$pesan_error = pesan_error_nama();
		die;
	}

	if ( empty($email) ) {
		include 'function/script.php';
		$pesan_error = pesan_error_email();
		die;
	}
	
	// if ( !preg_match("/^([A-Za-z][A-Za-z0-9\-\.\_]*)\@([A-Za-z][A-Za-z0-9\-\_]*)(\.[A-Za-z][A-Za-z0-9\-\_]*)+$/", $email) ) {
	// 	$pesan_error = "Format email tidak sesuai <br>";
	// }

	if ($pesan_error = true) {
		$nama  = mysqli_real_escape_string($link, $nama);
		$email = mysqli_real_escape_string($link, $email);

		$query  = "INSERT INTO crud_table VALUES('', '$nama', '$email')";
		$result = mysqli_query($link, $query);
		
		include 'function/script.php';
		pesan_berhasil_tambah();
	}
} else {
	$nilai_nama  = "";
	$nilai_email = "";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
	<link rel="stylesheet" type="text/css" href="style/tambah.css">
</head>
<body>

<h1>Tambah data</h1>

<form action="" method="get">
	
	<div id="form-nama">
		<label for="nama"> Nama </label>
		<input type="text" name="nama" id="nama" autofocus autocomplete="off">
	</div>

	<div id="form-email">
		<label for="email"> Email </label>
		<input type="email" name="email" id="email" autocomplete="off">
	</div>

	<button type="submit" name="submit"> Submit </button>
	<button onclick="window.location='tampil.php'; return false;"> Cancel </button>

</form>

</body>
</html>