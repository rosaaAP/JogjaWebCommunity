<html>
<head>
	<title>Membuat CRUD </title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($dataa as $u){ ?>
		<form action="<?php echo site_url('C_adminmateri/update'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama materi</td>
				<td>
					<input type="hidden" name="id_materi" value="<?php echo $u->id_materi ?>">
					<input type="text" name="nama_materi" value="<?php echo $u->nama_materi ?>">
				</td>
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