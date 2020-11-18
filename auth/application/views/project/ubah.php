      <?php $this->load->view('template/sidebar') ?>

<div class="content-wrapper">

  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengolahan Pembahasan </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="card-body card-block">
                 <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="xjudul" placeholder="Judul" value="<?= $dataa['judul_project'];?>">
            <input type="file" name="filefoto" value="<?= $dataa['gambar'];?>">
            <input type="text" name="desc_project" placeholder="Deskripsi" value="<?= $dataa['desc_project'];?>">
            <button type="submit" name="simpan" class="btn btn-success float-right">Simpan</button>
            </form>
                                    
            </div>


<?php $this->load->view('template/footer') ?>