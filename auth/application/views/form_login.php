<form method="post" action="<?php echo site_url('cek_login')?>">
  <div class="login-form box">
    <h1 class="title"> Form Login</h1>
    <ul class="clearenter">
      <li>
        <span>Username</span>
        <div class="field"><input name="txt_username" type="text" placeholder="insert username" size="25" required /></div>
      </li>
 
      <li>
        <span>Email</span>
        <div class="field"><input name="txt_email" type="email" placeholder="insert email" required /></div>
      </li>
   
      <li>
        <span>Captcha</span>
        <span style="padding-left:80px;font-size:30px; color:blue;"><?php echo $chaptca ?></span>
        <!--<p>*samakan Captcha dengan di atas</p>-->
        <div class="field">
       
          <input type="hidden" name="txt_chaptca_real" value="<?php echo $chaptca ?>">
         
        </div>
       
      </li>
     
      <li style="width:250px;">
        <input class="btn" value="Submit" name="login" type="submit" />
      </li>
    </ul>
  </div>
 
</form>