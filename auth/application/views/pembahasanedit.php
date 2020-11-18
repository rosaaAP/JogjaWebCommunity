<html>
<head>
	<title>Membuat CRUD </title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($dataa as $u){ ?>
		<form action="<?php echo site_url('C_seniorpembahasan/update'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Deskripsi Pembahasan</td>
				<td>
					<input type="hidden" name="id_pembahasan" value="<?php echo $u->id_pembahasan ?>">
					<input type="text" name="desc_pembahasan" value="<?php echo $u->desc_pembahasan ?>">
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