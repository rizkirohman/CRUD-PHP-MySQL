<?php function pesan_berhasil_update() { ?>

	<script type="text/javascript">
		alert('Data berhasil diperbaharui');
		document.location.href = 'tampil.php';
	</script>

<?php } ?>


<?php function pesan_berhasil_tambah() { ?>

	<script type="text/javascript">
		alert('Data berhasil ditambahkan');
		document.location.href = 'tampil.php';
	</script>

<?php } ?>


<?php function pesan_berhasil_hapus() { ?>

	<script>
		alert('Data berhasil dihapus');
		document.location.href = 'tampil.php';
	</script>

<?php } ?>

<?php function pesan_error_nama() { ?>

	<script>
		alert('Nama tidak boleh kosong');
		document.location.href = 'tambah.php';
	</script>

<?php } ?>

<?php function pesan_error_email() { ?>

	<script>
		alert('Email tidak boleh kosong');
		document.location.href = 'tambah.php';
	</script>

<?php } ?>