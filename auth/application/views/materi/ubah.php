<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Materi
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Ubah Materi</li>
          </ol> 
                  
    </div>
    
            <div id="page-inner">
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <a href="<?php echo base_url('C_materi'); ?>" class="btn btn-success float-right"><< Kembali</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
                                <div class="col-lg-6">
                                    <form action="" method="post">
                                      <input type="hidden" name="id_materi" value="<?= $kategori['id_materi'];?>">
                                      <input type="hidden" id="id_admin" name="id_admin" value="<?= $varData['id_admin'] ?>" class="form-control" readonly>
                                 <div class="row form-group">
                                    <input type="hidden" name="id_materi" value="<?= $kategori['id_materi'];?>">
                                    <div class="col-11 col-md-3">
                                        <label class=" form-control-label">Ubah Nama Materi</label>
                                    </div>
                                    <div class="col-9 col-md-3">
                                        <input type="text" name="nama_materi" placeholder="nama_materi" class="form-control"  value="<?= $kategori['nama_materi'];?>" required minlength="3" maxlength="15">

                                    </div>
                                    <div class="col-9 col-md-3">
                                         <input type="submit" value="Simpan">
                                    </div>
                                </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     