 <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Forum Diskusi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Diskusi</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

</div>
<div class="container">
  <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                 <div class="card-header py-2">
              <a href="<?php echo base_url('c_diskusi/index'); ?>" class="btn btn-success float-right"><< Kembali</a>
            </div>
            </div>
            <hr>

<!-------------------------------------------KOMENTAR----------------------------------------->

      <h4 class="card-header">Komentar Diskusi</h4>
      <div class="card-body">
          <div class="direct-chat-messages">
             <table class='table table-hover'>
             <thead>
              <?php    $no = 1; foreach($komen as $komen) :     ?>
              <tr class='hidden-xs' bgcolor="#f4f4f4">
               <td valign='top'  width='100px'>
                <div>
                <a href="">
                <img width='50px' src="<?php echo base_url(); ?>./images/<?= $komen['fotoprofil']; ?>"  alt='User Image'>
                <i><?= $komen['role']; ?></i> <b><?= $komen['username']; ?></b>
                <i><font color="red">(<?= $komen['tgl_komen']; ?>)</font></i>
                </a>
                <div style='background:#e3e3e3'>
                     <span style='padding-left:12px' style="font-family:monospace;"><small style='color:green'><?php echo $komen['komentar']?></small></span>
                  </div>
                </div>
               </td>
              </tr>
              <?php endforeach; ?>
            </thead>
             </table>
          </div>
      </div>
</div>
</div>
</div>
</div>
<!--------------------------------------------KOLOM KOMENTAR-------------------------------->

<div class="container">
  <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
         
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
            <div class="card-body">
                   <form action="<?php echo site_url('C_diskusi/tambah_komentar'); ?>" method="post">
                      <div class="form-group row">
                        <label>Komentar</label>
                          <div class="col-12 col-sm-10 col-lg-12">
                            <input type="hidden" id="id_member" name="id_member" value="<?= $dt['id_member'] ?>" class="form-control" readonly>
                            <input type="hidden" id="id_diskusi" name="id_diskusi" value="<?= $dt['id_diskusi'] ?>" class="form-control" readonly>
                            <input type="hidden" id="id_member" name="id_member" value="<?= $varData['id_member'] ?>" class="form-control" readonly>
                            <textarea name="komentar" placeholder="Masukkan Komentar Anda" id="komentar" onclick='validasi("komentar","KOMENTAR")' required minlength="4" title="Inputan minimal 4 karakter" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="form-group row text-center">
                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                          <input type="submit" value="Simpan" class="btn btn-space btn-primary">    
                        </div>
                     </div>
                  </form>
          </div>
        </div>
           </div>
        </div>
  </div>
</div>
</div>



