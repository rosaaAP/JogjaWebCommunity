<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <?php echo $this->session->flashdata('message'); ?>
                    <form action="<?php echo site_url('C_login/aktivasi') ?>" method="POST"><br><br>                 
                        <center><button type="submit" name="btn_aktivasi" class="btn btn-primary btn-flat m-b-8">Aktivasi Akun</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>