<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Forum Diskusi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Diskusi</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
</div>
<div class="container">
  <div class="container ">
    <div class="container-fluid ">
        <div class="card">
            <div class="card-header">
              <a href="<?php echo site_url('C_diskusi/tambah'); ?>" class="btn btn-primary">+ Diskusi</a>
             <!--a href="<?php echo base_url('Komentar'); ?>" class="btn btn-secondary">DiskusiQ</a-->
            </div>

            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <!--td align="center">No</td-->
                      <th>Kategori Materi</th>
                      <th>Topik</th>
                      <!--th>Balasan</th-->
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php  foreach($dt as $pro) :     ?>
                    <tr>
                      <!--td align="center"><?= $no; ?></td-->
                      <td><?= $pro['nama_materi']; ?></td>
                      <td><b><?= $pro['topik']; ?></b><br><font color="Cadet Blue">
                        <?= $pro['nama']; ?> |<i> dibuat <?php echo date ('d-m-Y H:i:s', strtotime($pro['tgl_post'])); ?></i></font></td>
                      <!--td><?= $pro['jmlh_komen']; ?> //>
                      <?php echo $jmlKomen ?> Komentar //
                      <?php $jmlKomen['jmlKomen']; ?> Komentar> </td-->
                      <td align="center"><center>            
                        <a href="<?php echo site_url('C_diskusi/tampil/'); ?><?= $pro['id_diskusi'];?>" class="btn btn-default btn-flat">Lihat</a>
                      </center></td>
                   </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    
  </div>
  <br><br><br><br><br>


  