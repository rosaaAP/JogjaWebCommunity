<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Member</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<center><h2>Registrasi</h2></center>
			<hr>
			<form class="form-horizontal" method="POST" action="<?php echo site_url('c_user/proses_register'); ?>">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama')?>">
					<small><span class="text-danger"><?php echo form_error('nama'); ?></span></small>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email')?>">
					<small><span class="text-danger"><?php echo form_error('email'); ?></span></small>
				</div>
				<div class="form-group">
                    <label>Tanggal Lahir</label>           
                    <input type="date" name="tgl_lhr" placeholder="Tanggal Lahir" class="form-control" value="<?php echo set_value('tgl_lhr')?>">
                   	<small><span class="text-danger"><?= form_error('tgl_lhr'); ?></span></small>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Pekerjaan</label>
                       <select class="required form-control" name="pekerjaan">
				<small><span class="text-danger"><option value="<?php echo set_value('pekerjaan')?>"<?= form_error('pekerjaan'); ?>" selected>- Pilih -</option></span></small>
				<option>Pelajar</option>
				<option>Mahasiswa</option>
				<option>Freelance</option>
						</select>	
                      </div>
                    </div>
                </div>
               

				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username')?>">
					<small><span class="text-danger"><?php echo form_error('username'); ?></span></small>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password')?>">
					<small><span class="text-danger"><?php echo form_error('password'); ?></span></small>
				</div>
				<div class="form-group">
					<label>Konfirmasi Password</label>
					<input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password" >
					<small><span class="text-danger"><?php echo form_error('konfirmasi_password'); ?></span></small>
				</div>
				<!--div class="form-group">
				    <div class="col-xs-12">
				      <label>Foto Profil</label>
				      <input type="file" name="fotoprofil" class="form-control" required />
				    </div>
				</div-->
				<div class="form-group">
					<button type="submit" class="btn btn-success">Registrasi</button>					
				</div>
			</form>
		</div>		
	</div>
</div>	

</body>
</html>
