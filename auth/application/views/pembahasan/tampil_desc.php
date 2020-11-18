<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Pembahasan
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Deskripsi Pembahasan</li>
          </ol> 
                  
    </div>
    
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <a href="<?php echo base_url('C_pembahasan'); ?>" class="btn btn-success float-right"><< Kembali</a>
                        </div>
                        <div class="panel-body">
                           
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="jumbotron">
                                    <h2>"<?php echo $kategori['judul_pmbhsn']?>"</h2>
                                </div>
                                <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="cp">&lt; !DOCTYPE html &gt;</span>
                                <span class="nt"> <?php echo $kategori['desc_pmbhsn']?> </span>
                            </div>
                        </div>
                        <div class="form-group row" readonly>
                                <div class="col-12 col-sm-8 col-lg-6" readonly>
                                  <label>Pembahasan dalam Source Code</label>
                                  <textarea disabled style="width:1050px; height:200px" class="ckeditor" id="ckedtor" name="isi" readonly><?= $kategori['desc_pmbhsn']; ?></textarea>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     

