<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title1?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><?= $title1?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('portal_dosen/tambah_nilai') ?>" method="post">
                            <div class="mb-2">
                                <label class="form-label bold">Nik</label>
                                <input type="hidden" name="id" value="<?= $k->id ?>">
                                <input type="text" value="<?= $k->username ?>" class="form-control" disabled>
                            </div>
                            <div class="mb-2">
                                <label class="form-label bold">Nama</label>
                                <input type="text" value="<?= $k->nama ?>" class="form-control" disabled>
                            </div>
                            <div class="mb-2">
                                <label class="form-label bold">Pilih Semester</label>
                                <select class="form-select" name="semester" aria-label="Default select example"
                                    required>
                                    <option value="">-- Pilih Semester --</option>
                                    <?php foreach ($semester->result() as $s) { ?>
                                    <option value="<?= $s->id ?>"><?= $s->semester ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 textarea">
                                    <label class="col-sm-2 col-form-label bold"></label>
                                </div>
                                <div class="col-12">
                                    <textarea name="khs" class="ckeditor" id="ckeditor" required>
                                </textarea>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 mt-2 submit">
                                        <a href="<?=base_url('portal_dosen/input_nilai')?>"
                                            class=" col-4 btn btn-secondary bold">Batal</a>
                                        <button type="submit" class="btn col-8 btn-primary bold">Publish Nilai</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>