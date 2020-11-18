<div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Data Pengolah Materi
                        </h1>
                        <ol class="breadcrumb">
                      <li class="active">Tabel Data Pengolah Materi</li>
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
                          <a href="<?php echo base_url(); ?>C_materi/buttontambah" class="btn btn-success float-right">+ Materi</a>
                        </div><hr>
                        <div class="panel-body">
                            <div class="table-responsive">
                  <table class="table table-bordered table" id="dataTables-example">
                                       <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Materi</th>
                                          <th>Aksi</th>
                                          <th>Admin</th>
                                        </tr>
                                       </thead>
                                        <tbody>
                                    <?php $no = 1; foreach ($kategori->result() as $u) :?>
                                        <tr class="gradeU">
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $u->nama_materi ?></td>
                                          <td>
                                           <?php echo anchor('c_materi/hapus/'.$u->id_materi,'Hapus'); ?> |
                                           <?php echo anchor('c_materi/ubah/'.$u->id_materi,'Ubah'); ?>
                                          </td>
                                          <td><?php echo $u->nama ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                  </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        
