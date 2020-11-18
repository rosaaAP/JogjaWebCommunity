<?php $this->load->view("upheader.php") ?>
<?php $this->load->view("header.php") ?>

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
<body>
  <center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
  <center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
  <table style="margin:20px auto;" border="1">
              <thead>
                <th>Nama</th>
                <th>Usernaem</th>
                <th>Email</th>
                <th>Role</th>
              </thead>
              <tbody>
                <?php foreach ($data ->result() as $result) : ?>
              <tr>     
                <td><?php echo $result ->nama ?></td>
                <td><?php echo $result ->username ?></td>
                <td><?php echo $result ->email ?></td>
                 <td><?php echo $result ->role ?></td>
                <!--td><a href="<?php echo site_url('article/update/'.$result->id)?>" >Update</a>&nbsp;<a onclick="return confirm('apakah anda yakin ingin menghapus data tersebut ?')" href="<?php echo site_url('article/delete/'.$result->id)?>" >Delete</a></td--> 
              </tr>
                    <?php endforeach; ?>
              </tbody>

</body>
    <br>
 <div class="info-box">

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


