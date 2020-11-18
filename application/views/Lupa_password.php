
<html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-sm-5 p-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"> 
                <center><h2>Lupa Password</h2></center>
      <hr>      
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
              </div>
              <div class="card-body p-5">
                <form action="<?php echo site_url('C_lupapassword'); ?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukkan Email Anda" name="email" value="<?php echo set_value('email') ?>">
                            <?php echo form_error('email', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Kirim permintaan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>