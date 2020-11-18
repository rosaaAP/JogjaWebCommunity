 <div class="card-body bg-light">
      <div class="container">
        <div class="row">
              <div class="col-md-4 sidebar" id="site-sidebar">
              <aside class="widgets">
                  <br><br>
              <div class="row">
                <div class="col-sm-12">
                      <div>       
                        <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                               <div class="info-box-content">
                                  <span class="info-box-text"><h5>Anggota Tergabung</h5></span>
                                  <span class="info-box-number"><h4><?php echo $dt1 ?></h4></span>
                               </div>
                        </div>
                      </div>
                 </div>
                <div class="col-sm-12">       
                  <aside>
                        <?php
                            include 'kalender.php';
                              $tgl_skrg=date("d");
                              $bln_skrg=date("n");
                              $thn_skrg=date("Y");
                              echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg); 
                        ?>
                  </aside>
                </div>
                </div>
              </aside>
            </div>
              


              <div class="col-md-8 articles" id="site-content">
                <br>  
                <hr>
                <h3><i>Tentang Kami</i></h3>
                     <div class="container">
                      <br>
                      <?php  foreach ( $varArtikel as $u) : ?>
                        <div class="card text-dark">
                         <div class="card-body">
                          <h3><?= $u['judul']; ?></h3>
                           <h6 style="color: #000;">Author :<?= $u['judul']; ?></h6>
                           <br>
                           <p align="justify"><?php echo $u['isi']; ?></p>
                           <br><br><br>
                         </div>
                        </div>
                      <?php endforeach; ?>
                     </div>
                     <br><br><br>
               </div>
                 
      </div>
      </div>
</div>



