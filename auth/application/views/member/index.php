<div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Data Pengolah Anggota
                        </h1>
                        <ol class="breadcrumb">
                      <li class="active">Tabel Data Pengolah Anggota</li>
                    </ol> 
                                    
        </div>
<div id="page-inner">
  <?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>

            <div class="row">
                <div class="col-md-12">
                        <a target="_blank" href="<?php echo base_url('C_member/cetak_member'); ?>" class="btn btn-success">Cetak Pdf</a>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                  <table class="table table-bordered table" id="dataTables-example">
                                       <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Role</th>
                                        <th>Username</th>
                                        <th>Bergabung Mulai</th>
                                        <th>Aksi</th>
                                        </tr>
                                       </thead>
                                        <tbody>
                                    <?php $no = 1; foreach ($data->result() as $u) :?>
                                        <tr class="gradeU">
                                          <td><?php echo $no++; ?></td>
                                          <td><font color="red"><?php echo $u->role; ?></font></td>
                                          <td><?php echo $u->username; ?></td>
                                          <td><?php echo date('d F Y', strtotime($u->tgl_daftar)); ?></td>
                                          <td>
                                           <?php echo anchor('C_member/ubahprofil/'.$u->id_member,'Profil'); ?>   |
                                       <!--td<?php echo anchor('c_member/detail/'.$u->id_member,'Detail'); ?>  --> |
                                        <?php echo anchor('C_member/hapus/'.$u->id_member,'Blokir'); ?>   
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
        
