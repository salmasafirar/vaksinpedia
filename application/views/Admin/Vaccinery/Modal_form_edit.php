<title>Detail Vaccinery</title>
<?php 
$id = $_POST['id'];

?>

    <!-- ============================================================== -->
    <!-- Modal untuk Edit  -->
    <!-- ============================================================== -->
    <!--  -->

    <!-- Modal -->
    <?php
    foreach ($dataVaccinery as $row) : ?>
        <div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Vaccinery</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <?php echo form_open_multipart('Vaccinery/update/') ?>

                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Fasilitas Kesehatan</label>
                            <input type="text" name="fasilitas_kesehatan" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>No HP SMS</label>
                            <input type="phone_number" name="no_hp_sms" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>No HP WA</label>
                            <input type="phone_number" name="no_hp_wa" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <input type="text" name="kelurahan" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Domisili</label>
                            <input type="text" name="domisili" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Lokasi Vaksin</label>
                            <input type="text" name="lokasi_vaksin" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tanggal Vaksin</label>
                            <input type="date" name="tanggal_vaksin" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>No Antrian</label>
                            <input type="number" name="no_antrian" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo base_url(); ?>Vaccinery" type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Batal</a>
                        <button type="submit" class="btn btn-info">Update Data</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- ============================================================== -->
    <!-- Akhir Modal Edit  -->
    <!-- ============================================================== -->