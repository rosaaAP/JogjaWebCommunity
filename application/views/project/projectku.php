<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
   
    <!-- /.content-header -->

   
  <!-- Main Footer -->
  
</div>
<div class="container">
  <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="card-header py-3">
              <a href="<?php echo base_url('c_project/btn_tambah'); ?>" class="btn btn-primary ">+ Project</a>
         
              <form class="form-inline my-2 my-lg-0" style="float: right;" action="" method="POST">
                <input class="form-control mr-sm-2" name="input_cari" type="search" placeholder="Cari Project">
                <input class="form-control mr-sm-2" type="submit" name="search" value="Search" style="padding:3px;" margin="6px;" width="70px;" />
              </form>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Project</th>
                      <th>Desc Project</th>
                      <th>Gambar</th>
                      <th>Waktu upload</th>
                      <th>File project</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?= $dtprj['nama_project']; ?></td>
                      <td><?= $dtprj['desc_project']; ?></td>
                      <td><center><img src="<?php echo base_url(); ?>./auth/gbr_project/<?= $dtprj['gambar']; ?>" height="100px"></center></td>
                       <td><?= $dtprj['waktu_upload']; ?></td>
                       <td><center><img src="<?php echo base_url(); ?>./auth/file_project/<?= $dtprj['file_prj']; ?>"></center></td>
                      <td><center>
                        <a href="<?php echo base_url(); ?>c_project/hapus/<?= $dtprj['id_project'];?>" onclick="return confirm('Yakin untuk menghapus?');" class="btn-danger btn-sm"> Hapus</a>
                        &nbsp;&nbsp;
                      </center></td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>

        </div>
      </div>
    
  </div>