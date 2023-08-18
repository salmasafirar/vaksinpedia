<title>Ubah Password</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Ubah Password</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php base_url() ?>dashboard_user">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php base_url() ?>settings_user">Account Settings</a></li>
                    <li class="breadcrumb-item active">Ubah Password</li>
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
                        <form action="<?php base_url() ?>password_user" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                            <?= $this->session->flashdata('message'); ?>
                            <center>
                                <h3><b>Ubah Password</b></h3>
                            </center>
                            <br>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Password Lama</label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control form-control-line" name="password_lama" id="password_lama" value="<?= set_value('password_lama'); ?>">
                                    <?= form_error('password_lama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password Baru</label>
                                <div class="col-md-12">
                                    <input type="password" name="password" id="password" class="form-control form-control-line" value="<?= set_value('password'); ?>">
                                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Konfirmasi Password Baru</label>
                                <div class="col-md-12">
                                    <input type="password" name="konf_password" id="konf_password" class="form-control form-control-line" value="<?= set_value('konf_password'); ?>">
                                    <?= form_error('konf_password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="<?php echo base_url(); ?>setting_user" class="btn btn-danger">Batal</a>
                                    <button type="submit" class="btn btn-primary" style="float:right;">Ubah Password</button>
                                </div>
                            </div>
                        </form>
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