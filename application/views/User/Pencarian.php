<title>Pencarian Lokasi</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Form Pendaftaran</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Pencarian</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title" style="text-align:center;"><b>PENCARIAN LOKASI VAKSINASI</b></h4></br>
                        <form class="form" action="<?= base_url() ?>Pencarian" method="POST">
                            <div class="row">
                                <div class="col-sm-4" style="margin-left:30%;">
                                    <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Masukkan lokasi">
                                </div>
                                <div class="box-footer" style="text-align:center;">
                                    <button type="submit" class="btn btn-info">CARI</button>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="table-responsive m-t-40">
                                <table class="table stylish-table">
                                    <thead>
                                        <tr>
                                            <th><b>Nama Vaskin</b></th>
                                            <th><b>Lokasi Vaksin</b></th>
                                            <th><b>Tanggal Vaksin</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($lokasi->result() as $row) { ?>
                                            <tr>
                                                <td><?= $row->nama_vaksin; ?></td>
                                                <td><?= $row->lokasi; ?></td>
                                                <td><?= $row->tanggal_vaksin; ?></td>
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
    </div>
</div>