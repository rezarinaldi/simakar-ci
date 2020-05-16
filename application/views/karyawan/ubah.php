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
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <form action="<?= base_url('karyawan/ubah_simpan') ?>" method="post">
                        <div class="card-header">
                            <h4>Form Ubah Data Karyawan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" value="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" required="" value="">
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input id="Longitude" class="form-control" value="<?= set_value('longitude') ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input id="Latitude" class="form-control" value="<?= set_value('latitude') ?>" readonly>
                            </div>
                            <div class="form-group mb-0">
                                <label>Alamat</label>
                                <textarea class="form-control" data-height="150" required=""></textarea>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary mr-2"><i class="fas fa-save"></i> Simpan</button>
                            <button class="btn btn-dark"><i class="fas fa-undo"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Lokasi Rumah Karyawan</h4>
                    </div>
                    <div class="card-body">
                        <div id="map" style="height: 600px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>