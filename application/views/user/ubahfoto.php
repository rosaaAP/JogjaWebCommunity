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
                            <strong>PROFIL USER</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data">
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
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Foto Profil</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <img style="width: 100px;" src="<?php echo base_url(); ?>./images/<?= $varData['fotoprofil']; ?>" class="img-thumbnail">
                                        <input type="file" name="fotoprofil" value="<?= $varData['fotoprofil']; ?>" id="foto" onchange="return validasiFile()">
                                                <p style="color: red;">*Anda dapat upload foto dengan format .jpg, .jpeg, .png</p>
                                            <!-- Pratinjau gambar -->
                                            <!--div id="pratinjauGambar" style="width: 10px;"></div-->
                                    </div>
                                </div>
                                <!--div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label"><font color="red">Password</</label></font>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="password" class="form-control" required minlength="6"  placeholder="Silahkan masukkan pasword Anda">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <br/><span style="color: red;">*jika Anda ingin mengubahnya inputkan pasword baru Anda </span>
                                    </div>
                                </div-->
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
     <script>
function validasiFile(){
    var inputFile = document.getElementById('foto');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!ekstensiOk.exec(pathFile)){
        alert('Silakan upload file dengan format .jpeg/.jpg/.png');
        inputFile.value = '';
        return false;
    }else{
        //Pratinjau gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}
</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>