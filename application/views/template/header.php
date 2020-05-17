<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=no" name="viewport">
    <title><?= $title ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/employee.svg">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/components.css">

    <!-- datatables -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

    <!-- leaflet -->
    <link rel=" stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="javascript:;" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <h4 class="text-white">Sistem Manajemen Karyawan di PT. Coba Coding</h4>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="javascript:;" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url() ?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?= base_url('admins/profil') ?>" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:;" id="swal-6" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Log Out
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>