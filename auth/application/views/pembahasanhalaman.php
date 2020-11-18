<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('c_seniorpembahasan/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Deskripsi pembahasan</th>
		</tr>
		<?php 
		$no = 1;
		foreach($dataa as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->desc_pembahasan ?></td>
			<td>
			      <?php echo anchor('c_seniorpembahasan/edit/'.$u->id_pembahasan,'Edit'); ?>
                  <?php echo anchor('c_seniorpembahasan/hapus/'.$u->id_pembahasan,'Hapus'); ?>
			</td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>