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
        <div class="card">
            <div class="card-block">
                <div class="box">
                    <div class="box-header">
                        <h4 class="card-title " style="text-align: center;"><b>DATA VACCINERY</b></h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table stylish-table">
                            </br>
                            <thead>
                                <tr>
                                    <th><b>NIK</b></th>
                                    <th><b>Nama</b></th>
                                    <th><b>Lokasi Vaksin</b></th>
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
                                        <td><?= $row->lokasi_vaksin; ?></td>
                                        <td><?= $row->tanggal_vaksin; ?></td>
                                        <td><?= $row->no_antrian; ?></td>
                                        <td>
                                            <a id="detail_vaccinery_hospitiva" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-detail" data-nik="<?= $row->nik ?>" data-nama_lengkap="<?= $row->nama_lengkap ?>" data-jenis_kelamin="<?= $row->jenis_kelamin ?>" data-tanggal_lahir="<?= $row->tanggal_lahir ?>" data-fasilitas_kesehatan="<?= $row->fasilitas_kesehatan ?>" data-no_hp_sms="<?= $row->no_hp_sms ?>" data-no_hp_wa="<?= $row->no_hp_wa ?>" data-email="<?= $row->email ?>" data-alamat="<?= $row->alamat ?>" data-kecamatan="<?= $row->kecamatan ?>" data-kelurahan="<?= $row->kelurahan ?>" data-domisili="<?= $row->domisili ?>" data-lokasi_vaksin="<?= $row->lokasi_vaksin ?>" data-tanggal_vaksin="<?= $row->tanggal_vaksin ?>" data-no_antrian="<?= $row->no_antrian ?>" style="color:white">
                                                Detail
                                            </a>
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

        <!-- Row -->
        <!-- Row -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
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
                    <table class="table table-bordered no-margin">
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
                                <th>Nomor Antrian</th>
                                <td><span id="no_antrian"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>