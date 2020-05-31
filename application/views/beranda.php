<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Karyawan</h4>
                        </div>
                        <div class="card-body">
                            <?php $count = 0;
                            foreach ($karyawan as $total) : ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                            <?= $count; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Jabatan</h4>
                        </div>
                        <div class="card-body">
                            <?php $count = 0;
                            foreach ($jabatan as $total) : ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                            <?= $count; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="far fa-building"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Divisi</h4>
                        </div>
                        <div class="card-body">
                            <?php $count = 0;
                            foreach ($divisi as $total) : ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                            <?= $count; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-dark">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Daftar Gaji</h4>
                        </div>
                        <div class="card-body">
                            <?php $count = 0;
                            foreach ($gaji as $total) : ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                            <?= $count; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <i class="fas fa-city"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Provinsi</h4>
                        </div>
                        <div class="card-body">
                            <?php $count = 0;
                            foreach ($provinsi as $total) : ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                            <?= $count; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon" style="background: grey">
                        <i class="fas fa-archway"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Kota & <br> Kabupaten</h4>
                        </div>
                        <div class="card-body">
                            <?php $count = 0;
                            foreach ($kota as $total) : ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                            <?= $count; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon" style="background: darkgreen">
                        <i class="fas fa-torii-gate"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Kecamatan</h4>
                        </div>
                        <div class="card-body">
                            <?php $count = 0;
                            foreach ($kecamatan as $total) : ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                            <?= $count; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="<?= base_url() ?>/assets/img/unsplash/photo-1478774519940-123bd0ab1e0b.jpg">
                    <div class="hero-inner">
                        <h2>Hi, <?= $this->session->userdata('nama') ?>!</h2>
                        <p class="lead">Selamat datang kembali.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Karyawan</h4>
                    </div>
                    <div class="card-body" id="top-5-scroll">
                        <ul class="list-unstyled list-unstyled-border">
                            <?php foreach ($karyawan as $kw) : ?>
                                <li class="media">
                                    <img class="mr-3 rounded-circle" width="50" src="<?= base_url('assets/img/avatar/') . $kw['gambar'] ?>" alt="avatar">
                                    <div class="media-body">
                                        <div class="float-right text-primary"><?= IndonesiaTgl($kw['tanggal_masuk']) ?></div>
                                        <div class="media-title"><?= $kw['nama'] ?></div>
                                        <?php foreach ($jabatan as $jb) : ?>
                                            <?php if ($kw['id_jabatan'] == $jb['id']) : ?>
                                                <span class="text-small text-muted"><?= $jb['nama_jabatan'] ?></span>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="text-center pt-1 pb-1">
                            <a href="<?= base_url('menu/karyawan') ?>" class="btn btn-sm btn-primary btn-round">
                                Lihat Detail <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>