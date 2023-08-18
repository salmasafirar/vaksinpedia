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

 <!-- Select2 JS -->
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

 <script>
     $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('//').pop();
         $(this).next('.custom-file-label').addClass("selected").html(fileName);
     });

     $(document).ready(function() {
         $("#partners").select2();
         $("#kecamatan").select2();
         $("#kelurahan").select2();
         $("#lokasi_vaksin").select2();
         $("#tanggal_vaksin").select2();
     });

     $('#kecamatan').change(function() {
         var kecamatan = $('#kecamatan').val();

         if (kecamatan != '') {
             $.ajax({
                 url: '<?= base_url(); ?>Pendaftaran/get_kelurahan',
                 method: 'POST',
                 data: {
                     kecamatan: kecamatan
                 },
                 success: function(data) {
                     $('#kelurahan').html(data)
                 }
             });
         }
     });

     //request data lokasi vaksin
     $('#partners').change(function() {
         var partners = $('#partners').val(); //ambil value id dari faskes

         if (partners != '') {
             $.ajax({
                 url: '<?= base_url(); ?>Pendaftaran/get_lokasi_vaksin',
                 method: 'POST',
                 data: {
                     partners: partners
                 },
                 success: function(data) {
                     $('#lokasi_vaksin').html(data)
                 }
             });
         }
     });

     $('#lokasi_vaksin').change(function() {
         var lokasi_vaksin = $('#lokasi_vaksin').val();

         if (lokasi_vaksin != '') {
             $.ajax({
                 url: '<?= base_url(); ?>Pendaftaran/get_tanggal_vaksin',
                 method: 'POST',
                 data: {
                     lokasi_vaksin: lokasi_vaksin
                 },
                 success: function(data) {
                     $('#tanggal_vaksin').html(data)
                 }
             });
         }
     });
 </script>
 </body>

 </html>