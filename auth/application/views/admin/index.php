<div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Data Pengolah Admin
                        </h1>
                        <ol class="breadcrumb">
                      <li class="active">Tabel Data Pengolah Admin</li>
                    </ol> 
                                    
        </div>
<div id="page-inner">
  <?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <a href="<?php echo base_url(); ?>C_admin/tambah" class="btn btn-success float-right">+ User Admin</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                  <table class="table table-bordered table" id="dataTables-example">
                                    <thead>
                                     <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Nama Admin</th>
                                        <th>Email</th>
                                        <th width="100px">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; foreach ($data->result() as $u) :?>

                                        <tr class="gradeU">
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $u->username ?></td>
                                          <td><?php echo $u->password ?></td>
                                          <td><?php echo $u->nama ?></td>
                                          <td><?php echo $u->email ?></td>
                                          <td>
                                            <?php echo anchor ('c_admin/hapus/'.$u->id_admin,'Hapus');?>
                                          </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        
