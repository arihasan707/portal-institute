<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('administrator')?>">Home</a></li>
                <li class="breadcrumb-item">Perkuliahan</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="col-12">
        <div class="tambah">
            <a data-bs-toggle="modal" data-bs-target="#tambah" class="col-lg-3 btn btn-primary"><span>Tambah
                    Semester
                </span></a>
        </div>
        <div class="col-12">
            <?php if ($this->session->flashdata('sukses_hapus')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Berhasil </strong><?= $this->session->flashdata('sukses_hapus') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }; ?>
            <?php if ($this->session->flashdata('sukses_tambah')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Berhasil </strong><?= $this->session->flashdata('sukses_tambah') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }; ?>
        </div>
        <div class="card1">
            <table id="inbox" class="ui celled table" style=" width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No.</th>
                        <th>Tahun Semester</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($smstr->result() as $s) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $s->semester?></td>
                        <td> <a data-bs-toggle="modal" data-bs-target="#hapus<?= $s->id; ?>" href=""
                                class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- modal tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header head">
                    <h5 class="modal-title bold" id="exampleModalLabel">Tambah Semester</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('administrator/tambah_smstr') ?>" method="post">
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Tahun
                                Semester<span>*</span></label>
                            <input type="text" name="smstr" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukan tahun semester">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal hapus -->
    <?php foreach ($smstr->result() as $s) { ?>
    <div class="modal fade" id="hapus<?= $s->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus akses login
                        <?= $s->semester?> ?
                    </h5>
                </div>
                <form action="<?= base_url('administrator/hapus_smstr/' . $s->id) ?>" method="POST">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>

</main>