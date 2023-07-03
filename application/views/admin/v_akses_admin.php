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
    <div class="col-12">
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
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Hak Akses</th>
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
                        <td><?php if ($l->hak_akses == "1") {
                                    echo "<span>Administrator</span>";
                                } elseif ($l->hak_akses == "2") {
                                    echo "<span>Dosen</span>";
                                } else {
                                    echo "<span>Mahasiswa</span>";
                                } ?></td>
                        <td><?= date('d M Y, h:i:s' , strtotime($l->created_at) )  ?></td>
                        <td> <a data-bs-toggle="modal" data-bs-target="#hapus<?= $l->id; ?>" href=""
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
                    <h5 class="modal-title bold" id="exampleModalLabel">Akses Login Admin</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('administrator/tambah_akses_admin') ?>" method="post">
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Nama
                                Lengkap<span>*</span></label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukan nama lengkap">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Hak Akses</label>
                            <input type="text" name="hk" class="form-control" id="exampleFormControlInput1"
                                placeholder="Administrator" disabled>
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
                <form action="<?= base_url('administrator/hapus_admin/' . $l->id) ?>" method="POST">
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