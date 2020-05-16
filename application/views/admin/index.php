<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aturan</h2>
            <p class="section-lead">
                Disini Anda dapat manajemen data admin.
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Admin</h4>
                        <div class="card-header-form">
                            <a href="<?= base_url('admins/tambah') ?>" class="btn btn-icon btn-dark"><i class="fas fa-plus-circle"></i> Tambah Data</a>
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
                                        <th>E-mail</th>
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
                                        <td>
                                            <a href="<?= base_url('admins/profil') ?>" class="btn btn-sm btn-primary"><i class="fas fa-search-plus"></i> Profil</a>
                                            <a href="<?= base_url('admins/ubah/') ?>" class="btn btn-sm btn-success"><i class="far fa-edit"></i> Ubah</a>
                                            <a href="<?= base_url('admins/hapus/') ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="far fa-trash-alt"></i> Hapus</a>
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