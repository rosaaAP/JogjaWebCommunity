<html>
<head>
	<title>Membuat CRUD </title>
</head>
<body>
	<center>
		<h1>Membuat CRUD </h1>
		<h3>Tambah data baru</h3>
	</center>

	<form action="<?php echo site_url('C_adminmateri/tambah_aksi'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Materi</td>
				<td><input type="text" name="nama_materi"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>