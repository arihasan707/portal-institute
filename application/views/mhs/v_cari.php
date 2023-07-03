<main id="main" class="main">

    <div class="pagetitle">
        <h1>Kartu Hasil Studi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Kartu Hasil Studi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- General Form Elements -->
                        <form action="<?= base_url('portal_mahasiswa/cari')?>" method="post">
                            <div class="row">
                                <label class="col-sm-12 col-form-label bold">Tahun / Semester</label>
                                <div class="col-sm-8 mb-3">
                                    <select class="form-select" name="semester" aria-label="Default select example">
                                        <option selected>-- Pilih Semester --</option>
                                        <?php foreach($semester->result() as $s ) : ?>
                                        <option value="<?= $s->id?>"><?= $s->semester?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <button class="btn btn-primary col-12" type="submit">Cari</button>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
    </section>

    <?php if (empty($khs)) { ?>
    <section class="mt-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body-empty">
                        <!-- General Form Elements -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="pt-1">Data KHS Tidak Tersedia</h5>
                            </div>
                        </div>
                    </div>
                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php } else { ?>
    <section class="mt-2">
        <div class="row">
            <div class="col-12 justify-content-end d-flex">
                <div class="cetak col-2 mb-2">
                    <a href="<?= base_url('portal_mahasiswa/pdf/'. $khs->id_users .'/' . $khs->id_semester)?>"
                        class="bold p-2 pb-3 col-12 btn btn-warning btn-sm"><i class="ri ri-printer-line"></i>Cetak KHS
                    </a>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <!-- General Form Elements -->
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="<?= base_url()?>assets/front/img/kop-khs.jpg" width="820vh">
                                <?= $khs->khs?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
</main>