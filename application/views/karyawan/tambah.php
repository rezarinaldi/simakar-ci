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
                    <form action="<?= base_url('karyawan/tambah_simpan') ?>" enctype="multipart/form-data" method="post" class="needs-validation" novalidate="">
                        <div class="card-header">
                            <h4>Form Tambah Data Karyawan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="<?= set_value('karyawan') ?>" class="form-control" required="" autofocus>
                                <div class="invalid-feedback">
                                    Nama tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="Pria" name="gender" class="custom-control-input" value="Pria">
                                    <label class="custom-control-label" for="Pria">Pria</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="Wanita" name="gender" class="custom-control-input" value="Wanita">
                                    <label class="custom-control-label" for="Wanita">Wanita</label>
                                </div>
                                <div class="invalid-feedback">
                                    Jenis kelamin tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <input type="number" name="umur" value="<?= set_value('umur') ?>" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Umur tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>No. HP</label>
                                <input type="number" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control" required="">
                                <div class="invalid-feedback">
                                    No. HP tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control" required="">
                                <div class="invalid-feedback">
                                    E-mail tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" value="<?= set_value('tangal_masuk') ?>" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Tanggal masuk tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Tanggal lahir tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" value="<?= set_value('alamat') ?>" class="form-control" data-height="70" required=""></textarea>
                                <div class="invalid-feedback">
                                    Alamat tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Keterangan Rumah</label>
                                <textarea name="ket" value="<?= set_value('ket') ?>" class="form-control" data-height="50" required=""></textarea>
                                <div class="invalid-feedback">
                                    Keterangan rumah tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input id="Longitude" name="longitude" value="<?= set_value('longitude') ?>" class="form-control" value="<?= set_value('longitude') ?>" required="" readonly>
                                <div class="invalid-feedback">
                                    Longitude tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input id="Latitude" name="latitude" value="<?= set_value('latitude') ?>" class="form-control" value="<?= set_value('latitude') ?>" required="" readonly>
                                <div class="invalid-feedback">
                                    Latitude tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select name="id_provinsi" class="form-control" required="">
                                    <option value="">Pilih Provinsi</option>

                                </select>
                                <div class="invalid-feedback">
                                    Provinsi tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kota atau Kabupaten</label>
                                <select name="id_kt_kb" class="form-control" required="">
                                    <option value="">Pilih Kota atau Kabupaten</option>

                                </select>
                                <div class="invalid-feedback">
                                    Kota atau Kabupaten tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select name="id_kecamatan" class="form-control" required="">
                                    <option value="">Pilih Kecamatan</option>

                                </select>
                                <div class="invalid-feedback">
                                    Kecamatan tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="id_jabatan" class="form-control" required="">
                                    <option value="">Pilih Jabatan</option>

                                </select>
                                <div class="invalid-feedback">
                                    Jabatan tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Divisi</label>
                                <select name="id_divisi" class="form-control" required="">
                                    <option value="">Pilih Divisi</option>

                                </select>
                                <div class="invalid-feedback">
                                    Divisi tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Gaji</label>
                                <select name="id_gaji" class="form-control" required="">
                                    <option value="">Pilih Gaji</option>

                                </select>
                                <div class="invalid-feedback">
                                    Gaji tidak boleh kosong
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" value="<?= set_value('gambar') ?>" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Gambar tidak boleh kosong
                                </div>
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
                        <div id="map" style="height: 1200px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>