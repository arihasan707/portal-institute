<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Sales Card -->
                    <div class="col-xxl-3 col-md-6 mb-3">
                        <div class="card info-card bg-danger-light sales-card">
                            <a href="http://">
                                <div class="card-body1">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-badge"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span>profile</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6 mb-3">
                        <div class="card info-card bg-primary-light revenue-card">
                            <a href="<?= base_url('portal_dosen/input_nilai')?>">
                                <div class="card-body1">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-receipt"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span>input nilai</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Revenue Card -->

                    <div class="col-xxl-4 col-md-6 mb-3">
                        <div class="card info-card bg-success-light revenue-card">
                            <a href="<?= base_url('portal_dosen/daftar_mahasiswa') ?>">
                                <div class="card-body1">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-receipt"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span>daftar mahasiswa</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Revenue Card -->
                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- News & Updates Traffic -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->