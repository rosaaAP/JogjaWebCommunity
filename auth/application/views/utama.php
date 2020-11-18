<!DOCTYPE html>

<html lang="en">
<head>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <title>JWCOM</title>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-orange">
    <div class="container">
      <a>
        <img src="<?=base_url()?>/assets/dist/img/jwc.png" class="brand-image"></a><a>
        <span class="brand-text font-weight-light"><font size="6"><b>JogjaWebCommunity</b></font></span>
      </a>
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <ul></ul>
        <ul></ul>
        <ul></ul>
        <ul></ul>
        <ul></ul>
        <ul></ul>
            <li class="nav-item"><a href="<?php echo base_url('index.php/c_beranda/beranda'); ?>" class="nav-link"><b>Beranda</b></a></li>
            <li class="nav-item dropdown">
                  <a id="dropdownSubMenu1" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" class="nav-link" ><b>Materi</b></a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="<?php echo base_url('index.php/c_beranda/materiPhp'); ?>" class="dropdown-item">PHP</a></li>
                  <li><a href="#" class="dropdown-item">CodeIgniter</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/c_beranda/diskusi'); ?>" class="nav-link"><b>Diskusi</b></a></li>
            <li class="nav-item dropdown">
                  <a id="dropdownSubMenu1" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" class="nav-link" ><b>Agenda</b></a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="<?php echo base_url('index.php/c_beranda/newsfeed'); ?>" class="dropdown-item">News Feed</a></li>
                  <li><a href="" class="dropdown-item">Lowongan Pekerjaan</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="<?php echo base_url('index.php/c_beranda/project'); ?>" class="nav-link"><b>Project</b></a></li>
            
        </ul>
    </div>
  </nav>
</div>
   </body>





   <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
            <a href="index3.html" class="nav-link"><h5>Home</h5></a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/c_beranda/beranda'); ?>" class="nav-link"><h5>|Beranda|</h5></a>
          </li>
          <li class="nav-item dropdown">
                  <h5><a id="dropdownSubMenu1" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" class="nav-link" >Materi</a></h5>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="<?php echo base_url('index.php/c_beranda/materiPhp'); ?>" class="dropdown-item">PHP</a></li>
                  <li><a href="#" class="dropdown-item">CodeIgniter</a></li>
                </ul>
            </li>
          <li class="nav-item dropdown">
                  <a id="dropdownSubMenu1" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" class="nav-link" ><h5>|Materi|</h5></a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="<?php echo base_url('index.php/c_beranda/materiPhp'); ?>" class="dropdown-item">PHP</a></li>
                  <li><a href="#" class="dropdown-item">CodeIgniter</a></li>
                </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/c_beranda/diskusi'); ?>" class="nav-link"><h5>|Diskusi|</h5></a>
          </li>
          <li class="nav-item dropdown">
                  <a id="dropdownSubMenu1" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" class="nav-link" ><h5>|Agenda|</h5>></a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="<?php echo base_url('index.php/c_beranda/newsfeed'); ?>" class="dropdown-item">News Feed</a></li>
                  <li><a href="" class="dropdown-item">Lowongan Pekerjaan</a></li>
                </ul>
          </li>
            <li class="nav-item">
              <a href="<?php echo base_url('index.php/c_beranda/project'); ?>" class="nav-link"><h5>|Project|</h5></a>
            </li>

            <?php
            // Cek role user
            if($this->session->userdata('role') == 'senior'){ // Jika role-nya admin
                ?>
                <li><a href="<?php echo base_url('index.php/c_beranda/member'); ?>" class="nav-link">
                <h5>|Member|</h5></a></li>
                <?php
            }
            ?>
           
                </ul>
              </li>
       
      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
     
            <div class=""></div>

                <li class="nav-item"><a href="<?php echo base_url('index.php/c_login/index'); ?>" class="nav-link"><b>Login</b></a></li>
           
          </div>
        </li>
      </ul>
    </div>
  </nav>
