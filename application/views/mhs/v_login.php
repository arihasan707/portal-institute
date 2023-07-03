<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Portal DH Institute</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/front/img/logo-mobile.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/animate.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/aos.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/front/login/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Portal DH Institute</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">Informasi</a></li>
                    <li class="nav-item cta mr-md-2"><a href="#" class="nav-link">Pendaftaran PMB</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('assets/front/login/images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center d-flex justify-content-between"
                data-scrollax-parent="true">
                <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <img class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                        src="<?= base_url() ?>assets/front/login/images/human.png" width="710px">
                    <!-- <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="icon-calendar mr-2"></span>20-23 November 2019 - Los Angeles CA</p> -->
                    <!-- <div id="timer" class="d-flex">
                        <div class="time" id="days"></div>
                        <div class="time pl-3" id="hours"></div>
                        <div class="time pl-3" id="minutes"></div>
                        <div class="time pl-3" id="seconds"></div>
                    </div> -->
                </div>
                <div class="col-lg-4 col-md-6 mt-0 mt-md-5 tebal">
                    <?php if ($this->session->flashdata('alert')) :?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('alert') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif?>
                    <?php if ($this->session->flashdata('warn')) :?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('warn') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif?>
                    <form action="<?= base_url('login/logproses') ?>" method="post"
                        class="request-form ftco-animate sub">
                        <h2>Login Mahasiswa</h2>
                        <p>masukan username & password untuk login</p>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary py-3 px-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#0066b2" />
        </svg></div>


    <script src="<?= base_url() ?>assets/front/login/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/aos.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="<?= base_url() ?>assets/front/login/js/google-map.js"></script>
    <script src="<?= base_url() ?>assets/front/login/js/main.js"></script>

</body>

</html>