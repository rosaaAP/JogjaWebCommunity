<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cetak Laporan Anggota</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>images/logo.jpg">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/logo.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

   <style>
    #weatherWidget .currenthesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 th {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">  
                            <div class="card-body">
                                <head>

            <h3 align="center">
      JogjaWeb Community
      <br>
      <small>Jl. Candi Gebang, Jetis, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55282, email jwcom.jogja@gmail.com </small>
      </h3>
      <hr style="color: #000;">
      <br>
      <h4 align="center">
      Laporan Data Anggota Tergabung
      </h4>

                                <table border="1" cellpadding="8" cellspacing="2" align="center">
          <col width="20">
          <col width="200">
          <col width="80">
          <col width="120">
          <col width="180">
          <col width="150">
          <col width="150">                      
                    <tr>
                      <th align="center" style="color: #000;">No</th>
                      <th align="center" style="color: #000;">Nama Lengkap</th>
                      <th align="center" style="color: #000;">Username</th>
                      <th align="center" style="color: #000;">Email</th>
                      <th align="center" style="color: #000;">Tanggal Lahir</th>
                      <th align="center" style="color: #000;">Role</th>
                      <th align="center" style="color: #000;">Tanggal bergabung</th>
                    </tr>
                    <?php $no=1; foreach ( $data as $data) : ?>
                    <tr>
                      <td style="color: #000;"><?= $no; ?></td>
                      <td style="color: #000;"><?= $data['nama']; ?></td>
                      <td align="center" style="color: #000;"><?= $data['username']; ?></td>
                      <td align="center" style="color: #000;"><?= $data['email']; ?></td>
                      <td align="center" style="color: #000;"><?= date ('d-m-Y', strtotime($data['tgl_lhr'])); ?></td>
                      <td align="center" style="color: #000;"><?= $data['role']; ?></td>
                      <td style="color: red;"><?php echo date('d F Y', strtotime($data['tgl_daftar'])); ?></td>
                      </tr>
                       <?php $no++; ?>
                                   <?php endforeach; ?>
                    
  </table>
                               
                        <br>
                         <label>Yogyakarta ,</label><?php echo date('d F Y'); ?><br>
                         <label>Pengelola JogjaWebCom</label>
                         <br>
                         <br>
                         <label>Edison Nuryudi</label>
                        <center><a href="" onclick="window-print()">--Cetak--</a></center>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/init/fullcalendar-init.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/select2.full.min.js"></script>
</body>
</html>