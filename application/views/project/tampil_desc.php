<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Project</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><font color="blue"> Halaman Project</font></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
</div>

<div class="container">
  <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                    <div class="panel panel-default">
                        <div class="card">
                          <div class="card-header">
                            <a href="<?php echo site_url('C_project'); ?>" class="btn btn-success float-right"><< Kembali</a>
                        </div>   
                        </div>
                        <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                    <h4><b>"<?php echo $tmpl['nama_project']?>"</b></h4>
                                <div class="jumbotron">
                                <figure class="highlight"><pre><code class="language-html" data-lang="html">
                                    <!--span class="cp">&lt; !DOCTYPE html &gt;</span-->
                                <span class="nt"> <p align="justify"><?php echo $tmpl['desc_project']?></p> </span></code></pre></figure>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>

