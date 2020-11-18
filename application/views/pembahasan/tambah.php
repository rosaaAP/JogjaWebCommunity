<script type="text/javascript" src="<?php echo base_url(); ?>/assets/ckeditor/ckeditor.js"></script>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Tambah Pembahasan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Pembahasan</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
</div>
<div class="container">
  <div class="container-fluid">
      <div class="card shadow mb-5">
        <div class="card-body bg-light">

<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
          <div class="card">
                          <div class="card-header">
                            
         <div class="row d-flex align-items-stretch">
<form action="<?php echo site_url('C_pembahasan/save_pmbhsn'); ?>" method="post" enctype="multipart/form-data">
                                <input class="form-control" type="hidden" name="id_member" value="<?php echo $varData['id_member']?>"> 
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Judul</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="xjudul" placeholder="Judul Pembahasan" class="form-control" required minlength="6" maxlength="50">
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Kategori Materi</label>
                                    </div>
                                           
                                          <div class="col-12 col-sm-4 col-lg-4">
                                            <select class="form-control" name="id_materi" id="id_materi" required>
                                             <option value="">--Pilih Materi--</option>
                                              <?php    foreach($mtr as $pro) :     ?>  
                                           <option value="<?php echo $pro['id_materi']?>" required><?php echo $pro['nama_materi']?></option>
                                              <?php endforeach; ?>
                                            </select>
                                          
                                            </div>
                                        </div>
                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Gambar</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" name="filefoto" id="foto" onchange="return validasiFile()" required>
                                         <p style="color: red;">*Anda dapat upload gambar dengan format .jpg, .jpeg, .png</p>
                                    </div>
                                </div>
                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Pembahasan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea class="ckeditor" name="desc_pmbhsn" id="desc_pmbhsn" rows="20" cols="50" placeholder="Deskripsi" class="form-control" required minlength="15"></textarea><br/>
                                        <small class="form-text text-danger"><?= form_error('desc_pmbhsn'); ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                      <button type="submit">Tambah</button>
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