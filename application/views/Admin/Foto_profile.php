<title>Ubah Foto</title>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Ubah Foto</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php base_url() ?>dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php base_url() ?>settings">Account Settings</a></li>
                    <li class="breadcrumb-item active">Ubah Foto</li>
                </ol>
            </div>
            <!-- <div class="col-md-6 col-4 align-self-center">
                <a href="https://themewagon.com/themes/free-bootstrap-4-admin-dashboard-template/" class="btn pull-right hidden-sm-down btn-success">Download Here</a>
            </div> -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row justify-content-center">
            <!-- Column -->
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-block">
                        <form action="<?php base_url() ?>foto/edit" method="post" enctype="multipart/form-data">
                            <?= $this->session->flashdata('message'); ?>
                            <center class="m-t-30"> <img src="<?= base_url('assets/gambar/') . $user['foto_profil'] ?>" class="img-circle" width="170" />
                                <br>
                                <br>
                                <div class="form-group">
                                    <div class="col-sm-5">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_profil" name="foto_profil">
                                            <label for="foto_profil" style="text-align: left;" class="custom-file-label">Pilih gambar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <a href="<?php echo base_url(); ?>foto/hapus" onclick="return confirm('Yakin ingin menghapus foto profil?')" class="btn btn-danger">Hapus Foto</a>
                                        <button class="btn btn-primary">Ubah Foto</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">

                                    </div>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
                <center>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <a href="<?php echo base_url(); ?>setting" class="btn btn-success">Kembali</a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->