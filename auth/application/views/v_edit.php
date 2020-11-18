<html>
<head>
	<title>Membuat CRUD </title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($dataa as $u){ ?>
		<form action="<?php echo site_url('Crud/update'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id_member" value="<?php echo $u->id_member ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $u->username ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $u->password ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<!--tr>
				<td>Role</td>
				<td><input type="date" name="tgl_lhr" value="<?php echo $u->tgl_lhr ?>"></td>
			</tr-->
			<tr>
			<td><label>Role</label></td>
			<td><select class="required form-control" name="role">
				<option value="<?php echo $u->role ?>"selected>- Pilih -</option>
				<option>junior</option>
				<option>senior</option>
			</select></td>
			</tr>
			<tr>
			<td><label>Pekerjaan</label></td>
			<td><select class="required form-control" name="pekerjaan">
				<option value="<?php echo $u->pekerjaan ?>"selected>- Pilih -</option>
				<option>Pelajar</option>
				<option>Mahasiswa</option>
				<option>Freelance</option>
			</select></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="fotoprofil" value="<?php echo $u->fotoprofil ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>