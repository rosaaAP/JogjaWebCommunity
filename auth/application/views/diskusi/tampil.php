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

                           <div class="col-md-12">
                                <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="cp">&lt; !DOCTYPE html &gt;</span>
                                <span class="nt"> <p align="justify"> <?= $varDiskusi['isi']; ?></p> </span></figure></code></pre>
                            </div>
               
           
                  
                  <h4 class="card-header">Komentar Diskusi</h4><hr>
                  <form action="<?php echo base_url('C_diskusi/hasil'); ?>" action="GET">
                                    <div class=" float-right">
                                      Search: <input type="text"  id="cari" name="cari" placeholder="Ejaan Komentar">
                                        <!--input class="btn btn-primary" type="submit" value="Cari"-->
                                    </div>
                </form> <br>
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
                             <?php foreach($komen as $komen) :     ?>
                        <tr>
                          <td><i><?= $komen['role']; ?></i> <b><?= $komen['username']; ?> <i><font color="red">(<?= $komen['tgl_komen']; ?>)</font></i></b></td>
                          <td><small style='color:green'><?php echo $komen['komentar']?></small></td>
                           <td><center>
                            <a href="<?php echo base_url(); ?>C_diskusi/hapuskomentar/<?= $komen['id_komentar'];?>" onclick="return confirm('Yakin untuk menghapus?');" class="btn-danger btn-sm"> Hapus</a>
                          </center></td>
                        </tr>
                      </tbody>
                       <?php endforeach; ?>
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





