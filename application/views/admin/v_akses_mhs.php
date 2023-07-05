<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="tambah">
        <a href="" data-bs-toggle="modal" data-bs-target="#tambah" class="col-lg-3 btn btn-primary"><span>Tambah Akses
                Baru
            </span></a>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
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
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table id="inbox" class="ui celled table">
                            <thead>
                                <tr style=" background-color:#0d6efd; color:white;">
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Tahun Angkatan</th>
                                    <th>Dibuat pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                    foreach ($login->result() as $l) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $l->username?></td>
                                    <td><?= $l->nama ?></td>
                                    <td><?= $l->angkatan ?></td>
                                    <td><?= date('d M Y, h:i:s',strtotime($l->created_at) )  ?></td>
                                    <td> <a data-bs-toggle="modal" data-bs-target="#hapus<?= $l->id; ?>" href=""
                                            class="btn btn-danger"><i class="bi bi-trash text-white"></i></a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- modal tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header head">
                    <h5 class="modal-title bold" id="exampleModalLabel">Akses Login Mahasiswa</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('administrator/tambah_akses_mhs/') ?>" method="post">
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Nama<span>*</span></label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukan nama">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Title</label>
                            <input type="text" name="jab" class="form-control" id="exampleFormControlInput1"
                                placeholder="Mahasiswa" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Tahun Angkatan</label>
                            <select class="form-select" name="angkatan" aria-label="Default select example" required>
                                <option value="">-- Pilih Tahun Angkatan --</option>
                                <?php foreach ($angkatan as $a) { ?>
                                <option value="<?= $a->id_angktn ?>"><?= $a->angkatan ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Username<span>*</span></label>
                            <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukan username">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Password<span>*</span></label>
                            <input type="password" name="pass" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukan password">
                        </div>
                        <div class="form-text mb-4">
                            <b><i> Keterangan: <i></b><br><span>*</span>Wajib di isi.
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
    <?php foreach ($login->result() as $l) { ?>
    <div class="modal fade" id="hapus<?= $l->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus akses login
                        <?= $l->nama?> ?
                    </h5>
                </div>
                <form action="<?= base_url('administrator/hapus_mhs/' . $l->id) ?>" method="POST">
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