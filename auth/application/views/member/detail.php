<div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Data Pengolah Anggota
                        </h1>
                        <ol class="breadcrumb">
                      <li class="active">Tabel Detail Pengolah Anggota</li>
                    </ol> 
                                    
        </div>
<div id="page-inner">
  <?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h5>
              Username : <font color="blue"><?php echo $u->nama ?></font><br>
              Role     : <font color="blue"><?php echo $u->role ?></font>
             </h5>
                        </div><hr>
                        <div class="panel-body">
                            <div class="table-responsive">
                  <table class="table table-bordered table" id="dataTables-example">
                  <thead>
                    <tr>
      <th>No</th>
      <th>Upload Pembahasan</th>
      <th>Upload Diskusi</th>
      <th>Upload Project</th>
    </tr>
    <?php 
    $no = 1;
    foreach($dataa as $u){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $jmlKomen ?> Komentar // <?php $jmlKomen['jmlKomen']; ?> Komentar> </td>
      <td>30 kali</td>
      <td><?php echo $u->nama ?></td>
    </tr>
    <?php } ?>
                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        
