 <?php $this->load->view('template/sidebar') ?>

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

 
       <div class="row">
            <div class="col-md-6 offset-md-3">
                  <div class="card-body card-block">
                   <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_pembahasan" value="<?= $dataa['id_pembahasan'];?>">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Ubah Judul Pembahasan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="judul_pmbhsn" class="form-control" value="<?= $dataa['judul_pmbhsn'];?>">
                                    </div>
                                </div>
                                 <!--div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Kategori Materi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="id_materi" placeholder="id_materi" class="form-control"  value="<?= $dataa['id_materi'];?>">
                                        
                                    </div>
                                </div>
                                 <!--div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Kategori Materi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="id_materi" class="form-control">
                                            <option value="">Pilih</option>
                                             <?php foreach ($kategori as $pro): ?>
                                                <option value="<?= $pro['id_materi'] ?>"><?= $pro['nama_materi'] ?></option>
                                             <?php endforeach ?>
                                        </select>
                                        
                                    </div>
                                </div-->

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Deskripsi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="desc_pmbhsn" id="desc_pmbhsn" rows="9" placeholder="Deskripsi" class="form-control" value="<?= $dataa['desc_pmbhsn'];?>"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                    <a href="<?php echo base_url(); ?>c_pembahasan1" class="btn btn-danger float-left">Batal</a>
                                    <button type="submit" name="simpan" class="btn btn-success float-right">Simpan</button>
                                </div>
                            </form>
            </div>
          </div>


</div>


    <?php $this->load->view('template/footer') ?>

