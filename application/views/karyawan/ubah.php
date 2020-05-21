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
            <div class="col-10 col-md-4 col-lg-4">
                <div class="card">
                    <form action="<?= base_url('karyawan/ubah_simpan') ?>" enctype="multipart/form-data" method="post">
                        <div class="card-header">
                            <h4>Form Ubah Data Karyawan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="<?= set_value('karyawan') ?>" class="form-control">
                                <?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>

                                <!-- <?php if (condition) : ?> -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="Pria" name="gender" class="custom-control-input" value="Pria">
                                        <label class="custom-control-label" for="Pria">Pria</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="Wanita" name="gender" class="custom-control-input" value="Wanita">
                                        <label class="custom-control-label" for="Wanita">Wanita</label>
                                    </div>
                                <!-- <?php else : ?> -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="Pria" name="gender" class="custom-control-input" value="Pria">
                                        <label class="custom-control-label" for="Pria">Pria</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="Wanita" name="gender" class="custom-control-input" value="Wanita">
                                        <label class="custom-control-label" for="Wanita">Wanita</label>
                                    </div>
                                <!-- <?php endif; ?> -->

                                <?= form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <input type="number" name="umur" value="<?= set_value('umur') ?>" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>No. HP</label>
                                <input type="number" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control">
                                <?= form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" value="<?= set_value('tangal_masuk') ?>" class="form-control">
                                <?= form_error('tanggal_masuk', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>" class="form-control">
                                <?= form_error('tanggal_lahir', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" value="<?= set_value('alamat') ?>" class="form-control" data-height="70"></textarea>
                                <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Keterangan Rumah</label>
                                <textarea name="ket" value="<?= set_value('ket') ?>" class="form-control" data-height="50"></textarea>
                                <?= form_error('ket', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input id="Longitude" name="longitude" value="<?= set_value('longitude') ?>" class="form-control" value="<?= set_value('longitude') ?>" readonly>
                                <?= form_error('longitude', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input id="Latitude" name="latitude" value="<?= set_value('latitude') ?>" class="form-control" value="<?= set_value('latitude') ?>" readonly>
                                <?= form_error('latitude', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select name="id_provinsi" class="form-control">
                                    <option value="">Pilih Provinsi</option>

                                </select>
                                <?= form_error('id_provinsi', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Kota atau Kabupaten</label>
                                <select name="id_kt_kb" class="form-control">
                                    <option value="">Pilih Kota atau Kabupaten</option>

                                </select>
                                <?= form_error('id_kt_kb', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select name="id_kecamatan" class="form-control">
                                    <option value="">Pilih Kecamatan</option>

                                </select>
                                <?= form_error('id_kecamatan', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="id_jabatan" class="form-control">
                                    <option value="">Pilih Jabatan</option>

                                </select>
                                <?= form_error('id_jabatan', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Divisi</label>
                                <select name="id_divisi" class="form-control">
                                    <option value="">Pilih Divisi</option>

                                </select>
                                <?= form_error('id_divisi', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Gaji</label>
                                <select name="id_gaji" class="form-control">
                                    <option value="">Pilih Gaji</option>

                                </select>
                                <?= form_error('id_gaji', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <br>
                                <img src="">
                                <input type="file" name="gambar" value="<?= set_value('gambar') ?>" class="form-control" required="">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save"></i> Simpan</button>
                            <button type="reset" class="btn btn-dark"><i class="fas fa-undo"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-14 col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Lokasi Rumah Karyawan</h4>
                    </div>
                    <div class="card-body">
                        <div id="ubah" style="height: 1200px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>