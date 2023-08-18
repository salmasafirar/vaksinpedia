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
                                    <a href="<?php echo base_url(); ?>Foto_Hospitiva" class="btn btn-primary">Ubah Foto</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="<?php echo base_url(); ?>Password_Hospitiva" class="btn btn-secondary">Ubah Password</a>
                                </div>
                            </div>
                            <!-- <h4 class="card-title m-t-10">Hanna Gover</h4>
                            <h6 class="card-subtitle">Accoubts Manager Amix corp</h6> -->
                            <div class="row text-center justify-content-md-center">
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
                        <form action="<?php base_url() ?>Setting_Hospitiva" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
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
                                    <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
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

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <?= $this->session->flashdata('info'); ?>
                    <div class="col-md-12 col-4 align-self-right">
                        <a href="<?= base_url() ?>Schedule" class="btn pull-right hidden-sm-down btn-info">View All</a>
                    </div>
                    <h4 class="card-title">Recent Schedule</h4>
                    <div class="table-responsive m-t-40">
                        <table class="table stylish-table" id="example1">
                            <thead>
                                <tr>
                                    <th><b>Fasilitas Kesehatan</b></th>
                                    <th><b>Tanggal Vaksin</b></th>
                                    <th><b>Nama Vaskin</b></th>
                                    <th><b>Jumlah Vaksin</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($dataSchedule2->result() as $row) { ?>
                                    <tr>
                                        <td><?= $row->lokasi; ?></td>
                                        <td><?= $row->tanggal_vaksin; ?></td>
                                        <td><?= $row->nama_vaksin; ?></td>
                                        <td><?= $row->jumlah_vaccinery; ?></td>
                                        <td>
                                            <a id="set_dtl" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_detail" data-lokasi="<?= $row->lokasi; ?>" data-tanggal_vaksin="<?= $row->tanggal_vaksin; ?>" data-nama_vaksin="<?= $row->nama_vaksin; ?>" data-jumlah_vaccinery="<?= $row->jumlah_vaccinery; ?>" data-kota="<?= $row->kota ?>" data-nomor_telepon="<?= $row->nomor_telepon ?>" style="color: white;">
                                                Detail</a>
                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit<?= $row->id_schedule; ?>">
                                                Edit
                                            </button>
                                            <a href="<?= base_url() ?>Setting_Hospitiva/hapus/<?= $row->id_schedule; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');">Hapus</a>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
</div>

<!-- Modal -->
<div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="modal_label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_label" style="float: left;">Detail Data Schedule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th>Lokasi</th>
                            <td><span id="lokasi"></span></td>
                        </tr>
                        <tr>
                            <th>Tanggal Vaksin</th>
                            <td><span id="tanggal_vaksin"></span></td>
                        </tr>
                        <tr>
                            <th>Nama Vaksin</th>
                            <td><span id="nama_vaksin"></span></td>
                        </tr>
                        <tr>
                            <th>Jumlah Vaccinery</th>
                            <td><span id="jumlah_vaccinery"></span></td>
                        </tr>
                        <tr>
                            <th>Alamat Vaksinasi</th>
                            <td><span id="kota"></span></td>
                        </tr>
                        <tr>
                            <th>Nomor Telepon</th>
                            <td><span id="nomor_telepon"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
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



<!-- ============================================================== -->
<!-- Modal untuk Edit  -->
<!-- ============================================================== -->
<!--  -->

<!-- Modal -->
<!-- <?php foreach ($dataSchedule2->result() as $row) { 
        ?> -->
<div class="modal fade" id="modal-edit<?= $row->id_schedule; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <form action="<?php base_url() ?>Schedule_hospitiva/update" method="POST">
                <input type="hidden" name="id_schedule" class="form-control" value="<?= $row->id_schedule; ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Vaksin</label>
                        <input type="text" name="nama_vaksin" class="form-control" value="<?= $row->nama_vaksin; ?>">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Lokasi Vaksin</label>
                        <input type="text" name="lokasi" class="form-control" value="<?= $row->lokasi; ?>">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tanggal Vaksin</label>
                        <input type="date" name="tanggal_vaksin" class="form-control" value="<?= $row->tanggal_vaksin; ?>">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Jumlah Vaccinery</label>
                        <input type="number" name="jumlah_vaccinery" class="form-control" value="<?= $row->jumlah_vaccinery; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url(); ?>setting_hospitiva" type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Batal</a>
                    <button type="submit" class="btn btn-info">Update Data</button>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- <?php } 
        ?> -->
<!-- ============================================================== -->
<!-- Akhir Modal Edit  -->
<!-- ============================================================== -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>