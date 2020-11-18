 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Member</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Member</font></li>
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
              <h3 class="card-title">Daftar User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>NO</th>
                      <th>NAMA</th>
                      <!--th>ROLE</th-->
                      <th>EMAIL</th>
                      <th>FOTO PROFIL</th>
                </tr>
                </thead>
                <tbody>
                   <?php    $no = 1; foreach($dataa as $u) :     ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?php echo $u->nama ?></td>
                      <!--td><?php echo $u->role ?></td-->
                      <td><?php echo $u->email ?></td>
                      <td><center><img style="width: 50px;" src="<?php echo base_url(); ?>./images/<?php echo $u->fotoprofil ?>"></center></td>
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
       
    </div>
</div>

         