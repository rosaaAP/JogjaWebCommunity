<html>
<head>
	<title>Membuat CRUD </title>
</head>
<body>
	<center>
		<h1>Membuat CRUD </h1>
		<h3>Tambah data baru</h3>
	</center>

	<form action="<?php echo site_url('Crud/tambah_aksi'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl_lhr"></td>
			</tr>
			<tr>
			<td><label>Pekerjaan</label></td>
			<td><select class="required form-control" name="pekerjaan">
				<option value="<?php echo set_value('pekerjaan')?>"selected>- Pilih -</option>
				<option>Pelajar</option>
				<option>Mahasiswa</option>
				<option>Freelance</option>
			</select></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="fotoprofil"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>