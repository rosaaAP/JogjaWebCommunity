<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Materi Pembahasan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Pembahasan</font></li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>

<div class="container">
  <div class="container-fluid">
        <div class="card text-dark">
          <!--div class="card-header py-3">
              <a href="<?php echo base_url(); ?>C_materi/<?= $varpmbhsn['id_materi']; ?>" class="btn btn-success float-right"><< Kembali</a>
          </div-->
            <div class="card-body">
             <br>
            
          <label><font color="red"> Pembahasan</font></label>

            <div class="card-body" readonly>

<div class="card shadow mb-4">
                  <div class="card-body">
                    <h4><b>"<?= $varpmbhsn['judul_pmbhsn']; ?>"</b></h4><hr>
                            <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="jumbotron"><code class="language-html" data-lang="html"><span class="cp">&lt; !DOCTYPE html &gt;</span></code>
                                            <?= $varpmbhsn['desc_pmbhsn']; ?>
                                        </div>
                            </div>

                  </div>
                 </div>

          </div>
          </div><br>
          <div class="card-body"><hr>
           <label><font color="blue">Pembahasan dalam Source Code</font></label>
              <textarea disabled style="width:1050px; height:200px" class="ckeditor" id="ckedtor" name="isi" readonly><?= $varpmbhsn['desc_pmbhsn']; ?></textarea>
                  </div>
        </div>
      </div>
    
  </div>
</div>
</div>
</div>