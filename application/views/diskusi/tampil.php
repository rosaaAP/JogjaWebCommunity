 <!--script type="text/javascript" src="<?php echo base_url(); ?>/assets/ckeditor/ckeditor.js"></script-->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
              <div class="table-responsive">
                 <div class="card-header py-2">
                  <a href="<?php echo site_url('C_diskusi'); ?>" class="btn btn-success float-right"><< Kembali</a>
                </div>

                 <div class="card shadow mb-4">
                  <div class="card-body">
                    <h4><b>"<?php echo $dt['topik']?>"</b></h4><hr>
                            <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="jumbotron"><code class="language-html" data-lang="html"><span class="cp">&lt; !DOCTYPE html &gt;</span></code>
                                            <?php echo $dt['isi']?>
                                        </div>
                            </div>

                  </div>
                 </div>
             </div>
              <hr>

<!-------------------------------------------KOMENTAR----------------------------------------->

 <!--a href="<?php echo site_url('C_diskusi/tampil_komen/'); ?><?= $dt['id_diskusi'];?>" class="w3-button w3-block w3-teal w3-section w3-padding">Berikan Komentar</a-->
<div class="card shadow mb-4">
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
                <img width='45px' src="<?php echo base_url(); ?>./images/<?= $komen['fotoprofil']; ?>"  alt='User Image'>
                <i><?= $komen['role']; ?></i> <b><?= $komen['username']; ?></b>
                <i><font color="red">(<?php echo date ('d-m-Y H:i:s', strtotime($komen['tgl_komen'])); ?>)</font></i>
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
                   <form action="<?php echo site_url('C_diskusi/tambah_komentar'); ?>" method="post" id="formkomentar">
                      <div class="form-group row">
                        <label>Komentar</label>
                          <div class="col-12 col-sm-10 col-lg-12">
                            <input type="hidden" id="id_member" name="id_member" value="<?= $dt['id_member'] ?>" class="form-control" readonly>
                            <input type="hidden" id="id_diskusi" name="id_diskusi" value="<?= $dt['id_diskusi'] ?>" class="form-control" readonly>
                            <input type="hidden" id="id_member" name="id_member" value="<?= $varData['id_member'] ?>" class="form-control" readonly>
                            <textarea name="komentar" placeholder="Masukkan Komentar Anda" id="komentar" onclick='validasi("komentar","KOMENTAR")' required minlength="4" title="Inputan minimal 4 karakter" maxlength="1500" class="form-control"></textarea>
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
<script>

    var form = document.querySelector("#formkomentar");

    function validasi(textbox, text) {
        var input = document.getElementById(textbox);

        var cek = form.checkValidity()
        if (cek == false) {
            input.oninvalid = function(e) {
                if (e.target.validity.valueMissing) {
                    e.target.setCustomValidity(text + " TIDAK BOLEH KOSONG");
                    return;
                }
            }
            input.oninput = function(e) {
                e.target.setCustomValidity("")
            }
            form.reportValidity();
            console.log(cek);
        }

    }
  </script>