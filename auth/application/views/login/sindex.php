









<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bluebox Free Bootstrap Admin Template</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
        <center><img style="width: 100px;" height="100px" src="assets/img/jwc.png" class="brand-image">
        <font size="14"><font color="white"><b>JogjaWebCommunity</b></font></center>
                
            </div>
        </nav>
      </div>
</body>
   


<div id="page-wrapper">
<div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel panel-default">
                        <?php if($this->session->flashdata('notif')){
echo $this->session->flashdata('notif');
}?>
                        <div class="panel-heading">
                            <center><h2>Masuk Admin</h2></center>
                        </div>

                        <div class="panel-body">
        <form method="POST" action="<?php echo base_url('C_login/proses_login'); ?>"">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username')?>" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password')?>" required autofocus>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        </form>
                        </div>
                        
                    </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        

<br><br><br>
    <div class="container">
    <div class="row justify-content-md-center">
     <div class="col-md-4 col-sm-4">


                    
     </div>
    </div>
    </div>