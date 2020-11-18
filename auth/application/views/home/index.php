<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Artikel Home
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Form Artikel</li>
          </ol> 
                  
    </div>
  <?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php  foreach ( $varArtikel as $u) : ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                            <div class="col-12 col-sm-12 col-lg-12">
                                             <label>Judul Artikel</label>
                                                <input type="text" name="judul" value="<?= $u['judul']; ?>" class="form-control" readonly>
                                            </div>
                                    </div>
                                    <div class="form-group row" readonly>
                                            <div class="col-12 col-sm-12 col-lg-12">
                                              <label>Isi Deskripsi Artikel</label>
                                                <textarea disabled style="width:1200px; height:350px" class="ckeditor" id="ckedtor" name="isi"><?= $u['isi']; ?></textarea>
                                            </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>C_home/ubah/<?= $u['id_home'];?>" class="btn-danger btn">Ubah</a>
                                    </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

