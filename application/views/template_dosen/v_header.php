<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="d-flex align-items-center">
                <img src="<?= base_url(); ?>assets/front/img/logo-mobile.png" width="65px" class="d-lg-none" alt="">
            </a>
        </div><!-- End Logo -->
        <div class="logo1 d-flex align-items-center justify-content-between">
            <a href="index.html" class="d-flex align-items-center pt-1">
                <img src="<?= base_url(); ?>assets/front/img/logo.png" width="230px" class="" alt="">
            </a>
            <i class="bi bi-list toggle-sidebar-btn text-white"></i>
        </div><!-- End Logo -->

        <div class="title">
            <!-- <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form> -->
            <h2>
                sistem akademik dosen
            </h2>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?= base_url() ?>assets/front/upload/profile-img.jpg" alt="Profile"
                            class="rounded-circle">
                        <span
                            class="d-none d-md-block dropdown-toggle ps-2 text-white"><?= $this->session->userdata['nama']; ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?= $this->session->userdata['nama']; ?></h6>
                            <span>
                                <?php if ($this->session->userdata['hk'] == "1") {
                                    echo "<span>Administrator</span>";
                                } elseif ($this->session->userdata['hk'] == "2") {
                                    echo "<span>Dosen</span>";
                                } else {
                                    echo "<span>Mahasiswa</span>";
                                } ?>
                            </span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center"
                                href="<?= base_url('portal_dosen/keluar') ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->