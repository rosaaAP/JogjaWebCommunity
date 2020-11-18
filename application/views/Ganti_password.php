
<html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body class="bg-dark">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-sm-5 p-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"> 
                <center><h2>Ganti Password</h2></center>
      <hr>      
      <div class="text-center">
                        <h5 class="mb-4"><?php echo $this->session->userdata('reset_email') ?></h5>
      </div>
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
              </div>
              <div class="card-body p-5">
                 <form action="<?php echo site_url('C_lupapassword/ganti_password'); ?>" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password') ?>" maxlength="30">
                            <?php echo form_error('password', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Konfirmasi Password" name="konfirmasi_password" value="<?php echo set_value('konfirmasi_password') ?>" maxlength="30">
                            <?php echo form_error('konfirmasi_password', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <!--div class="form-group">
                            <?php $this->session->userdata('message_captcha') ?>
                            <?php echo $script_captcha; ?>
                            <?php echo $captcha ?>
                            <?php echo form_error('g-recaptcha-response', '<small class="text-danger">', '</small>'); ?>
                        </div-->

                        <button class="btn btn-lg btn-primary btn-block" type="submit">Ganti Password</button>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>