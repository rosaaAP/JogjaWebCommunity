<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Admin
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Tambah Admin</li>
          </ol> 
                  
    </div>
    
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <a href="<?php echo base_url('C_admin/indexjhj'); ?>" class="btn btn-success float-right"><< Kembali</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
                                <div class="col-lg-6">
                                    <form action="<?php echo site_url('C_admin/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">
                                        <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Username</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="text" name="username" class="form-control" value="<?php echo set_value('username')?>" required><small><span class="text-danger"><?php echo form_error('username'); ?></span></small>
                                    </div>
                                </div>
                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Password</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="text" name="password" class="form-control" required><small><span class="text-danger"><?php echo form_error('password'); ?></span></small>
                                    </div>
                                </div>
                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Nama Admin</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="text" name="nama" class="form-control" value="<?php echo set_value('nama')?>" required><small><span class="text-danger"><?php echo form_error('nama'); ?></span></small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="text" name="email" class="form-control" value="<?php echo set_value('email')?>" required><small><span class="text-danger"><?php echo form_error('email'); ?></span></small>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                      <input type="submit" value="+">
                                </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
     