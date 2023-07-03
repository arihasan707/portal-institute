<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4 mb-5">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="
                         <?php if ($mhs->foto == "-") {
                            echo base_url() . "assets/front/upload/profile-img.jpg";
                        } else {
                            echo base_url() . "assets/front/upload/". $mhs->foto;;
                        } ?>
                        " alt="Profile" class="rounded-circle mb-1">
                        <h2 class="mb-1"><?= $mhs->nama?></h2>
                        <h3>
                            <?php if ($this->session->userdata['hk'] == "1") {
                                    echo "<span>Administrator</span>";
                                } elseif ($this->session->userdata['hk'] == "2") {
                                    echo "<span>Dosen</span>";
                                } else {
                                    echo "<span>Mahasiswa</span>";
                                } ?>
                        </h3>
                        <span class="badge bg-success mb-2">Aktif Perkuliahan</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="col-12">
                    <?php if ($this->session->flashdata('alert')) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong> Gagal </strong><?= $this->session->flashdata('alert') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php }; ?>

                    <?php if ($this->session->flashdata('sukses')) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> Berhasil </strong><?= $this->session->flashdata('sukses') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php }; ?>
                </div>
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Deskripsi</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                    Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Ganti Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                    <div class="col-lg-9 col-md-8 capital"><?= $mhs->nama?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                                    <div class="col-lg-9 col-md-8 capital"><?= $mhs->tmp_lahir?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                                    <div class="col-lg-9 col-md-8"><?=$mhs->tgl_lahir?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                    <div class="col-lg-9 col-md-8"><?php if($mhs->jkl == "")
                                    {
                                     echo "-";   
                                    }elseif($mhs->jkl == 'L') {
                                     echo "Laki-laki";
                                    }else{
                                     echo "Perempuan";
                                    }
                                        ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                                    <div class="col-lg-9 col-md-8"><?= $mhs->alamat?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8"><?= $mhs->email?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">No. Handphone</div>
                                    <div class="col-lg-9 col-md-8"><?= $mhs->no_hp?></div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-2" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <form action="<?= base_url('portal_mahasiswa/edit_profil/'. $mhs->id)?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                            Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img src="
                                            <?php if ($mhs->foto == "-") {
                                                echo base_url() . "assets/front/upload/profile-img.jpg";
                                            } else {
                                                echo base_url() . "assets/front/upload/". $mhs->foto;
                                            } ?>
                                            " alt="Profile">
                                            <div class="pt-3">
                                                <input name="foto" type="file">
                                                <input type="hidden" name="foto_lama" value="<?= $mhs->foto;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama
                                            Lengkap</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="nama" type="text" class="form-control"
                                                value="<?=$mhs->nama;?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Tempat
                                            Lahir</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tmp_lahir" type="text" class="form-control"
                                                value="<?=$mhs->tmp_lahir;?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tgl_lahir" type="text" class="form-control" id="datepicker"
                                                value="<?=$mhs->tgl_lahir;?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Jenis
                                            Kelamin</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select class="form-select" name="jkl" aria-label="Default select example"
                                                required>
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="alamat" type="text" class="form-control"
                                                value="<?=$mhs->alamat;?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control"
                                                value="<?=$mhs->email;?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">No.
                                            Handphone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="hp" class="form-control" value="<?=$mhs->no_hp?>">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings">

                                <!-- Settings Form -->
                                <form>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                            Notifications</label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="changesMade"
                                                    checked>
                                                <label class="form-check-label" for="changesMade">
                                                    Changes made to your account
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="newProducts"
                                                    checked>
                                                <label class="form-check-label" for="newProducts">
                                                    Information on new products and services
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="proOffers">
                                                <label class="form-check-label" for="proOffers">
                                                    Marketing and promo offers
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="securityNotify"
                                                    checked disabled>
                                                <label class="form-check-label" for="securityNotify">
                                                    Security alerts
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End settings Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form>

                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control"
                                                id="currentPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control"
                                                id="newPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control"
                                                id="renewPassword">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>