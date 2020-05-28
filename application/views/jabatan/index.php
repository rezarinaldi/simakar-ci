<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aturan</h2>
            <p class="section-lead">
                Disini Anda dapat manajemen data jabatan.
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Jabatan</h4>
                        <div class="card-header-form">
                            <a href="<?= base_url('jabatan/tambah') ?>" class="btn btn-icon btn-dark"><i class="fas fa-plus-circle"></i> Tambah Data</a>
                        </div>
                        <div id="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-md table-striped" id="mytable">
                                <thead>
                                    <tr align="center">
                                        <th>No</th>
                                        <th>Nama Jabatan</th>
                                        <th>Dibuat Tanggal</th>
                                        <th>Dirubah Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($jabatan as $jb) : ?>
                                        <tr align="center">
                                            <td><?= $no ?></td>
                                            <td><?= $jb['nama_jabatan']; ?></td>
                                            <td><?php
                                                $create = substr($jb['created_at'], 0, 10);
                                                echo longdate_indo($create);
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $update = substr($jb['updated_at'], 0, 10);
                                                echo longdate_indo($update);
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('jabatan/ubah/') ?><?= $jb['id'] ?>" class="btn btn-sm btn-success"><i class="far fa-edit"></i> Ubah</a>
                                                <a href="<?= base_url('jabatan/hapus/') ?><?= $jb['id'] ?>" class="btn btn-sm btn-danger" id="hapus"><i class="far fa-trash-alt"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>