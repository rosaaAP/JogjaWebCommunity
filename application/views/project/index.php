<div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Project</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Project</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
</div>

<div class="container ">
   <div class="container-fluid">
       <div class="container ">
    <div class="container-fluid ">
        <div class="card">
            <div class="card-header">
              <a href="<?php echo site_url('C_project/btn_tambah'); ?>" class="btn btn-primary ">+ Project</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>No</th>
                      <th width="400px">Nama Project</th>
                      <th>Waktu upload</th>
                      <th>Oleh</th>
                      <th>Gambaran</th>
                      <th width="100px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php    $no = 1; foreach($dt as $pro) :     ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $pro['nama_project']; ?> </td>
                      <td><?= $pro['waktu_upload']; ?></td>
                      <td><?= $pro['nama']; ?></td>
                      <td><img style="width: 70px;" src="<?php echo base_url(); ?>./auth/gbr_project/<?= $pro['gambar']; ?>"></td>
                      <!--td><center>
                        <a href="<?php echo base_url(); ?>c_project/hapus/<?= $pro['id_project'];?>" onclick="return confirm('Yakin untuk menghapus?');" class="btn-danger btn-sm"> Hapus</a>
                        &nbsp;&nbsp;
                      </center></td-->
                        <td><center>          
                        <a href="<?php echo site_url('C_project/tampil_desc/'); ?><?= $pro['id_project'];?>"class="btn-primary btn-sm"><span class="fi-magnifying-glass">lihat deskripsi</span></a><br><br>
                         <a href='<?= $pro['nama_file']; ?>' target="_blank" class="btn-primary btn-sm">download file</a>
                      </center></td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
            <!-- /.card-body -->
         </div>
    </div>
</div>
<br><br><br><br>

       
    </div>
</div>

         