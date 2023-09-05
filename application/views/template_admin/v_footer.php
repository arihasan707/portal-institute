 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
     <div class="copyright">
         &copy; Copyright 2023 <strong><span>Daarul Huffadz Institute</span></strong>
     </div>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="<?= base_url(); ?>assets/front/js/jquery.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/apexcharts/apexcharts.min.js"></script>
 <script type="text/javascript" src="<?= base_url(); ?>assets/front/vendor/DataTables/datatables.min.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/chart.js/chart.umd.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/echarts/echarts.min.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/quill/quill.min.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/simple-datatables/simple-datatables.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/tinymce/tinymce.min.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/php-email-form/validate.js"></script>

 <!-- Template Main JS File -->
 <script src="<?= base_url() ?>assets/front/js/main.js"></script>

 <script>
$(() => {
    const href = window.location.href;
    const path = location.pathname.split('/');
    const url = location.origin + '/' + path[1] + '/' + path[2];
    $('li.nav-item ul#akses-login li a').each(function() {
        if ($(this).attr('href').indexOf(url) !== -1) {
            $(this).removeClass('collapsed').addClass('active').parent().parent().removeClass(
                    'collapse').parent()
                .children().removeClass('collapsed');
        }
    });
    $('li.nav-item ul#perkuliahan li a').each(function() {
        if ($(this).attr('href').indexOf(url) !== -1) {
            $(this).removeClass('collapsed').addClass('active').parent().parent().removeClass(
                    'collapse').parent()
                .children().removeClass('collapsed');
        }
    });
    $('li a.dashboard').each(function() {
        if (this.href == href) {
            $(this).removeClass('collapsed');
        }
    });
})
 </script>

 <script>
$(document).ready(function() {
    $('#inbox').DataTable();
});

$('#inbox').DataTable({
    responsive: true
});
 </script>

 </body>

 </html>