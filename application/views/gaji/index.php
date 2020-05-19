<!-- Main Content -->
<div class="main-content">
    <section class="section">

        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aturan</h2>
            <p class="section-lead">
                Disini Anda dapat manajemen data gaji.
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Gaji</h4>
                        <div class="card-header-form">
                            <a href="<?= base_url('gaji/tambah') ?>" class="btn btn-icon btn-dark"><i class="fas fa-plus-circle"></i> Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-md" id="mytable">
                                <thead>
                                    <tr align="center">
                                        <th>No</th>
                                        <th>Jumlah Gaji</th>
                                        <th>Dibuat Tanggal</th>
                                        <th>Dirubah Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($gaji as $g) : ?>
                                        <tr align="center">
                                            <td><?= $no++ ?></td>
                                            <td><?= format_rupiah($g['jumlah_gaji']) ?></td>
                                            <td><?= IndonesiaTgl($g['created_at']) ?></td>
                                            <td><?= IndonesiaTgl($g['updated_at']) ?></td>
                                            <td>
                                                <a href="<?= base_url('gaji/ubah/') . $g['id'] ?>" class="btn btn-sm btn-success"><i class="far fa-edit"></i> Ubah</a>
                                                <a href="<?= base_url('gaji/hapus/') . $g['id'] ?>" class="btn btn-sm btn-danger" id="hapus"><i class="far fa-trash-alt"></i> Hapus</a>
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