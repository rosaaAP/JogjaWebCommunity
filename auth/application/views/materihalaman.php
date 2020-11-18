<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('c_adminmateri/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama Materi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($dataa as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_materi ?></td>
			<td>
			      <?php echo anchor('C_adminmateri/edit/'.$u->id_materi,'Edit'); ?>
                  <?php echo anchor('C_adminmateri/hapus/'.$u->id_materi,'Hapus'); ?>
			</td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>