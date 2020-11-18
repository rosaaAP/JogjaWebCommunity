
<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"> Materi Pembahasan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><font color="blue"> Halaman Materi </font></li>
              </ol>
            </div><!-- /.col -->
          </div>
        </div>
    
      <div class="container">
        <div class="container-fluid">
         <div class="card shadow mb-4">
               <div class="card-header">
                <?php
            // Cek role user
            if($this->session->userdata('role') == 'member'){ // Jika role-nya member
                ?>
              <a href="<?php echo site_url('C_pembahasan/tambah'); ?>" class="btn btn-primary ">+Materi</a>
                <?php
            }
            ?><hr>

                <form action="<?php echo site_url('C_materi/hasil'); ?>" action="GET">
                                    <div class=" float-right">
                                      Search: <input type="text"  id="cari" name="cari" placeholder="">
                                        <!--input class="btn btn-primary" type="submit" value="Cari"-->
                                    </div>
                </form>
                              
          </div> 
            <div class="card-body" style="background:#428bca">
              <div class="row">
              <?php foreach ( $varmateri as $dt) : ?>
                  <div class="col-md-3 mb-6">
                    <div>                                       <!--class="card bg-light"-->
                      <div class="card bg-light">
                           <center><a href="<?php echo site_url('C_pembahasan/detail/'); ?><?= $dt['id_pembahasan']; ?>">
                              <img  src="<?php echo base_url(); ?>./auth/gbr_pmbhsn/<?= $dt['gambar']; ?>" height="150px" width="150px">
                            </a></center>
                           <b><a href="<?php echo site_url('C_pembahasan/detail/'); ?><?= $dt['id_pembahasan']; ?>">
                            <font size="4"><?php echo $dt['judul_pmbhsn']?></font>
                            </b></a><br>
                           <font size="3"> Materi : <b><?php echo $dt['nama_materi']?></font></b>
                           <!--h7 style="color: #000;"><?php echo  substr ($dt['desc_pmbhsn'],0,36); ?>....</h7>
                           <br><br>
                           <p style="text-align:right;">
                            <a href="<?php echo base_url(); ?>C_materi/detail/<?= $dt['id_pembahasan']; ?>">
                              <button class="btn btn-outline-primary my-2 my-sm-0" name="btn_tambah">Baca Selengkapnya....</button>
                            </a>
                           </p-->
                      </div>
                    </div>
                  </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
            
      </div>
    </div>
    <br><br><br><br><br>



    