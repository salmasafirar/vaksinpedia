<title>Schedule</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Data Schedule</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Schedule</li>
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
                        <h4 class="box-title" style="text-align:center;"><b>DATA SCHEDULE</b></h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table stylish-table">
                            </br>
                            <thead>
                                <tr>
                                    <th><b>Nama Vaksin</b></th>
                                    <th><b>Lokasi</b></th>
                                    <th><b>Tanggal Vaksin</b></th>
                                    <th><b>Jumlah Vaccinery</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($dataSchedule->result() as $row) { ?>
                                    <tr>
                                        <td><?= $row->nama_vaksin; ?></td>
                                        <td><?= $row->lokasi; ?></td>
                                        <td><?= $row->tanggal_vaksin; ?></td>
                                        <td><?= $row->jumlah_vaccinery; ?></td>
                                        <td>
                                            <a id="set_dtl" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_detail" data-lokasi="<?= $row->lokasi; ?>" data-tanggal_vaksin="<?= $row->tanggal_vaksin; ?>" data-nama_vaksin="<?= $row->nama_vaksin; ?>" data-jumlah_vaccinery="<?= $row->jumlah_vaccinery; ?>" data-nomor_telepon="<?= $row->nomor_telepon; ?>" data-alamat="<?= $row->alamat; ?>" style="color: white;">
                                                Detail </a>
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
                                <th>Nomor Telepon</th>
                                <td><span id="nomor_telepon"></span></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><span id="alamat"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>