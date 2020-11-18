<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Profil Saya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Profil</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
</div>
<div class="container">
    <div class="row">

                    <div class="col-md-8 offset-md-2">
                        
                        <div class="card">
                          <div class="card-header">
                            <strong>UBAH PASSWORD</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" id="formpswd">
                                <div class="row form-group">
                                <div class="col col-md-3">
                                </div>
                                <div class="col-12 col-md-9">
                                        <input type="hidden" name="id_member" class="form-control" value="<?= $varData['id_member'];?>" readonly>
                                </div>  
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <!-- class=" form-control-label">Nama Anda</label-->
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="hidden" name="nama" class="form-control" value="<?= $varData['nama'];?>" readonly>
                                    </div>
                                </div>
                                <!--div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Username</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="hidden" name="username" class="form-control" value="<?= $varData['username'];?>" >
                                        <?= form_error('user', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="hidden" name="email" class="form-control" value="<?= $varData['email'];?>" >
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="hidden" name="tgl_lhr"  class="form-control" value="<?= $varData['tgl_lhr'];?>" readonly>
                                        <?= form_error('tgl_lhr', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Pekerjaan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="pekerjaan" class="form-control" readonly hidden="">
                                            <option value="<?= $varData['pekerjaan'];?>"><b><?= $varData['pekerjaan'];?></b></option>
                                            <option value="Pelajar">Pelajar</option>
                                            <option value="Mahasiswa">Mahasiswa</option>
                                            <option value="Freelance">Freelance</option>
                                        </select>
                                        <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Tanggal Bergabung</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="hidden" name="tgl_daftar"  class="form-control" value="<?php echo date('d F Y', strtotime($varData['tgl_daftar'])); ?>" readonly>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="hidden" name="role" class="form-control" value="<?= $varData['role'];?>" readonly>
                                    </div>
                                </div-->
                                <!--div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Foto Profil</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <img style="width: 100px;" src="<?php echo base_url(); ?>./images/<?= $varData['fotoprofil']; ?>" class="img-thumbnail">
                                        <input type="file" name="fotoprofil" value="<?= $varData['fotoprofil']; ?>">
                                    </div>
                                </div-->
                                <!--div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label"><font color="red">Password Anda</</label></font>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="passwordddd" class="form-control" required minlength="6"  placeholder="Silahkan masukkan pasword Lama Anda">
                                    </div>
                                </div-->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label"><font color="red">Password Baru</</label></font>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="password" class="form-control" id="password" onclick='validasi("password","PASSWORD")' required minlength="7" title="Inputan minimal 7 karakter" maxlength="20" placeholder="Silahkan masukkan password baru Anda">
                                       <small><span class="text-danger"><?php echo form_error('password'); ?></span></small>
                                        <!--br/><span style="color: red;">*Silaha </span-->
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label"><font color="red">Konfirmasi Password</</label></font>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="konfirmasi_password" class="form-control" id="konfirmasi_password" onclick='validasi("konfirmasi_password","KONFIRMASI PASSWORD")' required minlength="7" title="Inputan minimal 7 karakter" maxlength="20" placeholder="Silahkan ulangi password baru Anda">
                                        <small><span class="text-danger"><?php echo form_error('konfirmasi_password'); ?></span></small>
                                    </div>
                                </div>
                        <div class="col-md-4 offset-md-4">
                        <button type="submit" class="btn btn-info">SIMPAN</button> 
                        <a href="<?php echo site_url('C_user'); ?>" class="btn btn-space btn-primary">Batal</a>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <script>

    var form = document.querySelector("#formpswd");

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
