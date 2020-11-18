<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>

<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Artikel Home
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Form Ubah Artikel</li>
          </ol> 
                  
    </div>
    
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
                                <div class="col-lg-6">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_home" value="<?= $varArtikelid['id_home'];?>">
                                    <div class="form-group row">
                                            <div class="col-12 col-sm-12 col-lg-12">
                                              <label>Judul Artikel</label>
                                                <input type="text" name="judul" value="<?= $varArtikelid['judul']; ?>" class="form-control">
                                            </div>
                                    </div>
                                    <div class="form-group row" readonly>
                                            <div class="col-12 col-sm-12 col-lg-12">
                                               <label>Isi Deskripsi Artikel</label><br>
                                                <textarea style="width:1200px; height:350px" class="ckeditor" id="ckedtor" name="isi"><?= $varArtikelid['isi']; ?></textarea>
                                            </div>
                                    </div>
                                     <button type="submit" name="simpan" class="btn btn-success float-right">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

