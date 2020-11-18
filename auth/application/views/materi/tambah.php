<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Materi
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Tambah Materi</li>
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
                                    <form action="<?php echo site_url('c_materi/tambah_aksi'); ?>" method="post">
                                     <div class="row form-group">
                                       <input type="hidden" id="id_admin" name="id_admin" value="<?= $varData['id_admin'] ?>" class="form-control" readonly>
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Nama Materi</label>
                                    </div>
                                    <div class="col-9 col-md-3">
                                        <input type="text" name="nama_materi" placeholder="nama_materi" class="form-control" required minlength="3" maxlength="15"><small><span class="text-danger"><?php echo form_error('nama_materi'); ?></span></small>
                                    </div>
                                    <div class="col-9 col-md-3">
                                        <input type="submit" value="+">
                                    </div>
                                      </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     