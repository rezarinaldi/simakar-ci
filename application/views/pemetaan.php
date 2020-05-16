<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aturan</h2>
            <p class="section-lead">
                Disini Anda dapat melihat lokasi rumah karyawan.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Peta</h4>
                        </div>
                        <div class="card-body">
                            <div id="mapid" style="height: 600px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

<!-- leaflet pemeteaan -->
<script>
    var mymap = L.map('mapid').setView([-7.946263, 112.615548], 14);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(mymap);

    var icon_rumah = L.icon({
        iconUrl: '<?= base_url('assets/img/lokasi.png') ?>',
        iconSize: [35, 45], // size of the icon
    });
</script>