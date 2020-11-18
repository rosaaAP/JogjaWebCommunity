<html>
<head>
	<title>Membuat CRUD </title>
</head>
<body>
	<center>
		<h1>Membuat CRUD </h1>
		<h3>Tambah data baru</h3>
	</center>

	<form action="<?php echo site_url('C_seniorpembahasan/tambah_aksi'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Deskripsi Pembahasan</td>
				<td><input type="text" name="desc_pembahasan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>