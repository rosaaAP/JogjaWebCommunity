 <script type="text/javascript" src="<?php echo base_url(); ?>/assets/ckeditor/ckeditor.js"></script>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Forum Diskusi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Diskusi</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
</div>


<div class="container">
  <div class="container-fluid">
        <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                              <div class="card-header py-3">
              <a href="<?php echo site_url('c_diskusi'); ?>" class="btn btn-success float-right"><< Kembali</a>
                              </div>

                                 <div class="card-body">
                               <form action="<?php echo site_url('C_diskusi/tambah_aksi'); ?>" method="POST">
                                  <input type="hidden" id="id_member" name="id_member" value="<?= $varData['id_member'] ?>" class="form-control" readonly>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Kategori Materi</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                              <select class="form-control" name="id_materi" id="id_materi" required>
                                                <option value="">--Pilih Materi--</option>
                                                
                                                  <?php    foreach($mtr as $pro) :     ?>
                                                
                                                <option value="<?php echo $pro['id_materi']?>">
                                                <?php echo $pro['nama_materi']?></option>
                                                <?php endforeach; ?>
                                                <?= form_error('id_materi', '<small class="text-danger pl-3">', '</small>'); ?>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Topik Diskusi</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="topik" id="topik" class="form-control" required minlength="5" value="<?php echo set_value('topik')?>">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Isi Diskusi</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea class="ckeditor" id="isi" name="isi" required minlength="5"></textarea>
                                                <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                                            <!--br/><span style="color: red;">*Jika Anda akan memasukan source code maka klik icon Source</span-->
                                            </div>
                                        </div>
                                        <div class="form-group row text-center">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <input type="submit" value="Simpan" class="btn btn-space btn-primary">
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




 