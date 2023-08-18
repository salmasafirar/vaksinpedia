<title>Hospitiva</title>
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
                <h3 class="text-themecolor m-b-0 m-t-0">Tambah Data Hospitiva</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Data Hospitiva</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <?= $this->session->flashdata('info'); ?>
                        <h4 class="card-title" style="text-align:center;"><b>TAMBAH DATA HOSPITIVA</b></h4></br>
                        <form method="post" name="formHospitiva" action="<?= base_url() ?>Hospitiva/daftar" enctype="multipart/form-data" class="form-horizontal">
                            <div class="box-body">

                                <div class="form-group">
                                    <div class="row">
                                        <label for="tambah_hospitiva" class="col-sm-2 control-label" style="font-weight:bold;">Nama Mitra</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_mitra" class="form-control" placeholder="Nama Mitra" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="tambah_hospitiva" class="col-sm-2 control-label" style="font-weight:bold;">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="tambah_hospitiva" class="col-sm-2 control-label" style="font-weight:bold;">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="tambah_hospitiva" class="col-sm-2 control-label" style="font-weight:bold;">Jenis Kelamin</label>
                                        <div class="col-sm-5">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" required="required"> Perempuan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="tambah_hospitiva" class="col-sm-2 control-label" style="font-weight:bold;">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="tambah_hospitiva" class="col-sm-2 control-label" style="font-weight:bold;">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea name="alamat" class="form-control" cols="30" rows="5" placeholder="Alamat Lengkap" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="tambah_hospitiva" class="col-sm-2 control-label" style="font-weight:bold;">No HP</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="no_hp" class="form-control" placeholder="No HP" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="tambah_hospitiva" class="col-sm-2 control-label" style="font-weight:bold;">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-footer" style="text-align:center;">
                                    <button type="submit" class="btn btn-primary" class="form-submit">KIRIM</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->