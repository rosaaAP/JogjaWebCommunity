<?php $this->load->view("upheader.php") ?>
<?php $this->load->view("header.php") ?>

  <!-- /.navbar -->


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Top Navigation <small>Example 3.0</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
   
    <!-- /.content-header -->

   
  <!-- Main Footer -->
  
</div>
<div class="container">
    <div>
         <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number"><?php echo $total ?></span>
              </div>
              <!-- /.info-box-content -->
        </div>
        
 <div class="info-box">
<h2 style="margin-right: : 100;">
    <small>Selamat datang</small>
    <br />
    <?php echo $this->session->userdata('nama') ?>
</h2>
 </div>
<div class="info-box">
    <label>Role</label>
    <br /><?php echo ucwords($this->session->userdata('role')) ?>
</div>

<?php
// Cek role user
if($this->session->userdata('role') == 'senior'){ // Jika role-nya senior
    ?>
    <div class="form-group">
        <label>Hak Akses</label>
        <br />
        <ol style="margin-left: -25px;">
            <li>
                Akses menu home. Aksi yang diperbolehkan : Read
            </li>
            <li>
                Akses menu berita. Aksi yang diperbolehkan : Create, Read, Update, Delete
            </li>
            <li>
                Akses menu member. Aksi yang diperbolehkan : Create, Read, Update, Delete
            </li>
            <li>
                Akses menu Kontak. Aksi yang diperbolehkan : Read
            </li>
        </ol>
    </div>
    <?php
}else{ // Jika role-nya member
    ?>
    <div class="form-group">
        <label>Hak Akses</label>
        <br />
        <ol style="margin-left: -25px;">
            <li>
                Akses menu home. Aksi yang diperbolehkan : Read
            </li>
            <li>
                Akses menu berita. Aksi yang diperbolehkan : Read, Update, Delete
            <li>
                Akses menu Kontak. Aksi yang diperbolehkan : Read
            </li>
        </ol>
    </div>
    <?php
}
?>

</div>
   </div><!-- /.container-fluid -->
    </div>
<!-- REQUIRED SCRIPTS -->

<?php $this->load->view("footer.php") ?>
