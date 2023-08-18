 <!-- ============================================================== -->
 <!-- footer -->
 <!-- ============================================================== -->
 <footer class="footer text-center">
     Copyright ©2021 All rights reserved
     <div class="text-center text-lg-center footer-social">
         <a href="#"><i class="ti-email"></i> vaksinpedia@gmail.com</a>
     </div>
     <!-- <a href="#"><i class="ti-email"></i> vaksinpedia@gmail.com</a> -->
 </footer>
 <!-- ============================================================== -->
 <!-- End footer -->
 <!-- ============================================================== -->
 </div>
 <!-- ============================================================== -->
 <!-- End Page wrapper  -->
 <!-- ============================================================== -->
 </div>
 <!-- ============================================================== -->
 <!-- End Wrapper -->
 <!-- ============================================================== -->
 <!-- ============================================================== -->
 <!-- All Jquery -->
 <!-- ============================================================== -->
 <script src="assets/dashboard/assets/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script src="assets/dashboard/assets/plugins/bootstrap/js/tether.min.js"></script>
 <script src="assets/dashboard/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
 <!-- slimscrollbar scrollbar JavaScript -->
 <script src="assets/dashboard/js/jquery.slimscroll.js"></script>
 <!--Wave Effects -->
 <script src="assets/dashboard/js/waves.js"></script>
 <!--Menu sidebar -->
 <script src="assets/dashboard/js/sidebarmenu.js"></script>
 <!--stickey kit -->
 <script src="assets/dashboard/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
 <!--Custom JavaScript -->
 <script src="assets/dashboard/js/custom.min.js"></script>
 <!-- ============================================================== -->
 <!-- This page plugins -->
 <!-- ============================================================== -->
 <!-- Flot Charts JavaScript -->
 <script src="assets/dashboard/assets/plugins/flot/jquery.flot.js"></script>
 <script src="assets/dashboard/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
 <script src="assets/dashboard/js/flot-data.js"></script>
 <!-- ============================================================== -->
 <!-- Style switcher -->
 <!-- ============================================================== -->
 <script src="assets/dashboard/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
 <!-- ============================================================== -->
 <!-- Data Table -->
 <!-- ============================================================== -->
 <script src="<?= base_url() ?>assets/dashboard/assets/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="<?= base_url() ?>assets/dashboard/assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

 <script>
     $(function() {
         $('#example1').DataTable()
         $('#example2').DataTable({
             'paging': false,
             'lengthChange': true,
             'searching': false,
             'ordering': true,
             'info': true,
             'autoWidth': true
         })
     })

     $(document).ready(function() {
         $(document).on('click', '#detail_schedule_dashboard_admin', function() {
             var nama_vaksin = $(this).data('nama_vaksin');
             var lokasi = $(this).data('lokasi');
             var tanggal_vaksin = $(this).data('tanggal_vaksin');
             var jumlah_vaccinery = $(this).data('jumlah_vaccinery');
             var alamat = $(this).data('alamat');
             var nomor_telepon = $(this).data('nomor_telepon');
             $('#nama_vaksin').text(nama_vaksin);
             $('#lokasi').text(lokasi);
             $('#tanggal_vaksin ').text(tanggal_vaksin);
             $('#jumlah_vaccinery').text(jumlah_vaccinery);
             $('#alamat').text(alamat);
             $('#nomor_telepon').text(nomor_telepon);
             $('detail').text(detail);
         });
     });
 </script>

 <script>
     $(document).ready(function() {
         $(document).on('click', '#set_dtl', function() {
             var nama_vaksin = $(this).data('nama_vaksin');
             var lokasi = $(this).data('lokasi');
             var tanggal_vaksin = $(this).data('tanggal_vaksin');
             var jumlah_vaccinery = $(this).data('jumlah_vaccinery');
             var alamat = $(this).data('alamat');
             var nomor_telepon = $(this).data('nomor_telepon');
             $('#nama_vaksin').text(nama_vaksin);
             $('#lokasi').text(lokasi);
             $('#tanggal_vaksin ').text(tanggal_vaksin);
             $('#jumlah_vaccinery').text(jumlah_vaccinery);
             $('#alamat').text(alamat);
             $('#nomor_telepon').text(nomor_telepon);
             $('detail').text(detail);
         })
     })
 </script>

 <script>
     $(document).ready(function() {
         $(document).on('click', '#detail_partners_hospitiva', function() {
             var nama_mitra = $(this).data('nama_mitra');
             var email = $(this).data('email');
             var alamat = $(this).data('alamat');
             var kota = $(this).data('kota');
             var nomor_telepon = $(this).data('nomor_telepon');
             $('#nama_mitra').text(nama_mitra);
             $('#email').text(email);
             $('#alamat ').text(alamat);
             $('#kota').text(kota);
             $('#nomor_telepon').text(nomor_telepon);

         })
     })
 </script>
 <script>
     $(document).ready(function() {
         $(document).on('click', '#detail_vaccinery_dashboard_admin', function() {
             var nik = $(this).data('nik');
             var nama_lengkap = $(this).data('nama_lengkap');
             var jenis_kelamin = $(this).data('jenis_kelamin');
             var tanggal_lahir = $(this).data('tanggal_lahir');
             var fasilitas_kesehatan = $(this).data('fasilitas_kesehatan');
             var no_hp_sms = $(this).data('no_hp_sms');
             var no_hp_wa = $(this).data('no_hp_wa');
             var email = $(this).data('email');
             var alamat = $(this).data('alamat');
             var kecamatan = $(this).data('kecamatan');
             var kelurahan = $(this).data('kelurahan');
             var domisili = $(this).data('domisili');
             var lokasi_vaksin = $(this).data('lokasi_vaksin');
             var tanggal_vaksin = $(this).data('tanggal_vaksin');
             var no_antrian = $(this).data('no_antrian');
             $('#nik').text(nik);
             $('#nama_lengkap').text(nama_lengkap);
             $('#jenis_kelamin').text(jenis_kelamin);
             $('#tanggal_lahir').text(tanggal_lahir);
             $('#fasilitas_kesehatan').text(fasilitas_kesehatan);
             $('#no_hp_sms').text(no_hp_sms);
             $('#no_hp_wa').text(no_hp_wa);
             $('#email').text(email);
             $('#alamat').text(alamat);
             $('#kecamatan').text(kecamatan);
             $('#kelurahan').text(kelurahan);
             $('#domisili').text(domisili);
             $('#lokasi_vaksin').text(lokasi_vaksin);
             $('#tanggal_vaksin').text(tanggal_vaksin);
             $('#no_antrian').text(no_antrian);
             $('detail').text(detail);
         });
     });
 </script>

 </body>

 </html>