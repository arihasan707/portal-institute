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
                    <div class="col-xxl-4 col-md-6 mb-3">
                        <div class="card info-card bg-danger-light sales-card">
                            <a href="<?= base_url('administrator/akses_mhs') ?>">
                                <div class="card-body1">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri ri-user-settings-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span>akses mahasiswa</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-3 col-md-6 mb-3">
                        <div class="card info-card bg-primary-light revenue-card">
                            <a href="<?= base_url('administrator/akses_dosen') ?>">
                                <div class="card-body1">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri ri-user-voice-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span>akses dosen</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Revenue Card -->
                    <!-- Revenue Card -->
                    <div class="col-xxl-3 col-md-6 mb-3">
                        <div class="card info-card bg-warning-light revenue-card">
                            <a href="<?= base_url('administrator/akses_admin') ?>">
                                <div class="card-body1">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri ri-user-received-2-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span>akses admin</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6 mb-3">
                        <div class="card info-card bg-success-light sales-card">
                            <a href="<?= base_url('administrator/tahun_semester') ?>">
                                <div class="card-body1">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-flag-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span>Tahun Semester</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Sales Card -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- News & Updates Traffic -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->