<title>Form Pendaftaran</title>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
    function getNoWa() {
        var nohp = document.getElementById("nohp_wa1");
        if (nohp.checked == true) {
            document.getElementById("nohp_wa").readOnly = true;
            document.forms["formPendaftaran"]["nohp_wa"].value = document.forms["formPendaftaran"]["nohp_sms"].value;
        } else {
            document.getElementById("nohp_wa").readOnly = false;
        }

    }

    function getDomisili() {
        var domisili = document.forms["formPendaftaran"]["domisili"].value;
        if (domisili == "sama") {
            document.getElementById("alamat_domisili").readOnly = true;
            document.forms["formPendaftaran"]["alamat_domisili"].value = document.forms["formPendaftaran"]["alamat"].value;
        } else {
            document.getElementById("alamat_domisili").readOnly = false;
        }

    }
</script>
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
                    <li class="breadcrumb-item active">Form Pendaftaran</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <?= $this->session->flashdata('info'); ?>
                        <h4 class="card-title" style="text-align:center;"><b>FORM PENDAFTARAN VAKSINASI</b></h4></br>
                        <form method="post" name="formPendaftaran" action="<?= base_url() ?>Pendaftaran/daftar" enctype="multipart/form-data" class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">NIK* </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nik" class="form-control" placeholder="NIK" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">Nama Lengkap*</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">Jenis Kelamin*</label>
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
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">Tanggal Lahir*</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">Pilih Faskes*</label>
                                        <div class="col-sm-10">
                                            <select name="partners" id="partners" class="form-control select2" required="required">
                                                <option value="" selected disabled>Pilih Fakses</option>
                                                <?php
                                                foreach ($partners as $row) { ?>
                                                    <option value="<?= $row->id_partners ?>"><?= $row->nama_mitra; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">No HP Yang Bisa Di-SMS*</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nohp_sms" class="form-control" placeholder="No HP" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">No HP Yang Bisa Di-WA*</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="nohp_wa1" name="nohp_wa1" onclick="getNoWa()"> Sama dengan Nomor SMS
                                                </label>
                                            </div>
                                            <div>
                                                <input type="text" id="nohp_wa" name="nohp_wa" class="form-control" placeholder="No HP" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" onchange="fillnoWa()" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">Alamat Lengkap Sesuai KTP*</label>
                                        <div class="col-sm-10">
                                            <textarea name="alamat" class="form-control" cols="30" rows="5" placeholder="Alamat Lengkap" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">Pilih Kecamatan*</label>
                                        <div class="col-sm-10">
                                            <select name="kecamatan" id="kecamatan" class="form-control" required="required">
                                                <option value="" selected disabled>Pilih Kecamatan</option>
                                                <?php
                                                foreach ($districts as $row) { ?>
                                                    <option value="<?= $row->id ?>"><?= $row->name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">Pilih Kelurahan</label>
                                        <div class="col-sm-10">
                                            <select name="kelurahan" id="kelurahan" class="form-control">
                                                <option value="" selected disabled>Pilih Kelurahan</option>
                                                <?php
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">Domisili*</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" id="domisili" name="domisili" value="sama" required="required" value="" onclick="getDomisili()"> Alamat Domisili Sama dengan KTP
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="domisili" value="tidak sama" onclick="getDomisili()"> Alamat Domisili Tidak Sama dengan KTP
                                                    <textarea name="alamat_domisili" id="alamat_domisili" class="form-control" cols="60" rows="5" placeholder="Alamat Lengkap" required></textarea>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">Pilih Lokasi Vaksin*</label>
                                        <div class="col-sm-10">
                                            <select name="lokasi_vaksin" id="lokasi_vaksin" class="form-control select2" required="required">
                                                <option value="" selected disabled>Pilih Lokasi Vaksin</option>
                                                <?php
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="pendaftaran" class="col-sm-2 control-label" style="font-weight:bold;">Pilih Tanggal Vaksin*</label>
                                        <div class="col-sm-10">
                                            <select name="tanggal_vaksin" id="tanggal_vaksin" class="form-control select2" required="required">
                                                <option value="" selected disabled>Pilih Tanggal Vaksin</option>
                                                <?php
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                    <label for="agree-term" class="label-agree-term" style="font-weight:bold;"><span><span></span></span>Dengan ini saya menyatakan bahwa data yang saya input sudah sesuai</label>
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