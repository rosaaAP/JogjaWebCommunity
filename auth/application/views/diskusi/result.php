<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Diskusi
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Diskusi Komentar</li>
            </ol> 
        </div>
    
                <div id="page-inner"> 
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <a href="<?php echo base_url('C_diskusi'); ?>" class="btn btn-success float-right"><< Kembali</a>
                            </div>
                            <div class="panel-body">
                               
    <?php if($this->session->flashdata('notif')){
      echo $this->session->flashdata('notif');
    }?>            

        <h4 class="card-header">Komentar Diskusi</h4>
          <div class="card-body">
 
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Komentar oleh</th>
                          <th>Komentar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
    <?php if(count($varcari)>0)
    {
      foreach ($varcari as $data) { ?>
                        <tr>
                          <td><?php echo $data->username ?></td>
                          <td><small style='color:green'><?php echo $data->komentar ?></small></td>
                           <td><center>
                            <a href="<?php echo base_url(); ?>C_diskusi/hapuskomentar/<?php echo $data->id_komentar ?>" onclick="return confirm('Yakin untuk menghapus?');" class="btn-danger btn-sm"> Hapus</a>
                          </center></td>
                        </tr>
                      </tbody>
                       <?php }
    }
 
    else
    {
      echo "Data tidak ditemukan";
    } ?>
                    
                     </table>
           
          </div>
                        
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
        </div>





