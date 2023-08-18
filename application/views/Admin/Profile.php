<title>Account Settings</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Account Settings</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active">Account Settings</li>
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
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-block">
                        <center class="m-t-30"> <img src="<?= base_url('assets/gambar/') . $user['foto_profil'] ?>" class="img-circle" width="140" />
                            <br>
                            <br>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Lihat Foto</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="<?php echo base_url(); ?>Foto" class="btn btn-primary">Ubah Foto</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="<?php echo base_url(); ?>password" class="btn btn-secondary">Ubah Password</a>
                                </div>
                            </div>
                            <!-- <h4 class="card-title m-t-10">Hanna Gover</h4>
                            <h6 class="card-subtitle">Accoubts Manager Amix corp</h6> -->
                            <div class="row text-center justify-content-md-center">

                                <!-- <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                        <font class="font-medium">254</font>
                                    </a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                        <font class="font-medium">54</font>
                                    </a></div> -->
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <form action="<?php base_url() ?>Setting" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                            <?= $this->session->flashdata('message'); ?>
                            <h3><b>Ubah Data Diri</b></h3>
                            <br>
                            <div class="form-group">
                                <label class="col-md-12">Nama</label>
                                <div class="col-md-12">
                                    <input type="text" name="nama" id="nama" value="<?= $user['nama']; ?>" class="form-control form-control-line">
                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Tanggal Lahir</label>
                                <div class="col-md-12">
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $user['tanggal_lahir']; ?>" class="form-control form-control-line">
                                    <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Jenis Kelamin</label>
                                <br>
                                <br>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="jenis_kelamin" required="required" value="Perempuan" <?= ($user['jenis_kelamin'] == 'Perempuan' ? ' checked' : ''); ?>> Perempuan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki" <?= ($user['jenis_kelamin'] == 'Laki-Laki' ? ' checked' : ''); ?>> Laki-Laki
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Alamat</label>
                                <div class="col-md-12">
                                    <textarea rows="3" class="form-control form-control-line" name="alamat" id="alamat"><?= $user['alamat']; ?></textarea>
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <br>
                            <h3><b>Ubah Kontak</b></h3>
                            <br>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line" name="email" id="email" value="<?= $user['email']; ?>">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">No. HP</label>
                                <div class="col-md-12">
                                    <input type="number" name="no_hp" id="no_hp" value="<?= $user['no_hp']; ?>" class="form-control form-control-line">
                                    <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Update Profile</button>
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
    <!-- Row -->
    <!-- Row -->
</div>

<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <center>
                    <img src="<?= base_url('assets/gambar/') . $user['foto_profil'] ?>" alt="" class="img-responsive">
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>