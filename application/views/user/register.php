
<html>
<body>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-sm-8 p-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"> 
                <center><h2>Registrasi User</h2></center>
      <hr>      
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
              </div>
              <div class="card-body p-5">
               <form action="<?php echo site_url('C_user/proses_register'); ?>" method="post" id="formregister" onSubmit="return validate();">
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      	<label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama')?>" onclick='validasi("nama","NAMA")' required minlength="5" pattern="^([a-zA-Z ])+$"  title="Inputan minimal 5 karakter" maxlength="50">
						<b><span class="text-danger"><?php echo form_error('nama'); ?></span></b>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      	<label>Username</label>
                       <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username')?>" id="username" onclick='validasi("username","USERNAME")' required minlength="6" title="Inputan minimal 6 karakter" maxlength="20">
						<b><span class="text-danger"><?php echo form_error('username'); ?></span></b>
                      </div>
                    </div>
              	</div>
              	<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      	<label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email')?>" id="email" onclick='validasi("email","EMAIL")' required minlength="17" maxlength="35">
						<b><span class="text-danger"><?php echo form_error('email'); ?></span></b>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      	<label>Password</label>
                       <input type="password" class="form-control" name="password" placeholder="Password" id="password" onclick='validasi("password","PASSWORD")' required minlength="7" title="Inputan minimal 7 karakter" maxlength="30">
						<b><span class="text-danger"><?php echo form_error('password'); ?></span></b>
                      </div>
                    </div>
              	</div>
              	<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      	<label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lhr" placeholder="Tanggal Lahir" class="form-control" value="<?php echo set_value('tgl_lhr')?>" id="tgl_lhr" onclick='validasi("tgl_lhr","TANGGAL LAHIR")' required >
                   		<b><span class="text-danger"><?= form_error('tgl_lhr'); ?></span></b>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      	<label>Konfirmasi Password</label>
                       <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password" id="konfirmasi_password" onclick='validasi("konfirmasi_password","KONFIRMASI PASSWORD")' required minlength="7" title="Inputan minimal 7 karakter" maxlength="30">
						<b><span class="text-danger"><?php echo form_error('konfirmasi_password'); ?></span></b>
                      </div>
                    </div>
              	</div>
              	<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      	<label>Kegiatan saat ini</label>
                       <select class="required form-control" name="pekerjaan" id="pekerjaan" onclick='validasi("pekerjaan","KEGIATAN")' required >
						<b><span class="text-danger">
				<option value="<?php echo set_value('pekerjaan')?>">
				- Pilih -
        </option>
				<option >Pelajar</option>
				<option>Mahasiswa</option>
				<option>Freelance</option>
						</select>	
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      	<br>
                      	<button type="submit" class="btn btn-lg btn-primary btn-block" name="btn_daftar" >Registrasi</button>
                      </div>
                    </div>
              	</div> 
			</form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>

    var form = document.querySelector("#formregister");

    function validasi(textbox, text) {
        var input = document.getElementById(textbox);

        var cek = form.checkValidity()
        if (cek == false) {
            input.oninvalid = function(e) {
                if (e.target.validity.valueMissing) {
                    e.target.setCustomValidity(text + " TIDAK BOLEH KOSONG");
                    return;
                }
            }
            input.oninput = function(e) {
                e.target.setCustomValidity("")
            }
            form.reportValidity();
            console.log(cek);
        }

    }
  </script>
</body>
</html>
