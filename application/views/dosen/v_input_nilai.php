<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $title1; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><?= $title1; ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="col-12">
        <div class="col-12">
            <?php if ($this->session->flashdata('sukses_')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Berhasil </strong><?= $this->session->flashdata('sukses_') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }; ?>
        </div>
        <div class="card1">
            <table id="inbox" class="ui celled table" style="width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No.</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Tahun Angkatan</th>
                        <th>Input Nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($mhs->result() as $m) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $m->username ?></td>
                        <td><?= $m->nama ?></td>
                        <td><?= $m->angkatan ?></td>
                        <td> <a class="btn btn-primary btn-sm" href="<?= base_url('portal_dosen/input/'. $m->id)?>">Klik
                                Input
                            </a>
                        </td>
                        <td class="text-center"><a data-bs-toggle="modal" data-bs-target="#hapus<?= $m->id?>" href=""
                                class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- modal hapus -->
    <?php foreach ($mhs->result() as $m) { ?>
    <div class="modal fade" id="hapus<?= $m->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus semua nilai
                        <strong><?= $m->nama?></strong>
                    </h5>
                </div>
                <form action="<?= base_url('portal_dosen/hapus_nilai_mhs/' . $m->id) ?>" method="POST">
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