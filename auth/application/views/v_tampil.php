<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Usernaem</th>
			<th>Password</th>
			<th>Email</th>
			<th>Tanggal Lahir</th>
			<th>Pekerjaan</th>
			<th>Role</th>
			<th>Action</th>
			<th>Foto</th>
		</tr>
		<?php 
		$no = 1;
		foreach($dataa as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->tgl_lhr ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td><?php echo $u->role ?></td>
			<td>
			      <?php echo anchor('Crud/edit/'.$u->id_member,'Edit'); ?>
                  <?php echo anchor('Crud/hapus/'.$u->id_member,'Hapus'); ?>
			</td>
			<td><?php echo $u->fotoprofil ?></td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>