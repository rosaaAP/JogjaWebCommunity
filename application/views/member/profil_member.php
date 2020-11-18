
  <!-- /.navbar -->

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
              <li class="breadcrumb-item"><font color="blue"> Halaman MyProfil</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
</div>
<div class="container">
    <div class="row">

                    <div class="col-md-8 offset-md-2">
                        
                        <div class="card">
                          <div class="card-header">
                            <strong>PROFIL ANDA</strong>
                        </div>
                        <div class="card-body card-block">
              <div class="row no-gutters">
                <div class="card-body">
                    <table>
                      <tr>
                        <td>id</td><td> : </td><td><?php echo $dataaa['id_member']?></td>
                        <td>Nama Lengkap</td><td> : </td><td><?php echo $dataaa['nama']?></td>
                      </tr>
                      <tr>
                        <td>Username</td><td> : </td><td><?php echo $dataaa['username']?></td>
                      </tr>
                      <tr>
                        <td>Email</td><td> : </td><td><?php echo $dataaa['email']?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Lahir</td><td> : </td><td><?php echo date('d F Y', strtotime($dataaa['tgl_lhr'])); ?></td>
                      </tr>
                      <tr>
                        <td>Pekerjaan</td><td> : </td><td><?php echo $dataaa['pekerjaan']?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Bergabung</td><td> : </td><td><?php echo date('d F Y', strtotime($dataaa['tgl_daftar'])); ?></td>
                      </tr>
                      <tr>
                        <td>Role</td><td> : </td><td><?php echo $dataaa['role']?></td>
                      </tr>
                      
                    </table>
                </div>
              </div>
                    </div>
                </div>
            </div>
    </div>
</div>
