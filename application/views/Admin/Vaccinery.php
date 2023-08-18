<title>Vaccinery</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Data Vaccinery</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Vaccinery</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <?= $this->session->flashdata('info'); ?>
                        <h4 class="card-title " style="text-align: center;"><b>DATA VACCINERY</b></h4>
                        <div class="table-responsive m-t-40">
                            <table id="example1" class="table stylish-table">
                                <thead>
                                    <tr>
                                        <th><b>NIK</b></th>
                                        <th><b>Nama</b></th>
                                        <th><b>Lokasi Vaskin</b></th>
                                        <th><b>Tanggal Vaksin</b></th>
                                        <th><b>No Antrian</b></th>
                                        <th><b>Aksi</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($dataVaccinery->result() as $row) { ?>
                                        <tr>
                                            <td><?= $row->nik; ?></td>
                                            <td><?= $row->nama_lengkap; ?></td>
                                            <td><?= $row->fasilitas_kesehatan; ?></td>
                                            <td><?= $row->tanggal_vaksin; ?></td>
                                            <td><?= $row->no_antrian; ?></td>
                                            <td>
                                                <a id="detail_vaccinery_dashboard_admin" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-detail" data-nik="<?= $row->nik ?>" data-nama_lengkap="<?= $row->nama_lengkap ?>" data-jenis_kelamin="<?= $row->jenis_kelamin ?>" data-tanggal_lahir="<?= $row->tanggal_lahir ?>" data-fasilitas_kesehatan="<?= $row->fasilitas_kesehatan ?>" data-no_hp_sms="<?= $row->no_hp_sms ?>" data-no_hp_wa="<?= $row->no_hp_wa ?>" data-email="<?= $row->email ?>" data-alamat="<?= $row->alamat ?>" data-kecamatan="<?= $row->kecamatan ?>" data-kelurahan="<?= $row->kelurahan ?>" data-domisili="<?= $row->domisili ?>" data-lokasi_vaksin="<?= $row->lokasi_vaksin ?>" data-tanggal_vaksin="<?= $row->tanggal_vaksin ?>" data-no_antrian="<?= $row->no_antrian ?>" style="color:white">
                                                    Detail
                                                </a>

                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit<?= $row->id_vaccinery; ?>">
                                                    Edit
                                                </button>
                                                <a href="<?= base_url() ?>Vaccinery/hapus/<?= $row->id_vaccinery; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');">Hapus</a>

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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Modal untuk detail  -->
    <!-- ============================================================== -->

    <div class="modal fade" id="modal-detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Data Vaccinery</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                    <table id="example1" class="table table-bordered no-margin">
                        <tbody>
                            <tr>
                                <th>NIK</th>
                                <td><span id="nik"></span></td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td><span id="nama_lengkap"></span></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td><span id="jenis_kelamin"></span></td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td><span id="tanggal_lahir"></span></td>
                            </tr>
                            <tr>
                                <th>Fasilitas Kesehatan</th>
                                <td><span id="fasilitas_kesehatan"></span></td>
                            </tr>
                            <tr>
                                <th>No HP SMS</th>
                                <td><span id="no_hp_sms"></span></td>
                            </tr>
                            <tr>
                                <th>No HP WA</th>
                                <td><span id="no_hp_wa"></span></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><span id="email"></span></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><span id="alamat"></span></td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td><span id="kecamatan"></span></td>
                            </tr>
                            <tr>
                                <th>Kelurahan</th>
                                <td><span id="kelurahan"></span></td>
                            </tr>
                            <tr>
                                <th>Domisili</th>
                                <td><span id="domisili"></span></td>
                            </tr>
                            <tr>
                                <th>Lokasi Vaksin</th>
                                <td><span id="lokasi_vaksin"></span></td>
                            </tr>
                            <tr>
                                <th>Tanggal Vaksin</th>
                                <td><span id="tanggal_vaksin"></span></td>
                            </tr>
                            <tr>
                                <th>No Antrian</th>
                                <td><span id="no_antrian"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Akhir Modal Detail  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Modal untuk Edit  -->
    <!-- ============================================================== -->
    <!--  -->

    <!-- Modal -->
    <!-- <?php foreach ($dataVaccinery->result() as $row) {
            ?> -->
    <div class="modal fade" id="modal-edit<?= $row->id_vaccinery; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Vaccinery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <form action="<?php base_url() ?>Vaccinery/update" method="POST">
                    <input type="hidden" name="id_vaccinery" class="form-control" value="<?= $row->id_vaccinery; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" class="form-control" value="<?= $row->nik; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="<?= $row->nama_lengkap; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" value="<?= $row->jenis_kelamin; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="<?= $row->tanggal_lahir; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Fasilitas Kesehatan</label>
                            <input type="text" name="fasilitas_kesehatan" class="form-control" value="<?= $row->fasilitas_kesehatan; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>No HP SMS</label>
                            <input type="phone_number" name="no_hp_sms" class="form-control" value="<?= $row->no_hp_sms; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>No HP WA</label>
                            <input type="phone_number" name="no_hp_wa" class="form-control" value="<?= $row->no_hp_wa; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $row->email; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?= $row->alamat; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" value="<?= $row->kecamatan; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <input type="text" name="kelurahan" class="form-control" value="<?= $row->kelurahan; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Domisili</label>
                            <input type="text" name="domisili" class="form-control" value="<?= $row->domisili; ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Lokasi Vaksin</label>
                            <input type="text" name="lokasi_vaksin" class="form-control" value="<?= $row->lokasi_vaksin; ?>">
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
                            <label>No Antrian</label>
                            <input type="number" name="no_antrian" class="form-control" value="<?= $row->no_antrian; ?>">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="<?php echo base_url(); ?>Vaccinery" type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Batal</a>
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