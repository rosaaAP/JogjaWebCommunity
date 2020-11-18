
<html>
<body>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-sm-5 p-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"> 
                <center><h2>Login User</h2></center>
      <hr>      
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
              </div>
              <?php echo $script_captcha; // javascript recaptcha ?>
              <div class="card-body p-6">
            <form method="POST" action="<?php echo site_url('C_login/proses_login'); ?>" id="formlogin">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo set_value('username')?>" onclick='validasi("username","USERNAME")' required minlength="6" maxlength="20" title="inputan minimal 6 karakter">
            </div>
            <div class="form-group">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="password" class="form-control" name="password" placeholder="Password" id="password" onclick="validasi('password','PASSWORD')" required minlength="7" title="password minimal 7 karakter" maxlength="20">   
                      </div>
                      <div class="input-group-append">
              <input type="button" name="submit" value="Show" id="show" onclick="ShowPassword()">
              <input type="button" style="display:none" id="hide" value="Hide" onclick="HidePassword()">
                      </div>
                    </div>
                  </div>
              <div class="form-group">
                <?php echo $captcha // tampilkan recaptcha ?>
            </div>
             <div class="register-link m-t-15 text-right">
                            <label class="pull-right">
                                <a href="<?php echo site_url('C_lupapassword'); ?>">Lupa Password?</a>
                            </label>
                        </div>
  <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button><br>
            <div class="register-link m-t-15 text-center">
                  <br />
                    <p>Belum memiliki akun? Silahkan <a href="<?php echo site_url('C_user/register'); ?>">Daftar Disini</a></p>
            </div>
        </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
  function ShowPassword()
{
  if(document.getElementById("password").value!="")
  {
    document.getElementById("password").type="text";
    document.getElementById("show").style.display="none";
    document.getElementById("hide").style.display="block";
  }
}
 
function HidePassword()
{
  if(document.getElementById("password").type == "text")
  {
    document.getElementById("password").type="password"
    document.getElementById("show").style.display="block";
    document.getElementById("hide").style.display="none";
  }
}
</script>

<style>
  .container input[type=button]{background: blue;
    border: 0 none;
    color: white;
    font-weight: bold;
    padding: 3px;
    width: 90px;}
</style>

<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6Ld8edAUAAAAABdJdt-fWv39TXiiHCBtV30D9W4Y'
        });
      };
    </script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer></script>
<script>

    var form = document.querySelector("#formlogin");

    function validasi(textbox, text) {
        var input = document.getElementById(textbox);

        var cek = form.checkValidity()
        if (cek == false) {
            input.oninvalid = function(e) {
                if (e.target.validity.valueMissing) {
                    e.target.setCustomValidity(text + " TIDAK BOLEH KOSONG");
                    return;
                }
            }
            input.oninput = function(e) {
                e.target.setCustomValidity("")
            }
            form.reportValidity();
            console.log(cek);
        }

    }
  </script>
  <style> #file_error{color: #FF0000} </style>


</body>
</html>