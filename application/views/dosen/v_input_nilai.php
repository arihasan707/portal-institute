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
                        <td> <a class="btn btn-primary btn-sm"
                                href="<?= base_url('portal_dosen/input/'. $m->username)?>">Input
                            </a>
                            <a data-bs-toggle="modal" data-bs-target="#cek<?= $m->id ?>" class="btn btn-warning btn-sm"
                                href="">Check
                            </a>
                        </td>
                        <td class="text-center"><a data-bs-toggle="modal" data-bs-target="#hapus" href=""
                                class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal check-->
    <?php foreach ($mhs->result() as $m) : ?>
    <div class="modal fade" id="cek<?=$m->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class=" modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-dialog-scrollable">
                    <table id="inbox" class="ui celled table" style="width:100%; padding:0px;">
                        <thead>
                            <tr style=" background-color:#0d6efd; color:white;">
                                <th>Nama</th>
                                <?php foreach($semester->result() as $s ) :?>
                                <th><?= $s->semester;?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <td><?=$mhs->row()->nama;?></td>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</main>