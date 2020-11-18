<div id="page-wrapper" >
      <div class="header"> 
                        <h1 class="page-header">
                             Data Pengolah Anggota
                        </h1>
            <ol class="breadcrumb">
            <li class="active">Profil Anggota</li>
          </ol> 
                  
    </div>
    
            <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <a href="<?php echo base_url('C_member'); ?>" class="btn btn-success float-right"><< Kembali</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
<?php if($this->session->flashdata('notif')){
  echo $this->session->flashdata('notif');
}?>
                                <div class="col-lg-6">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_member" value="<?= $member['id_member'];?>">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Username</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="username"  class="form-control" value="<?= $member['username'];?>" >
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Nama User</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="nama" class="form-control" value="<?= $member['nama'];?>" >
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="email" class="form-control" value="<?= $member['email'];?>" >
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="tgl_lhr"  class="form-control" value="<?php echo date('d F Y', strtotime($member['tgl_lhr'])); ?>" readonly>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Kegiatan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="pekerjaan" class="form-control">
                                            <option value="<?= $member['pekerjaan'];?>"><b>--<?= $member['pekerjaan'];?>--</b></option>
                                            <option value="Pelajar">Pelajar</option>
                                            <option value="Mahasiswa">Mahasiswa</option>
                                            <option value="Freelance">Freelance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Tanggal Bergabung</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="tgl_daftar" class="form-control" value="<?php echo date('d F Y', strtotime($member['tgl_daftar'])); ?>" readonly>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Role</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="role" class="form-control">
                                            <option value="<?= $member['role'];?>">--<?= $member['role'];?>--</option>
                                            <option value="reguler">reguler</option>
                                            <option value="member">member</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Foto Profil</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <img  height="150px" src="<?php echo base_url(); ?>../images/<?= $member['fotoprofil']; ?>">
                                    </div>
                                </div>
                                    <div>
                                        <button type="submit" name="simpan" class="btn btn-success float-right">Simpan</button>
                                    </div>
                                </div>
                            </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
     