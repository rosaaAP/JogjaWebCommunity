<div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Data Pengolah Diskusi
                        </h1>
                        <ol class="breadcrumb">
                      <li class="active">Tabel Data Pengolah Diskusi</li>
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
                         </div><hr>
                        <div class="panel-body">
                            <div class="table-responsive">
                  <table class="table table-bordered table" id="dataTables-example">
                                    <thead>
                    <tr>
                       <!--td align="center">No</td-->
                      <th>Kategori Materi</th>
                      <th>Topik</th>
                      <th>Balasan</th>
                      <!--th>Komentar</th-->
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php    $no = 1; foreach($dt as $pro) :     ?>
                    <tr>
                     <!--td align="center"><?= $no; ?></td-->
                      <td><?= $pro['nama_materi']; ?></td>
                      <td><?= $pro['topik']; ?><br><font color="Cadet Blue">
                        <b><?= $pro['username']; ?></b> |<i> dibuat <?= $pro['tgl_post']; ?></i></font></td>
                      <!--td><?= $pro['jmlh_komen']; ?>komentar</td-->
                      <td align="center"><center>            
                        <a href="<?php echo base_url(); ?>C_diskusi/tampil/<?= $pro['id_diskusi'];?>" class="btn btn-default btn-flat">Lihat</a>
                      </center></td>
                       <td><center>
                        <a href="<?php echo base_url(); ?>C_diskusi/hapus/<?= $pro['id_diskusi'];?>" onclick="return confirm('Yakin untuk menghapus?');" class="btn-danger btn-sm"> Hapus</a>
                      </center></td>
                    </tr>
                    <!--?php $no++; ?-->
                    <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
    