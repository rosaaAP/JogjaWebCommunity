
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Beranda </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue">Halaman Beranda</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
   
  
</div>

    <div class="container">
  <div class="container-fluid">
      <div class="card shadow mb-5">
        <div class="card-body bg-light">
         <div class="container">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 bg-primary">
              <span class="info-box-icon"><i class="far fa-circle text-warning"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><li> ANGGOTA</li></span>
                <span class="info-box-number"><?php echo $dt1 ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="far fa-circle text-success"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><li> PEMBAHASAN</li></span>
                <span class="info-box-number"><?php echo $dt2 ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="far fa-circle text-primary"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><li> DISKUSI</li></span>
                <span class="info-box-number"><?php echo $dt3 ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-circle text-danger"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><li> PROJECT</li></span>
                <span class="info-box-number"><?php echo $dt4 ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
      </div>
    </div>
          </div>
         
          </div>
      </div>

  </div>

  <div class="container">
  <div class="container-fluid">
      <div class="card shadow mb-5">
        <div class="card-body bg-light">
         <div class="col-md-12 articles" id="site-content">
                <br>  
                <hr>
                <h3><i>Seputar Informasi</i></h3>
                     <div class="container">
                      <br>
                      <?php  foreach ( $varInfo
                       as $u) : ?>
                        <div class="card text-dark">
                         <div class="card-body">
                          <h7 style="color: #000;">Waktu Post : <?php echo date ('d/M/Y', strtotime($u['waktu'])); ?></h7><hr>
                           <h5 style="color: #000;">"<?= $u['judul']; ?>"</h5>                     
                           <p align="justify"><?php echo $u['isi']; ?></p>
                         </div>
                        </div>
                      <?php endforeach; ?>
                     </div>
               </div>
        </div>
      </div>
  </div>
  </div>
  <br><br><br><br><br>
</div>






