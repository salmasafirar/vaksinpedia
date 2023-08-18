<title>Dashboard Admin</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
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
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Vaccinery</i></h4>
                        <div class="text-left">
                            <h2 class="font-light m-b-0"><i class="fa fa-users fa-2x pull-right" style="color:blue;"></i><?= $vaccinery ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Partners</h4>
                        <div class="text-left">
                            <h2 class="font-light m-b-0"><i class="fa fa-map-marker fa-2x pull-right" style="color:red;"></i><?= $partners ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Schedule</h4>
                        <div class="text-left">
                            <h2 class="font-light m-b-0"><i class="fa fa-calendar-plus-o fa-2x pull-right" style="color:green;"></i><?= $schedule ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->


        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Vaccinery Total</h4>
                        <div>
                            <canvas id="myChart"></canvas>
                            <?php
                            //Inisialisasi nilai variabel awal
                            $bulan = "";
                            $jumlah = null;
                            foreach ($hasil as $item) {
                                $bul = $item->Bulan;
                                $bulan .= "'$bul'" . ", ";
                                $jum = $item->Jumlah;
                                $jumlah .= "$jum" . ", ";
                            }
                            ?>
                            <script>
                                var ctx = document.getElementById('myChart').getContext('2d');
                                var chart = new Chart(ctx, {
                                    // The type of chart we want to create
                                    type: 'bar',
                                    // The data for our dataset
                                    data: {
                                        labels: [<?php echo $bulan; ?>],
                                        datasets: [{
                                            label: 'Data Vaccinery ',
                                            backgroundColor: ['rgb(255,222,173)', 'rgb(255,160,122)', 'rgb(250,128,114)', 'rgb(205,92,92)', 'rgb(244,164,96)'],
                                            borderColor: ['rgb(255, 99, 132)'],
                                            data: [<?php echo $jumlah; ?>]
                                        }]
                                    },
                                    // Configuration options go here
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <div class="col-md-12 col-4 align-self-right">
                            <a href="<?= base_url() ?>Schedule" class="btn pull-right hidden-sm-down btn-info">View All</a>
                        </div>
                        <h4 class="card-title">Recent Schedule</h4>
                        <div class="table-responsive m-t-40">
                            <table class="table stylish-table">
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
                                                <a id="detail_schedule_dashboard_admin" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-detail" data-nama_vaksin="<?= $row->nama_vaksin ?>" data-lokasi="<?= $row->lokasi ?>" data-tanggal_vaksin="<?= $row->tanggal_vaksin ?>" data-jumlah_vaccinery="<?= $row->jumlah_vaccinery ?>" data-alamat="<?= $row->alamat ?>" data-nomor_telepon="<?= $row->nomor_telepon ?>" style="color:white">
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
                                <th>Nama Vaksin</th>
                                <td><span id="nama_vaksin"></span></td>
                            </tr>
                            <tr>
                                <th>Lokasi Vaksin</th>
                                <td><span id="lokasi"></span></td>
                            </tr>
                            <tr>
                                <th>Tanggal Vaksin</th>
                                <td><span id="tanggal_vaksin"></span></td>
                            </tr>
                            <tr>
                                <th>Jumlah Vaccinery</th>
                                <td><span id="jumlah_vaccinery"></span></td>
                            </tr>
                            <tr>
                                <th>Alamat Vaksinasi</th>
                                <td><span id="alamat"></span></td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td><span id="nomor_telepon"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>