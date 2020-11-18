    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Project</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Tambah Project</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

    <!-- Main content -->
    <div class="container">
  <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="card-body">
              
                 <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h4 class="card-header">Tambah Project</h4>
                               <form action="<?php echo site_url('C_project/save_project'); ?>" method="post" enctype="multipart/form-data">  
                                    <br>
                                    <input class="form-control" type="hidden" name="id_member" value="<?php echo $varData['id_member']?>"> 
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Project</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                              <input type="text" name="xnama" placeholder="Nama Project" class="form-control"required minlength="6" maxlength="60">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Deskripsi</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                               <textarea  name="desc_project"  rows="9" placeholder="Deskripsi" onclick='validasi("desc_project","Desc_project")' required minlength="6" class="form-control"></textarea>
                                        <small class="form-text text-danger"><?= form_error('desc_project'); ?></small>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat File</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                              <input type="text" name="nama_file" placeholder="contoh: https://myproject.com/" class="form-control" required minlength="10"><span style="color: red;">*Silahkan masukkan alamat link untuk unduh project (ex: github)</span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Gambar</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="file" name="filefoto" id="foto" onchange="return validasiFile()" required>
                                                <br/><span style="color: red;">*Silahkan upload gambaran project Anda</span>
                                            <div id="pratinjauFIle"></div>
                                            </div>
                                        </div> 

                                      
                                        <div class="form-group row text-center">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary" name="btnSimpan">Simpan</button>
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
    
  </div>


      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
</div>
</div>
</div>
</div>
</div>

   <script>
function validasiFile(){
    var inputFile = document.getElementById('foto');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;
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

   