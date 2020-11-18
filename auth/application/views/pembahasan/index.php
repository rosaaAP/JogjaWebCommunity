<div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Data Pengolah Pembahasan
                        </h1>
                        <ol class="breadcrumb">
                      <li class="active">Tabel Data Pengolah Pembahasan</li>
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
                      <th>No</th>
                      <th>Oleh Member</th>
                      <th>Kategori Materi</th>
                      <th>Judul Pembahasan</th>
                      <th>Gambar</th>
                      <th>Deskripsi</th>
                      <th width="125px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php    $no = 1; foreach($kategori as $pro) :     ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $pro['nama']; ?></td>
                      <td><font color="red"><?= $pro['nama_materi']; ?></font></td>
                      <td><?= $pro['judul_pmbhsn']; ?></td>
                      <td><center><img src="<?php echo base_url(); ?>./gbr_pmbhsn/<?= $pro['gambar']; ?>" height="100px"></center></td>
                      <td align="center"><center>            
                        <a href="<?php echo base_url(); ?>C_pembahasan/tampil_desc/<?= $pro['id_pembahasan'];?>" class="btn btn-default btn-flat">Lihat</a>
                      </center></td>
                      <td><center><a href="<?php echo base_url(); ?>C_pembahasan/hapus/<?= $pro['id_pembahasan'];?>" onclick="return confirm('Yakin untuk menghapus?');" class="btn-danger btn-sm"> Hapus</a>&nbsp;
                        <!--a href="<?php echo base_url(); ?>c_pembahasan1/ubah/<?= $pro['id_pembahasan'];?>" > Ubah</a-->
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
        
