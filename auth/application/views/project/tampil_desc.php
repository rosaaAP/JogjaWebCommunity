<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Project
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Deskripsi Project</li>
          </ol> 
                  
    </div>
    
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <a href="<?php echo base_url('c_project'); ?>" class="btn btn-success float-right"><< Kembali</a>
                        </div>
                        <div class="panel-body">
                           
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="jumbotron">
                                    <h4><b>"<?php echo $tmpl['nama_project']?>"</b></h4>
                                </div>
                                <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="cp">&lt; !DOCTYPE html &gt;</span>
                                <span class="nt"> <p align="justify"><?php echo $tmpl['desc_project']?></p> </span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    