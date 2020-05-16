<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <!-- <a href="javascript:;" target="_blank" class="btn btn-icon icon-left btn-success"><i class="fas fa-print"></i> Cetak</a> -->
        <div class="section-body">
            <h2 class="section-title">Aturan</h2>
            <p class="section-lead">
                Pastikan Anda mengisi data dengan benar, agar tidak terjadi kesalahan.
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Laporan Karyawan</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url() ?>karyawan/laporan" method="post">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Dari Tanggal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                            </div>
                                            <!-- <input type="date" name="dari" class="form-control" value="<?= $_POST['dari']; ?>"> -->
                                            <input type="date" name="dari" class="form-control" value="">
                                        </div>
                                        <?= form_error('dari', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Sampai Tanggal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                            </div>
                                            <!-- <input type="date" name="sampai" class="form-control" value="<?= $_POST['sampai']; ?>"> -->
                                            <input type="date" name="sampai" class="form-control" value="">
                                        </div>
                                        <?= form_error('sampai', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="cari" class="btn btn-primary">
                                            <i class="fas fa-search"></i> Cari
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="btn-group mb-4">
                            <a class="btn btn-dark" href="<?= base_url() . 'karyawan/laporan_print/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai'); ?>" target="blank">
                                <i class="fas fa-print"></i> Cetak
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover table-md" id="mytable">
                            <thead>
                                    <tr align="center">
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Divisi</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    <tr align="center">
                                        <td><?= $no++ ?></td>
                                        <td>

                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="<?= base_url('karyawan/profil') ?>" class="btn btn-sm btn-primary"><i class="fas fa-search-plus"></i> Profil</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>