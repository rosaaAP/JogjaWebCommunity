<div class="container">
    <div class="row justify-content-md-center">
      <div class="col-sm-5 p-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"> 
                <center><h2>Masuk Admin</h2></center>
      <hr>      
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
              </div>
              <div class="card-body p-5">
                <form method="POST" action="<?php echo site_url('C_login/proses_login'); ?>">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username')?>" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password')?>" required autofocus>
            </div>
            <!--div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span><?php echo $captcha_image; ?></span>
                         <a href="#" onclick="parent.window.location.reload(true)">[perbaharui captcha]</a>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" name="captcha" class="form-control" placeholder="Isikan captcha" required autofocus>
                      </div>
                    </div>
              </div-->
            
  <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>

        </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

