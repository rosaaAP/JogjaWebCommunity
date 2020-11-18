<!DOCTYPE html>

<html lang="en">
<head>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <title>JWCOM | Jogja Web Community</title>
</head>
<body class="hold-transition layout-top-nav">
    <nav class="navbar navbar-default navbar-fixed-top" style="background:#428bca !important;color:#fff !important;box-shadow: 0px 0px 5px #222;">
    <div class="container">
      <a>
        <img src="<?=base_url()?>/assets/dist/img/jwc.png" class="brand-image"></a><a>
        <span class="brand-text font-weight-light"><font size="14"><b>JogjaWebCommunity</b></font></span>
      </a>
        <!-- Left navbar links -->
        <div>
             <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
     
        
             <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="nav-link"><font color="white"> Selamat Datang <i>user</i> <b><?php echo $this->session->userdata('role') ?></b></a></font>
        </li>
      </ul>
        </ul>
    </div>
  </nav>
</div>
   </body>