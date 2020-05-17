        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="<?= base_url('menu') ?>"><img src="<?= base_url('') ?>/assets/img/employee.svg" height="45" width="45" alt=""> simakar</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="<?= base_url('menu') ?>"><img src="<?= base_url('') ?>/assets/img/employee.svg" height="45" width="45" alt=""></a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Beranda</li>
                    <li class="nav-item" id="nav"><a class="nav-link" href="<?= base_url('menu') ?>"><i class="fas fa-laptop-code"></i><span>Beranda</span></a></li>
                    <li class="menu-header">Peta</li>
                    <li class="nav-item" id="navpeta"><a class="nav-link" href="<?= base_url('menu/peta') ?>"><i class="fas fa-map-marker-alt"></i><span>Pemetaan</span></a></li>
                    <li class="menu-header">Manajemen</li>
                    <li class="nav-item" id="navkaryawan"><a class="nav-link" href="<?= base_url('menu/karyawan') ?>"><i class="far fa-user"></i><span>Karyawan</span></a></li>
                    <li class="nav-item dropdown">
                        <a href="javascript:;" class="nav-link has-dropdown"><i class="fas fa-sitemap"></i> <span>Sistem</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('jabatan') ?>"><i class="fas fa-briefcase"></i> <span>Jabatan</span></a></li>
                            <li><a href="<?= base_url('divisi') ?>"><i class="far fa-building"></i> <span>Divisi</span></a></lijabatan>
                            <li><a href="<?= base_url('gaji') ?>"><i class="fas fa-hand-holding-usd"></i> <span>Gaji</span></a></lidivisi>
                            <li><a href="<?= base_url('provinsi') ?>"><i class="fas fa-city"></i> <span>Provinsi</span></a></ligaji>
                            <li><a href="<?= base_url('kt_kb') ?>"><i class="fas fa-archway"></i> <span>Kota & Kabupaten</span></a></liprovinsi>
                            <li><a href="<?= base_url('kecamatan') ?>"><i class="fas fa-torii-gate"></i> <span>Kecamatan</span></a></likt_kb>
                        </ul>
                    </li>
                    <li class="nav-item" id="navlaporan"><a class="nav-link" href="<?= base_url('menu/laporan') ?>"><i class="far fa-file-alt"></i><span>Laporan</span></a></li>
                    <li class="nav-item" id="navadmins"><a class="nav-link" href="<?= base_url('menu/admins') ?>"><i class="fas fa-user-astronaut"></i><span>Admin</span></a></li>
                    <li class="menu-header">Tentang</li>
                    <li class="nav-item" id="navtentang"><a class="nav-link" href="<?= base_url('menu/tentang') ?>"><i class="fas fa-rocket"></i><span>Tentang</span></a></li>
                </ul>
            </aside>
        </div>