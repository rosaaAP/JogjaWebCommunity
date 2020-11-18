<!DOCTYPE html>

<html lang="en">
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo site_url('C_beranda'); ?>" class="nav-link">
              <i class="fa fa-home"><span><h8>| BERANDA </h8></span></i>
            </a>
          </li>
          
            <!-------------------------------------------------------------->
            <li class="nav-item">
            <a href="<?php echo site_url('C_diskusi'); ?>" class="nav-link">
              <i class="fa fa-comments"><span><h8>| DISKUSI </h8></span></i>
            </a>
          </li>
            
              <!-------------------------------------------------------------->
             <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" class="nav-link" >
                  <i class="fa fa-list-alt"><span><h8>| MATERI </h8></span></i>
                  </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <?php
                        $root = "localhost";
                        $user = "root";
                        $password = "";
                        $db = "jwcom";
                        $conn = mysqli_connect($root, $user, $password, $db);
                        $query = mysqli_query($conn, "SELECT * FROM tb_materi");
                    ?>
                    <?php foreach ($query as $key) : ?> 
                    <a href="<?php echo site_url('C_materi/data/'); ?><?= $key['id_materi'];?>" class="dropdown-item"><?php echo $key['nama_materi']; ?></a>
                    <?php endforeach; ?>
                    </ul>
            </li>
            <!-------------------------------------------------------------->
                    
            <li class="nav-item">
              <a href="<?php echo site_url('C_project'); ?>" class="nav-link">
                <i class="fa fa-folder"><h8>| PROJECT </h8></i>
              </a>
            </li>
            
            <!-------------------------------------------------------------->
           <?php
            // Cek role user
            if($this->session->userdata('role') == 'member'){ // Jika role-nya admin
                ?>
              <li class="nav-item">
              <a href="<?php echo site_url('C_member'); ?>" class="nav-link">
               <i class="fa fa-users"><h8>| MEMBER </h8></i>              
              </a>
              </li>
                <?php
            }
            ?>

           
                </ul>
              </li>
              
       
      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
             <li class="nav-item dropdown">      
                 <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama') ?></span> <!--MANGGIL NAMA PELOGIN-->
                
                <img class="img-profile rounded-circle" style="height: 35px; width: 35px;" src="<?php echo base_url(); ?>./images/<?= $varData['fotoprofil']; ?>">
              </a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="<?php echo site_url('C_user'); ?>" class="dropdown-item">Profil Saya</a></li>
                  <li><a href="<?php echo site_url('C_login/logout'); ?>" onclick="return confirm('Yakin untuk Logout?');" class="dropdown-item">Logout</a></li>
                </ul>
            </li>
          </div>
        </li>
      </ul>
    </div>
  </nav>
