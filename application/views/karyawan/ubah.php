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
            <div class="col-4 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Ubah Data Karyawan</h4>
                    </div>
                    <div id="flash-error" data-flasherror="<?= $this->session->flashdata('pesan'); ?>"></div>
                    <form action="<?= base_url('karyawan/ubah_simpan/') ?><?= $karyawan['id'] ?>" enctype="multipart/form-data" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="<?= $karyawan['nama'] ?>" class="form-control">
                                <?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <!-- <?php if ($karyawan['gender'] == "Pria") : ?> -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="Pria" name="gender" class="custom-control-input" value="Pria" checked>
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
                                    <input type="radio" id="Wanita" name="gender" class="custom-control-input" value="Wanita" checked>
                                    <label class="custom-control-label" for="Wanita">Wanita</label>
                                </div>
                                <!-- <?php endif; ?> -->
                                <?= form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Umur</label>
                                <input type="text" name="umur" value="<?= $karyawan['umur'] ?>" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>No. HP</label>
                                <input type="text" name="no_hp" value="<?= $karyawan['no_hp'] ?>" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" value="<?= $karyawan['email'] ?>" class="form-control">
                                <?= form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" value="<?= $karyawan['tanggal_masuk'] ?>" class="form-control">
                                <?= form_error('tanggal_masuk', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="<?= $karyawan['tanggal_lahir'] ?>" class="form-control">
                                <?= form_error('tanggal_lahir', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" data-height="70"><?= $karyawan['alamat'] ?></textarea>
                                <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Keterangan Rumah</label>
                                <textarea name="ket" class="form-control" data-height="50"><?= $karyawan['ket'] ?></textarea>
                                <?= form_error('ket', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Longitude</label>
                                <input id="Longitude" type="text" name="longitude" value="<?= $karyawan['longitude'] ?>" class="form-control" value="<?= set_value('longitude') ?>" readonly>
                                <?= form_error('longitude', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Latitude</label>
                                <input id="Latitude" name="latitude" value="<?= $karyawan['latitude'] ?>" class="form-control" value="<?= set_value('latitude') ?>" readonly>
                                <?= form_error('latitude', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Provinsi</label>
                                <select name="id_provinsi" class="form-control">
                                    <option value="<?= $karyawan['id_provinsi'] ?>">
                                        <?php foreach ($provinsi as $provinsi) : ?>
                                            <?php if ($provinsi['id'] == $karyawan['id_provinsi']) : ?>
                                                <?= $provinsi['nama_provinsi']; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </option>

                                    <?php foreach ($provinsi as $provinsi) : ?>
                                        <option value="<?= $provinsi['id'] ?>"><?= $provinsi['nama_provinsi'] ?></option>
                                    <?php endforeach; ?>

                                </select>
                                <?= form_error('id_provinsi', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Kota atau Kabupaten</label>
                                <select name="id_kt_kb" class="form-control">
                                    <option value="<?= $karyawan['id_kt_kb'] ?>">
                                        <?php foreach ($kota as $kt) : ?>
                                            <?php if ($kt['id'] == $karyawan['id_kt_kb']) : ?>
                                                <?= $kt['nama_kt_kb']; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </option>

                                    <?php foreach ($kota as $kota) : ?>
                                        <option value="<?= $kota['id'] ?>"><?= $kota['nama_kt_kb'] ?></option>
                                    <?php endforeach; ?>

                                </select>
                                <?= form_error('id_kt_kb', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select name="id_kecamatan" class="form-control">
                                    <option value="<?= $karyawan['id_kecamatan'] ?>">
                                        <?php foreach ($kecamatan as $kc) : ?>
                                            <?php if ($kc['id'] == $karyawan['id_kecamatan']) : ?>
                                                <?= $kc['nama_kecamatan']; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </option>

                                    <?php foreach ($kecamatan as $kecamatan) : ?>
                                        <option value="<?= $kecamatan['id'] ?>"><?= $kecamatan['nama_kecamatan'] ?></option>
                                    <?php endforeach; ?>

                                </select>
                                <?= form_error('id_kecamatan', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="id_jabatan" class="form-control">
                                    <option value="<?= $karyawan['id_jabatan'] ?>" selected>
                                        <?php foreach ($jabatan as $jb) : ?>
                                            <?php if ($jb['id'] == $karyawan['id_jabatan']) : ?>
                                                <?= $jb['nama_jabatan']; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </option>

                                    <?php foreach ($jabatan as $jabatan) : ?>
                                        <option value="<?= $jabatan['id'] ?>"><?= $jabatan['nama_jabatan'] ?></option>
                                    <?php endforeach; ?>

                                </select>
                                <?= form_error('id_jabatan', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Divisi</label>
                                <select name="id_divisi" class="form-control">
                                    <option value="<?= $karyawan['id_divisi'] ?>">
                                        <?php foreach ($divisi as $dv) : ?>
                                            <?php if ($dv['id'] == $karyawan['id_divisi']) : ?>
                                                <?= $dv['nama_divisi']; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </option>

                                    <?php foreach ($divisi as $divisi) : ?>
                                        <option value="<?= $divisi['id'] ?>"><?= $divisi['nama_divisi'] ?></option>
                                    <?php endforeach; ?>

                                </select>
                                <?= form_error('id_divisi', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Gaji</label>
                                <select name="id_gaji" class="form-control">
                                    <option value="<?= $karyawan['id_gaji'] ?>">
                                        <?php foreach ($gaji as $gj) : ?>
                                            <?php if ($gj['id'] == $karyawan['id_gaji']) : ?>
                                                <?= $gj['jumlah_gaji']; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </option>

                                    <?php foreach ($gaji as $gaji) : ?>
                                        <option value="<?= $gaji['id'] ?>"><?= $gaji['jumlah_gaji'] ?></option>
                                    <?php endforeach; ?>

                                </select>
                                <?= form_error('id_gaji', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <br>
                                <a href="<?= base_url('assets/img/avatar/') . $karyawan['gambar'] ?>">
                                    <img class="mb-3" width="100px" src="<?= base_url('assets/img/avatar/') . $karyawan['gambar'] ?>">
                                </a>
                                <input type="file" name="gambar" value="<?= $karyawan['gambar'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save"></i> Simpan</button>
                            <button type="reset" class="btn btn-dark"><i class="fas fa-undo"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-8 col-md-8 col-lg-8">
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