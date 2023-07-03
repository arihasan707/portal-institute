<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
    <link href="<?= base_url() ?>assets/front/img/logo-mobile.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/front/login/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/front/login/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/front/login/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/front/login/css/iofrm-theme4.css">
</head>

<body>
    <div class="form-body" class="container-fluid">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic1.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="logo d-flex justify-content-center mb-3">
                            <img src="<?= base_url()?>assets/front/img/logo-mobile.png" width="190px">
                        </div>
                        <h3>Sistem Akademik DH Institute</h3>
                        <p>masukan username & password untuk login.</p>
                        <?php if ($this->session->flashdata('alert')) :?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('alert') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif?>
                        <?php if ($this->session->flashdata('warn')) :?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('warn') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif?>

                        <div class="page-links">
                            <a href="<?= base_url('login')?>" class="active">Login sebagai mahasiswa</a>
                            <a href="<?= base_url('login/dosen')?>">Login sebagai dosen</a>
                        </div>
                        <form action="<?= base_url('login/logproses')?>" method="post">
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                            <input class="form-control" type="password" name="pass" placeholder="Password" required>
                            <div class="form-button">
                                <button type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Follow up</span><a
                                href="https://web.facebook.com/daarulhuffadz.indonesia">Facebook</a><a
                                href="https://www.youtube.com/@DaarulHuffadzIndonesia">Youtube</a><a
                                href="https://www.tiktok.com/@daarulhuffadz.indonesia?is_from_webapp=1&sender_device=pc">Tiktok</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url()?>assets/front/login/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/front/login/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/front/login/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/front/login/js/main.js"></script>
</body>

</html>