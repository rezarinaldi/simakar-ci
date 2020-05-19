<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aturan</h2>
            <p class="section-lead">
                Disini Anda dapat manajemen data karyawan.
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Karyawan</h4>
                        <div class="card-header-form">
                            <a href="<?= base_url('karyawan/tambah') ?>" class="btn btn-icon btn-dark"><i class="fas fa-plus-circle"></i> Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
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
                                    foreach ($karyawan as $kw) : ?>
                                        <tr align="center">
                                            <td><?= $no++ ?></td>
                                            <td>
                                                <a href="<?= base_url() . 'assets/upload/' . $kw['gambar'] ?>">
                                                    <img width="35px" height="35px" src="<?= base_url() . 'assets/upload/' . $kw['gambar'] ?>">
                                                </a>
                                            </td>
                                            <td><?= $kw['nama'] ?></td>
                                            <td><?= $kw['id_jabatan'] ?></td>
                                            <td><?= $kw['id_divisi'] ?></td>
                                            <td><?= $kw['tanggal_masuk'] ?></td>
                                            <td>
                                                <a href="<?= base_url('karyawan/profil/') . $kw['id'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-search-plus"></i> Profil</a>
                                                <a href="<?= base_url('karyawan/ubah/') . $kw['id'] ?>" class="btn btn-sm btn-success"><i class="far fa-edit"></i> Ubah</a>
                                                <a href="<?= base_url('karyawan/hapus/') . $kw['id'] ?>" class="btn btn-sm btn-danger" id="hapus"><i class="far fa-trash-alt"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>