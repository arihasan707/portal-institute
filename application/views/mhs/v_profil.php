<main id="main" class="main">

    <div class="flash-profile-alert" data-flashdata="<?= $this->session->flashdata('alert');?>"></div>
    <div class="flash-profile-success" data-flashdata="<?= $this->session->flashdata('sukses');?>"></div>
    <div class="flash-pass-success" data-flashdata="<?= $this->session->flashdata('sukses_pass');?>"></div>
    <div class="flash-pass-failed" data-flashdata="<?= $this->session->flashdata('gagal_pass');?>"></div>

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
                                        <label class="col-md-4 col-lg-3 col-form-label">Profile
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
                                        <label class="col-md-4 col-lg-3 col-form-label">Nama
                                            Lengkap</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="nama" type="text" class="form-control"
                                                value="<?=$mhs->nama;?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-lg-3 col-form-label">Tempat
                                            Lahir</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tmp_lahir" type="text" class="form-control"
                                                value="<?=$mhs->tmp_lahir;?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-lg-3 col-form-label">Tanggal
                                            Lahir</label>
                                        <div class="input-group">
                                            <input type="text" name="tgl_lahir" class="form-control" id="date"
                                                value="<?=$mhs->tgl_lahir;?>" required>
                                            <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-lg-3 col-form-label">Jenis
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
                                        <label class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="alamat" type="text" class="form-control"
                                                value="<?=$mhs->alamat;?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control"
                                                value="<?=$mhs->email;?>">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <label class="col-md-4 col-lg-3 col-form-label">No.
                                            Handphone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="hp" class="form-control" value="<?=$mhs->no_hp?>">
                                        </div>
                                    </div>

                                    <div class="text-center d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Simpan
                                            Perubahan</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>