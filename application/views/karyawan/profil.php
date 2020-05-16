<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, Fulan!</h2>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="<?= base_url() ?>/assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">Fulan <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> Web Developer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="">
                            <div class="card-header">
                                <h4>Ubah Profil</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" value="Admin" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the nama
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="admin@admin.com" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Konfirmasi Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>