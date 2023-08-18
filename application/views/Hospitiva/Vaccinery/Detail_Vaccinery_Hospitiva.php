<title>Detail Vaccinery</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Detail Data Vaccinery</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Vaccinery</a></li>
                    <li class="breadcrumb-item active">Detail Vaccinery</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title" style="text-align:center;"><b>DETAIL DATA VACCINERY</b></h4>
                        <div class="table-responsive m-t-40">
                            <table class="table table-borderless">
                                <tbody style="text-align:left;">
                                    <?php
                                    foreach($detail->result() as $row){ ?>
                                        <tr >
                                            <th>NIK</th>
                                            <td>: <?= $row->nik; ?></td>
                                        </tr>
                                            <th>Nama Lengkap</th>
                                            <td>: <?= $row->nama_lengkap; ?></td>
                                        </tr>
                                            <th>Jenis Kelamin</th>
                                            <td>: <?= $row->jenis_kelamin; ?></td>
                                        </tr>
                                            <th>Tanggal Lahir</th>
                                            <td>: <?= $row->tanggal_lahir; ?></td>
                                        </tr>
                                            <th>Fasilitas Kesehatan</th>
                                            <td>: <?= $row->fasilitas_kesehatan; ?></td>
                                        </tr>
                                        <tr>
                                            <th>No Hp SMS</th>
                                            <td>: <?= $row->no_hp_sms; ?></td>
                                        </tr>
                                        <tr>
                                            <th>No Hp WA</th>
                                            <td>: <?= $row->no_hp_wa; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>: <?= $row->email; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>: <?= $row->alamat; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Kecamatan</th>
                                            <td>: <?= $row->kecamatan; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Kelurahan</th>
                                            <td>: <?= $row->kelurahan; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Domisili</th>
                                            <td>: <?= $row->domisili; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Lokasi Vaksin</th>
                                            <td>: <?= $row->lokasi_vaksin; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Vaksin</th>
                                            <td>: <?= $row->tanggal_vaksin; ?></td>
                                        </tr>
                                        <tr>
                                            <th>No Antrian</th>
                                            <td>: <?= $row->no_antrian; ?></td>
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
    </div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
