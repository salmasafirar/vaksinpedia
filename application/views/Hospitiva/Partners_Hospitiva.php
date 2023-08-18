<?php
if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert" style="text-align:center;"><?= $this->session->flashdata('info'); ?></div>

<?php }
?>

<br>

<title>Partners</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Data Partners</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Partners</li>
                </ol>
            </div>
        </div>
        <!-- table -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title " style="text-align: center;"><b>DATA PARTNERS</b></h4>
                        <div class="table-responsive m-t-40">
                            <table class="table stylish-table">
                                <table id="example1" class="table stylish-table">
                                    <thead>
                                        <tr>
                                            <th><b>Nama mitra</b></th>
                                            <th><b>Alamat</b></th>
                                            <th><b>Kota</b></th>
                                            <th><b>No Telepon</b></th>
                                            <th><b>Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($dataPartners->result() as $row) { ?>
                                            <tr>
                                                <td><?= $row->nama_mitra; ?></td>
                                                <td><?= $row->alamat; ?></td>
                                                <td><?= $row->kota; ?></td>
                                                <td><?= $row->nomor_telepon; ?></td>
                                                <td>
                                                    <a id="detail_partners_hospitiva" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_detail" data-nama_mitra="<?= $row->nama_mitra; ?>" data-email="<?= $row->email; ?>" data-alamat="<?= $row->alamat; ?>" data-kota="<?= $row->kota; ?>" data-nomor_telepon="<?= $row->nomor_telepon; ?>" style="color: white;">
                                                        Detail</a>

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

    <!-- pop up detail data partners -->
    <div class="modal fade" id="modal_detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Data Partners</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                    <table id="example1" class="table table-bordered no-margin">
                        <tbody>
                            <tr>
                                <th>Nama Mitra</th>
                                <td><span id="nama_mitra"></span></td>
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
                                <th>Kota</th>
                                <td><span id="kota"></span></td>
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



    <!-- ============================================================== -->
    <!-- Modal untuk Edit  -->
    <!-- ============================================================== -->
    <!--  -->

    <!-- ============================================================== -->
    <!-- Akhir Modal Edit  -->
    <!-- ============================================================== -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>