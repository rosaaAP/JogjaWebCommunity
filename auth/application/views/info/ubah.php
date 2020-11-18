<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>

<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Info
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Form Ubah Info</li>
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
                            <a href="<?php echo base_url('c_info/index'); ?>" class="btn btn-success float-right"><< Kembali</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_info" value="<?= $varInfoid['id_info'];?>">
                                    <div class="form-group row">
                                            <div class="col-12 col-sm-12 col-lg-12">
                                              <label>Judul Info</label>
                                                <input type="text" name="judul" value="<?= $varInfoid['judul']; ?>" class="form-control">
                                            </div>
                                    </div>
                                    <div class="form-group row" readonly>
                                            <div class="col-12 col-sm-12 col-lg-12">
                                              <label>Isi Deskripsi Info</label><br>
                                                <textarea style="width:1200px; height:350px" class="ckeditor" id="ckedtor" name="isi"><?= $varInfoid['isi']; ?></textarea>
                                            </div>
                                    </div>
                                    <button type="submit" name="simpan" class="btn btn-success float-right">Simpan</button>
                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
