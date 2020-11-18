
   <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>JWCOM</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <div>
      <img src="<?=base_url()?>/assets/dist/img/jwc.png" class="brand-image">
        <span class="brand-text font-weight-light"><font size="6"><b>JogjaWebCommunity</b></font></span>
        <!-- Left navbar links -->
    </div>
  </nav>
          </div>
        </ul>
      
      <div class="collapse navbar-collapse order-1">
      </div>
      <div class="collapse navbar-collapse order-1">
      </div>
      <div class="collapse navbar-collapse order-1">
      </div>

      <!-- Right navbar links -->
      <div class="collapse navbar-collapse order-1">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="nav-link">Selamat Datang <?php echo $this->session->userdata('role') ?> <b><?php echo $this->session->userdata('nama') ?></b></a>
        </li>
      </ul>
    </div>
    </div>
  </div>
  </nav>
 