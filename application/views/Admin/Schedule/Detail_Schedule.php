<title>Detail Schedule</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Detail Data Schedule</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Schedule</a></li>
                    <li class="breadcrumb-item active">Detail Schedule</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title" style="text-align:center;"><b>DETAIL DATA SCHEDULE</b></h4>
                        <div class="table-responsive m-t-40">
                            <table class="table table-borderless">
                                <tbody>
                                    <?php
                                    foreach($detail->result() as $row){ ?>
                                        <tr>
                                            <th width="200px">Nama Vaskin</th>
                                            <td>: <?= $row->nama_vaksin; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Lokasi Vaksin</th>
                                            <td>: <?= $row->lokasi; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Vaksin</th>
                                            <td>: <?= $row->tanggal_vaksin;?></td>
                                        </tr>
                                        <tr>
                                            <th>Jumlah Vaccinery</th>
                                            <td>: <?= $row->jumlah_vaccinery; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat Vaksin</th>
                                            <td>: <?= $row->alamat; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Telepon</th>
                                            <td>: <?= $row->nomor_telepon; ?></td>
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
    