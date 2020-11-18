<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JWCOM Authentication | Jogja Web Community</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
  
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?php echo base_url(); ?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?php echo base_url(); ?>assets/css/custom-styles.css" rel="stylesheet" />

    <!-- Google Fonts-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.css" >
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/Lightweight-Chart/cssCharts.css" > 
    
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https:///maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong>JWCom</strong></a> 
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a aria-expanded="false">
                        <h5><font color="black"> Tanggal Sekarang : <?php echo date('d F Y'); ?></font></h5>   
                    </a>
                </li>
                <li>
                    <a aria-expanded="false">
                         <h5> Selamat datang Admin <b>"<?php echo $this->session->userdata('username') ?>"</b></h5> 
                    </a> 
                </li>
                <li>
                    <a class="dropdown-toggle"  href="<?php echo site_url('C_login/logout'); ?>" onclick="return confirm('Yakin untuk Sign out?');">
                        <i class="fa fa-user fa-fw"></i><b>Sign Out</b>
                    </a>
                </li>
                <li>
                    <a class="dropdown-toggle"  href="<?php echo site_url('C_login/logout'); ?>" onclick="return confirm('Yakin untuk Sign out?');">
                    </a>
                </li>
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="<?php echo site_url(); ?>C_beranda" ><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('C_admin'); ?>" ><i class="fa fa-desktop"></i> Pengolah Admin</a>
                    </li>
					<li>
                        <a href="<?php echo base_url('C_member'); ?>" ><i class="fa fa-bar-chart-o"></i> Pengolah Anggota</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('C_materi'); ?>" ><i class="fa fa-sitemap"></i> Materi</a>
                
                        <a href="<?php echo base_url('C_pembahasan'); ?>" ><i class="fa fa-sitemap"></i> Pembahasan</a>
                    
                        <a href="<?php echo base_url('C_project'); ?>" ><i class="fa fa-sitemap"></i> Project</a>
                    
                        <a href="<?php echo base_url('C_diskusi'); ?>" ><i class="fa fa-sitemap"></i> Diskusi</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url('C_info'); ?>" ><i class="fa fa-table"></i> Pengolah Info</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('C_home/ubah'); ?>" ><i class="fa fa-edit"></i> Pengolaha Artikel Home </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
