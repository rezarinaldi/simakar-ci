<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/employee.svg">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="<?= base_url() ?>/assets/img/employee.svg" alt="logo" width="80" class="mb-5 mt-2">
                        <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Simakar</span></h4>
                        <p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p>

                        <?= $this->session->flashdata('pesan') ?>

                        <form method="POST" action="<?= base_url('auth/proses') ?>" id="loginform" autocomplete="off" class="needs-validation" novalidate="">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="far fa-user"></i>
                                        </div>
                                    </div>
                                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Username masih kosong
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        Password masih kosong
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button name="login" type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Log In
                                </button>
                            </div>

                        </form>

                        <div class="text-center" style="margin-top: 42px">
                            Copyright &copy; Simakar <script>
                                document.write(new Date().getFullYear());
                            </script> <br> Made with 💜 by <a href="https://github.com/stisla/stisla">Stisla</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?= base_url() ?>/assets/img/unsplash/login-bg.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">Do your best, <br> may Allah bless you!</h1>
                                <h5 class="font-weight-normal text-muted-transparent">Indonesian</h5>
                            </div>
                            Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/Vnb8-OwE4MI">Patrick Slade</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/assets/modules/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/popper.js"></script>
    <script src="<?= base_url() ?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/stisla.js"></script>

    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/assets/js/custom.js"></script>

</body>

</html>