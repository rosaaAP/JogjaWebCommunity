<!DOCTYPE html>
<html>
<head>
	<title>Edit Profil</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<center><h2>Edit Profil</h2></center>
			<hr>
			<?php foreach($dataa as $u){ ?>
		<form action="<?php echo site_url('c_user/update'); ?>" method="post">

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
		
		</div>		
	</div>
</div>	

</body>
</html>
