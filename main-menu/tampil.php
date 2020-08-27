<?php  

include 'koneksi.php';

if ( isset($_POST['cari']) ) {

	$keyword = strip_tags($_POST['keyword']);
	$keyword = mysqli_real_escape_string($link, $keyword);
	$query   = "SELECT * FROM crud_table WHERE nama LIKE '%$keyword%'";
	$result  = mysqli_query($link, $query);

} else {
	$result = mysqli_query($link, "SELECT * FROM crud_table");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="style/tampil.css">
</head>
<body>

<div class="container">
	
	<h1> Data User </h1>

	<a href="tambah.php"> Tambah data </a> 

	<form action="" method="post">

		<input type="text" name="keyword" autocomplete="off" autofocus>
		<button type="submit" name="cari"> Cari </button>
		
	</form>

	<table>
			
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Opsi</th>
		</tr>

	<?php $no = 1; ?>	
	<?php while ($data = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td class="no"> <?php echo $no; ?> </td>
			<td> <?php echo $data['nama']; ?> </td>
			<td> <?php echo $data['email']; ?> </td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>"> Edit </a> |
				<a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data?')"> Hapus </a> 
			</td>
		</tr>
	<?php $no++; ?>
	<?php endwhile; ?>

	</table>

</div>

</body>
</html>