<title>Informasi Lengkap</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Informasi Lengkap</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active">Informasi Lengkap</li>
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
        <div class="row">
            <div class="col-lg-7  col-md-5">
                <div class="card">
                    <div class="card-block">
                        <form action="<?php base_url() ?>Setting" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                            <?= $this->session->flashdata('message'); ?>
                            <h3 style="text-align:center;"><b>Data Diri</b></h3>

                    </div>
                    <div class="form-group">
                        <label class="col-md-12">NIK</label>
                        <div class="col-md-12">
                            <input type="text" name="nik" id="nik" value="<?= $user['nik']; ?>" class="form-control form-control-line" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama</label>
                        <div class="col-md-12">
                            <input type="text" name="nama" id="nama" value="<?= $user['nama_lengkap']; ?>" class="form-control form-control-line" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tanggal Lahir</label>
                        <div class="col-md-12">
                            <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= $user['tanggal_lahir']; ?>" class="form-control form-control-line" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Jenis Kelamin</label>
                        <div class="col-md-12">
                            <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= $user['jenis_kelamin']; ?>" class="form-control form-control-line" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Alamat</label>
                        <div class="col-md-12">
                            <textarea rows="3" class="form-control form-control-line" name="alamat" id="alamat" disabled><?= $user['alamat']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="text" name="email" id="email" value="<?= $user['email']; ?>" class="form-control form-control-line" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">No. HP</label>
                        <div class="col-md-12">
                            <input type="text" name="no_hp" id="no_hp" value="<?= $user['no_hp_sms']; ?>" class="form-control form-control-line" disabled>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="card">
                    <div class="card-block">
                        <form action="<?php base_url() ?>Setting" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                            <?= $this->session->flashdata('message'); ?>
                            <h3 style="text-align:center;"><b>Jadwal dan Lokasi Vaksinasi</b></h3>

                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tanggal</label>
                        <div class="col-md-12">
                            <input type="text" name="tanggal_vaksin" id="tanggal_vaksin" value="<?= $user['tanggal_vaksin']; ?>" class="form-control form-control-line" disabled>
                        </div>
                        <label class="col-md-12">Antrian</label>
                        <div class="col-md-12">
                            <input type="text" name="no_antrian" id="no_antrian" value="<?= $user['no_antrian']; ?>" class="form-control form-control-line" disabled>
                        </div>
                        <label class="col-md-12">Lokasi</label>
                        <div class="col-md-12">
                            <input type="text" name="lokasi_vaksin" id="lokasi_vaksin" value="<?= $user['lokasi_vaksin']; ?>" class="form-control form-control-line" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>