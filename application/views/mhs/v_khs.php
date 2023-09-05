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

</main>