
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
                <form action="<?php echo site_url('C_materi/hasil'); ?>" action="GET">
                                    <div class=" float-right">
                                      Search: <input type="text"  id="cari" name="cari" placeholder="">
                                        <!--input class="btn btn-primary" type="submit" value="Cari"-->
                                    </div>
                </form>
                              
              </div>
            <div class="card-body" style="background:#428bca">
              <div class="row">
                <!--label>Pembahasan materi berjudul</label>"<?php 'cari' ?>"-->
              <?php if(count($varcari)>0)
    {
      foreach ($varcari as $data) { ?>
                  <div class="col-md-3 mb-6">
                    <div>                             
                      <div class="card bg-light">
    <center><a href="<?php echo site_url('C_pembahasan/detail/'); ?><?php echo $data->id_pembahasan ?>">
    <img  src="<?php echo base_url(); ?>./auth/gbr_pmbhsn/<?php echo $data->gambar ?>" height="150px" width="150px"></a></center>
    <b><a href="<?php echo site_url('C_pembahasan/detail/'); ?><?php echo $data->id_pembahasan ?>">
    <font size="4"><?php echo $data->judul_pmbhsn ?></font></b></a><br>
    <font size="3"> Materi : <b><?php echo $data->nama_materi ?></font></b>
                      </div>
                    </div>
                  </div>
              <?php }
    }
 
    else
    {
      echo "Data tidak ditemukan";
    } ?>
            </div>
          </div>
        </div>

            
      </div>
    </div>
    <br><br><br><br><br>