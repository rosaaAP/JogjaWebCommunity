
  <!-- /.navbar -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Profil Saya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Profil</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
</div>
<div class="container">
    <div class="row">
                    <div class="col-md-8 offset-md-2">
<?php if($this->session->flashdata('notif')){
echo $this->session->flashdata('notif');
}?>
                        <div class="card">
                          <div class="card-header">
                            <strong>PROFIL ANDA</strong>
                        </div>
                        <div class="card-body card-block">
              <div class="row no-gutters">
                 <div class="col-md-6">
                  <img style="width: 200px;" src="<?php echo base_url(); ?>./images/<?= $varData['fotoprofil']; ?>">
                  <br><br>
                  <a href="<?php echo site_url('C_user/ubahdatafoto'); ?>" class="btn btn-space btn-primary">Ganti Foto</a>        
                  <a href="<?php echo site_url('C_user/ubahdatapassword'); ?>" class="btn btn-space btn-primary">Ganti Password</a> 
                 </div>


        <!--div class="col-md-8"-->
                <div class="card-body">
                    <table>
                        
                      <tr>
                        <td>Nama Lengkap</td><td> : </td><td><?php echo $varData['nama']?></td>
                      </tr>
                      <tr>
                        <td>Username</td><td> : </td><td><?php echo $varData['username']?></td>
                      </tr>
                      <tr>
                        <td>Email</td><td> : </td><td><?php echo $varData['email']?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Lahir</td><td> : </td><td><?php echo date('d F Y', strtotime($varData['tgl_lhr'])); ?></td>
                      </tr>
                      <tr>
                        <td>Kegiatan saat ini</td><td> : </td><td><?php echo $varData['pekerjaan']?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Bergabung</td><td> : </td><td><?php echo date('d F Y', strtotime($varData['tgl_daftar'])); ?></td>
                      </tr>
                      <tr>
                        <td>Role</td><td> : </td><td><?php echo $varData['role']?></td>
                      </tr>
                      
                    </table>
                </div>
              </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br>