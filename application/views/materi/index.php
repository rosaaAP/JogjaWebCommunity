
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
               <div class="card-header py-8">
                <?php
            // Cek role user
            if($this->session->userdata('role') == 'member'){ // Jika role-nya member
                ?>
              <a href="<?php echo site_url('C_pembahasan/tambah'); ?>" class="btn btn-secondary ">+Materi</a>
                <?php
            }
            ?>
                <!--form class="form-inline my-2 my-lg-0" style="float: right;" action="" method="POST">
                    <input class="form-control mr-sm-2" name="input_cari" type="search" placeholder="Cari Judul">
                    <input class="form-control mr-sm-2" type="submit" name="search" value="Cari">
                </form-->
               </div> 
            <div class="card-body">
              <div class="row">
              <?php foreach ( $varmateri as $dt) : ?>
                  <div class="col-md-3 mb-5">
                    <div>                                       <!--class="card bg-light"-->
                      <div class="card-body">
                           <center><a href="<?php echo base_url(); ?>C_materi/detail/<?= $dt['id_pembahasan']; ?>">
                              <img  src="<?php echo base_url(); ?>./auth/gbr_pmbhsn/<?= $dt['gambar']; ?>" height="150px" width="150px">
                            </a></center>
                           <b><a href="<?php echo base_url(); ?>C_materi/detail/<?= $dt['id_pembahasan']; ?>">
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



    