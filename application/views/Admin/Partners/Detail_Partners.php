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
                <h3 class="text-themecolor m-b-0 m-t-0">Detail Data Partners</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Partners</a></li>
                    <li class="breadcrumb-item active">Detail Partners</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title" style="text-align:center;"><b>DETAIL DATA PARTNERS</b></h4>
                        <div class="table-responsive m-t-40">
                            <table class="table table-borderless">
                                <tbody>
                                    <?php
                                    foreach($detail->result() as $row){ ?>
                                        <tr>
                                            <th>Nama Mitra</th>
                                            <td>: <?= $row->nama_mitra; ?></td>
                                        </tr>
                                            <th>Email</th>
                                            <td>: <?= $row->email; ?></td>
                                        </tr>
                                            <th>Alamat</th>
                                            <td>: <?= $row->alamat; ?></td>
                                        </tr>
                                            <th>Kota</th>
                                            <td>: <?= $row->kota; ?></td>
                                        </tr>
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
    