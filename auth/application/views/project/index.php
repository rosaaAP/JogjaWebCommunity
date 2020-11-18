<div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Data Pengolah Project
                        </h1>
                        <ol class="breadcrumb">
                      <li class="active">Tabel Data Pengolah Peroject</li>
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
                         <!--a href="<?php echo base_url('C_project/buttontambah'); ?>" class="btn btn-success float-right">+ Project</a-->
                         </div><hr>
                        <div class="panel-body">
                            <div class="table-responsive">
                  <table class="table table-bordered table" id="dataTables-example">
                                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Project</th>
                      <th>Desc Project</th>
                      <th>File Project</th>
                      <th>Waktu upload</th>
                      <th>Oleh</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php    $no = 1; foreach($kategori as $pro) :     ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $pro['nama_project']; ?></td>
                      <td align="center"><center>            
                        <a href="<?php echo base_url(); ?>C_project/tampil_desc/<?= $pro['id_project'];?>" class="btn btn-default btn-flat">Lihat</a>
                      </center></td>
                      <td>            
                        <a href='<?= $pro['nama_file']; ?>' target="_blank" class="btn-primary btn-sm">lihat file</a>
                      </td>
                       <td><?= $pro['waktu_upload']; ?></td>
                       <td><?= $pro['nama']; ?></td>
                      <td><center>
                        <a href="<?php echo base_url(); ?>C_project/hapus/<?= $pro['id_project'];?>" onclick="return confirm('Yakin untuk menghapus?');" class="btn-danger btn-sm"> Hapus</a>
                      </center></td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
    