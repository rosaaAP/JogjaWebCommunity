<?php $this->load->view('template/sidebar') ?>


  <div class="content-wrapper">

	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengolahan User </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="<?php echo base_url('c_user/index'); ?>" class="btn btn-success float-right"><< Kembali</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
    <?php foreach($dataa as $u){ ?>
    <form action="<?php echo site_url('c_user/update'); ?>" method="post">
    <table style="margin:20px auto;">
      <tr>
        <td>Nama</td>
        <td>
          <input type="hidden" name="id_member" value="<?php echo $u->id_admin ?>">
          <input type="text" name="nama" value="<?php echo $u->nama ?>" readonly>
        </td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username" value="<?php echo $u->username ?>"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" value="<?php echo $u->password ?>"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Update"></td>
      </tr>
    </table>
  </form> 
  <?php } ?>
            </div>
          </div>
       
    </section>

</div>


    <?php $this->load->view('template/footer') ?>