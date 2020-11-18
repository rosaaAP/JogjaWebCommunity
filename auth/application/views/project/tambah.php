
  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengolahan Project </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div>
                         
                        <div class="card">
                          <div class="card-header">
                            <strong>Tambah Project</strong>
                            <a href="<?php echo base_url('c_pembahasan1/index'); ?>" class="btn btn-success float-right"><< Kembali</a>
                        </div>   
                        </div>
                    </div>
        
       <div class="card shadow mb-4">
          <div class="card-body card-block">
            <form action="<?php echo base_url().'C_project/save_project'?>" method="post" enctype="multipart/form-data">  
                                <!--input type="hidden" id="id_member" name="id_member" value="<?= $varData['id_member'] ?>" class="form-control" readonly-->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Nama Project</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="xnama" placeholder="Nama Project" class="form-control">
                                        
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
                                        <textarea  name="desc_project"  rows="9" placeholder="Deskripsi" class="form-control"></textarea>
                                        <small class="form-text text-danger"><?= form_error('desc_project'); ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                      <button type="submit">Tambah</button>
                                </div>
                            </form>
          
        </div>
       
    </section>

</div>
                    