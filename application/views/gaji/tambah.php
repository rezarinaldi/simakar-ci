<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

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
                        <h4>Form Tambah Data Gaji</h4>
                    </div>
                    <div class="card-body">
                    <form action="" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jumlah Gaji</label>
                                        <input type="number" name="jumlah_gaji" value="<?= set_value('jumlah_gaji') ?>" class="form-control" autofocus>
                                        <?= form_error('jumlah_gaji', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2 btnSubmit"><i class="fas fa-save"></i> Simpan</button>
                            <button type="reset" class="btn btn-dark"><i class="fas fa-undo"></i> Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>