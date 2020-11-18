<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Info
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Form Info</li>
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
                                    <?php  foreach ( $varInfo as $u) : ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                            <div class="col-12 col-sm-12 col-lg-12">
                                              <label>Judul Info</label>
                                                <input type="text" name="judul" value="<?= $u['judul']; ?>" class="form-control" readonly>
                                            </div>
                                    </div>
                                    <div class="form-group row" readonly>
                                            <div class="col-12 col-sm-12 col-lg-12">
                                              <label>Isi Deskripsi Info</label>
                                                <textarea disabled style="width:1200px; height:300px" class="ckeditor" id="ckedtor" name="isi"><?= $u['isi']; ?></textarea>
                                            </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>C_info/ubah/<?= $u['id_info'];?>" class="btn-danger btn">Ubah</a>
                                    <br><hr>
                                    </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
