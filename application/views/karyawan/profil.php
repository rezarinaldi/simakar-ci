<?php 
    $this->load->helper('tgl_indo_helper');
    $this->load->helper('format_rupiah_helper');
    
    
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, <?=$karyawan['nama']?></h2>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget ">
                        <div class="text-muted" style="bottom:10px;right:10px; position:absolute;">
                            <i>Updated at : <?php 
                             $update = substr($karyawan['updated_at'],0,10); echo longdate_indo($update);?>
                             </i>
                        </div>
                        <div class="profile-widget-header">
                            <img alt="image" src="<?= base_url() ?>/assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                        </div>
                        
                        <div class="profile-widget-description">
                            <div class="profile-widget-name"><?= $karyawan['nama'];?> 
                                <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div>
                                        <!--tampilkan nama jabatan  -->
                                        <?php foreach($jabatan as $jb): ?>
                                            <?php if($karyawan['id_jabatan'] == $jb['id']): ?>
                                                    <?= $jb['nama_jabatan']; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <!-- end tampil nama jabatan  -->
                                     <div class="slash"></div>  Divisi 

                                        <!--tampilkan nama divisi  -->
                                        <?php foreach($divisi as $dv): ?>
                                            <?php if($karyawan['id_divisi'] == $dv['id']): ?>
                                                    <?= $dv['nama_divisi']; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <!-- end tampil nama divisi  -->
                                </div><br>
                                <?= $karyawan['gender'];?>  (<?= $karyawan['umur'];?> thn) <br>
                                Lahir pada <?= longdate_indo($karyawan['tanggal_lahir']);?>
                            </div>

                            <b>Email | Nomor Handphone : </b>
                            <div class="profile-widget-name">
                                <?= $karyawan['email'];?> | <?= $karyawan['no_hp'];?> 
                            </div>
                            <b>Alamat : </b>
                            <div class="profile-widget-name">
                                <?= $karyawan['alamat'];?> 

                                <!--tampilkan nama kecamatan  -->
                                <?php foreach($kecamatan as $kc): ?>
                                    <?php if($karyawan['id_kecamatan'] == $kc['id']): ?>
                                            <?= $kc['nama_kecamatan']; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <!-- end tampil nama kecamatan -->

                                <!--tampilkan nama kota  -->
                                <?php foreach($kota as $kota): ?>
                                    <?php if($karyawan['id_kt_kb'] == $kota['id']): ?>
                                            <?= $kota['nama_kt_kb']; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <!-- end tampil nama kota -->
                                
                                <!--tampilkan nama prov  -->
                                <?php foreach($provinsi as $p): ?>
                                    <?php if($karyawan['id_provinsi'] == $p['id']): ?>
                                            <?= $p['nama_provinsi']; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <!-- end tampil nama prov -->

                                  
                            </div>

                            <b>Bergabung pada : </b>
                            <div class="profile-widget-name">
                                <?= longdate_indo($karyawan['tanggal_masuk']);?> 
                            </div>
                            
                            <b>Gaji : </b>
                            <div class="profile-widget-name">
                                <!--tampilkan gaji  -->
                                <?php foreach($gaji as $gj): ?>
                                    <?php if($karyawan['id_gaji'] == $gj['id']): ?>
                                            <?= rupiah($gj['jumlah_gaji']); ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <!-- end tampil gaji --> 
                            </div>

                            <b>Keterangan : </b>
                            <div class="profile-widget-name">
                            <?php if($karyawan['ket']):?>
                                <?= $karyawan['ket'];?>
                            <?php else: ?>
                                <i>-</i>
                            <?php endif;?> 
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>