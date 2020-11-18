
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>

  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengolahan Materi </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div>
                         
                        <div class="card">
                          <div class="card-header">
                            <strong>Tambah Pembahasan</strong>
                            <a href="<?php echo base_url('c_pembahasan1/index'); ?>" class="btn btn-success float-right"><< Kembali</a>
                        </div>   
                        </div>
                    </div>
        
       <div class="card shadow mb-4">
          <div class="card-body card-block">
            <form action="<?php echo base_url().'C_pembahasan1/save_pmbhsn'?>" method="post" enctype="multipart/form-data">
                                <input class="form-control" type="text" name="id_admin" value="<?php echo $varData['id_admin']?>"> 
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Judul</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="xjudul" placeholder="Judul Pembahasan" class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Kategori Materi</label>
                                    </div>
                                           
                                            <div class="col-12 col-sm-4 col-lg-4">
                                              <select class="form-control" name="id_materi" id="id_materi"  onclick='validasi("id_materi","Materi")' required>
                                                <option>--Pilih Materi--</option>
                                                
                                                  <?php    foreach($mtr as $pro) :     ?>
                                                
                                                <option value="<?php echo $pro['id_materi']?>"><?php echo $pro['nama_materi']?>
                                                <?php endforeach; ?>
                                                </option>
                                              </select>
                                            </div>
                                        </div>
                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Gambar</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" name="filefoto">
                                    </div>
                                </div>
                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Deskripsi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea class="ckeditor" name="desc_pmbhsn" id="ckeditor" rows="9" placeholder="Deskripsi" class="form-control"></textarea>
                                        <small class="form-text text-danger"><?= form_error('desc_pmbhsn'); ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                      <button type="submit">Tambah</button>
                                </div>
                            </form>
          
        </div>
       
    </section>

</div>

                    