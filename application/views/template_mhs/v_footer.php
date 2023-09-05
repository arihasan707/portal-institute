 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
     <div class="copyright">
         &copy; Copyright 2023 <strong><span>Daarul Huffadz Institute</span></strong>
     </div>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->


 <script src="<?= base_url() ?>assets/front/js/jquery.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/apexcharts/apexcharts.min.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/chart.js/chart.umd.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/echarts/echarts.min.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/quill/quill.min.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/simple-datatables/simple-datatables.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/tinymce/tinymce.min.js"></script>
 <script src="<?= base_url() ?>assets/front/vendor/php-email-form/validate.js"></script>

 <!-- sweetalert -->
 <script src="<?= base_url() ?>assets/front/vendor/sweet/sweetalert2.all.min.js"></script>


 <!-- Template Main JS File -->
 <script src="<?= base_url() ?>assets/front/js/main.js"></script>

 <!-- datepicker -->
 <script src="<?= base_url() ?>assets/front/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>


 <script>
$('#date').datepicker({
    format: "dd/mm/yyyy"
});
 </script>

 <script>
const flashProfile = $('.flash-profile-alert').data('flashdata');
const flashProfileSuccess = $('.flash-profile-success').data('flashdata');
const flashPassSuccess = $('.flash-pass-success').data('flashdata');
const flashPassFailed = $('.flash-pass-failed').data('flashdata');
const flashLogin = $('.flash-login').data('flashdata');

if (flashProfile) {
    Swal.fire({
        icon: 'error',
        title: 'Yahhh.. Gagal',
        text: 'pilihlah format foto yang sesuai'
    });
}

if (flashPassSuccess) {
    Swal.fire(
        'Yeah.. Alhamdulillah',
        'Password telah berhasil di ubah',
        'success'
    );
}

if (flashProfileSuccess) {
    Swal.fire(
        'Yeah.. Alhamdulillah',
        'Profile telah berhasil di ubah',
        'success'
    );
}

if (flashPassFailed) {
    Swal.fire({
        icon: 'error',
        title: 'Yahhh..',
        text: 'Sepertinya salah saat meng-inputkan password lama'
    });
}


if (flashLogin) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Alhamdulillah Berhasil Login'
    })
}
 </script>

 <script>
$(() => {
    const path = window.location.href;

    $('ul li a').each(function() {
        if (this.href == path) {
            $(this).removeClass('collapsed').addClass('active');
        }

    })
})
 </script>

 </body>

 </html>